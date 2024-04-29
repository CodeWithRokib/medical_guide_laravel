<?php

namespace App\Http\Controllers\backend;

use Gate;
use App\Role;
use App\User;
use App\Models\Purchase;
use App\RoleUser;
use App\Warehouse;
use Carbon\Carbon;
use App\Models\Sale;

use Swift_Attachment;
use App\WarehouseUser;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Query\Builder;
use Illuminate\Contracts\Hashing\Hasher;
use App\Http\Requests\RegistrationRequest;

class AdminController extends Controller
{

    public function index(){
        $due=0;
        $total=0;
        $customer_due=0;
        $customer_total =0;
        $sales_amount=0;
        $purchase_amount=0;
        $warehouse_id = Auth::user()->warehouse_id;

        /*
         * select i.invoice_no as invoice_no,i.total as total,i.discount as discount,i.patient_id as patient_id , SUM(i.total) as payable, SUM(c.income) as paid from invoices as i,cashbooks as c where i.id=c.invoice_id AND i.id=348 AND i.patient_id IS NOT NULL
         * */

        $total_sale         = Sale::query()->where('from_warehouse_id',$warehouse_id)->sum('price');
        $sales              = Sale::query()->where('from_warehouse_id',$warehouse_id)->orderBy('id', 'desc')->take(10)->get();
        $supplier_invoices  = Invoice::query()->where('warehouse_id',$warehouse_id)->where('supplier_id','!=',null)->get();
        $customer_invoices  = Invoice::query()->where('warehouse_id',$warehouse_id)->where('patient_id','!=',null)->get();
        //$invoices           = Invoice::query()->where('warehouse_id',$warehouse_id)->where('patient_id','!=',null)->latest()->paginate(5);
        $invoices = DB::select('select i.id , i.invoice_no,i.total,i.discount,i.patient_id,SUM(c.income) as paid from invoices as i,cashbooks as c where i.id=c.invoice_id AND i.patient_id IS NOT NULL GROUP BY i.id');
        $patient_doses       = Sale::query()->where('from_warehouse_id',$warehouse_id)->where('does_no','!=',null)->groupBy(['patient_id','product_id'])->get();
        $today_sale         = Sale::query()->where('from_warehouse_id',$warehouse_id)->whereBetween('created_at',[Carbon::today()->startOfDay(),Carbon::today()->endOfDay()])->sum('price');

        foreach ($supplier_invoices as $invoice){
            foreach($invoice->cashbooks as $cash){
                $total              += $cash->expense;
            }
            $purchase_amount    += ($invoice->total-$invoice->discount);
        }

        foreach ($customer_invoices as $invoice){

            foreach($invoice->cashbooks as $cash){
                $customer_total += $cash->income;
                $sales_amount   += ($invoice->total-$invoice->discount);
            }

            if(($invoice->total-$invoice->discount)-$total !=0){
                $customer_due +=$invoice->total-$invoice->discount-$customer_total;
            }
        }

        $supplier_due = $purchase_amount-$total;
        $customer_due = $sales_amount-$customer_total;
        $vaccine_purchases = Purchase::query()->where('warehouse_id',$warehouse_id)->where('product_type','vaccine')->groupBy('product_id')->get();
        $product_purchases = Purchase::query()->where('warehouse_id',$warehouse_id)->where('product_type','other')->groupBy('product_id')->get();

        return view('admin.home',compact('sales','today_sale','total_sale','patient_doses','warehouse_id','supplier_due','invoices','customer_due','vaccine_purchases','product_purchases'));
    }

    public function vaccine_stock(Request $request)
    {
        $i=0;
        $stock=0;
        $warehouse_id = Auth::user()->warehouse_id;
        $limit = $request->limit;
        $vaccine_purchases = Purchase::query()->where('warehouse_id',$warehouse_id)->where('product_type','vaccine')->groupBy('product_id')->get();
        //return view('admin.stock.vaccine-stock',compact('vaccine_purchases','i','stock','limit'));

        /* stock return start */
            $j=$total=$stock=0;
            $warehouse_id = Auth::user()->warehouse_id;
            $data = [];
            foreach($vaccine_purchases as $key=>$product_purchase){
                $purchased = Purchase::query()->where('warehouse_id',$warehouse_id)->where('product_id',$product_purchase->product->id)->sum('qty');
                $sold = Sale::query()->where('from_warehouse_id',$warehouse_id)->where('product_id',$product_purchase->product->id)->sum('qty');
                $total = $purchased-$sold;
                $data["sl"][$key] = $j;
                $data["name"][$key] = $product_purchase->product->name;
                $data["total"][$key] = ($total !=0 && $total<$limit ? $total : 0);
            }
        /* stock return stop */
        return json_encode(['result'=>$data]);
    }


