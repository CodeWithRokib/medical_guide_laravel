@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Add / View Banner</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Banner</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add New Banner</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-5 col-sm-5 col-md-6 col-xs-12">

                                    {{ Form::open(['route'=>'banner.store','method'=>'post','enctype'=>'multipart/form-data']) }}

                                    <!--  Select banner page start  -->
                                        <div class="col-lg-4 col-sm-6 col-md-6 col-xs-12 {{$errors->has('image') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('banner_page_no','Select Banner Page',['class'=>'control-label'])}}

                                            {{ Form::select('banner_page_no',['0'=>'Select','1'=>'About','2'=>'Service','3'=>'Doctor List','4'=>'Shop','5'=>'Contact','6'=>'User Profile'],null,['class'=>'form-control','id'=>'banner_page_no']) }}

                                            @if($errors->has('banner_page_no'))
                                                <span class="help-block">
                                                <strong>{{$errors->first('banner_page_no')}}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <!-- / Select banner page ends  -->

                                    <!--  BANNER IMAGE  -->
                                        <div class="col-lg-4 col-sm-6 col-md-6 col-xs-12 {{$errors->has('banner_img') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>

                                            {{ Form::label('banner_img','Banner Image',['class'=>'control-label'])}}
                                            {{ Form::file('banner_img',old('banner_img'),['class'=>'form-control'])}}
                                            @if ($errors->has('banner_img'))
                                                <span class="help-block">
                                                 <strong>{{ $errors->first('banner_img') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <!-- / BANNER IMAGE  -->

                                        <div class="col-lg-12 col-sm-12 col-xs-12"><span style="display: block;height: 10px;width: 100%;background: #fff;"></span></div>

                                        <div class="col-lg-12 col-sm-12 col-xs-12">
                                            {{ Form::button('SAVE BANNER',['type'=>'submit','class'=>'btn btn-primary']) }}
                                        </div>
                                        {{ Form::close() }}
                                    </div>

                                    <div class="col-lg-7 col-sm-7 col-md-7 col-xs-12">
                                        <table id="protable" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Banner Image</th>
                                                <th>Banner Page</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php $i=0;   @endphp
                                            @foreach($banners as $banner)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td> <img src="{{ asset('public/admin/product/upload/'.$banner->banner_img)   }}" style="height: 80px;width: 80px;"> </td>
                                                    <td>{{ $banner->banner_page_no  }}</td>
                                                    <td>
                                                        <a href="{{ route('banner.edit',$banner->id) }}" class="fa fa-edit btn btn-info"></a> || <button type="button" class="erase btn btn-danger fa fa-trash" data-id="{{ $banner->id }}" data-url="{{ route('banner.delete',$banner->id) }}" ></button>
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
    </div>
    <script>

        $(document).ready(function(){
            $("#protable").DataTable();


        });

        $(document).on("keyup","#price",function () {
        });

    </script>
@endsection