@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Add / View Dieseas Duration</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Dieseas Duration</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add New Dieseas Duration</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                        {{ Form::open(['route'=>'dieseasduration.store','method'=>'post','enctype'=>'multipart/form-data','id'=>'brandForm']) }}

                                    <div class="col-lg-12 col-sm-12 {{$errors->has('product_id') ? 'has-error' : ''}}">
                                            {{ Form::label('brand','Vaccine Name : ',['class'=>'control-label'])}}
                                        {{ Form::select('product_id',$products,null,['class'=>'form-control','id'=>'product_id','placeholder'=>'Select Vaccine']) }}
                                        {{--<select name="product_id" id="product_id" class="form-control">--}}
                                            {{--<option>Select Vaccine</option>--}}
                                        {{--@foreach($products as $product)--}}
                                            {{--<option value="{{$product->id}}">{{$product->name}}</option>--}}
                                        {{--@endforeach--}}
                                        {{--</select>--}}
                                    @if ($errors->has('product_id'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('product_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-lg-12 col-sm-12 {{$errors->has('does_number') ? 'has-error' : ''}}">
                                        <br>
                                        {{ Form::label('brand','Dose Number : ',['class'=>'control-label'])}}
                                        {{ Form::text('does_number',old('does_number'),['class'=>'form-control','id'=>'next','placeholder'=>'First Number 1']) }}
                                        @if ($errors->has('does_number'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('does_number') }}</strong>
                                            </span>
                                        @endif
                                    </div>


                                    <div class="col-lg-12 col-sm-12 {{$errors->has('type') ? 'has-error' : ''}}">
                                        <hr>
                                        {{ Form::label('brand','Schedule Type : ',['class'=>'control-label'])}}
                                        {{ Form::select('type',['day'=>'Day','month'=>'Month','Year'=>'Year','lifetime'=>'Life-Time'],false,['class'=>'form-control']) }}
                                        @if ($errors->has('type'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('type') }}</strong>
                                            </span>
                                        @endif
                                    </div>


                                    <div class="col-lg-12 col-sm-12 {{$errors->has('does_duration') ? 'has-error' : ''}}">
                                        <hr>
                                        {{ Form::label('brand','Does Duration : ',['class'=>'control-label'])}}
                                        {{ Form::number('does_duration',null,['class'=>'form-control','id'=>'total','placeholder'=>'Total Day/Month/Year']) }}
                                        @if ($errors->has('does_duration'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('does_duration') }}</strong>
                                            </span>
                                        @endif
                                        <hr>
                                    </div>




                                    <div class="col-md-12 col-xs-12">
                                        <br>
                                    </div>

                                    <div class="col-md-12 col-xs-12">
                                        {{ Form::button('SAVE DIESEAS DURATION',['type'=>'submit','id'=>'savebrand','class'=>'col-sm-12 btn btn-primary']) }}
                                    </div>
                                    {{ Form::close() }}
                                </div>

                                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                    <table class="table table-bordered table-striped" id="brandTable">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Vaccine</th>
                                            <th>Schedule Type</th>
                                            <th>Duration</th>
                                            <th>Does No </th>
                                            <th>Action </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @php $i=0; @endphp
                                            @foreach($durationvaccine as $info)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>
                                                      
                                                        {{ $info->product['name'] }}
                                                    </td>
                                                    <td>{{ $info->type }} </td>
                                                    <td>{{ $info->does_duration }} </td>
                                                    <td>{{ $info->does_number }} </td>
                                                    <td>
                                                        <a href="{{route('dieseasduration.edit',$info->id)}}" class="btn btn-sm btn-info edit" ><i class="demo-pli-pen-5"></i></a> ||
                                                        <button class="btn btn-sm btn-danger erase fa fa-trash" data-id="{{$info->id}}" data-url="{{url('DieseasManagement/vaccine-duration')}}"></button>
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

            var dieseas_id = $("#dieseas_id").val();
            $.ajax({
                method:"post",
                url:"{{ route('find.vaccinelist') }}",
                data:{"_token":"{{ csrf_token() }}",dieseas_id:dieseas_id},
                dataType:"html",
                success:function(rep){
                    console.log(rep);
                    $("#product_id").html(rep);
                },
                error:function(err){
                    console.log(err);
                }
            });
        });

        $(document).ready(function() {
            $("#next").keydown(function (e) {
                // Allow: backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                    // Allow: Ctrl/cmd+A
                    (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                    // Allow: Ctrl/cmd+C
                    (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
                    // Allow: Ctrl/cmd+X
                    (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
                    // Allow: home, end, left, right
                    (e.keyCode >= 35 && e.keyCode <= 39)) {
                    // let it happen, don't do anything
                    return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
            });
        });

        $(document).on("change","#dieseas_id",function(){
            var dieseas_id = $(this).val();
            $.ajax({
                method:"post",
                url:"{{ route('find.vaccinelist') }}",
                data:{"_token":"{{ csrf_token() }}",dieseas_id:dieseas_id},
                dataType:"html",
                success:function(rep){
                    console.log(rep);
                    $("#product_id").html(rep);
                },
                error:function(err){
                    console.log(err);
                }
            });
        });
    </script>

@endsection