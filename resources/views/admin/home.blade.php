@extends('admin.layouts.admin')
@section('content')
    <!--TIPS-->
    <!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                <div id="page-head">
                    <div class="pad-all text-center">
                        <h3>Welcome back to the Dashboard.</h3>
                    </div>
                </div>


                <!--Page content-->
                <!--===================================================-->
                {{-- <div id="page-content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="panel panel-warning panel-colorful media middle pad-all">
                                <div class="media-left">
                                    <div class="pad-hor">
                                        <i class="demo-pli-checked-user icon-5x"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="text-2x mar-no text-semibold">{{$supplier_due}}</p>
                                    <p class="mar-no">Supplier Dues</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel panel-info panel-colorful media middle pad-all">
                                <div class="media-left">
                                    <div class="pad-hor">
                                        <i class="fa fa-users fa-3x"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="text-2x mar-no text-semibold">{{$customer_due}} TK</p>
                                    <p class="mar-no">Customer Dues</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel panel-mint panel-colorful media middle pad-all">
                                <div class="media-left">
                                    <div class="pad-hor">
                                        <i class="fa fa-money fa-3x"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="text-2x mar-no text-semibold">{{$today_sale}} TK</p>
                                    <p class="mar-no">Today's Sales</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel panel-danger panel-colorful media middle pad-all">
                                <div class="media-left">
                                    <div class="pad-hor">
                                        <i class="fa fa-money fa-3x"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="text-2x mar-no text-semibold">{{$total_sale}} TK</p>
                                    <p class="mar-no">Total Sales</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="col-md-3 pull-right">
                                        <input type="text" name="dose_limit" id="dose_limit" value="5" class="form-control" style="margin: 10px 10px 0 0" placeholder="Enter limit">
                                    </div>
                                    <h3 class="panel-title">Dose Remainder</h3>
                                </div>

                                <!--Data Table-->
                                <!--===================================================-->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="dossReminder">
                                            <thead class="bg-primary">
                                                <tr>
                                                    <th style="color: #fff;">Name</th>
                                                    <th style="color: #fff;">Phone</th>
                                                    <th style="color: #fff;">Vaccine Name</th>
                                                    <th style="color: #fff;">Next Dose Schedule</th>
                                                    <th style="color: #fff;">Next Date</th>
                                                    <th style="color: #fff;">Remaining Days</th>
                                                </tr>
                                            </thead>
                                            <tbody id="reminder_show">
                                                @foreach($patient_doses as $dose)
                                                    @if($dose->product->durations->where('does_number',$dose->does_no+1)->count()>0)
                                                        @php
                                                            $type = $dose->product->durations->where('does_number',$dose->does_no+1)->first()->type;
                                                            $duration = $dose->product->durations->where('does_number',$dose->does_no+1)->first()->does_duration;
                                                            if($type == 'day'){
                                                                $next_date =\Carbon\Carbon::parse($dose->created_at)->addDay($duration)->format('Y-m-d');
                                                            }elseif($type == 'month'){
                                                                $next_date =\Carbon\Carbon::parse($dose->created_at)->addMonth($duration)->format('Y-m-d');
                                                            }elseif($type == 'Year'){
                                                                $next_date =\Carbon\Carbon::parse($dose->created_at)->addYear($duration)->format('Y-m-d');
                                                            }
                                                            $remaining_days = \Carbon\Carbon::parse($next_date)->diffInDays(now());
                                                        @endphp
                                                        @if($remaining_days<=5)
                                                            <tr>
                                                                <td>{{$dose->patient->name}}</td>
                                                                <td>{{$dose->patient->phone}}</td>
                                                                <td>{{$dose->product->name}}</td>
                                                                <td>{{ $dose->product->durations->where('does_number',$dose->does_no+1)->first()->does_number }}</td>
                                                                <td>{{$next_date}}</td>
                                                                <td>{{$remaining_days}}</td>
                                                            </tr>
                                                        @endif
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <hr class="new-section-xs">
                                </div>
                                <!--===================================================-->
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Customer Due</h3>
                                </div>

                                <!--Data Table-->
                                <!--===================================================-->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="CategoryTable">
                                            <thead class="bg-primary">
                                                <tr>
                                                    <th style="color: #fff;">SL</th>
                                                    <th style="color: #fff;">Inv.No</th>
                                                    <th style="color: #fff;">Name</th>
                                                    <th style="color: #fff;">Phone</th>
                                                    <th style="color: #fff;">Total </th>
                                                    <th style="color: #fff;">Discount </th>
                                                    <th style="color: #fff;">Paid </th>
                                                    <th style="color: #fff;">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $i=0; @endphp
                                                @foreach($invoices as $dues)

                                                    @if( ($dues->total-$dues->discount)-$dues->paid > 0)
                                                        <tr>
                                                            <td> {{ ++$i }}</td>
                                                            <td> {{ $dues->invoice_no }}</td>
                                                            <td> {{ \App\Patient::findOrFail($dues->patient_id)->name }}</td>
                                                            <td> {{ \App\Patient::findOrFail($dues->patient_id)->phone }}</td>
                                                            <td> {{ $dues->total }}</td>
                                                            <td> {{ $dues->discount }}</td>
                                                            <td> {{ $dues->paid }}</td>
                                                            <td class="bg-danger text-center"> {{ ($dues->total-$dues->discount)-$dues->paid }} TK </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <hr class="new-section-xs">
                                </div>
                                <!--===================================================-->
                            </div>
                        </div>
                    </div>




                    <div class="row">
                        <div class="col-xs-6">
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="col-md-3 pull-right">
                                        <input type="text" name="stock_limit" id="vaccine_stock_limit" value="5" class="form-control" style="margin: 10px 10px 0 0" placeholder="Enter limit">
                                    </div>
                                    <h3 class="panel-title">Live Vaccine Stock</h3>
                                </div>

                                <!--Data Table-->
                                <!-- =================================================== -->
                                <div class="panel-body">
                                    <div class="table-responsive" id="vaccine_show">
                                        <table class="table table-hover" id="VaccineStockTable">
                                            <thead class="bg-primary" >
                                                <tr style="color: #fff">
                                                    <th style="color: #fff;">SN</th>
                                                    <th style="color: #fff;">Vaccine Name</th>
                                                    <th style="color: #fff;">Stock</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $total=0;
                                                    $stock =0;
                                                    $i=0;
                                                @endphp
                                                @foreach($vaccine_purchases as $purchase)
                                                    @php
                                                        $purchased = App\Models\Purchase::query()->where('warehouse_id',$warehouse_id)->where('product_id',$purchase->product->id)->sum('qty');
                                                        $sold = App\Models\Sale::query()->where('from_warehouse_id',$warehouse_id)->where('product_id',$purchase->product->id)->sum('qty');
                                                        $total = $purchased-$sold;
                                                    @endphp
                                                    @if($total !=0 && $total<5 )
                                                        <tr>
                                                            <td>{{++$i}}</td>
                                                            <td>{{$purchase->product->name}}</td>
                                                            <td>{{$total}}</td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <hr class="new-section-xs">
                                </div>
                                <!--===================================================-->
                            </div>

                        </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="panel">
                                    <div class="panel-heading">
                                        <div class="col-md-3 pull-right">
                                            <input type="text" name="stock_limit" id="product_stock_limit" value="5" class="form-control" style="margin: 10px 10px 0 0" placeholder="Enter limit">
                                        </div>
                                        <h3 class="panel-title">Live Other Product Stock</h3>
                                    </div>

                                    <!--Data Table-->
                                    <!--===================================================-->
                                    <div class="panel-body">
                                        <div class="table-responsive" id="product_show">
                                            <table class="table table-bordered" id="OtherProductStockTable">
                                                <thead class="bg-primary">
                                                    <tr>
                                                        <th style="color: #fff">SN</th>
                                                        <th style="color: #fff">Product Name</th>
                                                        <th style="color: #fff">Stock</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @php
                                                    $j=0;
                                                    $total=0;
                                                    $stock =0;
                                                @endphp
                                                @foreach($product_purchases as $product_purchase)
                                                    @php
                                                        $purchased = App\Models\Purchase::query()->where('warehouse_id',$warehouse_id)->where('product_id',$product_purchase->product->id)->sum('qty');
                                                        $sold = App\Models\Sale::query()->where('from_warehouse_id',$warehouse_id)->where('product_id',$product_purchase->product->id)->sum('qty');
                                                        $total = $purchased-$sold;
                                                    @endphp
                                                    @if($total !=0 && $total<5)
                                                        <tr>
                                                            <td>{{++$j}}</td>
                                                            <td>{{$product_purchase->product->name}}</td>
                                                            <td>{{$total}}</td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <hr class="new-section-xs">
                                    </div>
                                    <!--===================================================-->
                                </div>

                    </div>
                </div> --}}
                <!--===================================================-->
                <!--End page content-->

            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->
        </div>
            </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->


            <script>


                /* ready start */
                var t = stockTable = OtherProductStockTable ='';
                $(document).ready(function () {

                    /* doss table start */
                   t = $('#dossReminder').DataTable({
                        dom: 'Bfrtip',
                        buttons: [
                            'csv', 'excel', 'pdf','print'
                        ]
                    });

                    /* doss table end */

                    /* vaccine stock start */
                   stockTable = $('#VaccineStockTable').DataTable({
                        dom: 'Bfrtip',
                        buttons: [
                            'csv', 'excel', 'pdf','print'
                        ]
                    });

                    /* vaccine stock end */

                    /* dues table start */
                    $('#CategoryTable').DataTable({
                        dom: 'Bfrtip',
                        buttons: [
                            'csv', 'excel', 'pdf','print'
                        ]
                    });
                    /* dues table end */

                    /* Others Product Stock Start */
                    OtherProductStockTable =  $('#OtherProductStockTable').DataTable({
                        dom: 'Bfrtip',
                        buttons: [
                            'csv', 'excel', 'pdf','print'
                        ]
                    });
                    /* Others Product Stock End */
                });
                /* ready end */

                $('#vaccine_stock_limit').keyup(function () {
                    var limit = $('#vaccine_stock_limit').val();
                    var token = "{{csrf_token()}}";
                    stockTable.clear().draw();
                    $.ajax({
                        method:"post",
                        url:"{{route('vaccine_stock')}}",
                        data:{limit:limit,_token:token},
                        dataType:'json',
                        success:function(response){
                            var i =0 ;
                            var sl = 0;
                            if (response.result.length !=0){
                                for(i;i<response.result.sl.length;i++){
                                    if (response.result.total[i] !=0){
                                        stockTable.row.add([
                                            ++sl,
                                            response.result.name[i],
                                            response.result.total[i]
                                        ]).draw(false);
                                    }
                                }
                            }
                        },
                        error:function(err){console.log("Error List : "+err);}
                    });
                });

                /* Product Stock Start */

                $('#product_stock_limit').keyup(function () {
                    var limit = $('#product_stock_limit').val();
                    var token = "{{csrf_token()}}";
                    $.ajax({
                        method:"post",
                        url:"{{route('product_stock')}}",
                        data:{limit:limit,_token:token},
                        dataType:'json',
                        success:function(response){
                            var i =0 ;
                            var sl = 0;
                            if (response.result.length !=0){
                                for(i;i<response.result.sl.length;i++){
                                    if (response.result.total[i] !=0){
                                        OtherProductStockTable.row.add([
                                            ++sl,
                                            response.result.name[i],
                                            response.result.total[i]
                                        ]).draw(false);
                                    }
                                }
                            }
                           // $('#product_show').html(response);
                        },
                        error:function(err){console.log("Error List : "+err);}
                    });
                });


                /* doss function start */
                    $('#dose_limit').keyup(function () {
                        var limit = $('#dose_limit').val();
                        var token = "{{csrf_token()}}";
                        t.clear().draw();
                        $.ajax({
                            method:"post",
                            url:"{{route('dose_limit')}}",
                            data:{limit:limit,_token:token},
                            dataType:'json',
                            success:function(response){
                              var i =0;
                                if (response.result.length !=0){
                                    for (i;i<response.result.name.length;i++){
                                        if (response.result.days[i] !=0 ){
                                            t.row.add([
                                                response.result.name[i],
                                                response.result.phone[i],
                                                response.result.product[i],
                                                response.result.doss[i],
                                                response.result.nextdate[i],
                                                response.result.days[i]
                                            ]).draw(false);
                                        }
                                    }
                                }

                            },
                            error:function(err){
                                console.log("Error List : "+err);
                                $('#reminder_show').html('<h4>Waiting...</h4>');
                            }
                        });
                    })
                </script>
@endsection
