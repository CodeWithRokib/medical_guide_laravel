@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Transfer History</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">History</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Transfer History</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">

                                    <div class="col-lg-offset-2 col-lg-8 col-sm-6 col-md-6 col-xs-12" style="">
                                    {{ Form::open(['method'=>'post','enctype'=>'multipart/form-data','id'=>'form']) }}

                                        {{--<form method="POST" action="http://localhost/vaccine_new/ProductManagement/save-vaccine" accept-charset="UTF-8" enctype="multipart/form-data"><input name="_token" type="hidden" value="VrI0dnnWa0HG1nKMWznA9nnesesECIQmy1LKVkIH">--}}
                                            <!--  PRODUCT NAME  -->
                                            <div class="col-lg-3 col-sm-4 col-xs-12  {{$errors->has('name') ? 'has-error' : ''}}">
                                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                {{--<label for="product" class="control-label">From Warehouse : </label>--}}
                                                {{--<select class="form-control " required="" id="product_name" name="product_name"><option selected="selected" value="">Please Select Warehouse</option><option value="1">warehouse1</option></select>--}}
                                                {{ Form::label('fwarehouse','From Warehouse : ',['class'=>'control-label'])}}
                                                {{ Form::select('from_warehouse',$warehouse,null,['class'=>'form-control','placeholder'=>'Select Warehouse','id'=>'from_warehouse'])}}
                                            </div>
                                            <div class="col-lg-3 col-sm-4 col-xs-12 ">
                                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                {{--<label for="product" class="control-label">To Warehouse : </label>--}}
                                                {{--<select class="form-control " required="" id="product_name" name="product_name"><option selected="selected" value="">Please Select Purchases</option><option value="1">Hepatitis A</option></select>--}}
                                                {{ Form::label('twarehouse','To Warehouse : ',['class'=>'control-label'])}}
                                                {{ Form::select('to_warehouse',$warehouse,null,['class'=>'form-control','placeholder'=>'Select Warehouse','id'=>'to_warehouse'])}}
                                            </div>
                                            <div class=""></div>
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" style="float: right;">
                                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                <div id="demo-dp-range">
                                                    {{--<label for="em" class="label-control">Query Date:</label>--}}
                                                    {{ Form::label("em","Query Date:",['class'=>'label-control']) }}
                                                    <div class="input-daterange input-group" id="datepicker">
                                                        {{--<input class="form-control" id="start" placeholder="From" required="" name="start" type="text">--}}
                                                        {{ Form::text('start',old('start'),['class'=>'form-control select2','id'=>'start','placeholder'=>'From','required']) }}
                                                        <span class="input-group-addon">to</span>
                                                        {{--<input class="form-control" id="end" placeholder="To" required="" name="end" type="text">--}}
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
                                                        Search
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- / PRODUCT NAME  -->
                                        {{--</form>--}}
                                        {{ Form::close() }}
                                    </div>


                                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                        <table id="protable" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>From Warehouse</th>
                                                <th>To Warehouse</th>
                                                <th>Product</th>
                                                <th>Sub-Total</th>
                                                <th>Note</th>
                                                <th>Transfered By</th>
                                            </tr>
                                            </thead>
                                            <tbody id="transfer_report">

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

        $('#add_bucket').on('click',function(e){
            e.preventDefault();
            var from_warehouse = $('#from_warehouse').val();
            var to_warehouse = $('#to_warehouse').val() ;
            var start =$('#start').val() ;
            var end = $('#end').val() ;

            $.ajax({
                 method:"post",
                 url:"{{route('report.vaccine.history')}}",
                data:{from_warehouse:from_warehouse,to_warehouse:to_warehouse,start:start,end:end,_token:"{{csrf_token()}}"},
                dataType:"html",
                success:function(response){
                    $("#transfer_report").html(response);
                }
            });
        });

        $('#from_warehouse').on('change',function(){
            $('#to option[value]').show();
             var from = $(this).val();
            $("#to_warehouse option[value="+from+"]").hide();
        });

        $("#to_warehouse").change(function () {
            $('#from_warehouse option[value]').show();
            var to = $(this).val();
            $("#from_warehouse option[value=" + to + "]").hide();
        });
    </script>
@endsection
