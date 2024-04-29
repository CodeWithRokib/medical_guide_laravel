@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Add / View Services</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Services</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add New Services</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">

                                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

                                    {{ Form::model($service,['route'=>'website.serviceupdate','method'=>'post','enctype'=>'multipart/form-data']) }}

                                    <!--  PRODUCT NAME  -->

                                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('product','Service Name : ',['class'=>'control-label'])}}
                                            {{ Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Ex: Ring'])}}
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                 <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                            {{ Form::hidden('id',$service->id) }}
                                        </div>
                                        <!-- / PRODUCT NAME  -->


                                        <!--  PRODUCT File NAME  -->
                                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 {{$errors->has('image') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('image','Service Image : ',['class'=>'control-label'])}}

                                            {{ Form::file('image', ['class'=>'form-control']) }}

                                            @if($errors->has('image'))
                                                <span class="help-block">
                                                <strong>{{$errors->first('image')}}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <!-- / PRODUCT File NAME  -->


                                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 {{$errors->has('image') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('image','Service Old Image : ',['class'=>'control-label'])}}
                                            <img src="{{ asset('public/admin/product/upload/'.$service->image) }}" class="img-responsive" style="height: 80px;width: 80px;">
                                        </div>


                                        <div class="col-lg-8 col-sm-6 col-md-6 col-xs-12 {{$errors->has('description') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('image','Service Details : ',['class'=>'control-label'])}}

                                            {!! Form::textarea('description',old('description'),['class'=>'form-control', 'rows' => 6, 'cols' => 40,'placeholder'=>'Service Details.......','id'=>"demo-summernote"]) !!}

                                            @if($errors->has('description'))
                                                <span class="help-block">
                                                        <strong>{{$errors->first('description')}}</strong>
                                                    </span>
                                            @endif
                                        </div>


                                        <div class="col-lg-12 col-sm-12 col-xs-12"><span style="display: block;height: 10px;width: 100%;background: #fff;"></span></div>

                                        <div class="col-lg-12 col-sm-12 col-xs-12">
                                            {{ Form::button('UPDATE  SERVICE',['type'=>'submit','id'=>'savekarat','class'=>'btn btn-primary']) }}
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
            //alert("Hello");
        });




        /* select category and load sub-category automatically end */


    </script>
@endsection