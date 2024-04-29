@extends('admin.layouts.warehouseadmin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Add Role</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Role</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add New Role</h3>
                            </div>

                            <div class="panel-body">
                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                    {{ Form::model($role,['route'=>'role.update','method'=>'post']) }}
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                {{ Form::hidden('id',$role->id) }}
                                                <div class="form-group {{ $errors->has('name') ? "has-error" : "" }}">
                                                    {{ Form::label('role','Name : ',['class'=>'control-label']) }}
                                                    {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Role name']) }}
                                                    @if($errors->has('name'))
                                                        <span class="help-block">
                                                            <strong>
                                                                    {{ $errors->first('name') }}
                                                            </strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="panel-footer text-left">
                                        {{ Form::submit('ADD ROLE',['class'=>'btn btn-primary ']) }}
                                    </div>
                                    {{ Form::close() }}
                                </div>{{-- left col -lg-6 close here --}}



                            </div>{{-- Panel Body End--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        $(function(){
            $('#roletable').DataTable();
            $("#canceledit").hide();
        });
    </script>

@endsection