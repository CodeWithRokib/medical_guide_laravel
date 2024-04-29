@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Add / View Sub-Certification</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Sub-Certification</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add New Sub-Certification</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    {{ Form::model($subcertification,['route'=>'subcertification.update','method'=>'post']) }}
                                    {{ Form::hidden('id',$subcertification->id) }}
                                    <div class="form-group">
                                        {{ Form::label('category','Select Certification',['class'=>'label-control']) }}
                                        {{ Form::select('certification_id',$certification,null,['class'=>'form-control']) }}
                                    </div>

                                    <div class="col-lg-12 col-sm-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                        {{ Form::label('SubCategory','Sub-Certification Name : ',['class'=>'control-label'])}}
                                        {{Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Ex: '])}}
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
                                        {{ Form::button('UPDATE SUB CERTIFICATION',['type'=>'submit','id'=>'saveCategory','class'=>'btn-block btn btn-primary']) }}
                                        <br>
                                        <a href="{{ route('subcertification.add')}}" class="fa fa-pencil btn btn-danger btn-block"></a>
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
            $('#CategoryTable').DataTable();

        });

        /* UPDATE Category END */

    </script>



@endsection