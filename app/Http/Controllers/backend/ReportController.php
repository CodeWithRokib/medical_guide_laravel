<?php

namespace App\Http\Controllers\backend;

use App\CashBook;
use App\DailyExpense;
use App\Expense;
use App\Models\Invoice;
use App\Patient;
use App\Product;
use App\Models\Purchase;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sale;
use App\Warehouse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use QR_Code\Encoder\Input;
use Illuminate\Support\Facades\Input as DateInput;

class ReportController extends Controller
{
    public function index(){
        $sales = Sale::all();
        $product = Product::pluck('name','id');

        return view('admin.report.sale-report',compact('sales','product'));

    }
    public function allReport(){
        return view('admin.report.report');
    }

    public function allPurchaseReport(){
        $this->checkpermission('ReportManagement/purchase-report');
        $products = Product::pluck('name','id');
        $warehouses = Warehouse::pluck('name','id');
        return view('admin.report.purchase-report',compact('warehouses','products'));
    }

    public function load_products(Request $request){
        $html ="<option>All</option>";

        if($request->type == 'purchase'){
            $products = Purchase::query()->where('product_type',$request->product_type)->groupBy('product_id')->get();
        }else{
            $products = Sale::query()->where('product_type',$request->product_type)->groupBy('product_id')->get();
        }

        foreach ($products as $product){
            $html.="
                <option value ='{$product->product->id}'>{$product->product->name}</option>
            ";
        }
        return $html;
    }


    public function load_products_daily_profit(Request $request)
    {
        $html="";
        ($request->product_type)?($products = Sale::query()->where('product_type',$request->product_type)->groupBy('product_id')->get()):($products = Sale::query()->groupBy('product_id')->get());
        foreach ($products as $product){
            $html.="
                <option value ='{$product->product->id}'>{$product->product->name}</option>
            ";
        }
        return $html;
    }


    public function load_expenses(){
        $html ="<option>All</option>";
    }

    public function custom_show_report(Request $request){
        $data =[];
        $start = Carbon::parse($request->start);
        $end = Carbon::parse($request->end);
        $status = 0;
        $modelName = $tableName = $warehouse = $command ='';
        if($request->type =='sale'){
            $modelName = new Sale();
            $tableName = 'sales';
        }else{
            $modelName = new Purchase();
            $tableName = 'purchases';
        }

        $reports = '';


        if($request->warehouse_id !=null && $request->product_id == 'All')
        {
          //  return response(["when warehouse selected "=>$request->warehouse_id,"product not  selected "=>$request->product_id]);
            $reports = $modelName::where(($tableName == 'sales' ? 'from_warehouse_id' : 'warehouse_id'),$request->warehouse_id)->whereBetween('custom_date',[$start->format('Y-m-d'),$end->format('Y-m-d')])->get();
        }
        else if($request->warehouse_id !=null && $request->product_id !='All')
        {
           // return response(["when warehouse selected "=>$request->warehouse_id,"when product selected "=>$request->product_id]);
            $reports = $modelName::where(($tableName == 'sales' ? 'from_warehouse_id' : 'warehouse_id'),$request->warehouse_id)->where('product_id',$request->product_id)->whereBetween('custom_date',[$start->format('Y-m-d'),$end->format('Y-m-d')])->get();
        }
        else if($request->warehouse_id == null && $request->product_id != 'All')
        {
           // return response(["when warehouse not "=>$request->warehouse_id,"when product selected "=>$request->product_id]);
            $reports =  $modelName::where('product_id',$request->product_id)->whereBetween('custom_date',[$start->format('Y-m-d'),$end->format('Y-m-d')])->get();
        }else if($request->warehouse_id == null && $request->product_id == 'All')
        {
            $reports =  $modelName::whereBetween('custom_date',[$start->format('Y-m-d'),$end->format('Y-m-d')])->get();
        }

        foreach ($reports as $key=>$invoice){
            $data["warehouse"][$key] =$invoice->warehouse->name;
            $data["invoice"][$key] = ($invoice->invoice ? $invoice->invoice->invoice_no : "not available at invoice -- ".$invoice->invoice_id) ;
            $data["customer"][$key] = (
            $invoice->patient_id !=null
                ?
                $invoice->patient->name." - <label class='label label-mint' style='padding: 5px;font-size: 1.4rem;'> ".$invoice->patient->phone."</label>"
                :
                "<p class='btn btn-block  btn-mint'> Bulk Sale has no customer information</p>");
            $data["name"][$key] =$invoice->product->name;
            $data["price"][$key] =$invoice->price;
            $data["qty"][$key] =$invoice->qty;
            $data["total"][$key]  =$invoice->price*$invoice->qty;
            $data["date"][$key]  =($invoice->custom_date !=null ? $invoice->custom_date : $invoice->created_at->format('Y-m-d'));
            $data["sent"][$key] = $request->warehouse_id;
            $data["receive"][$key] = $invoice->from_warehouse_id;
            $data["status"][$key] = $status;
            $data["transfer"][$key] = ($tableName == 'sales' ? $invoice->to_warehouse_id !=null ? "<label class='label label-mint' style='padding: 5px;font-size: 1.4rem;'> Transfer</label>" : " N/A" : '');


        }

        return json_encode(['result'=>$data]);
    }


