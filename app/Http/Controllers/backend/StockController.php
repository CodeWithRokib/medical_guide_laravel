<?php

namespace App\Http\Controllers\backend;

use App\Models\Sale;
use App\Warehouse;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Purchase;
use Auth;
use DB;
use App\Product;
use Illuminate\Support\Facades\Input;

class StockController extends Controller
{
    public function index(){
        $this->checkpermission('StockManagement/vaccine-stock');
        $warehouse_id = Auth::user()->warehouse_id;
        $warehouses = Warehouse::all();
        $return_data=[];

        $query = "SELECT id,product_id, sum(qty) as total from purchases  GROUP BY product_id";
        $data = DB::select($query);
//        $product = Product::pluck('name','id');
        $product = Product::pluck('name','id');
        
         $stocks = Purchase::groupBy(['warehouse_id','product_id'])->get();
         $sl=0;
         foreach($stocks as $key=>$info){
            
            
                $pitem = Purchase::where('warehouse_id',$info->warehouse_id)->where('product_id',$info->product_id)->sum('qty');
                $sold = Sale::where('from_warehouse_id',$info->warehouse_id)->where('product_id',$info->product_id)->sum('qty');
                $bonus = Purchase::where('warehouse_id',$info->warehouse_id)->where('product_id',$info->product_id)->sum('bonus');
                $pur_amount = ($pitem+$bonus);
                $avl = ($pur_amount-$sold);
                //dd($avl);
                if($pur_amount-$sold > 0){
                    //$data.="<tr><td>".$info->warehouse->name."</td><td>".$info->product->name."</td><td>".$avl."</td><td>".($avl*$info->price)."</td><td></td></tr>";
                    $return_data[$sl]['warehouse'] = $info->warehouse->name;
                    $return_data[$sl]['name'] = $info->product->name;
                    $return_data[$sl]['total'] = $avl;
                    $return_data[$sl]['total_price'] = $avl*$info->price;
                    
                    //$total_stock+=$avl;
                   // $return_data[$sl]['available'] = $total_stock;
                }
             $sl++;
         }
          //dd($return_data);

        return view('admin.stock.stock',compact('warehouse_id','product','warehouses','return_data'));
    }

