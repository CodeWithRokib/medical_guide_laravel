@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Office Expanses Report </h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Office Expanses Report</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Office Expanses Report</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">

                                    <div class="class= col-lg-offset-2 col-lg-8 col-sm-6 col-md-6 col-xs-12" >
                                    {{ Form::open(['route'=>'show_expense_report','method'=>'post','id'=>'report_form']) }}
                                    <!--  PRODUCT NAME  -->
                                        <div class="col-lg-3 col-sm-4 col-xs-12 {{$errors->has('product_name') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('warehouse_id','Warehouse : ',['class'=>'control-label'])}}

                                            {{ Form::select('warehouse_id',$warehouse,null,['class'=>'form-control ','placeholder'=>'All','required','id'=>'warehouse_id'])}}
                                        </div>
                                        <div class="col-lg-3 col-sm-4 col-xs-12 {{$errors->has('product_name') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('expense_type','Expense Type  : ',['class'=>'control-label'])}}
                                            {{ Form::select('expense_type',$expense_categories,null,['class'=>'form-control ','placeholder'=>'Please Select Product','required','id'=>'expense_type'])}}
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" style="float: right;">
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
                                                <button class="btn btn-info form-control" type="button" id="show_report">
                                                    Show Report
                                                </button>
                                            </div>
                                        </div>
                                        {{ Form::close() }}
                                    </div>
                                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                        <table id="protable" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>Warehouse</th>
                                                <th>Title</th>
                                                <th>Expenses</th>
                                                <th>Price</th>
                                            </tr>
                                            </thead>
                                            <tbody id="expense_report">
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

        {{--$('#expense_type').change(function () {--}}
            {{--var expense_type = $('#expense_type').val();--}}

            {{--$.ajax({--}}
                {{--method:"post",--}}
                {{--url:"{{ route('load_expenses') }}",--}}
                {{--data:{expense_type:expense_type, _token:"{{ csrf_token() }}"},--}}
                {{--dataType:"html",--}}
                {{--success:function (response) {--}}
                    {{--$("#expense_type").html(response);--}}
                {{--},--}}
                {{--error:function (err) {--}}
                    {{--console.log(err);--}}
                {{--}--}}
            {{--});--}}
        {{--})--}}

        $("#show_report").click(function (e) {
            e.preventDefault();
            var form=$("#report_form");
            $.ajax({
                method:"post",
                url:"{{ route('show_expense_report') }}",
                data:form.serialize(),
                success:function (response) {
                    $("#expense_report").html(response);
                },
                error:function (err) {
                    console.log(err);
                }
            });

        })
    </script>
@endsection