    public function show_report(Request $request){
        $data =[];
        $start = Carbon::parse($request->start);
        $end = Carbon::parse($request->end);

        if($request->product_id == 'All' and $request->type == 'purchase'){
            if($request->warehouse_id){
                $purchases = Purchase::query()
                    ->where('warehouse_id',$request->warehouse_id)
                    ->where('product_type',$request->product_type)
                    ->whereBetween('created_at',[$start,$end])
                    ->orderBy('product_id')
                    ->get();
            }else{
                $purchases = Purchase::query()
                    ->where('product_type',$request->product_type)
                    ->whereBetween('created_at',[$start,$end])
                    ->orderBy('product_id')
                    ->get();}
        }else{
            $purchases = Purchase::query()
                ->where('warehouse_id',$request->warehouse_id)
                ->where('product_type',$request->product_type)
                ->where('product_id',$request->product_id)
                ->whereBetween('created_at',[$start,$end])
                ->orderBy('product_id')
                ->get();
        }
        //Purchase query end
        //Sale query start
        if($request->product_id == 'All' and $request->type == 'sale'){
            ($request->warehouse_id) ?($sales =
                Sale::query()
                    ->where('from_warehouse_id',$request->warehouse_id)
                    ->where('product_type',$request->product_type)
                    ->whereBetween('created_at',[$start,$end])
                    ->orderBy('product_id')
                    ->get()): ($sales =
                Sale::query()
                    ->where('product_type',$request->product_type)
                    ->whereBetween('created_at',[$start,$end])
                    ->orderBy('product_id')
                    ->get());
        }else{
            $sales = Sale::query()
                ->where('from_warehouse_id',$request->warehouse_id)
                ->where('product_type',$request->product_type)
                ->where('product_id',$request->product_id)
                ->whereBetween('created_at',[$start,$end])
                ->orderBy('product_id')
                ->get();
        }
        //Sale query end

        if($request->type == 'sale') {
            //dd($sales);
            foreach ($sales as $key=>$sale){
                $total = $sale->qty*$sale->product->price;
                $data['date'][$key] = $sale->created_at->format('Y-m-d');
                $data['warehouse'][$key] = $sale->warehouse->name;
                $data['name'][$key] = $sale->product->name;
                $data['price'][$key] = $sale->price;
                $data['qty'][$key] = $sale->qty;
                $data['total'][$key] = $total;
            }
            return json_encode(["result"=>$data]);
        }elseif($request->type == 'purchase'){
            foreach ($purchases as $key=>$purchase){
                $total = $purchase->qty*$purchase->product->price;
                $data['date'][$key] = $purchase->created_at->format('Y-m-d');
                $data['warehouse'][$key] = $purchase->warehouse->name;
                $data['name'][$key] = $purchase->product->name;
                $data['price'][$key] = $purchase->price;
                $data['qty'][$key] = $purchase->qty;
                $data['total'][$key] = $total;
            }
            return json_encode($data);
        }else{
            return json_encode(["row"=>1]);

          //  echo "<tr><td colspan='6' class='text-center'><h4>Please select report type.</h4></td></tr>";
        }

        //return $html;
    }



