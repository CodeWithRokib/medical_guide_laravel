@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Update Supplier</h1>
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
                                <h3 class="panel-title">Update Supplier    </h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    {{ Form::model($supplier,['route'=>'supplier.update','method'=>'post','id'=>'supplierForm','enctype'=>'multipart/form-data']) }}

                                    <div class="col-lg-12 col-sm-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                        {{ Form::hidden('id',$supplier->id,['class'=>'form-control','id'=>'id']) }}
                                        {{ Form::label('suppliername','Supplier Name : ',['class'=>'control-label'])}}
                                        {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Ex: Supplier Name','id'=>'name'])}}
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                        <hr>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 {{$errors->has('phone') ? 'has-error' : ''}}">


                                        {{ Form::label('supplierphone','Supplier Phone : ',['class'=>'control-label'])}}
                                        {{ Form::text('phone',old('phone'),['class'=>'form-control','placeholder'=>'Ex: 123456789','id'=>'phone'])}}
                                        @if ($errors->has('phone'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                        <hr>
                                        <h4 class="text-left">Use Old Number {{ Form::checkbox("oldphone",1) }}</h4>
                                    </div>

                                    <div class="col-lg-4 col-sm-4 col-xs-12 {{$errors->has('image') ? 'has-error' : ''}}">
                                        <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                        {{ Form::label('image','Supplier Image : ',['class'=>'control-label'])}}
                                        {{ Form::file('image', ['class'=>'form-control']) }}
                                        @if($errors->has('image'))
                                            <span class="help-block">
                                                <strong>{{$errors->first('image')}}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <!-- /IMAGE END  -->

                                    {{--<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">--}}
                                        {{--<br>--}}
                                        {{--@if($product->image != null)--}}
                                            {{--{{ Form::label('','Old Image') }}--}}
                                            {{--<img src="{{ asset('public/admin/product/upload/'.$product->image) }}" style="height: 80px;width: 80px">--}}
                                        {{--@else--}}
                                            {{--{{ Form::label('','Temporary Image') }}--}}
                                            {{--<img src="{{ asset('public/admin/product/upload/noimage.png') }}" style="height: 80px;width: 80px">--}}
                                        {{--@endif--}}

                                    {{--</div>--}}


                                    <div class="col-lg-12 col-sm-12 {{$errors->has('address') ? 'has-error' : ''}}">

                                        {{ Form::label('supplieraddress','Supplier Address : ',['class'=>'control-label'])}}
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
                                        {{ Form::button('Update Supplier',['type'=>'submit','id'=>'savesupplier','class'=>'btn btn-primary']) }}
                                        ||
                                        <a href="{{ route('supplier.add') }}" class="btn btn-danger"> Cancel Edit </a>
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

        /* edit request start */
        $(document).on('click','.edit',function(){
            $("#cancel").attr("type","button");
            var id = $(this).attr('data-id');
            var name = $("#name"+id).attr('data-id');
            var phone = $("#phone"+id).attr('data-id');
            var address = $("#address"+id).attr('data-id');
            var route = '{{ route("supplier.update") }}';
            $("#name").val(name);
            $("#phone").val(phone);
            $("#address").val(address);
            $("#id").val(id);
            $('#supplierForm').attr('action',route);
            $("#savesupplier").text("Update Supplier");
            $("#savesupplier").attr('class','btn btn-info');
            $("#cancel").attr('type','reset');
        });

        $("#cancel").click(function(){
            var route = '{{ route("supplier.add") }}';
            $("#supplierForm").attr('action',route);
            $("#id").val("");
            $("#savesupplier").text("Add Supplier");
            $("#savesupplier").attr('class','btn btn-primary');
            $(this).hide(299)
        });
        /* edit request end */
    </script>

@endsection