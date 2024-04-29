@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Profit Report</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Profit Report</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Profit Report</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="class= col-lg-offset-3 col-lg-8 col-sm-6 col-md-6 col-xs-12" >
                                    {{ Form::open(['route'=>'report.profit','method'=>'get','enctype'=>'multipart/form-data']) }}
{{--                                    {{ Form::open(['route'=>'report.profit','method'=>'post','enctype'=>'multipart/form-data']) }}--}}
                                    <!--  PRODUCT NAME  -->
                                        <div class="col-lg-3 col-sm-4 col-xs-12 {{$errors->has('product_name') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('product','Warehouse : ',['class'=>'control-label'])}}
                                            {{ Form::select('warehouse_id',$warehouse,null,['class'=>'form-control ','placeholder'=>'Please Select Warehouse','required','id'=>'warehouse_id'])}}
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            <div id="demo-dp-range">
                                                {{ Form::label("em","Query Date:",['class'=>'label-control']) }}
                                                <div class="input-daterange input-group" id="datepicker">
                                                    {{ Form::text('start',old('start'),['class'=>'form-control','id'=>'start','placeholder'=>'From','required']) }}
                                                    <span class="input-group-addon">to</span>
                                                    {{ Form::text('end',old('end'),['class'=>'form-control','id'=>'end','placeholder'=>'To','required']) }}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12" style="margin-top: 23px">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-info form-control" value="GO">
                                                {{--<button class="btn btn-info form-control" type="button" id="add_bucket">--}}
                                                    {{--GO--}}
                                                {{--</button>--}}
                                            </div>
                                        </div>
                                        <!-- / PRODUCT NAME  -->
                                        {{ Form::close() }}
                                    </div>
                                    <div id="show"></div>
                                    <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th>Sales</th>
                                                <th></th>
                                                <th></th>
                                                <th class="space"></th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Sales</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td id="sales" class="text-right">{{ number_format($sales,2) }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Less : Sales Discount</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="border-bottom"></td>
                                                    <td class="border-bottom text-right" id="discount">{{number_format($discount,2)}}</td>
                                                </tr>

                                                <tr>
                                                    <td><strong>Net Sales</strong></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td id="net_sales" class="text-right" style="border-top: 1px solid black !important; font-weight: bold; ">{{number_format($net_sales,2)}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th>Purchase</th>
                                                <th></th>
                                                <th></th>
                                                <th class="space"></th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Purchase</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td id="sales" class="text-right">{{ number_format($add_purchase,2) }}</td>
                                            </tr>
                                            <tr>
                                                <td>Less : Purchase Discount</td>
                                                <td></td>
                                                <td></td>
                                                <td class="border-bottom"></td>
                                                <td class="border-bottom text-right" id="discount">{{number_format($purchase_discount,2)}}</td>
                                            </tr>

                                            <tr>
                                                <td><strong>Net Purchase</strong></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td id="net_sales" class="text-right" style="border-top: 1px solid black !important; font-weight: bold;">{{number_format(($net_purchase=$add_purchase-$purchase_discount),2)}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>


                                    <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th>Cost of Sold Product</th>
                                                <th></th>
                                                <th></th>
                                                <th class="space"></th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Begin Inventory</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td id="sales" class="text-right">{{ number_format($begin_inventory,2)}}</td>
                                            </tr>
                                            <tr>
                                                <td>Add : Net Purchase</td>
                                                <td></td>
                                                <td></td>
                                                <td class="border-bottom"></td>
                                                <td class="border-bottom text-right" id="discount">{{number_format($net_purchase,2)}}</td>
                                            </tr>

                                            <tr>
                                                <td>Less : Goods Available For sale</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td id="net_sales" class="text-right">{{number_format($ending_inventory,2)}}</td>
                                            </tr>

                                            <tr>
                                                <td><strong>Sold Products total</strong></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td id="net_sales" class="text-right" style="border-top: 1px solid black !important; ">{{number_format($costOfGoodSold,2)}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>


                                    <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th>Gross Profit</th>
                                                <th></th>
                                                <th></th>
                                                <th class="space"></th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Net Sales</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td id="sales" class="text-right">{{ number_format($sales,2)}}</td>
                                            </tr>
                                            <tr>
                                                <td>Less : Sold Products</td>
                                                <td></td>
                                                <td></td>
                                                <td class="border-bottom"></td>
                                                <td class="border-bottom text-right" id="discount">{{number_format($costOfGoodSold,2)}}</td>
                                            </tr>

                                            <tr>
                                                <td><strong>Gross Profit</strong></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td id="net_sales" class="text-right" style="border-top: 1px solid black !important; ">{{number_format($gross_profit = $sales-$costOfGoodSold,2)}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th>Net Profit</th>
                                                <th></th>
                                                <th></th>
                                                <th class="space"></th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Gross Profit</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td id="sales" class="text-right">{{ number_format($gross_profit,2)}}</td>
                                            </tr>
                                            <tr>
                                                <td>Less : Expenses</td>
                                                <td></td>
                                                <td></td>
                                                <td class="border-bottom"></td>
                                                {{--{{dd($expenses)}}--}}
                                                <td class="border-bottom text-right" id="discount">{{number_format($expenses,2)}}</td>
                                            </tr>

                                            <tr>
                                                <td><strong>Net Profit</strong></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td id="net_sales" class="text-right" style="border-top: 1px solid black !important; ">{{number_format($gross_profit-$expenses,2)}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('#datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
            $("#protable").DataTable();
        });

        {{--$('#add_bucket').on('click',function(e){--}}
            {{--e.preventDefault();--}}
            {{--var warehouse_id = $('#warehouse_id').val();--}}
            {{--var start = $('#start').val() ;--}}
            {{--var end = $('#end').val() ;--}}

            {{--$.ajax({--}}
                {{--method:"post",--}}
                {{--url:"{{route('net-profit.report')}}",--}}
                {{--data:{warehouse_id:warehouse_id,start:start,end:end,_token:"{{csrf_token()}}"},--}}
                {{--dataType:"json",--}}
                {{--success:function(response){--}}
                    {{--alert(response);--}}
                    {{--$("#sales").html(response.sales);--}}
                    {{--$("#discount").html(response.discount);--}}
                    {{--$("#net_sales").html(response.net_sales);--}}
                    {{--$("#add_purchase").html(response.add_purchase);--}}
                    {{--$("#purchase_discount").html(response.purchase_discount);--}}
                    {{--$("#begin_inventory").html(response.begin_inventory);--}}
                    {{--$("#total_instock").html(response.total_instock);--}}
                    {{--$("#net_purchase").html(response.net_purchase);--}}
                {{--}--}}
            {{--});--}}
        {{--});--}}
    </script>
@endsection
