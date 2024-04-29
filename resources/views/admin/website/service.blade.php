@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Add / View Services</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Services</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add New Services</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">

                                    <div class="col-lg-5 col-sm-5 col-md-6 col-xs-12">

                                    {{ Form::open(['route'=>'website.servicestore','method'=>'post','enctype'=>'multipart/form-data']) }}

                                    <!--  PRODUCT NAME  -->
                                        <div class="col-lg-4 col-sm-6 col-md-6 col-xs-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>

                                            {{ Form::label('product','Service Name :* ',['class'=>'control-label'])}}
                                            {{ Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Ex: Ring'])}}
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                 <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <!-- / PRODUCT NAME  -->


                                        <!--  PRODUCT File NAME  -->
                                        <div class="col-lg-4 col-sm-6 col-md-6 col-xs-12 {{$errors->has('image') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('image','Service Image :* ',['class'=>'control-label'])}}

                                            {{ Form::file('image', ['class'=>'form-control']) }}

                                            @if($errors->has('image'))
                                                <span class="help-block">
                                                <strong>{{$errors->first('image')}}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <!-- / PRODUCT File NAME  -->

                                        <div class="col-lg-8 col-sm-6 col-md-6 col-xs-12 {{$errors->has('description') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('image','Service Details :* ',['class'=>'control-label'])}}

                                            {!! Form::textarea('description',old('description'),['class'=>'form-control', 'rows' => 6, 'cols' => 40,'placeholder'=>'Service Details.......','id'=>"demo-summernote"]) !!}

                                            @if($errors->has('description'))
                                                <span class="help-block">
                                                        <strong>{{$errors->first('description')}}</strong>
                                                    </span>
                                            @endif

                                        </div>



                                        <div class="col-lg-12 col-sm-12 col-xs-12"><span style="display: block;height: 10px;width: 100%;background: #fff;"></span></div>

                                        <div class="col-lg-12 col-sm-12 col-xs-12">
                                            {{ Form::button('SAVE SERVICE',['type'=>'submit','id'=>'savekarat','class'=>'btn btn-primary']) }}
                                        </div>
                                        {{ Form::close() }}
                                    </div>


                                    <div class="col-lg-7 col-sm-7 col-md-7 col-xs-12">
                                        <table id="protable" class="table table-bordered table-striped">
                                            <thead>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                            </thead>
                                            <tbody>
                                            @php $i=0;   @endphp
                                            @foreach($services as $service)
                                                <tr>
                                                      <td>{{ ++$i }}</td>
                                                      <td>{{ $service->name  }}</td>
                                                      <td>{{ substr(strip_tags($service->description),0,99)  }}</td>
                                                      <td> <img src="{{ asset('public/admin/product/upload/'.$service->image)   }}" style="height: 80px;width: 80px;    "> </td>
                                                      <td>
                                                          <a href="{{ route('website.serviceedit',$service->id) }}" class="fa fa-edit btn btn-info"></a> || <button type="button" class="erase btn btn-danger fa fa-trash" data-id="{{ $service->id }}" data-url="{{ url('WebsiteManagement/service-erase') }}" ></button>
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
            //alert("Hello");
        });




        /* select category and load sub-category automatically end */


    </script>
@endsection