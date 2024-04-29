@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Add / View Supplier</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Supplier</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add New Supplier    </h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

                                    {{ Form::open(['route'=>'supplier.store','method'=>'post','id'=>'supplierForm','enctype'=>'multipart/form-data']) }}

                                    <div class="col-lg-12 col-sm-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                        {{ Form::hidden('id',null,['class'=>'form-control','id'=>'id']) }}
                                        {{ Form::label('suppliername','Supplier Name :* ',['class'=>'control-label'])}}
                                        {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Ex: Supplier Name','id'=>'name'])}}
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-lg-12 col-sm-12 {{$errors->has('phone') ? 'has-error' : ''}}">
                                        {{ Form::hidden('id',null,['class'=>'form-control','id'=>'id']) }}
                                        {{ Form::label('phone','Supplier Phone :* ',['class'=>'control-label'])}}
                                        {{ Form::text('phone',null,['class'=>'form-control','placeholder'=>'Ex: Supplier Phone','id'=>'phone'])}}
                                        @if ($errors->has('phone'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 {{$errors->has('image') ? 'has-error' : ''}}">

                                        {{ Form::label('image','Image : ',['class'=>'control-label'])}}

                                        {{ Form::file('image', ['class'=>'form-control']) }}

                                        @if($errors->has('image'))
                                            <span class="help-block">
                                                <strong>{{$errors->first('image')}}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-lg-12 col-sm-12 {{$errors->has('address') ? 'has-error' : ''}}">

                                        {{ Form::label('supplieraddress','Supplier Address :* ',['class'=>'control-label'])}}
                                        {{ Form::textarea('address',null,['class'=>'form-control','placeholder'=>'Ex: Supplier Address','id'=>'address'])}}
                                        @if ($errors->has('address'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif

                                    </div>

                                    <div class="col-md-12 col-xs-12">
                                        <br>
                                    </div>

                                    <div class="col-md-12 col-xs-12">
                                        {{ Form::button('Save Supplier',['type'=>'submit','id'=>'savesupplier','class'=>'btn btn-primary']) }}
                                        {{ Form::hidden('canceledit',"Cancel Edit",['type'=>'reset','id'=>'cancel','class'=>'btn btn-danger']) }}
                                    </div>
                                    {{ Form::close() }}
                                </div>

                                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                    <table class="table table-bordered table-striped" id="brandTable">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Supplier Name</th>
                                            <th>Supplier Phone</th>
                                            <th>Address</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=0; @endphp
                                            @foreach($suppliers as $info)
                                                <tr id="rowid{{$info->id}}" class="abcd">
                                                    <td>{{++$i}}</td>
                                                    <td id="name{{ $info->id }}" data-id="{{ $info->name }}">{{$info->name}}</td>
                                                    <td id="name{{ $info->id }}" data-id="{{ $info->phone }}">{{$info->phone}}</td>

                                                    <td id="address{{ $info->id }}" data-id="{{ $info->address }}">
                                                        @if(!empty($info->address))
                                                            {{ $info->address }}
                                                        @else
                                                            <p class="text-center">no address found</p>
                                                        @endif

                                                    </td>
                                                    <td> <img alt="NO IMAGE FOUND" src="{{ ($info->image)? url('public/admin/supplier/'.$info->image) : url('public/admin/supplier/avatar.png')}}"  class="img-responsive" style="height: 70px;width: 70px;">  </td>
                                                    <td>
                                                        <a class="btn btn-sm btn-info edit" href="{{ route('supplier.edit',$info->id) }}">
                                                            <i class="demo-pli-pen-5"></i>
                                                        </a>
                                                        ||
                                                        <button class="btn btn-sm btn-danger erase" data-id="{{$info->id}}" data-url="{{route('supplier.destroy')}}">
                                                            <i class="demo-pli-trash"></i>
                                                        </button>
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