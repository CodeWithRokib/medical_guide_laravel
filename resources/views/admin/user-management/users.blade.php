@extends('admin.layouts.admin')
@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Add User</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Add User</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Personal Information</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    {{--vaccine-transfer Start--}}
                                    <div class="col-lg-4 col-sm-5 col-md-6 col-xs-12">
                                        {{ Form::open(['route'=>'user.store','method'=>'post']) }}
                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 {{$errors->has('warehouse_id') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('warehouse_id','Wharehouse:* ',['class'=>'control-label'])}}
                                            {{Form::select('warehouse_id',$warehouses,null,['class'=>'form-control','placeholder'=>'Select Warehouse','id'=>'warehouse_id'])}}
                                            @if ($errors->has('warehouse_id'))
                                                <span class="help-block">
                                                 <strong>{{ $errors->first('warehouse_id') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('user','Name:* ',['class'=>'control-label'])}}
                                            {{Form::text('name',old('start'),['class'=>'form-control','placeholder'=>'Enter Name'])}}
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                 <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 {{$errors->has('email') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('email','Email :* ',['class'=>'control-label'])}}
                                            {{ Form::text('email',old('start'),['class'=>'form-control','id'=>'email'])}}
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                 <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-log-12 col-sm-12 col-md-12 col-xs-12">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{Form::label('password','Password:* ',['class'=>'control-label'])}}
                                            {{Form::password('password',['class'=>'form-control','placeholder'=>'Password'])}}
                                        </div>
                                        <div class="col-log-12 col-sm-12 col-md-12 col-xs-12">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{Form::label('confirm_password','Confirm Password:* ',['class'=>'control-label'])}}
                                            {{Form::password('confirm_password',['class'=>'form-control','placeholder'=>'Confirm Password'])}}
                                        </div>
                                        <div class="col-log-12 col-sm-12 col-md-12 col-xs-12">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{Form::label('roles','Roles:* ',['class'=>'control-label'])}}
                                            {{Form::select('role_id[]',$roles,false,['class'=>'form-control','id'=>'role_id','multiple'=>'multiple'])}}
                                        </div>

                                        <div class="col-lg-12 col-sm-12 col-xs-12"><span style="display: block;height: 10px;width: 100%;background: #fff;"></span></div>
                                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                            <div class="col-lg-4 col-sm-4 col-xs-12">
                                                {{ Form::submit('SUBMIT',['class'=>'btn btn-success']) }}
                                            </div>
                                        </div>
                                        {{ Form::close() }}
                                    </div>
                                    <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                        <table id="protable" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>Sl</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php $i=0; @endphp
                                            @foreach($users as $user)
                                                <tr>
                                                    <td>{{++$i}}</td>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->email}}</td>
                                                    {{--<td>{{$user->role}}</td>--}}
                                                    <td>
                                                        <ul>
                                                            @foreach($user->roles as $role)
                                                                <li>{{$role->name}}</li>
                                                            @endforeach
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <a href="{{route('user.edit',$user->id)}}" class="btn btn-success fa fa-edit"></a> || <button class="btn btn-sm btn-danger fa fa-trash erase" data-id="{{$user->id}}" data-url="{{url('UserManagement/erase')}}"></button>
                                                    </td>
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
            $("#role_id").select2({
                tags:true

            });
            $("#warehouse_id").select2({
                tags:true

            });
//            $("#warehouse").select2({
//                placeholder: 'Select Warehouse',
//                tags: true
//            });
//            $("#product_id").select2({
//                placeholder: 'Select Product',
//                tags: true
//            });
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


        {{--$(document).on("click","#findreportsale",function () {--}}
            {{--var start = $("#start").val();--}}
            {{--var end = $("#end").val();--}}

            {{--if (start != "" && end !=""){--}}
                {{--$.ajax({--}}
                    {{--method:"post",--}}
                    {{--url:"{{ route('report.salesearch') }}",--}}
                    {{--data:{from:start, to:end, "_token":"{{ csrf_token() }}"},--}}
                    {{--dataType:"html",--}}
                    {{--success:function (response) {--}}
                        {{--$("#sale_report").html(response);--}}
                    {{--},--}}
                    {{--error:function (err) {--}}
                        {{--console.log(err);--}}
                    {{--}--}}
                {{--});--}}
            {{--}--}}

        {{--});--}}

        {{--$("#product_id").change(function () {--}}
            {{--var product_id = $(this).val();--}}
            {{--var token = "{{csrf_token()}}";--}}
            {{--$.ajax({--}}
                {{--method:"post",--}}
                {{--url:"{{route('load.qty')}}",--}}
                {{--data:{product_id:product_id,_token:token},--}}
{{--//                dataType:"html",--}}
                {{--success:function (data) {--}}
                    {{--$('#qty').val(data);--}}
                    {{--$('#product_stock').val(data);--}}
                {{--}--}}
            {{--});--}}

        {{--})--}}

        {{--$("#qty").focusout(function () {--}}
            {{--var qty = parseInt($("#qty").val());--}}
            {{--var product_stock = parseInt($("#product_stock").val());--}}

            {{--if(qty>product_stock){--}}
                {{--alert('You have not enough in stock');--}}
                {{--$("#qty").val(product_stock);--}}
            {{--}--}}
        {{--})--}}

        {{--/* select category and load sub-category automatically end */--}}

        {{--$("#save").click(function (e) {--}}


            {{--e.preventDefault();--}}
            {{--var product_id = $("#product_id").val();--}}
            {{--var qty = parseInt($("#qty").val());--}}
            {{--var product_stock = parseInt($("#product_stock").val());--}}
            {{--var warehouse_id = $("#warehouse").val();--}}
            {{--var date = $("#date").val();--}}
            {{--var description = $("#description").val();--}}
            {{--var token = "{{csrf_token()}}";--}}
            {{--if(qty>product_stock){--}}
                {{--alert('You have not enough in stock');--}}
                {{--$("#qty").val(product_stock);--}}
            {{--}else{--}}
                {{--$.ajax({--}}
                    {{--method:"post",--}}
                    {{--url:"{{route('transfer.product')}}",--}}
                    {{--data:{product_id:product_id,warehouse_id:warehouse_id, qty:qty, date:date,description:description,_token:token},--}}
{{--//                dataType:"html",--}}
                    {{--success:function (data) {--}}
                        {{--$('#product_stock').val(data);--}}
                        {{--$('#product_id').val('');--}}
                        {{--$('#qty').val('');--}}
                        {{--$('#warehouse').val('');--}}
                        {{--$('#date').val('');--}}
                        {{--$('#description').val('');--}}
                    {{--}--}}
                {{--});--}}

            {{--}--}}
        {{--})--}}


    </script>
@endsection