    public function product_stock(Request $request)
    {

        $i = $stock=0;
        $warehouse_id = Auth::user()->warehouse_id;
        $other_purchases = Purchase::query()->where('warehouse_id',Auth::user()->warehouse_id)->where('product_type','other')->groupBy('product_id')->get();
        $limit = $request->limit;
        $data = [];
        // return view('admin.stock.health-product-stock',compact('other_purchases','i','stock'));
        foreach ($other_purchases as $key=>$purchase){
                $purchased = Purchase::query()->where('warehouse_id',$warehouse_id)->where('product_id',$purchase->product->id)->sum('qty');
                $sold = Sale::query()->where('from_warehouse_id',$warehouse_id)->where('product_id',$purchase->product->id)->sum('qty');
                $total = $purchased-$sold;
                $data["sl"][$key] = ++$i;
                $data["name"][$key] = $purchase->product->name;
                $data["total"][$key] = ($total !=0 && $total<$limit ? $total : 0);
        }
        return json_encode(["result"=>$data]);
    }

    public function dose_limit(Request $request){
        $i=0;
        $stock=0;
        $warehouse_id = Auth::user()->warehouse_id;
        $patient_doses= Sale::query()->where('from_warehouse_id',$warehouse_id)->where('does_no','!=',null)->groupBy(['patient_id','product_id'])->get();
        $html=$type=$next_date=$remaining_days =$r_day ="";
        $data =[];

        foreach($patient_doses as $key=>$dose){
            if($dose->product->durations->where('does_number',$dose['does_no']+1)->count()>0)
            $type = $dose->product->durations->where('does_number',$dose['does_no']+1)->first()->type;
            $duration = $dose->product->durations->where('does_number',$dose['does_no']+1)->first()['does_duration'];
            if($type == 'day'){
                $next_date =Carbon::parse($dose->created_at)->addDay($duration)->format('Y-m-d');
            }elseif($type == 'month'){
                $next_date =Carbon::parse($dose->created_at)->addMonth($duration)->format('Y-m-d');
            }elseif($type == 'Year'){
                $next_date =Carbon::parse($dose->created_at)->addYear($duration)->format('Y-m-d');
            }

            $remaining_days =now()->diffInDays(Carbon::parse($next_date),false);

            /*if($remaining_days<=$request->limit && $request->limit != '' && $remaining_days>=0){
                $html.="<tr>
                    <td>{$dose->patient->name}</td>
                    <td>{$dose->patient->phone}</td>
                    <td>{$dose->product->name}</td>
                    <td>{$dose->product->durations->where('does_number',$dose['does_no']+1)->first()['does_number']}</td>
                    <td>{$next_date}</td>
                    <td>{$remaining_days}</td>
                </tr>";
            }*/


            $data["name"][$key]=$dose->patient->name;
            $data["phone"][$key]=$dose->patient->phone;
            $data["product"][$key]=$dose->product->name;
            $data["doss"][$key]=$dose->product->durations->where('does_number',$dose['does_no']+1)->first()['does_number'];
            $data["nextdate"][$key]=$next_date;
            $data["days"][$key]= ($remaining_days<=$request->limit && $request->limit != '' && $remaining_days>=0 ? $remaining_days : "") ;

        }



       // return $html;
      //  return json_encode($data);
        return json_encode(['result'=>$data]);

    }


    public function store(RegistrationRequest $request)
    {
       // dd(Hash::make($request->password));
        $user = new User;
        $user->name = $request->name;
        $user->role_id = $request->role_id;
        $user->warehouse_id = $request->warehouse_id;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        session()->flash('success','User Registration Complete');
        return redirect()->route('register');
    }

}
