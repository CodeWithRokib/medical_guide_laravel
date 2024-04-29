@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Edit Dieseas</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Dieseas</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Edit Dieseas</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    
                                    <div class="col-lg-12 col-sm-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                        {{ Form::model($dieseas,['route'=>'dieseas.update','method'=>'post','enctype'=>'multipart/form-data','id'=>'brandForm']) }}
                                        {{ Form::hidden('id',$dieseas->id) }}
                                        {{ Form::label('brand','Dieseas Name : ',['class'=>'control-label'])}}
                                        {{ Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Ex: Hepatitis B'])}}

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                        
                                    </div>
                                    
                                    
                                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                        <br>
                                        <label>Use Current Dieseas Name : <input type="checkbox" class="label-control" name="usecurrentdieseas" value="1"></label>
                                       
                                    </div>

                                    <div class="col-lg-12 col-sm-12 {{$errors->has('description') ? 'has-error' : ''}}">
                                         <br>
                                        {{ Form::label('brand','Description  : ',['class'=>'control-label'])}}

                                        {{Form::textarea('description',old('description'),['class'=>'form-control','placeholder'=>'Ex: Hepatitis B description...'])}}

                                        @if ($errors->has('description'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                        @endif

                                    </div>


                                    <div class="col-md-12 col-xs-12">
                                        <br>
                                    </div>

                                    <div class="col-md-7 col-xs-12">
                                        {{ Form::button('UPDATE DIESEAS',['type'=>'submit','id'=>'savebrand','class'=>'btn btn-primary btn-block']) }}
                                    </div>

                                    <div class="col-md-5 col-xs-12">
                                        <a href="{{route('dieseas.add')}}" class="btn btn-danger btn-block"> Cancel</a>
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