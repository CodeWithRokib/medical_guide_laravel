@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Add / View Company</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Company</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add New Company</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
                                    <div class="col-lg-12 col-sm-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                        {{ Form::model($company,['route'=>'company.update','method'=>'post','enctype'=>'multipart/form-data','id'=>'brandForm']) }}
                                        {{ Form::label('brand','Company Name : ',['class'=>'control-label'])}}
                                        {{ Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Ex: CSCR'])}}
                                        {{ Form::hidden('id',$company->id) }}
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif

                                    </div>

                                    <div class="col-md-12 col-xs-12">
                                        <br>
                                    </div>

                                    <div class="col-md-12 col-xs-12">
                                        {{ Form::button('UPDATE COMPANY',['type'=>'submit','id'=>'savebrand','class'=>'col-sm-6 btn btn-primary']) }}
                                         ||
                                         <a href="{{ route('company.add') }}" class="btn btn-danger"> Cancel Edit</a>
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