    public function show_expense_report(Request $request){
        $start = ($request->start)?Carbon::parse($request->start):Carbon::now()->startOfDay();
        $end = ($request->start)?Carbon::parse($request->end):Carbon::now()->endOfDay();
        $warehouse_id = $request->warehouse_id;
        $expense_id = $request->expense_type;
        $total=0;

        if($warehouse_id ==null){
            $expenses = ($expense_id)?(DailyExpense::query()->where('expenses_id',$expense_id)->get()):(DailyExpense::all());
        }else{
            $expenses = ($expense_id)?(DailyExpense::query()->where('expenses_id',$expense_id)->where('warehouse_id',$warehouse_id)->get()):(DailyExpense::query()->where('warehouse_id',$warehouse_id)->get());
        }
        $html ="";
        foreach ($expenses as $expense){
            $total+=$expense->price;
                $html .= "
                    <tr>
                        <td>{$expense->warehouse->name }</td>
                        <td>{$expense->title}</td>
                        <td>{$expense->expense->name}</td>
                        <td>{$expense->price}</td>
                    </tr>
                ";
            }
        $html.="<tr>
                    <td colspan='3' align='right'><strong>Total</strong></td>
                    <td><strong>{$total}</strong></td>
                </tr>";
        return $html;
    }


    public function topProductReport(){
        return view('admin.report.top-product-report');
    }
    public function customerSupplierReport(){
        $this->checkpermission('ReportManagement/customer-supplier-report');
        $warehouses = Warehouse::query()->pluck('name','id');
        return view('admin.report.customer-supplier',compact('warehouses'));
    }

    public function customerSupplierLoad(Request $request)
    {
        $html="";
        if($request->type=='supplier'){
            $invoices = Invoice::query()->where('warehouse_id',$request->warehouse_id)->where('product_type',$request->product_type)->whereNotNull('supplier_id')->groupBy('supplier_id')->get();
            foreach($invoices as $invoice){
                $html.="
                    <option value='{$invoice->supplier->id}'>{$invoice->supplier->name}</option>
                ";
            }
        }else{
            $invoices = Invoice::query()->where('warehouse_id',$request->warehouse_id)->where('product_type',$request->product_type)->whereNotNull('patient_id')->groupBy('patient_id')->get();
            foreach($invoices as $invoice){
                $html.="
                    <option value='{$invoice->patient->id}'>{$invoice->patient->name}</option>
                ";
            }
        }
        return $html;

    }

