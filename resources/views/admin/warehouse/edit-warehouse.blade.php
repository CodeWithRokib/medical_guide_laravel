@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Add Warehouse</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Warehouse</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add New Warehouse</h3>
                            </div>

                            <div class="panel-body">
                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                    {{ Form::model($warehouse,['route'=>'warehouse.update','method'=>'post']) }}
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-6 {{ $errors->has('name') ? "has-error": "" }}">
                                                {{ Form::hidden('id',$warehouse->id) }}
                                                <div class="form-group">
                                                    {{ Form::label('warehousename','Name : ',['class'=>'control-label']) }}
                                                    {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Warehouse Name']) }}

                                                    @if($errors->has('name'))
                                                        <span class="help-block">
                                                            <strong>  {{ $errors->first('name') }} </strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group {{ $errors->has('phone') ? "has-error" : "" }}">
                                                    {{ Form::label('phone','Phone : ',['class'=>'control-label']) }}
                                                    {{ Form::number('phone',null,['class'=>'form-control','placeholder'=>'Phone No. 123456789']) }}
                                                    @if($errors->has('phone'))
                                                        <span class="help-block">
                                                            <strong>  {{ $errors->first('phone') }} </strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group {{ $errors->has('address') ? "has-error": "" }}">
                                                    {{ Form::label('warehousename','Address : ',['class'=>'control-label']) }}
                                                    {{ Form::textarea('address',null,['class'=>'form-control','rows'=>5,'cols'=>5,'placeholder'=>'Warehouse address']) }}
                                                    @if($errors->has('address'))
                                                        <span class="help-block">
                                                            <strong>  {{ $errors->first('address') }} </strong>
                                                        </span>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer text-left">
                                        {{ Form::submit('UPDATE WAREHOUSE',['class'=>'btn btn-primary ']) }}
                                        ||

                                        <a href="{{ route('warehouse.add') }}" class="btn btn-danger">Cancel Edit</a>
                                    </div>
                                    {{ Form::close() }}
                                </div>{{-- left col -lg-6 close here --}}



                            </div>{{-- Panel Body End--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        $(function(){
            $('#warehousetable').DataTable();
            $("#canceledit").hide();
        });
    </script>

@endsection