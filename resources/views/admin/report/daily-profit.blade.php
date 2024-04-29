@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Daily Profit Report</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Daily Profit Report</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Daily Profit Report</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="class= col-lg-offset-2 col-lg-8 col-sm-6 col-md-6 col-xs-12" >
                                    {{ Form::open(['route'=>'product.store','method'=>'post','enctype'=>'multipart/form-data']) }}
                                    <!--  PRODUCT NAME  -->
                                        <div class="col-lg-3 col-sm-4 col-xs-12 {{$errors->has('warehouse') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('warehouse','Warehouse : ',['class'=>'control-label'])}}
                                            {{ Form::select('warehouse',$warehouse,null,['class'=>'form-control ','placeholder'=>'Please Select Warehouse','required','id'=>'warehouse'])}}
                                        </div>
                                        <div class="col-lg-3 col-sm-4 col-xs-12 {{$errors->has('product_type') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('product','Product Type  : ',['class'=>'control-label'])}}
                                            {{ Form::select('product_type',['vaccine'=>'Vaccine','other'=>'Health Product'],null,['class'=>'form-control ','placeholder'=>'All','required','id'=>'product_type'])}}
                                        </div>
                                        <div class="col-lg-3 col-sm-4 col-xs-12 {{$errors->has('product_name') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('product','Product : ',['class'=>'control-label'])}}
                                            {{ Form::select('product_name',$product,null,['class'=>'form-control ','placeholder'=>'All','required','id'=>'product_name'])}}
                                        </div>
                                        <div class="col-lg-3 col-sm-4 col-md-4 col-xs-12" style="float: right;">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            <div id="demo-dp-range">
                                                {{ Form::label("em","Query Date:",['class'=>'label-control']) }}
                                                <div class="input-daterange input-group" id="datepicker">
                                                    {{ Form::text('date',old('date'),['class'=>'form-control','id'=>'date','placeholder'=>'Select Date','required']) }}
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12" style="margin-left: 35%;margin-top: 50px">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            <div class="form-group">
                                                <button class="btn btn-info form-control" type="button" id="add_bucket">
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
                                                <th>Purchase Price</th>
                                                <th>Sale Price</th>
                                                <th>Qty</th>
                                                <th>Profit / Loss</th>
                                            </tr>
                                            </thead>
                                            <tbody id="dailyprofit">

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
        });

        $('#product_type').change(function (e) {
            var product_type = $(this).val();
            var warehouse = $('#warehouse').val();
            $.ajax({
                method:"post",
                url:"{{route('load.products')}}",
                data:{warehouse:warehouse,product_type:product_type,_token:"{{csrf_token()}}"},
                dataType:"html",
                success:function(response){
                    $("#product_name").html(response);
                }
            })
        });


        $('#add_bucket').on('click',function(e){
            e.preventDefault();
            var warehouse = $('#warehouse').val();
            var product_name =$('#product_name').val();
            var date = $('#date').val() ;

            $.ajax({
                method:"post",
                url:"{{route('show.daily.profit')}}",
                data:{warehouse:warehouse,product_name:product_name,date:date,_token:"{{csrf_token()}}"},
                dataType:"html",
                success:function(response){
                    $("#dailyprofit").html(response);
                }
            });
        });
    </script>
@endsection
