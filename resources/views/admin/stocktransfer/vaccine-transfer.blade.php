@extends('admin.layouts.admin')
@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Vaccine Transfer</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Vaccine Transfer</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Vaccine Transfer</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    {{--vaccine-transfer Start--}}
                                    <div class="col-lg-4 col-sm-5 col-md-6 col-xs-12">
                                        {{ Form::open(['method'=>'post','enctype'=>'multipart/form-data','id'=>'form']) }}
                                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('product','Product :* ',['class'=>'control-label'])}}
                                            {{ Form::select('product_id',$products ,null,['class'=>'form-control select2','required','id'=>'product_id','placeholder'=>'Select Product'])}}
                                            {{--<select id="product_id" name="product_id" class="form-control">--}}

                                            {{--</select>--}}
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('quantity','Quantity :* ',['class'=>'control-label'])}}
                                            {{ Form::text('qty',0,['class'=>'form-control','id'=>'qty'])}}
                                            {{ Form::hidden('product_stock',null,['id'=>'product_stock'])}}
                                            {{ Form::hidden('product_type',null,['id'=>'product_type'])}}
                                            @if ($errors->has('qty'))
                                                <span class="help-block">
                                                 <strong>{{ $errors->first('qty') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('warehouse','Warehouse :* ',['class'=>'control-label'])}}
                                            {{ Form::select('from_warehouse_id',$warehouse,false,['class'=>'form-control','required','id'=>'from_warehouse_id','placeholder'=>'Select Ware House'])}}
                                        </div>

                                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('warehouse','Warehouse :* ',['class'=>'control-label'])}}
                                            {{ Form::select('to_warehouse_id',$warehouse,false,['class'=>'form-control','required','id'=>'to_warehouse_id','placeholder'=>'Select Ware House'])}}
                                        </div>

                                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            <div id="demo-dp-range">
                                                {{ Form::label("em","Date :*",['class'=>'label-control']) }}
                                                <div class="input-daterange input-group" id="datepicker">
                                                    {{ Form::text('date',old('start'),['class'=>'form-control','id'=>'date','placeholder'=>'Select Date','required']) }}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-sm-6 col-md-6 col-xs-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('description','Description :* ',['class'=>'control-label'])}}
                                            {{ Form::textarea('description',old('name'),['class'=>'form-control','placeholder'=>'Ex: Description','id'=>'description'])}}
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                 <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-lg-12 col-sm-12 col-xs-12"><span style="display: block;height: 10px;width: 100%;background: #fff;"></span></div>

                                        <div class="col-lg-12 col-sm-12 col-xs-12">
                                            {{ Form::button('SUBMIT',['type'=>'submit','id'=>'save','class'=>'btn btn-primary']) }}
                                        </div>
                                        {{ Form::close() }}
                                    </div>
                                    <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                        <table id="protable" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>From Warehouse</th>
                                                <th>To Warehouse</th>
                                                <th>Product</th>
                                                <th>Quantity</th>
                                                <th>Note</th>
                                                <th>Transferred By</th>
                                                <th>Transfer Process Date</th>
                                                {{--<th>Action</th>--}}
                                            </tr>
                                            </thead>
                                            <tbody id="sale_report">
                                                @foreach($transfers as $transfer)
                                                    <tr>
                                                        <td>{{$transfer->date->format('Y-m-d')}}</td>
                                                        <td>{{$transfer->from_warehouse->name}}</td>
                                                        <td>{{$transfer->to_warehouse->name}}</td>
                                                        <td>{{$transfer->product->name}}</td>
                                                        <td>{{$transfer->qty}}</td>
                                                        <td>{{$transfer->description}}</td>
                                                        <td>{{$transfer->user->name}}</td>
                                                        <td>{{ date("YYYY-mm-dd",strtotime($transfer->created_at)) }}</td>
                                                        {{--<td><button type="button" data-id="{{ $transfer->id }}" data-url="{{ URL('ProductManagement/erase') }}" class="btn btn-danger fa fa-trash erase delete"></button></td>--}}
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    {{--vaccine-transfer End--}}
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
            $("#product_name").select2({
                placeholder: 'Select Product'

            });
            $("#from_warehouse_id").select2({
                placeholder: 'Select Warehouse',
                tags: true
            });
            $("#to_warehouse_id").select2({
                placeholder: 'Select Warehouse',
                tags: true
            });
            $("#product_id").select2({
                placeholder: 'Select Product',
                tags: true
            });
        });

        {{--$(function () {--}}
            {{--$.ajax({--}}
                {{--method:"post",--}}
                {{--url:"{{route('load.products')}}",--}}
                {{--data:{_token:"{{csrf_token()}}"},--}}
                {{--dataType:"html",--}}
                {{--success:function (data) {--}}
                    {{--$('#product_id').html(data);--}}
{{--//                    alert(data);--}}
                {{--}--}}
            {{--});--}}
        {{--});--}}


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

        $("#from_warehouse_id").change(function () {
            var warehouse_id = $(this).val();
            var product_id = $('#product_id').val();
            var token = "{{csrf_token()}}";
            $.ajax({
                method:"post",
                url:"{{route('load.qty')}}",
                data:{warehouse_id:warehouse_id,product_id:product_id,_token:token},
                success:function (data) {
                    $('#qty').val(data[0]);
                    $('#product_stock').val(data[0]);
                    $('#product_type').val(data[1]);
                }
            });

        });

        $("#product_id").change(function () {
            var product_id = $(this).val();
            var warehouse_id = $('#from_warehouse_id').val();
            var token = "{{csrf_token()}}";
            $.ajax({
                method:"post",
                url:"{{route('load.qty')}}",
                data:{product_id:product_id,warehouse_id:warehouse_id,_token:token},
                success:function (data) {
                    $('#qty').val(data[0]);
                    $('#product_stock').val(data[0]);
                    $('#product_type').val(data[1]);
                }
            });
        });

        $(document).on("keyup","#qty",function () {
            var qty = parseInt($(this).val());
            var product_stock = parseInt($("#product_stock").val());
            var product_id = $("#product_id").val();
            if ( product_id == ''){
                $.notify("Please select product before transfer.", {globalPosition: 'right center',className: 'error'});
            }else{
                if (product_stock ==0){
                    $.notify("This product not available in stock", {globalPosition: 'right center',className: 'error'});
                    $("#qty").val(product_stock).css({"background":"#19A15F","color":"#fff","font-size":"1.5rem;"});
                }else{
                    if (product_stock>=qty){
                        $("#qty").css({"background":"#19A15F","color":"#fff","font-size":"1.5rem;"});
                        $.notify("Ready for transfer", {globalPosition: 'right center',className: 'success'});
                    }else{
                        $.notify("Only  "+product_stock+" Product available in stock.", {globalPosition: 'right center',className: 'error'});
                        $("#qty").val(0).css({"background":"red","color":"#fff","font-size":"1.5rem;"});
                    }
                }
            }



        });

        /* select category and load sub-category automatically end */

        $("#save").click(function (e) {


            e.preventDefault();
            var product_id = $("#product_id").val();
            var qty = parseInt($("#qty").val());
            var product_stock = parseInt($("#product_stock").val());
            var from_warehouse_id = $("#from_warehouse_id").val();
            var to_warehouse_id = $("#to_warehouse_id").val();
            var date = $("#date").val();
            var description = $("#description").val();
            var product_type = $("#product_type").val();
            var token = "{{csrf_token()}}";
            if(qty>product_stock){
                alert('You have not enough in stock');
                $("#qty").val(product_stock);
            }else{
                $.ajax({
                    method:"post",
                    url:"{{route('transfer.product')}}",
                    data:{product_id:product_id,product_type:product_type,from_warehouse_id:from_warehouse_id,to_warehouse_id:to_warehouse_id, qty:qty, date:date,description:description,_token:token},
//                dataType:"html",
                    success:function (data) {
                        $('#product_stock').val(data);
                        $('#product_id').val('');
                        $('#qty').val('');
                        $('#warehouse').val('');
                        $('#date').val('');
                        $('#description').val('');
                        $('#product_type').val('');
                    }
                });

            }
        })


    </script>
@endsection