    public function VaccineStock(Request $request){
//        return $request->all();
        $i=0;
        $stock=$keyStatus = 0;
        $stock_price=0;
        $data = [];
        $from = $request->has('from') ? Carbon::parse($request->get('from')) : Carbon::now();
        $to = $request->has('to') ? Carbon::parse($request->get('to')) : Carbon::now();

        if($request->warehouse_id == 'null'){

            $purchases = ($request->product_id === 'null') ?
                (Purchase::query()
                    ->where('product_type',$request->product_type)
                    ->whereBetween('custom_date',[$from,$to])
                    ->groupBy('product_id')
                    ->get()
                ):
                (Purchase::query()
                    ->where('product_type',$request->product_type)
                    ->where('product_id',$request->product_id)
                    ->whereBetween('custom_date',[$from,$to])
                    ->groupBy('product_id')
                    ->get()
                );
        }else{
            $purchases = ($request->product_id == 'null') ?
                (Purchase::query()
                    ->where('warehouse_id',$request->warehouse_id)
                    ->where('product_type',$request->product_type)
                    ->whereBetween('custom_date',[$from,$to])
                    ->groupBy('product_id')
                    ->get()):
                (Purchase::query()
                    ->where('warehouse_id',$request->warehouse_id)
                    ->where('product_type',$request->product_type)
                    ->where('product_id',$request->product_id)
                    ->whereBetween('custom_date',[$from,$to])
                    ->groupBy('product_id')
                    ->get()
                );
        }


        foreach ($purchases as $key=>$purchase){
            if($request->warehouse_id == 'null'){
                $purchased = Purchase::query()
                    ->where('product_id',$purchase->product->id)
                    ->whereBetween('custom_date',[$from,$to])
                    ->sum("qty");
                $bonus = Purchase::query()
                    ->where('product_id',$purchase->product->id)
                    ->whereBetween('custom_date',[$from,$to])
                    ->sum('bonus');

                $sold = Sale::query()
                    ->where('product_id',$purchase->product->id)
                    ->whereBetween('custom_date',[$from,$to])
                    ->sum('qty');
            }else{
                $purchased = Purchase::query()
                    ->where('warehouse_id',$request->warehouse_id)
                    ->where('product_id',$purchase->product->id)
                    ->whereBetween('custom_date',[$from,$to])
                    ->sum('qty');
                $bonus = Purchase::query()
                    ->where('warehouse_id',$request->warehouse_id)
                    ->where('product_id',$purchase->product->id)
                    ->whereBetween('custom_date',[$from,$to])
                    ->sum('bonus');
                $sold = Sale::query()
                    ->where('from_warehouse_id',$request->warehouse_id)
                    ->where('product_id',$purchase->product->id)
                    ->whereBetween('custom_date',[$from,$to])
                    ->sum('qty');
            }





            $price = Purchase::query()->where('product_id',$purchase->product->id)->orderByDesc('product_id')->first(['price']);

            $total = ($purchased+$bonus)-$sold;
          //  dd(["purchased"=>($purchased+$bonus),"sold"=>$sold,"product_id"=>$purchase->product ? $purchase->product->id : "N/A","latest_purchased"=>$price->price,"available"=>$total]);
            $total_price = $total*$price->price;
            $stock+=$total;
            $stock_price += $total_price;
            $data['sl'][$key]=++$i;
            $data['warehouse'][$key]= ($purchase->from_warehouse_id ? $purchase->warehouse->name : $purchase->warehouse->name);
            $data['name'][$key] = $purchase->product->name;
            $data['total'][$key] = $total;
            $data['total_price'][$key] = $total_price;

            $keyStatus = $key;

            /*echo '<tr>
                      <td>'.++$i.'</td>
                      <td>'.$purchase->product->name.'</td>
                      <td> '.$total.'</td>
                      <td>'.$total_price.'</td>
                    </tr>';*/
        }
        /*echo '<tr>
                   <th colspan="2" class="text-right">Total</th>
                   <td>'.$stock.'</td>
                   <td>'.$stock_price.'</td>
                 </tr>';*/
       return json_encode(["result"=>$data]);
    }

