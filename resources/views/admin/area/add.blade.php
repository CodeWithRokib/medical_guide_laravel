@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Add / Area</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Area</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add New Area</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <div class="col-lg-12 col-sm-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                        {{ Form::open(['route'=>'area.store','method'=>'post','enctype'=>'multipart/form-data','id'=>'brandForm']) }}
                                        {{ Form::label('area','Area Name :* ',['class'=>'control-label'])}}
                                        {{ Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Ex: Chittagong'])}}

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
                                        {{ Form::button('SAVE AREA',['type'=>'submit','id'=>'savebrand','class'=>'btn-block btn btn-primary']) }}
                                    </div>
                                    {{ Form::close() }}
                                </div>

                                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                    <table class="table table-bordered table-striped" id="brandTable">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Action </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=0; @endphp
                                        @if(!blank($area))
                                        @foreach($area as $info)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $info->name }}</td>
                                                <td>
                                                    <a href="{{route('area.edit',$info->id)}}" class="btn btn-sm btn-info edit" ><i class="demo-pli-pen-5"></i></a> ||
                                                    <button class="btn btn-sm btn-danger erase fa fa-trash" data-id="{{$info->id}}" data-url="{{url('AreaManagement/area/erase')}}">
                                                    </button>

                                                </td>
                                            </tr>
                                        @endforeach
                                        @endif
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