@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Add / View VACCINE</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">VACCINE</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add New VACCINE</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-5 col-md-6 col-xs-12">
                                        {{ Form::open(['route'=>'product.store','method'=>'post','enctype'=>'multipart/form-data']) }}
                                        <!--  VACCINE NAME  -->
                                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('product','VACCINE Name :* ',['class'=>'control-label'])}}
                                            {{ Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Ex: Ring'])}}
                                            {{ Form::hidden('product_type','vaccine')}}
                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <!--/ VACCINE NAME  -->
                                        <!--  VACCINE PRICE  -->
                                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 {{$errors->has('price') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('product','Price :* ',['class'=>'control-label'])}}
                                            {{Form::text('price',old('price'),['class'=>'form-control','placeholder'=>'Ex: 5000 tk','id'=>'price'])}}
                                            @if ($errors->has('price'))
                                                <span class="help-block">
                                                 <strong>{{ $errors->first('price') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <!-- / VACCINE PRICE  -->
                                        <!-- AGE FROM & TO  Start -->
                                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 {{$errors->has('from') ? 'has-error' : ''}}">
                                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                {{ Form::label('from','Age From :* ',['class'=>'control-label'])}}
                                                {{ Form::text('from',old('from'),['class'=>'form-control' ,'id'=>'from','placeholder'=>'age']) }}
                                                @if($errors->has('from'))
                                                    <span class="help-block">
                                                        <strong>{{$errors->first('from')}}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 {{$errors->has('to') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                {{ Form::label('to','Age To :* ',['class'=>'control-label'])}}
                                                {{ Form::text('to',old('to'),['class'=>'form-control' ,'id'=>'to', 'placeholder'=>'age']) }}
                                            <span style="color:red;" id="toError"></span>
                                                @if($errors->has('to'))
                                            <span class="help-block">
                                                    <strong>{{$errors->first('to')}}</strong>
                                            </span>
                                                @endif
                                        </div>
                                        <!-- AGE FROM & TO END -->
                                        <!--GENDER START-->
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 {{$errors->has('gender') ? 'has-error' : ''}}">
                                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                {{ Form::label('dob','Gender :* ',['class'=>'control-label'])}}<br/>
                                                {{ Form::radio('gender','male') }} male
                                                {{ Form::radio('gender','female') }} female
                                                {{ Form::radio('gender','both') }} both
                                                @if ($errors->has('gender'))
                                                    <span class="help-block">
                                                 <strong>{{ $errors->first('gender') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        <!--GENDER END-->
                                            <!-- IMAGE START-->
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 {{ $errors->has('image') ? 'has-error' : '' }}">
                                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                {{ Form::label('','Image : ',['class'=>'control-label'])}}

                                                {{ Form::file('image', ['class'=>'form-control'] ) }}

                                                @if($errors->has('image'))
                                                    <span class="help-block">
                                                        <strong>{{$errors->first('image')}}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <!-- IMAGE END-->

                                        <!--  PRODUCT File NAME  -->
                                            <!-- VACCINE DETAILS START-->
                                            <div class="col-lg-12 col-sm-6 col-md-6 col-xs-12 {{$errors->has('description') ? 'has-error' : ''}}">
                                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                {{ Form::label('image','VACCINE Details :* ',['class'=>'control-label'])}}

                                                {!! Form::textarea('description',old('description'),['class'=>'form-control', 'rows' => 6, 'cols' => 40,'placeholder'=>'Product Details.......']) !!}

                                                @if($errors->has('description'))
                                                    <span class="help-block">
                                                        <strong>{{$errors->first('description')}}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <!-- VACCINE DETAILS END-->

                                        <!-- / PRODUCT File NAME  -->
                                        <div class="col-lg-12 col-sm-12 col-xs-12"><span style="display: block;height: 10px;width: 100%;background: #fff;"></span></div>

                                        <div class="col-lg-12 col-sm-12 col-xs-12">
                                            {{ Form::button('SAVE VACCINE',['type'=>'submit','id'=>'savekarat','class'=>'btn btn-primary']) }}
                                        </div>
                                        {{ Form::close() }}
                                    </div>
                                    <div class="col-lg-8 col-sm-7 col-md-7 col-xs-12 table-responsive">
                                        <table id="protable" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Name</th>
                                                    <th>Price</th>
                                                    <th>Age</th>
                                                    <th>Gender</th>
                                                    <th>Details</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $i=0; @endphp
                                                @foreach($vaccines as $vaccine)
                                                    <tr>
                                                        <td>{{++$i}}</td>
                                                        <td>{{ $vaccine->name }}</td>
                                                        <td>{{ $vaccine->price }}</td>
                                                        <td>{{ $vaccine->from }} - {{ $vaccine->to }}</td>
                                                        <td>{{ $vaccine->gender }}</td>
                                                        <td>{!! substr($vaccine->description,0,50)  !!} &nbsp; Continue...</td>
                                                        <td>
                                                            <img  src="{{ $vaccine->image != null ? asset('admin/product/upload/'.$vaccine->image) : asset('admin/product/upload/noimage.png') }}"  class="img-responsive" style="height: 70px;width: 70px;">
                                                        </td>
                                                        <td>
                                                            <a href="{{route('product.edit',$vaccine->id)}}" class="btn btn-primary fa fa-edit"></a>
                                                            <a href="{{route('product.singleview',$vaccine->id)}}" class="btn btn-info fa fa-eye"></a>
                                                            {{-- <a href="{{route('product.singleview',[$vaccine->id,'status=1'])}}" class="btn {{ $vaccine->status ? "btn-info fa fa-thumbs-up": "btn-danger fa fa-eye-slash"}}"></a> --}}
                                                            <button type="button" data-id="{{ $vaccine->id }}" data-url="{{ URL('ProductManagement/erase') }}" class="btn btn-danger fa fa-trash erase delete"></button>
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
        $(function () {
            /* From Start */
            $(document).on('keyup change','#from',function () {
                var from = $(this).val();
                var to = $("#to").val();
                if (Number(from) > Number(to) || Number(from) == Number(to)) {
                    $("#toError").text("Age From not greater then Age to").show(500);
                } else {
                    $("#toError").hide();
                }
            });
            /* From Ending */

            /* To Age Start */
            $(document).on('keyup change','#to',function () {
                var to = $(this).val();
                var from = $("#from").val();

                if (Number(from) > Number(to)) {
                    console.log("Fire : "+Number(from)+" > "+Number(to));
                    $("#toError").text("Age From not Greater then Age To").show(500);
                } else {
                    console.log("Correct : "+Number(to)+" > "+from);
                    $("#toError").hide();
                }
            });
            /* To Age End */
        });

    </script>
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
