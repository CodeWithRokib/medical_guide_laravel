@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Vaccine Sale Report</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Report</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Sale Report</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">

                                    <div class="col-lg-offset-2 col-lg-6 col-sm-6 col-md-6 col-xs-12">

                                    {{ Form::open(['route'=>'product.store','method'=>'post','enctype'=>'multipart/form-data']) }}

                                    <!--  PRODUCT NAME  -->
                                        <div class="col-lg-4 col-sm-4 col-xs-12 {{$errors->has('product_name') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('product','Vaccine/Product Name  : ',['class'=>'control-label'])}}
                                            {{ Form::select('product_name',$product,false,['class'=>'form-control ','placeholder'=>'Please Select Product','required','id'=>'product_name'])}}
                                        </div>

                                        <div class="col-lg-offset-2 col-lg-6 col-sm-6 col-md-6 col-xs-12" style="float: right;">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                <div id="demo-dp-range">
                                                    {{ Form::label("em","Select Sale Date",['class'=>'label-control']) }}
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
                                                <button class="btn btn-info form-control" type="button" id="add_bucket">
                                                   Show Report
                                                </button>
                                            </div>
                                        </div>
                                        <!-- / PRODUCT NAME  -->
                                        {{ Form::close() }}
                                    </div>
                                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                        <table id="protable" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Warehouse</th>
                                                    <th>Name</th>
                                                    <th>Price</th>
                                                    <th>Average Price</th>
                                                    <th>Qty</th>
                                                    <th>Total Sold Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody id="sale_report">
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

        $(document).on("click","#findreportsale",function () {
            var start = $("#start").val();
            var end = $("#end").val();

            if (start != "" && end !=""){
                $.ajax({
                    method:"post",
                    url:"{{ route('report.salesearch') }}",
                    data:{from:start, to:end, "_token":"{{ csrf_token() }}"},
                    dataType:"html",
                    success:function (response) {
                        $("#sale_report").html(response);
                    },
                    error:function (err) {
                        console.log(err);
                    }
                });
            }

        });
        /* select category and load sub-category automatically end */
    </script>
@endsection
