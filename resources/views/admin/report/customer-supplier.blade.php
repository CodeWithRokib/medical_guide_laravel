@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Customer / Supplier Report</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Customer / Supplier Report</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Customer / Supplier Report</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">

                                    <div class="class= col-lg-offset-1 col-lg-10 col-sm-6 col-md-6 col-xs-12" >

                                    {{ Form::open(['route'=>'report.customerSupplier','method'=>'post','enctype'=>'multipart/form-data','id'=>'report_form']) }}

                                    <!--  PRODUCT NAME  -->
                                        <div class="col-lg-2 col-sm-4 col-xs-12 {{$errors->has('product_name') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('warehouse_id','Warehouse : ',['class'=>'control-label'])}}
                                            {{ Form::select('warehouse_id',$warehouses,null,['class'=>'form-control ','placeholder'=>'All','required','id'=>'warehouse_id'])}}
                                        </div>

                                        <div class="col-lg-3 col-sm-4 col-xs-12 {{$errors->has('product_name') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('product_type','Vaccine/Health Product : ',['class'=>'control-label'])}}
                                            {{ Form::select('product_type',['vaccine'=>'Vaccine','other'=>'Health Product'],null,['class'=>'form-control ','placeholder'=>'Please Select Product Type','required','id'=>'product_type'])}}
                                        </div>

                                        <div class="col-lg-2 col-sm-4 col-xs-12 ">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('type','Choose Type: ',['class'=>'control-label'])}}
                                            {{ Form::select('type',['customer'=>'Customer','supplier'=>'Supplier'],null,['class'=>'form-control ','placeholder'=>'Select Customer or Supplier','required','id'=>'type'])}}
                                        </div>

                                        <div class="col-lg-3 col-sm-4 col-xs-12 ">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('type','Select Customer / Supplier : ',['class'=>'control-label'])}}
{{--                                            {{ Form::select('type',['customer'=>'Customer','supplier'=>'Supplier'],null,['class'=>'form-control ','required','id'=>'product_name'])}}--}}
                                            <select class="form-control" id="load_customer_supplier">

                                            </select>
                                        </div>

                                        <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12" style="float: right;">
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
                                        <br>
                                        <br>
                                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12" style="margin-left: 35%;margin-top: 50px">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            <div class="form-group">
                                                <button class="btn btn-info form-control" type="button" id="show_report_customerSupplier">
                                                    Show Report
                                                </button>
                                            </div>
                                        </div>
                                        <!-- / PRODUCT NAME  -->
                                        {{ Form::close() }}
                                    </div>
                                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>Warehouse</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Qty</th>
                                                <th>Total Amount</th>
                                            </tr>
                                            </thead>
                                            <tbody id="sale_purchase_report">
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
    </div>
    <script>

        $(document).ready(function(){
            $('#datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
            $("#protable").DataTable();
            $("#product_type").select2({
                placeholder: 'Select Product'
            });
        });

        $('#type').change(function () {
            var type = $(this).val();
            var product_type = $('#product_type').val();
            var warehouse_id = $('#warehouse_id').val();

            $.ajax({
                method:"post",
                url:"{{ route('report.customerSupplierLoad') }}",
                data:{type:type,product_type:product_type,warehouse_id:warehouse_id,_token:"{{csrf_token()}}"},
                success:function (response) {
                    $("#load_customer_supplier").html(response);
                },
                error:function (err) {
                    console.log(err);
                }
            });
        });

        $("#show_report_customerSupplier").click(function (e) {
            e.preventDefault();
            var customer_supplier_id = $('#load_customer_supplier').val();
            var warehouse_id = $('#warehouse_id').val();
            var product_type = $('#product_type').val();
            var type = $('#type').val();
            var start = $('#start').val();
            var end = $('#end').val();
            $.ajax({
                method:"post",
                url:"{{ route('report.customerSupplier') }}",
                data:{customer_supplier_id:customer_supplier_id,warehouse_id:warehouse_id,product_type:product_type,type:type,start:start,end:end, _token:"{{csrf_token()}}"},
                success:function (response) {
                    $("#sale_purchase_report").html(response);
                },
                error:function (err) {
                    console.log(err);
                }
            });

        })
    </script>
@endsection