    public function show_report_customerSupplier(Request $request){
//        dd($request->all());
        ($request->start)?($start = Carbon::parse($request->start)):$start = Carbon::now()->startOfDay();
        ($request->end)?($end = Carbon::parse($request->end)):$end = Carbon::now()->endOfDay();
        $total =0;
        $html = "";
        if($request->type == 'supplier'){
//            $invoices = Invoice::query()->where('supplier_id','!=',null)->where('warehouse_id',$request->warehouse_id)->whereBetween('created_at',[$start,$end])->get();
            ($request->warehouse_id!= null)?($invoices = Invoice::query()->where('supplier_id',$request->customer_supplier_id)->where('warehouse_id',$request->warehouse_id)->whereBetween('created_at',[$start,$end])->get()):($invoices = Invoice::query()->where('supplier_id','!=',null)->whereBetween('created_at',[$start,$end])->get());
            foreach ($invoices as $invoice) {
                $html.="<tr>
                            <td>{$invoice->warehouse['name']}</td>
                            <td>{$invoice->supplier['name']}</td>
                            <td>{$invoice->supplier->phone}</td>
                            <td><ul>";
                foreach ($invoice->purchases as $purchase){

                    if($purchase->company_id != null and $request->product_type = 'vaccine'){
                        $html.="<li>{$purchase->product->name}</li>";
                    }else{
//                        return $purchase->company_id;
                        $html.="<li>{$purchase->product->name}</li>";
                    }
                }
                $html.="</ul></td><td>";
                foreach ($invoice->purchases as $purchase){
                    if($purchase->company_id != null and $request->product_type = 'vaccine'){
                        $html.="{$purchase->price}<br>";
                    }else{
                        $html.="{$purchase->price}<br>";
                    }
                }
                $html.="</ul></td><td><ul>";
                foreach ($invoice->purchases as $purchase){
                    if($purchase->company_id != null and $request->product_type = 'vaccine'){
                        $html.="{$purchase->qty}<br>";
                    }else{
                        $html.="{$purchase->qty}<br>";
                    }
                }
                $html.="<td>{$invoice->total}</td>
                        </tr>";
                $total+=$invoice->total;
            }
            $html.="<tr>
                        <td colspan='6' align='right'><strong>Total</strong></td>
                        <td>{$total}</td>
                    <tr>";
        }else{
            ($request->warehouse_id!= null)?($sales = Sale::query()->where('patient_id',$request->customer_supplier_id)->where('from_warehouse_id',$request->warehouse_id)->whereBetween('created_at',[$start,$end])->get()):($sales = Sale::query()->where('patient_id','!=',null)->whereBetween('created_at',[$start,$end])->get());
            foreach ($sales as $sale) {
                $sub_total = $sale->qty*$sale->price;
                $html.="<tr>
                            <td>{$sale->warehouse['name']}</td>
                            <td>{$sale->patient->name}</td>
                            <td>{$sale->patient->phone}</td>
                            <td>{$sale->product->name}</td>
                            <td>{$sale->price}</td>
                            <td>{$sale->qty}</td>
                            <td>{$sub_total}</td>
                        </tr>";
                $total+=$sub_total;
            }
            $html.="<tr>
                        <td colspan='6' align='right'><strong>Total</strong></td>
                        <td>{$total}</td>
                    <tr>";
        }
        return $html;
    }

    public function productSellPurchaseReport(){
        return view('admin.report.product-sell-purchase-report');
    }


    public function get_net_profit(Request $request){
//        return $request->all();
        $from = Carbon::parse($request->start)->format('Y-m-d');
        $to = Carbon::parse($request->end)->format('Y-m-d');

        $expenses = ($request->warehouse_id)?(DailyExpense::query()->where('warehouse_id',$request->warehouse_id)->whereBetween('created_at',[$from,$to])->sum('price')):
            (DailyExpense::query()->whereBetween('created_at',[$from,$to])->sum('price'));

//        return $expenses;


        if($request->product_id == null){
            $sales = Sale::query()
                ->where('from_warehouse_id',$request->warehouse)
                ->whereBetween('created_at',[$from,$to])
                ->get();
            if($request->warehouse ==  null){
                $sales = Sale::query()
                    ->whereBetween('created_at',[$from,$to])
                    ->get();
            }
        }else{
            $sales = Sale::query()
                ->where('from_warehouse_id',$request->warehouse)
                ->where('product_id',$request->product_name)
                ->whereBetween('created_at',[$from,$to])
                ->get();
            if($request->warehouse ==  null){
                $sales = Sale::query()
                    ->where('product_id',$request->product_name)
                    ->whereBetween('created_at',[$from,$to])
                    ->get();
            }
        }

        $profit = 0;
        $total_quantity=0;
        $total_purchase =0;
        $total_sale =0;
        foreach ($sales as $sale) {
            $total_purchase += $sale->product->price*$sale->qty;
            $total_sale+= $sale->price*$sale->qty;
            $gross = ($sale->price-$sale->product->price)*$sale->qty;
            $profit+=$gross;
            $total_quantity+=$sale->qty;
        }

        return $total_purchase;
    }

//    Net profit report ends

//    Daily profit starts
    public function DailyProfitReport(){
        $this->checkpermission('ReportManagement/daily-profit-report');
        $warehouse = Warehouse::pluck('name','id');
        $sold = Sale::pluck('product_id');
        $product=DB::table('products')->whereIn('id',$sold)->pluck('name','id');

        //$a=DB::jfjf
        // $sold = Sale::pluck('patient_id');
        return view('admin.report.daily-profit',compact('warehouse','product'));
    }

