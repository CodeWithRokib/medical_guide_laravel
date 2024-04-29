@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Edit Home-Page</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Home-Page</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Edit Home Page</h3>
                            </div>
                            <div class="panel-body">
                                {{ Form::model($homepage,['route'=>['homepage.update',$homepage->id],'method'=>'post','files'=>true,'id'=>'brandForm']) }}
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    @include('admin.website.add-form-homepage')

                                    <div class="col-lg-12 col-sm-12 ">
                                        {{ Form::label('brand','Hospital Old Image : ',['class'=>'control-label'])}}
                                        <img src="{{ url('public/admin/product/upload/'.$homepage->image) }}" style="height: 80px;width:80px;">
                                    </div>

                                    <div class="col-md-12 col-xs-12">
                                        <br>
                                    </div>

                                    <div class="col-md-7 col-xs-12">
                                        {{ Form::button('UPDATE INTRO VIDEO',['type'=>'submit','id'=>'savebrand','class'=>'btn btn-primary btn-block']) }}
                                    </div>

                                    <div class="col-md-5 col-xs-12">
                                        <a href="{{route('homepage.add')}}" class="btn btn-danger btn-block"> Cancel</a>
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