    public function CustomVaccineStock(Request $request){
        $product_id = $request->product_id;
        $warehouse_id = $request->warehouse_id;
        $start = $request->from;
        $end = $request->to;
        $product_type = $request->product_type;
        $purchase = new Purchase();
        $sl = 0;
        $data=[];
        //$data='';

        // if ($warehouse_id == 'null' && $product_type == 'vaccine' && $product_id =='null')
        // {
        //   $stocks = Purchase::groupBy(['warehouse_id','product_id'])->whereBetween('custom_date',[$start,$end])->get();
        // }
        // elseif ($warehouse_id == 'null' && $product_type == 'vaccine' && $product_id !='null')
        // {
        //     $stocks = Purchase::groupBy('warehouse_id')->where('product_id',$product_id)->whereBetween('custom_date',[$start,$end])->get();
        // }
        // elseif ($warehouse_id != 'null' && $product_type == 'vaccine' && $product_id !='null')
        // {
        //     $stocks = Purchase::where('warehouse_id',$warehouse_id)->where('product_id',$product_id)->whereBetween('custom_date',[$start,$end])->groupBy(['warehouse_id','product_id'])->get(['warehouse_id','user_id','invoice_id','product_id','company_id','type','product_type','price','mrp', DB::raw('SUM(qty) AS qty')]);
            
        // }
        // elseif ($warehouse_id != 'null' && $product_type == 'vaccine' && $product_id =='null')
        // {
        //     dd($warehouse_id);
        //     $stocks = Purchase::where('warehouse_id',$warehouse_id)->groupBy(['warehouse_id','product_id'])->whereBetween('custom_date',[$start,$end])->get();
        // }
        
         if ($warehouse_id == 'null' && $product_type == 'vaccine' && $product_id =='null')
        {
            $where=[['product_type',' =>','vaccine']];
          // $stocks = Purchase::groupBy(['warehouse_id','product_id'])->whereBetween('custom_date',[$start,$end])->get();
        }
        elseif ($warehouse_id == 'null' && $product_type == 'vaccine' && $product_id !='null')
        {
            $where=[['product_id',' =>',$product_id],['product_type',' =>','vaccine']];
            //$stocks = Purchase::groupBy('warehouse_id')->where('product_id',$product_id)->whereBetween('custom_date',[$start,$end])->get();
        }
        elseif ($warehouse_id != 'null' && $product_type == 'vaccine' && $product_id !='null')
        {
            $where=[['warehouse_id',' =>',$warehouse_id],['product_id',' =>',$product_id],['product_type',' =>','vaccine']];
            //$stocks = Purchase::where('warehouse_id',$warehouse_id)->where('product_id',$product_id)->whereBetween('custom_date',[$start,$end])->get(['warehouse_id','user_id','invoice_id','product_id','company_id','type','product_type','price','mrp', DB::raw('SUM(qty) AS qty')]);

        }
        elseif ($warehouse_id != 'null' && $product_type == 'vaccine' && $product_id =='null')
        {
            $where=[['warehouse_id',' =>',$warehouse_id],['product_type',' =>','vaccine']];
            //$stocks = Purchase::where('warehouse_id',$warehouse_id)->groupBy('product_id')->whereBetween('custom_date',[$start,$end])->get();
        }
        $stocks = Purchase::groupBy(['warehouse_id','product_id'])->where($where)->whereBetween('custom_date',[$start,$end])->get();
        
        //dd($stocks);
            
        $total_stock=0;
        //$marketValue=0;
        foreach ($stocks as $key=>$info) {

                $pitem = Purchase::where('warehouse_id',$info->warehouse_id)->where('product_id',$info->product_id)->sum('qty');
                $sold = Sale::where('from_warehouse_id',$info->warehouse_id)->where('product_id',$info->product_id)->sum('qty');
                $bonus = Purchase::where('warehouse_id',$info->warehouse_id)->where('product_id',$info->product_id)->sum('bonus');
                $pur_amount = ($pitem+$bonus);
                $avl = ($pur_amount-$sold);

                if($pur_amount-$sold>0){
                    $data[$key]['sl'] = ++$sl;
                    $data[$key]['warehouse'] = $info->warehouse->name;
                    $data[$key]['name'] = $info->product->name;
                    $data[$key]['total'] = $avl;
                    $data[$key]['total_price'] = $avl*$info->price;
                    
                    $total_stock+=$avl;
                    $data[$key]['available'] = $total_stock;
                    
                    // $data .='<tr><td>'. ++$sl .'</td>';
                    // $data .='<td>'. $info->warehouse->name .'</td>';
                    // $data .='<td>'. $info->product->name .'</td>';
                    // $data .='<td>'.  $avl .'</td>';
                    // $data .='<td>'.  ($avl*$info->price) .'</td></tr>';
                    
                    // $total_stock+=$avl;
                    // $marketValue+=($avl*$info->price);
                   
                }

        }
        //  $data .='<tr><td colspan="3">Total Available Qty</td>';
        // $data .='<td>'. $total_stock .'</td>';
        // $data .='<td>'. $marketValue .'</td></tr>';
      
        // return $data;
      
        echo json_encode($data);
        
        //return response(["result"=>$data,'available'=>$total_stock]);

       // foreach ($stocks as $key=>$info){

            /*

            $purchased = Purchase::where('warehouse_id',$info->warehouse_id)->where('product_id',$info->product_id)->sum('qty');

            $sold = Sale::where('from_warehouse_id',$info->warehouse_id)->where('product_id',$info->product_id)->sum('qty');



            sold amount count start */
         //   $sold = Sale::where('from_warehouse_id',$info->warehouse_id)->where('product_id',$info->product_id)->sum('qty');
            /* sold amount count end */

            /*$data['sl'][$key]= ++$sl;
            $data['warehouse'][$key]= $info->warehouse->name;
            $data['name'][$key]= $info->product->name;
            $data['total'][$key]= "Purchase : ".$info->qty." -- Sold : ".$sold."-- Stock : ".($info->qty-$sold);
            $data['total_price'][$key]= 1;



                        $data['sl'][$key]= ++$sl;
            $data['warehouse'][$key]= $info->warehouse->name;
            $data['name'][$key]= $info->product->name;
            $data['total'][$key]= $purchased." -- ".$sold.' -- Stock : '.($purchased-$sold);
            $data['total_price'][$key]= 1;




            */

       // }



    }