    public function ShowDailyProfitReport(Request $request){
//        return $request->all();
        $from = Carbon::parse($request->date)->format('Y-m-d');
        if($request->product_name == null){
            $dailyprofit = Sale::query()
                ->where('from_warehouse_id',$request->warehouse)
                ->whereDate('created_at',$from)
                ->get();
            if($request->warehouse ==  null){
                $dailyprofit = Sale::query()
                    ->whereDate('created_at',$from)
                    ->get();
            }
        }else{
            $dailyprofit = Sale::query()
                ->where('from_warehouse_id',$request->warehouse)
                ->where('product_id',$request->product_name)
                ->whereDate('created_at',$from)
                ->get();
            if($request->warehouse ==  null){
                $dailyprofit = Sale::query()
                    ->where('product_id',$request->product_name)
                    ->whereDate('created_at',$from)
                    ->get();
            }
        }

        $profit = 0;
        $gross = 0;
        $total_quantity=0;
        $html="";
        foreach ($dailyprofit as $daily) {
//            return $daily->product->name;
            $gross = ($daily->price-$daily->product->price)*$daily->qty;
//                - ($daily->product->price*$daily->qty);
            $profit+=$gross;
            $total_quantity+=$daily->qty;
            $html.="
                <tr>
                    <td>{$daily->warehouse->name}</td>
                    <td>{$daily->product->name}</td>
                    <td>{$daily->product->price}</td>
                    <td>{$daily->price}</td>
                    <td>{$daily->qty}</td>
                    <td>{$gross}</td>
                </tr>
            ";
        }
        $html.="
            <tr>
                    <th colspan='4' class='text-right'>Total</th>
                    <th>{$total_quantity}</th>
                    <th>{$profit}</th>
                </tr>
        ";
        return $html;

    }

//    Daily profit ends



    public function OfficeExpenses(){
        $this->checkpermission('ReportManagement/office-expanses-report');
        $warehouse = Warehouse::pluck('name','id');
        $expense_categories = Expense::pluck('name','id');
        return view('admin.report.expanses',compact('warehouse','expense_categories'));
    }

    public function SaleSearch(Request $request){
        $from = $request->from;
        $to = $request->to;
        $results = CashBook::whereBetween('created_at', [$from, $to])->sum('income');
        echo '<tr>
                  <td>1</td>
                  <td>Vaccine</td>
                  <td>'.$results.'</td>
            </tr>';
    }

//    public function IncomeStatement(){
//        return view('admin.report.income-statement');
//    }

