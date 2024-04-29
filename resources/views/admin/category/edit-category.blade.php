@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Edit Category</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Category</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Edit Category</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <div class="col-lg-12 col-sm-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                        {{ Form::open(['route'=>'category.update','method'=>'post','enctype'=>'multipart/form-data','id'=>'CategoryForm']) }}
                                        {{ Form::label('Category','Category Name : ',['class'=>'control-label'])}}
                                        {{ Form::hidden('id',$category->id,['class'=>'form-control']) }}
                                        {{Form::text('name',$category->name,['class'=>'form-control','placeholder'=>'Ex: Mikimoto'])}}
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-12 col-xs-12">
                                        <br>
                                    </div>

                                    <div class="col-md-6 col-xs-6">
                                        {{ Form::button('UPDATE CATEGORY',['type'=>'submit','id'=>'saveCategory','class'=>'form-control btn btn-primary']) }}
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <a href="{{route('category.add')}}" class="btn btn-danger"> Cancel Edit</a>

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
@endsection