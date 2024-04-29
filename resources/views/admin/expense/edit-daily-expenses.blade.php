@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Edit Daily Expenses</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Daily Expense</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Edit Daily Expense</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
                                    {{ Form::model($dailyexpense,['route'=>'daily-expenses.update','method'=>'post','enctype'=>'multipart/form-data','id'=>'brandForm']) }}
                                    <div class="col-lg-12 col-sm-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                        {{ Form::label('brand','Title : ',['class'=>'control-label'])}}
                                        {{ Form::text('title',old('title'),['class'=>'form-control'])}}
                                        {{ Form::hidden('id',$dailyexpense->id) }}
                                        @if ($errors->has('title'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-lg-12 col-sm-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                        {{ Form::label('brand','Expense : ',['class'=>'control-label'])}}
                                        {{ Form::select('expenses',$expense,false,['class'=>'form-control'])}}
                                        {{ Form::hidden('id',$dailyexpense->id) }}
                                        @if ($errors->has('expenses'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('expenses') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-lg-12 col-sm-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                        {{ Form::label('brand','Price : ',['class'=>'control-label'])}}
                                        {{ Form::text('price',old('price'),['class'=>'form-control'])}}
                                        {{ Form::hidden('id',$dailyexpense->id) }}
                                        @if ($errors->has('price'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('price') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-12 col-xs-12">
                                        <br>
                                    </div>

                                    <div class="col-md-12 col-xs-12">
                                        {{ Form::button('UPDATE',['type'=>'submit','id'=>'savebrand','class'=>'col-sm-6 btn btn-primary']) }}
                                        ||
                                        <a href="{{ route('daily-expenses.add') }}" class="btn btn-danger"> Cancel Edit</a>
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

@endsection