    //  Net Profit Report Starts
    public function ProfitReport(Request $request){
//        dd($request->all());
        $this->checkpermission('ReportManagement/profit-report');
        $beginning = Carbon::createFromDate(1970,01,01);
        $from = DateInput::has('start') ? Carbon::parse(DateInput::get('start'))->startOfDay() : Carbon::today()->startOfDay();
        $to = DateInput::has('end') ? Carbon::parse(DateInput::get('end'))->endOfDay() : Carbon::today()->endOfDay();

        $warehouse_id = Auth::user()->warehouse_id;
        $warehouse = Warehouse::pluck('name','id');
        $expenses = DailyExpense::query()->where('warehouse_id',$warehouse_id)->whereBetween('created_at',[$from,$to])->sum('price');

        $begin_inventory = 0;
        $total_expense = 0;
        $ending_inventory = 0;

        //Net Sale start
        $sales = Invoice::query()->where('supplier_id',null)->where('warehouse_id',$warehouse_id)->whereBetween('created_at',[$beginning,$to->endOfDay()])->sum('total');
        $discount = Invoice::query()->where('supplier_id',null)->where('warehouse_id',$warehouse_id)->whereBetween('created_at',[$from,$to->endOfDay()])->sum('discount');
        $net_sales = $sales-$discount;
        //Net Sale end

        //Net Purchase start
        $add_purchase = Invoice::query()->where('patient_id',null)->where('warehouse_id',$warehouse_id)->whereBetween('created_at',[Carbon::today()->startOfDay(),Carbon::today()->endOfDay()])->sum('total');
        $purchase_discount = Invoice::query()->where('patient_id',null)->where('warehouse_id',$warehouse_id)->whereBetween('created_at',[Carbon::today()->startOfDay(),Carbon::today()->endOfDay()])->sum('discount');
        $net_purchase = $add_purchase-$purchase_discount;
        //Net Purchase end


        $purchases = Purchase::query()
            ->whereBetween('created_at',[$beginning,$to])
            ->groupBy('product_id')
            ->get();

        foreach ($purchases as $purchase) {
            $purchased = Purchase::query()->where('product_id', $purchase->product->id)->where('warehouse_id',$warehouse_id)->whereBetween('created_at',[$beginning,$from->startOfDay()])->sum('qty');
            $sold = Sale::query()->where('product_id', $purchase->product->id)->where('from_warehouse_id',$warehouse_id)->whereBetween('created_at',[$beginning,$from->startOfDay()])->sum('qty');
            $total = $purchased - $sold;
            $price = $purchase->product->price*$total;
            $begin_inventory += $price;
        }

        foreach ($purchases as $purchase) {
            $purchased = Purchase::query()->where('product_id', $purchase->product->id)->where('warehouse_id',$warehouse_id)->whereBetween('created_at',[$beginning,$to->endOfDay()])->sum('qty');
            $sold = Sale::query()->where('product_id', $purchase->product->id)->where('from_warehouse_id',$warehouse_id)->whereBetween('created_at',[$beginning,$to->endOfDay()])->sum('qty');
            $total = $purchased - $sold;
            $price = $purchase->product->price*$total;
            $ending_inventory +=$price;
        }
        $costOfGoodSold = $begin_inventory - $ending_inventory + ($add_purchase - $purchase_discount);
        return view('admin.report.profit',compact('warehouse','product','expenses','sales','net_purchase','total_expense','discount','ending_inventory','net_sales','add_purchase','purchase_discount','begin_inventory','costOfGoodSold'));
    }



