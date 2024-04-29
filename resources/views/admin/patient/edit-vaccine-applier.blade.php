@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Add Vaccine Applier</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Vaccine Applier</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add New Vaccine Applier</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                    {{ Form::model($patient,['route'=>'applier.update','method'=>'post','id'=>'CustomerForm']) }}

                                    <div class="col-lg-12 col-sm-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                        {{ Form::hidden('id',$patient->id,['class'=>'form-control','id'=>'id']) }}
                                        {{ Form::label('name','Name : ',['class'=>'control-label'])}}
                                        {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Ex: Vaccine Applier Name','id'=>'name'])}}
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                        <hr>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 {{$errors->has('name') ? 'has-error' : ''}}">

                                        {{ Form::label('father','Father/Husband Name : ',['class'=>'control-label'])}}
                                        {{ Form::text('father',null,['class'=>'form-control','placeholder'=>'Ex: Father/Husband Name','id'=>'father'])}}
                                        @if ($errors->has('father'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('father') }}</strong>
                                            </span>
                                        @endif
                                        <hr>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 {{$errors->has('name') ? 'has-error' : ''}}">

                                        {{ Form::label('Mother','Mother Name : ',['class'=>'control-label'])}}
                                        {{ Form::text('mother',null,['class'=>'form-control','placeholder'=>'Ex: Mother Name','id'=>'mother'])}}
                                        @if ($errors->has('mother'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('mother') }}</strong>
                                            </span>
                                        @endif
                                        <hr>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 {{$errors->has('dob') ? 'has-error' : ''}}" id="demo-dp-txtinput">

                                        {{ Form::label('dob','Date of Birth : ',['class'=>'control-label'])}}
                                        {{ Form::text('dob',old('dob'),['class'=>'form-control date','id'=>'datepicker1','placeholder'=>'Click for select Date']) }}
                                        @if ($errors->has('dob'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('dob') }}</strong>
                                            </span>
                                        @endif

                                    </div>


                                    <div class="col-lg-12 col-sm-12 {{$errors->has('gender') ? 'has-error' : ''}}">

                                        <hr>
                                        {{ Form::label('dob','Gender : ',['class'=>'control-label'])}}
                                        {{ Form::radio('gender','male') }} Male
                                        {{ Form::radio('gender','female') }} Fe-Male
                                        {{ Form::radio('gender','other') }} Others

                                        @if ($errors->has('gender'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('gender') }}</strong>
                                            </span>
                                        @endif


                                    </div>


                                    <div class="col-lg-12 col-sm-12 {{$errors->has('phone') ? 'has-error' : ''}}">
                                        <hr>
                                        {{ Form::label('Phone','Phone : ',['class'=>'control-label'])}}
                                        {{ Form::text('phone',old('phone'),['class'=>'form-control','placeholder'=>'Ex: Patient Phone','id'=>'phone'])}}
                                        @if ($errors->has('phone'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                        <hr>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 {{$errors->has('telephone') ? 'has-error' : ''}}">

                                        {{ Form::label('telephone','Tele-Phone : ',['class'=>'control-label'])}}
                                        {{ Form::text('telephone',old('telephone'),['class'=>'form-control','placeholder'=>'Ex: Patient Tele-Phone','id'=>'phone'])}}
                                        @if ($errors->has('telephone'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('telephone') }}</strong>
                                            </span>
                                        @endif
                                        <hr>
                                    </div>


                                    <div class="col-lg-12 col-sm-12 {{$errors->has('address') ? 'has-error' : ''}}">

                                        {{ Form::label('Customeraddress','Address : ',['class'=>'control-label'])}}
                                        {{ Form::textarea('address',null,['class'=>'form-control','placeholder'=>'Ex: Patient Address','id'=>'address'])}}
                                        @if ($errors->has('address'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif

                                    </div>

                                    <div class="col-md-12 col-xs-12">
                                        <br>
                                    </div>

                                    <div class="col-md-12 col-xs-12">
                                        {{ Form::button('Update Patient',['type'=>'submit','id'=>'saveCustomer','class'=>'btn btn-primary']) }} ||
                                        <a class="btn btn-danger" href="{{ route('patient.view') }}">Cancel Edit</a>
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
            $("#datepicker").datepicker();
        });

        /* edit request start */

        /* edit request end */
    </script>

@endsection