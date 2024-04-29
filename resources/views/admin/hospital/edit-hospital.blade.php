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
                                    <div class="col-lg-12 col-sm-12 {{ $errors->has('name') ? 'has-error' : '' }}">
                                        {{ Form::model($hospital, ['route' => 'hospital.update', 'method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'brandForm']) }}
                                        {{ Form::hidden('id', $hospital->id) }}
                                        {{ Form::label('brand', 'Hospital Name : ', ['class' => 'control-label']) }}
                                        {{ Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Ex: Hepatitis B']) }}

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                        <br>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

                                    </div>

                                    <div class="col-lg-12 col-sm-12 {{ $errors->has('division_id') ? 'has-error' : '' }}">
                                        {{ Form::label('division_id', 'Division :* ', ['class' => 'control-label']) }}
                                        {{ Form::select('division_id', $division, null, ['class' => 'form-control', 'placeholder' => 'SELECT DIVISION']) }}

                                        @if ($errors->has('division_id'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('division_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>


                                    <div
                                        class="col-lg-12 col-sm-12 col-md-12 col-xs-12 {{ $errors->has('phone') ? 'has-error' : '' }}">
                                        <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>

                                        {{ Form::label('phone', 'Mobile/Phone :* ', ['class' => 'control-label']) }}
                                        {{ Form::text('phone', old('phone'), ['class' => 'form-control', 'placeholder' => 'Ex: +880 123456789', 'id' => 'email']) }}
                                        @if ($errors->has('phone'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div
                                        class="col-lg-12 col-sm-12 col-md-12 col-xs-12 {{ $errors->has('address') ? 'has-error' : '' }}">
                                        <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>

                                        {{ Form::label('address', 'Address :* ', ['class' => 'control-label']) }}
                                        {{ Form::text('address', old('address'), ['class' => 'form-control', 'placeholder' => 'Ex:Aaddress', 'id' => 'email']) }}
                                        @if ($errors->has('address'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div
                                        class="col-lg-12 col-sm-12 col-md-12 col-xs-12 {{ $errors->has('location') ? 'has-error' : '' }}">
                                        <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>

                                        {{ Form::label('location', 'Location :* ', ['class' => 'control-label']) }}
                                        {{ Form::text('location', old('location'), ['class' => 'form-control', 'placeholder' => 'Ex:Location', 'id' => 'email']) }}
                                        @if ($errors->has('location'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('location') }}</strong>
                                            </span>
                                        @endif
                                    </div>



                                    <div class="col-lg-12 col-sm-12 {{ $errors->has('image') ? 'has-error' : '' }}">
                                        <br>
                                        {{ Form::label('brand', 'Hospital Image : ', ['class' => 'control-label']) }}
                                        {{ Form::file('image', ['class' => 'form-control']) }}
                                        @if ($errors->has('image'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('image') }}</strong>
                                            </span>
                                        @endif

                                    </div>

                                    <div class="col-lg-12 col-sm-12 ">

                                        {{ Form::label('brand', 'Hospital Old Image : ', ['class' => 'control-label']) }}
                                        <img src="{{ asset('admin/product/upload/' . $hospital->image) }}"
                                            style="height: 80px;width:80px;">

                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <br>
                                    </div>

                                    <div class="col-md-7 col-xs-12">
                                        {{ Form::button('UPDATE HOSPITAL', ['type' => 'submit', 'id' => 'savebrand', 'class' => 'btn btn-primary btn-block']) }}
                                    </div>

                                    <div class="col-md-5 col-xs-12">
                                        <a href="{{ route('hospital.add') }}" class="btn btn-danger btn-block"> Cancel</a>
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
        $(function() {
            $('#brandTable').DataTable();
            $("#canceledit").hide();
        });
    </script>
@endsection