    public function netProfitReport(Request $request){
//        dd($request->all());
        $beginning = Carbon::createFromDate(1970,01,01);
        $from = Carbon::parse($request->start)->startOfDay();
        $to = Carbon::parse($request->end)->endOfDay();

        $warehouse_id = $request->warehouse_id;
        $warehouse = Warehouse::pluck('name','id');

        $begin_inventory = 0;
        $total_expense = 0;
        $ending_inventory = 0;
        $sales = Invoice::query()->where('supplier_id',null)->where('warehouse_id',$warehouse_id)->whereBetween('created_at',[$beginning,$to->endOfDay()])->sum('total');
        $discount = Invoice::query()->where('supplier_id',null)->where('warehouse_id',$warehouse_id)->whereBetween('created_at',[$from,$to->endOfDay()])->sum('discount');
        $net_sales = $sales-$discount;
        $add_purchase = Invoice::query()->where('patient_id',null)->where('warehouse_id',$warehouse_id)->whereBetween('created_at',[Carbon::today()->startOfDay(),Carbon::today()->endOfDay()])->sum('total');
        $purchase_discount = Invoice::query()->where('patient_id',null)->where('warehouse_id',$warehouse_id)->whereBetween('created_at',[Carbon::today()->startOfDay(),Carbon::today()->endOfDay()])->sum('discount');

        $purchases = Purchase::query()
            ->whereBetween('created_at',[$beginning,$to])
            ->groupBy('product_id')
            ->get();

        foreach ($purchases as $purchase) {
            $purchased = Purchase::query()->where('product_id', $purchase->product->id)->where('warehouse_id',$warehouse_id)->whereBetween('created_at',[$beginning,$from])->sum('qty');
            $sold = Sale::query()->where('product_id', $purchase->product->id)->where('from_warehouse_id',$warehouse_id)->whereBetween('created_at',[$beginning,$from])->sum('qty');
            $total = $purchased - $sold;
            $price = $purchase->product->price*$total;
            $begin_inventory += $price;
        }

        foreach ($purchases as $purchase) {
            $purchased = Purchase::query()->where('product_id', $purchase->product->id)->where('warehouse_id',$warehouse_id)->whereBetween('created_at',[$beginning,$to->endOfDay()])->sum('qty');
            $sold = Sale::query()->where('product_id', $purchase->product->id)->where('from_warehouse_id',$warehouse_id)->whereBetween('created_at',[$beginning,$to->endOfDay()])->sum('qty');
            $total = $purchased - $sold;
            $price = $purchase->product->price*$total;
            $ending_inventory +=$price;
        }

        $costOfGoodSold = $begin_inventory + ($add_purchase - $purchase_discount) - $ending_inventory;
        $expenses = DailyExpense::query()->where('warehouse_id',$warehouse_id)->whereBetween('created_at',[$from,$to])->sum('price');

        return view('admin.report.profit',compact('warehouse','product','expenses','sales','total_expense','discount','ending_inventory','net_sales','add_purchase','purchase_discount','begin_inventory','costOfGoodSold'));



//        $begin_inventory=0;
//        $from = Carbon::parse($request->start)->format('Y-m-d');
//        $to = Carbon::parse($request->end)->format('Y-m-d');
////        return $request->all();
//        $sales = Invoice::query()->where('supplier_id',null)->sum('total');
//        $discount = Invoice::query()->where('supplier_id',null)->sum('discount');
//        $net_sales = $sales-$discount;
//        $add_purchase = Invoice::query()->where('patient_id',null)->sum('total');
//        $purchase_discount = Invoice::query()->where('patient_id',null)->sum('discount');
//        $purchases = Purchase::query()
////            ->where('warehouse_id',$request->warehouse_id)
////            ->where('product_type',$request->product_type)
//            ->where('created_at','<',$from)
//            ->groupBy('product_id')
//            ->get();
//
//        foreach ($purchases as $purchase) {
//            $purchased = Purchase::query()->where('product_id', $purchase->product->id)->where('created_at','<',$from)->sum('qty');
//            $sold = Sale::query()->where('product_id', $purchase->product->id)->where('created_at','<',$from)->sum('qty');
//            $total = $purchased - $sold;
//            $price = $purchase->product->price*$total;
//            $begin_inventory +=$price;
//        }
//        $total_instock = $begin_inventory+$add_purchase;
//        $net_purchase = $total_instock-$purchase_discount;
//
//        $html = "";
//        $total_expense=0;
//        $expenses = Expense::all();
//        foreach ($expenses as $expense){
//            $subtotal = DailyExpense::query()->where('expenses_id',$expense->id)->sum('price');
//            $total_expense +=$subtotal;
//            $html.="
//                <tr>
//                    <th>{$expense->name}</th>
//                    <th></th>
//                    <th></th>
//                    <th>{$subtotal}</th>
//                    <th></th>
//                </tr>
//            ";
//        }
//        $html.="
//                <tr>
//                    <th></th>
//                    <th></th>
//                    <th></th>
//                    <th style='border-top:2px;'>{$total_expense}</th>
//                    <th></th>
//                </tr>
//            ";
//
//
////        return $html;
//
////        $data = ['sales' => $sales,'discount'=>$discount];
////        return json_encode($data);
//        return [
//            'sales' => $sales,
//            'discount'=>$discount,
//            'net_sales' => $net_sales,
//            'add_purchase' => $add_purchase,
//            'purchase_discount'=>$purchase_discount,
//            'begin_inventory'=>$begin_inventory,
//            'total_instock'=>$total_instock,
//            'net_purchase'=>$net_purchase,
//            'html' => $html
//        ];


    }
}