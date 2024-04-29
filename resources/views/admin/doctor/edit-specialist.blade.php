@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Add / View Company</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Company</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add New Company</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
                                    {{ Form::model($specialist,['route'=>['specialist.update',$specialist->id],'method'=>'post','enctype'=>'multipart/form-data','id'=>'brandForm']) }}

                                    @include('admin.doctor.form-specialist')

                                    <div class="col-md-12 col-xs-12">
                                        <br>
                                    </div>

                                    <div class="col-md-12 col-xs-12">
                                        {{ Form::button('UPDATE',['type'=>'submit','id'=>'savebrand','class'=>'col-sm-6 btn btn-primary']) }}
                                        ||
                                        <a href="{{ route('specialist.add') }}" class="btn btn-danger"> Cancel Edit</a>
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
    </script>

@endsection