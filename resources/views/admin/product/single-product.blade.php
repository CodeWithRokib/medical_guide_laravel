@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Vaccine Product View</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li><a href="{{ route('product.add') }}">vaccine</a></li>
                    <li class="active">view</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">View VACCINE</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-3  col-xs-12">
                                        <h4 class="bg-primary" style="padding: 5px 20px;">Product Info   :  </h4>

                                        <div style="height: 250px;width: 250px;overflow: hidden;">
                                            <img src="{{ $product->image !=null ?  asset('admin/product/upload/'.$product->image) : asset('public/admin/product/upload/no.png' ) }}" alt="" style="height: 100%;width: 100%;">
                                        </div>
                                        <h3>{{ $product->name }}</h3>

                                    </div>

                                    <div class="col-lg-3">
                                        <h4 class="bg-primary" style="padding: 5px 20px;">Requirement  :  </h4>

                                        <h5>Price : {{ $product->price }}</h5>
                                        <h5>Gender : {{ $product->gender }}</h5>
                                        <h5>Age From : {!!  $product->from!=null ? $product->from : "<label class='label label-danger'> Update Please </label>"  !!}</h5>
                                        <h5>Age To : {!!  $product->to!=null ? $product->to : "<label class='label label-danger'> Update Please </label>"  !!}</h5>
                                    </div>

                                    <div class="col-lg-6 " style="overflow: hidden; text-justify: auto" >
                                        <h4 class="bg-primary" style="padding: 5px 20px;">Description :  </h4>
                                        {!! $product->description !=null ? $product->description :  "<label class='label label-danger'> Update Please </label>"  !!}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
