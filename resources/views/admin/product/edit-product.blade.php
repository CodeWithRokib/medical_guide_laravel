@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Add / View VACCINE</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">VACCINE</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add New VACCINE</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
                                    {{ Form::model($product,['route'=>'product.update','method'=>'post','enctype'=>'multipart/form-data']) }}
                                    <!--  VACCINE NAME  -->
                                        <div class="col-lg-4 col-sm-4 col-xs-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::hidden('id',$product->id) }}
                                            {{ Form::label('product','VACCINE Name : ',['class'=>'control-label'])}}
                                            {{ Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Ex: Ring'])}}
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                     <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <!-- / VACCINE NAME  -->
                                        <!--  VACCINE PRICE  -->
                                        <div class="col-lg-4 col-sm-2 col-xs-12 {{$errors->has('price') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>

                                            {{ Form::label('product','Price : ',['class'=>'control-label'])}}
                                            {{Form::text('price',old('price'),['class'=>'form-control','placeholder'=>'Ex: 5000 tk'])}}
                                            @if ($errors->has('price'))
                                                <span class="help-block">
                                                     <strong>{{ $errors->first('price') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <!-- / VACCINE PRICE  -->
                                        <!-- AGE FROM & TO Start -->
                                        <div class="col-lg-4 col-sm-3 col-xs-12 {{$errors->has('from') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('from','Age From : ',['class'=>'control-label'])}}
                                            {{ Form::text('from',old('from'),['class'=>'form-control' ,'id'=>'from','placeholder'=>'age']) }}

                                            @if($errors->has('from'))
                                                <span class="help-block">
                                                    <strong>{{$errors->first('from')}}</strong>
                                                </span>
                                            @endif

                                        </div>
                                        <div class="col-lg-4 col-sm-3 col-xs-12 {{$errors->has('to') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('to','Age To : ',['class'=>'control-label'])}}
                                            {{ Form::text('to',old('to'),['class'=>'form-control' ,'id'=>'to','placeholder'=>'age']) }}

                                            @if($errors->has('to'))
                                                <span class="help-block">
                                                    <strong>{{$errors->first('to')}}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <!-- AGE FROM & TO End -->
                                        <!--  IMAGE START  -->
                                        <div class="col-lg-4 col-sm-4 col-xs-12 {{$errors->has('image') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('image','Vaccine Image : ',['class'=>'control-label'])}}

                                            {{ Form::file('image', ['class'=>'form-control']) }}

                                            @if($errors->has('image'))
                                                <span class="help-block">
                                                <strong>{{$errors->first('image')}}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <!-- /IMAGE END  -->

                                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                            <br>
                                            @if($product->image != null)
                                                {{ Form::label('','Old Image') }}
                                                <img src="{{ asset('public/admin/product/upload/'.$product->image) }}" style="height: 80px;width: 80px">
                                            @else
                                                {{ Form::label('','Temporary Image') }}
                                                <img src="{{ asset('public/admin/product/upload/noimage.png') }}" style="height: 80px;width: 80px">
                                            @endif

                                        </div>

                                        <!--GENDER START-->
                                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 {{$errors->has('gender') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('dob','Gender :* ',['class'=>'control-label'])}}<br/>
                                            {{ Form::radio('gender','male') }} male
                                            {{ Form::radio('gender','female') }} female
                                            {{ Form::radio('gender','both') }} both
                                            @if ($errors->has('gender'))
                                                <span class="help-block">
                                                 <strong>{{ $errors->first('gender') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <!--GENDER END-->

                                        <!-- VACCINE DETAILS START-->
                                        <div class="col-lg-12 col-sm-8 col-xs-12 {{$errors->has('description') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('description','VACCINE Details : ',['class'=>'control-label'])}}

                                            {!! Form::textarea('description',old('description'),['class'=>'form-control', 'rows' => 6, 'cols' => 40,'placeholder'=>'Product Details.......']) !!}

                                            @if($errors->has('description'))
                                                <span class="help-block">
                                                <strong>{{$errors->first('description')}}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <!-- VACCINE DETAILS END-->

                                        <div class="col-lg-12 col-sm-12 col-xs-12"><span style="display: block;height: 10px;width: 100%;background: #fff;"></span></div>
                                        <div class="col-lg-12 col-sm-12 col-xs-12">
                                            {{ Form::button('SAVE VACCINE',['type'=>'submit','id'=>'savekarat','class'=>'btn btn-primary col-lg-6 col-sm-6 col-md-5']) }}
                                            ||
                                            <a href="{{ route('product.add') }}" class="btn btn-danger fa fa-edit">Cancel Edit</a>
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
        /* select category and load sub-category automatically end */
    </script>
@endsection
