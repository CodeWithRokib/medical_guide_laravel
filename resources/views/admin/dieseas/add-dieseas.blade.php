@extends('admin.layouts.admin')

@section('content')
<div class="boxed">
    <div id="content-container">
        <div id="page-head">
            <div id="page-title">
                <h1 class="page-header text-overflow">Add / View Dieseas</h1>
            </div>
            <ol class="breadcrumb">
                <li><a href="#"><i class="demo-pli-home"></i></a></li>
                <li><a href="#">Admin</a></li>
                <li class="active">Dieseas</li>
            </ol>
        </div>
        <div id="page-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Add New Dieseas</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="col-lg-12 col-sm-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                    {{ Form::open(['route'=>'dieseas.store','method'=>'post','enctype'=>'multipart/form-data','id'=>'brandForm']) }}
                                    {{ Form::label('brand','Dieseas Name : ',['class'=>'control-label'])}}
                                    {{Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Ex: Hepatitis B'])}}

                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                                 <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                    @endif

                                </div>


                                <div class="col-lg-12 col-sm-12 {{$errors->has('description') ? 'has-error' : ''}}">
                                    {{ Form::label('brand','Description  : ',['class'=>'control-label'])}}

                                    {{Form::textarea('description',old('description'),['class'=>'form-control','placeholder'=>'Ex: Hepatitis B description...'])}}

                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                                 <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                    @endif

                                </div>

                                <div class="col-lg-12">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Description CK-Editor</h3>
                                        </div>
                                        <div class="panel-body">

                                            <!--Summernote-->
                                            <!--===================================================-->
                                            <div id="demo-summernote">
                                                <h4><span style="color: rgb(206, 198, 206); font-family: inherit; line-height: 1.1;">Please, write text here!</span><br></h4><h4><font color="#9c9c94"></font></h4>
                                            </div>
                                            <!--===================================================-->
                                            <!-- End Summernote -->

                                        </div>
                                    </div>
                                </div>





                                <div class="col-md-12 col-xs-12">
                                    <br>
                                </div>

                                <div class="col-md-12 col-xs-12">
                                    {{ Form::button('SAVE DIESEAS',['type'=>'submit','id'=>'savebrand','class'=>'col-sm-5 btn btn-primary']) }}
                                </div>
                                {{ Form::close() }}
                            </div>

                            <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                <table class="table table-bordered table-striped" id="brandTable">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Action </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $i=0; @endphp
                                    @foreach($dieseas as $info)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $info->name }}</td>
                                            <td>{{ substr($info->description,0,30) }}</td>
                                            <td>
                                                <a href="{{route('dieseas.edit',$info->id)}}" class="btn btn-sm btn-info edit" ><i class="demo-pli-pen-5"></i></a> ||
                                                <button class="btn btn-sm btn-danger erase fa fa-trash" data-id="{{$info->id}}" data-url="{{url('DieseasManagement/erase')}}">
                                                    </button>

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
    });
</script>

@endsection