    public function VaccineSearch(Request $request){
        $search_key = $request->proname;
        $search = Product::where('name','LIKE',"%".$search_key."%")->get();
        $purchased = $sold = $i = $total = 0;
        if($search){
            if($search->count()>0){
                foreach ($search as $pro){
                    /* Total Purchased start */
                    $amount = Purchase::where('warehouse_id',Auth::user()->warehouse_id)->where("product_id",$pro->id)->selectRaw('sum(qty) as total')->get();
                    foreach ($amount as $pur_info){
                        $total=$total+$pur_info->total;
                    }
                    /* Total Purchased end */
                    echo '<tr>
                        <td>'.++$i.'</td>
                        <td>'.$pro->warehouse->name.'</td>
                        <td>'.$pro->name.'</td>
                        <td>'.$total.'</td>
                      </tr>';
                    $total=0;
            }
        }else{
              echo '<td colspan="4" style="padding:10px;"  class="bg-danger text-center">Nothing found for '.$search_key.'</td>';
        }
      }
    }


    public function OtherProductSearch(Request $request){
        $search_key = $request->proname;
        $search = Product::where('name','LIKE',"%".$search_key."%")->get();

        $purchased = $sold = $i = $total = 0;
        if($search){
            if($search->count()>0){
                foreach ($search as $pro){
                    /* Total Purchased start */
                    $amount = Purchase::where('warehouse_id',Auth::user()->warehouse_id)->where("product_id",$pro->id)->selectRaw('sum(qty) as total')->get();

                    foreach ($amount as $pur_info){
                        $total=$total+$pur_info->total;
                    }
                    /* Total Purchased end */
                    echo '<tr>
                        <td>'.++$i.'</td>
                        <td>'.$pro->name.'</td>
                        <td>'.$total.'</td>
                      </tr>';
                    $total=0;
                }
            }else{
                echo '<td colspan="4" style="padding:10px;"  class="bg-danger text-center">Nothing found for '.$search_key.'</td>';
            }
        }
    }
    
    
    

    public function OtherPro(){
        return view('admin.stock.other-stock');
    }

    public function otherproduct(Request $request){
        $purchases = Purchase::where('warehouse_id',Auth::user()->warehouse_id)->selectRaw('sum(qty) as total, product_id,dieseas_id')->groupBy('product_id')->get();

        $i=0;
        $stock = 0;
        foreach ($purchases as $purchase){
            $stock+=$purchase->qty;

            echo '<tr>
                    <td>'.++$i.'</td>
                    <td>'.$purchase->product->name.'</td>
                    <td>'.$purchase->total.'</td>
                  </tr>';
        }
    }

    public function ProductSearch(Request $request){
        $products =Product::query()->where('product_type',$request->product_type)->get();
//        $products =Purchase::query()->where('product_type',$request->product_type)->groupBy('product_id')->get();
        $html ="";
        $html .="<option value=null>All</option>";
        foreach ($products as $product){
//            $html.="<option value={$product->product->id}>{$product->product->name}</option>";
            $html.="<option value={$product->id}>{$product->name}</option>";
        }
        return $html;
    }
}
