@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Add / View Brand</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Brand</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add New Brand</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <div class="col-lg-12 col-sm-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                        {{ Form::open(['route'=>'brand.store','method'=>'post','enctype'=>'multipart/form-data','id'=>'brandForm']) }}
                                        {{ Form::label('brand','Brand Name : ',['class'=>'control-label'])}}
                                        {{Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Ex: Mikimoto'])}}

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
                                        {{ Form::button('SAVE BRAND',['type'=>'submit','id'=>'savebrand','class'=>'col-sm-5 btn btn-primary']) }}
                                    </div>
                                    {{ Form::close() }}
                                </div>

                                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                    <table class="table table-bordered table-striped" id="brandTable">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Brand</th>
                                            <th>Action </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=0; @endphp
                                        @foreach($brand as $info)
                                            <tr id="rowid{{$info->id}}" class="abcd">
                                                <td>{{++$i}}</td>
                                                <td id="brand{{$info->id}}">{{$info->name}}</td>
                                                <td>
                                                    <a class="btn btn-sm btn-info edit" href="{{route('brand.edit',$info->id)}}" ><i class="demo-pli-pen-5"></i></a> ||
                                                    <button class="btn btn-sm btn-danger erase" data-id="{{$info->id}}" data-url="{{url('ProductManagement/Brand/erase')}}"><i class="demo-pli-trash"></i></button>
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