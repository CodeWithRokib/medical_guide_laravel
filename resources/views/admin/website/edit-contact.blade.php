@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Add / View Contact Us</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Contact Us</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add New Contact Us</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">

                                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

                                    {{ Form::model($contact,['route'=>'website.contactupdate','method'=>'post','enctype'=>'multipart/form-data']) }}

                                    <!--  PRODUCT NAME  -->
                                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 {{$errors->has('phone1') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>

                                            {{ Form::label('product','Phone 1 : ',['class'=>'control-label'])}}
                                            {!! Form::text('phone1',old('phone1'),['class'=>'form-control', 'placeholder'=>'+880123456789']) !!}
                                            @if($errors->has('phone1'))
                                                <span class="help-block">
                                                        <strong>{{$errors->first('phone1')}}</strong>
                                                    </span>
                                            @endif
                                            {{ Form::hidden('id',$contact->id) }}
                                        </div>

                                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 {{$errors->has('phone2') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>

                                            {{ Form::label('product','Phone 2 : ',['class'=>'control-label'])}}
                                            {!! Form::text('phone2',old('phone1'),['class'=>'form-control', 'placeholder'=>'+880123456789']) !!}
                                            @if($errors->has('phone2'))
                                                <span class="help-block">
                                                        <strong>{{$errors->first('phone2')}}</strong>
                                                    </span>
                                            @endif
                                        </div>


                                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 {{$errors->has('helpline') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>

                                            {{ Form::label('product','Helpline  : ',['class'=>'control-label'])}}
                                            {!! Form::text('helpline',old('helpline'),['class'=>'form-control', 'placeholder'=>'+880123456789']) !!}
                                            @if($errors->has('helpline'))
                                                <span class="help-block">
                                                        <strong>{{$errors->first('helpline')}}</strong>
                                                    </span>
                                            @endif
                                        </div>


                                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 {{$errors->has('helpline') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>

                                            {{ Form::label('product','E-mail  : ',['class'=>'control-label'])}}
                                            {!! Form::text('email',old('email'),['class'=>'form-control', 'placeholder'=>'+880123456789']) !!}
                                            @if($errors->has('email'))
                                                <span class="help-block">
                                                        <strong>{{$errors->first('email')}}</strong>
                                                    </span>
                                            @endif
                                        </div>


                                        <!--  PRODUCT File NAME  -->
                                        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 {{$errors->has('image') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('image','Address : ',['class'=>'control-label'])}}

                                            {!! Form::textarea('address',old('address'),['class'=>'form-control', 'rows' => 6, 'cols' => 40,'placeholder'=>'About Us Details.......']) !!}

                                            @if($errors->has('address'))
                                                <span class="help-block">
                                                <strong>{{$errors->first('address')}}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <!-- / PRODUCT File NAME  -->

                                        <div class="col-lg-12 col-sm-12 col-xs-12"><span style="display: block;height: 10px;width: 100%;background: #fff;"></span></div>

                                        <div class="col-lg-12 col-sm-12 col-xs-12">
                                            {{ Form::button('SAVE CONTACT US',['type'=>'submit','id'=>'savekarat','class'=>'btn btn-primary']) }}
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

@endsection