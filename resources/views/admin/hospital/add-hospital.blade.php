@extends('admin.layouts.admin')

@section('content')
<div class="boxed">
    <div id="content-container">
        <div id="page-head">
            <div id="page-title">
                <h1 class="page-header text-overflow">Add / View Hospital</h1>
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
                            <h3 class="panel-title">Add New Hospital</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="col-lg-12 col-sm-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                    {{ Form::open(['route'=>'hospital.store','method'=>'post','enctype'=>'multipart/form-data','id'=>'brandForm']) }}
                                    {{ Form::label('brand','Hospital Name :* ',['class'=>'control-label'])}}
                                    {{ Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Ex: CSCR'])}}

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
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


                               <div class="col-lg-12 col-sm-12 {{$errors->has('image') ? 'has-error' : ''}}">
                                    {{ Form::label('brand','Hospital Image : ',['class'=>'control-label'])}}
                                   {{ Form::file('image',['class'=>'form-control'])}}

                                    @if ($errors->has('image'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                    @endif

                                </div>
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 {{ $errors->has('phone') ? 'has-error' : '' }}">
                                    <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>

                                        {{ Form::label('phone', 'Mobile/Phone :* ', ['class' => 'control-label']) }}
                                        {{ Form::text('phone', old('phone'), ['class' => 'form-control', 'placeholder' => 'Ex: +880 123456789', 'id' => 'email']) }}
                                            @if ($errors->has('phone'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                </span>
                                            @endif
                                </div>
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 {{ $errors->has('address') ? 'has-error' : '' }}">
                                    <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>

                                        {{ Form::label('address', 'Address :* ', ['class' => 'control-label']) }}
                                        {{ Form::text('address', old('address'), ['class' => 'form-control', 'placeholder' => 'Ex:Aaddress', 'id' => 'email']) }}
                                            @if ($errors->has('address'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('address') }}</strong>
                                                </span>
                                            @endif
                                </div>
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 {{ $errors->has('location') ? 'has-error' : '' }}">
                                    <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>

                                        {{ Form::label('location', 'Location :* ', ['class' => 'control-label']) }}
                                        {{ Form::text('location', old('location'), ['class' => 'form-control', 'placeholder' => 'Ex:Location', 'id' => 'email']) }}
                                            @if ($errors->has('location'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('location') }}</strong>
                                                </span>
                                            @endif
                                </div>
                                <div class="col-lg-12 col-sm-12 {{$errors->has('about') ? 'has-error' : ''}}">
                                    {{ Form::label('brand','About : ',['class'=>'control-label'])}}

                                    {{Form::textarea('about',old('about'),['class'=>'form-control','placeholder'=>'Ex: Hospital About...','required'])}}

                                    @if ($errors->has('about'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('about') }}</strong>
                                        </span>
                                    @endif

                                </div>


                                <div class="col-md-12 col-xs-12">
                                    <br>
                                </div>

                                <div class="col-md-12 col-xs-12">
                                    {{ Form::button('SAVE HOSPITAL',['type'=>'submit','id'=>'savebrand','class'=>'col-sm-5 btn btn-primary']) }}
                                </div>
                                {{ Form::close() }}
                            </div>

                            <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                <table class="table table-bordered table-striped" id="brandTable">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Division</th>
                                        <th>Phone</th>
                                        <th>Location</th>
                                        <th>Address</th>
                                        <th>About</th>
                                        <th>Action </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @php $i=0; @endphp
                                        @foreach($hospitals as $info)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td> <img src="{{($info->image)? asset('admin/product/upload/'.$info->image): url('public/admin/product/upload/hospital.jpg') }}"  class="img-responsive" style="height: 70px;width: 70px;">  </td>
                                                <td>{{ $info->name }}</td>
                                                <td>{{ $info->division['name'] }}</td>
                                                <td>{{ $info->phone }}</td>
                                                <td>{{ $info->location }}</td>
                                                <td>{{ $info->address }}</td>

                                                <td>{{ substr($info->about,0,30) }}</td>
                                                <td>
                                                    <a href="{{route('hospital.edit',$info->id)}}" class="btn btn-sm btn-info edit" ><i class="demo-pli-pen-5"></i></a> ||
                                                     {{-- <button  class="btn btn-sm btn-danger erase fa fa-trash" data-id="{{$info->id}}" data-url="{{url('HospitalManagement/erase')}}">
                                                        </button> --}}
                                                    {{-- <a href="{{route('hospital.destroy',$info->id)}}" class="btn btn-sm btn-danger erase fa fa-trash"></a> --}}
                                                    <button type="button" data-id="{{ $info->id }}" data-url="{{ URL('HospitalManagement/erase') }}" class="btn btn-danger fa fa-trash erase delete"></button>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

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
