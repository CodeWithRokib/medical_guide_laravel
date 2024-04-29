@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Update Corporate Program</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active"> </li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Update  Corporate Program</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    {{ Form::model($blog,['route'=>['blog.update',$blog->id],'method'=>'post','files'=>true]) }}
                                    @include('admin.blog.form-blog',['button'=>'Update Corporate Program'])
                                    {{ Form::close() }}
                                </div>

                                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 table-responsive">

                                    @include('admin.blog.blogs')

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