@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Add Blood Bank</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Blood Bank</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add New Blood Bank</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    {{ Form::open(['route'=>'bank.store','method'=>'post','enctype'=>'multipart/form-data']) }}
                                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 {{$errors->has('division_id') ? 'has-error' : ''}}">
                                        {{ Form::label('division_id','Select Division',['class'=>'label-control']) }}
                                        {{ Form::select('division_id',$division,false,['class'=>'form-control']) }}
                                        @if ($errors->has('division_id'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('division_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 {{$errors->has('police_station_id') ? 'has-error' : ''}}">
                                        {{ Form::label('police_station_id','Select Police Stations',['class'=>'label-control']) }}
                                        {{ Form::select('police_station_id',$policeStation,false,['class'=>'form-control']) }}
                                        @if ($errors->has('police_station_id'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('police_station_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 {{$errors->has('area_id') ? 'has-error' : ''}}">
                                        {{ Form::label('area_id','Select Area',['class'=>'label-control']) }}
                                        {{ Form::select('area_id',$area,false,['class'=>'form-control']) }}
                                        @if ($errors->has('area_id'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('area_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    
                                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 {{$errors->has('blood_group') ? 'has-error' : ''}}">
                                        {{ Form::label('Blood blood_Group','Select Area',['class'=>'label-control']) }}
                                        {{ Form::select('blood_group',trans('bloodgroup'),false,['class'=>'form-control']) }}
                                        @if ($errors->has('blood_group'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('blood_group') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                      
                                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 {{$errors->has('rh_fector') ? 'has-error' : ''}}">
                                        {{ Form::label('Rh Fector','Select Rh Fector',['class'=>'label-control']) }}
                                        {{ Form::select('rh_fector',trans('rh_fector'),false,['class'=>'form-control']) }}
                                        @if ($errors->has('rh_fector'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('rh_fector') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                        {{ Form::label('name','Name :* ',['class'=>'control-label'])}}
                                        {{Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Ex: Blood Bank'])}}
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 {{$errors->has('phone') ? 'has-error' : ''}}">
                                        {{ Form::label('','Phone :* ',['class'=>'control-label'])}}
                                        {{Form::text('phone',old('phone'),['class'=>'form-control','placeholder'=>'Ex: 0123456789'])}}
                                        @if ($errors->has('phone'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                 
                                    
                                    <div class="col-md-12 col-xs-12">
                                        <br>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        {{ Form::button('SAVE BLOOD BANK',['type'=>'submit','id'=>'saveCategory','class'=>'btn-block btn btn-primary']) }}
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
            $('#CategoryTable').DataTable();
        });
        /* UPDATE Category END */
    </script>
@endsection