@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Update User</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">User</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Update User</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
                                    {{ Form::model($user,['route'=>['user.update','id'=>$user->id],'method'=>'post']) }}
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
{{--                                        {{Form::select('role_id[]',$roles,false,['class'=>'form-control','id'=>'role_id','multiple'=>'multiple'])}}--}}
                                        <select name="role_id[]" class="form-control" id="role_id" multiple="multiple">
                                            @foreach($roles as $role)
                                                @if(in_array($role->id, $role_ids))
                                                    <option value="{{ $role->id }}" selected="true">{{ $role->name }}</option>
                                                @else
                                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <br>
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        {{ Form::button('UPDATE USER',['type'=>'submit','id'=>'savebrand','class'=>'col-sm-6 btn btn-primary']) }}
                                        &nbsp;
                                        <a href="{{ \Illuminate\Support\Facades\URL::previous() }}" class="btn btn-danger"> Cancel Update</a>
                                    </div>
                                    {{ Form::close() }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function(){
            $('#brandTable').DataTable();
            $("#canceledit").hide();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
            $("#protable").DataTable();
            $("#role_id").select2({
                tags: true

            });
            $("#warehouse_id").select2({
                tags: true

            });
        });
    </script>

@endsection