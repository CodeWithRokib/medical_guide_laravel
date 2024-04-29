@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Update Overseas Treatment</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Overseas Treatment</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add New Overseas Treatment</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-5 col-sm-6 col-md-6 col-xs-12">
                                    {{ Form::model($overseastreatment,['route'=>['overseastreatment.update',$overseastreatment->id],'method'=>'post','enctype'=>'multipart/form-data']) }}
                                    <!--  PRODUCT NAME  -->
                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 {{$errors->has('division_id') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('product','Division : ',['class'=>'control-label'])}}
                                            {{ Form::select('division_id',$divisions,true,['class'=>'form-control']) }}
                                            @if ($errors->has('division_id'))
                                                <span class="help-block">
                                                 <strong>{{ $errors->first('division_id') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 {{$errors->has('police_station_id') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('product','Police Staions : ',['class'=>'control-label'])}}
                                            {{ Form::select('police_station_id',$policeStation,true,['class'=>'form-control']) }}
                                            @if ($errors->has('police_station_id'))
                                                <span class="help-block">
                                                 <strong>{{ $errors->first('police_station_id') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 {{$errors->has('area_id') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('product','Division : ',['class'=>'control-label'])}}
                                            {{ Form::select('area_id',$area,true,['class'=>'form-control']) }}
                                            @if ($errors->has('area_id'))
                                                <span class="help-block">
                                                 <strong>{{ $errors->first('area_id') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 {{$errors->has('type') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('product','Division : ',['class'=>'control-label'])}}
                                            {{ Form::select('type',trans('serviceType'),true,['class'=>'form-control']) }}
                                            @if ($errors->has('type'))
                                                <span class="help-block">
                                                 <strong>{{ $errors->first('type') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('name','Name : ',['class'=>'control-label'])}}
                                            {{Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Name','id'=>'name'])}}
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                 <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 {{$errors->has('price') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('product','Mobile/Phone : ',['class'=>'control-label'])}}
                                            {{Form::text('phone',old('phone'),['class'=>'form-control','placeholder'=>'Ex: +880 123456789','id'=>'email'])}}
                                            @if ($errors->has('phone'))
                                                <span class="help-block">
                                                 <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-lg-12 col-sm-12 col-xs-12"><span style="display: block;height: 10px;width: 100%;background: #fff;"></span></div>
                                        <div class="col-lg-12 col-sm-12 col-xs-12">
                                            {{ Form::button('UPDATE VIRTUAL LAB INFO',['type'=>'submit','id'=>'savekarat','class'=>'btn btn-primary']) }}
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
    </div>
    <script>

        $(document).ready(function(){
            $("#protable").DataTable();


        });

        $(document).on("keyup","#price",function () {
            alert("Hello");
        });




        /* select category and load sub-category automatically end */


    </script>
@endsection