@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Edit Hospital</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Hospital</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Edit Hospital</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <div class="col-lg-12 col-sm-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                        {{ Form::model($hospital,['route'=>'hospital.update','method'=>'post','enctype'=>'multipart/form-data','id'=>'brandForm']) }}
                                        {{ Form::hidden('id',$hospital->id) }}
                                        {{ Form::label('brand','Hospital Name : ',['class'=>'control-label'])}}
                                        {{ Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Ex: Hepatitis B'])}}

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                        <br>
                                    </div>
                                    
                                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                        <label>Use Current Hospital name <input type="checkbox" value="1" name="currenthospital"></label>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 {{$errors->has('division_id') ? 'has-error' : ''}}">
                                        {{ Form::label('division_id','Division :* ',['class'=>'control-label'])}}
                                        {{ Form::select('division_id',$division,false,['class'=>'form-control','placeholder'=>'SELECT DIVISION'])}}

                                        @if ($errors->has('division_id'))
                                            <span class="help-block">
                                             <strong>{{ $errors->first('division_id') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    {{--<div class="col-lg-12 col-sm-12 {{$errors->has('image') ? 'has-error' : ''}}">--}}
                                        {{--<br>--}}
                                        {{--{{ Form::label('brand','Hospital Image : ',['class'=>'control-label'])}}--}}
                                        {{--{{ Form::file('image',['class'=>'form-control'])}}--}}

                                        {{--@if ($errors->has('image'))--}}
                                            {{--<span class="help-block">--}}
                                                 {{--<strong>{{ $errors->first('image') }}</strong>--}}
                                            {{--</span>--}}
                                        {{--@endif--}}

                                    {{--</div>--}}

                                    {{--<div class="col-lg-12 col-sm-12 ">--}}

                                        {{--{{ Form::label('brand','Hospital Old Image : ',['class'=>'control-label'])}}--}}
                                        {{--<img src="{{ url('public/admin/product/upload/'.$hospital->image) }}" style="height: 80px;width:80px;">--}}

                                    {{--</div>--}}


                                    <div class="col-lg-12 col-sm-12 {{$errors->has('description') ? 'has-error' : ''}}">

                                        {{ Form::label('brand','Description  : ',['class'=>'control-label']) }}
                                        {{ Form::textarea('description',old('description'),['class'=>'form-control','placeholder'=>'Ex: Hepatitis B description...']) }}

                                        @if($errors->has('description'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                        @endif

                                    </div>


                                    <div class="col-md-12 col-xs-12">
                                        <br>
                                    </div>

                                    <div class="col-md-7 col-xs-12">
                                        {{ Form::button('UPDATE HOSPITAL',['type'=>'submit','id'=>'savebrand','class'=>'btn btn-primary btn-block']) }}
                                    </div>

                                    <div class="col-md-5 col-xs-12">
                                        <a href="{{route('hospital.add')}}" class="btn btn-danger btn-block"> Cancel</a>
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