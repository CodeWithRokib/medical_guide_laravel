@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Add / View Homepage</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Info</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add Info</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <div class="col-lg-12 col-sm-12 {{$errors->has('title') ? 'has-error' : ''}}">
                                        {{ Form::open(['route'=>'homepage.store','method'=>'post','enctype'=>'multipart/form-data','id'=>'brandForm']) }}
                                        {{ Form::label('title','Title :* ',['class'=>'control-label'])}}
                                        {{ Form::text('title',old('title'),['class'=>'form-control','placeholder'=>'Title'])}}

                                        @if ($errors->has('title'))
                                            <span class="help-block">
                                             <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                        @endif
                                    </div>


                                    <div class="col-lg-12 col-sm-12 {{$errors->has('image') ? 'has-error' : ''}}">
                                        {{ Form::label('image','Image : ',['class'=>'control-label'])}}
                                        {{ Form::file('image',['class'=>'form-control'])}}

                                        @if ($errors->has('image'))
                                            <span class="help-block">
                                             <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                        @endif

                                    </div>
                                    <div class="col-lg-12 col-sm-12 {{$errors->has('video') ? 'has-error' : ''}}">
                                        {{ Form::label('video','Video : ',['class'=>'control-label'])}}
                                        {{ Form::text('video',old('video'),['class'=>'form-control','placeholder'=>'Video Link'])}}
                                        @if ($errors->has('video'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('video') }}</strong>
                                        </span>
                                        @endif

                                    </div>


                                    <div class="col-lg-12 col-sm-12 {{$errors->has('description') ? 'has-error' : ''}}">
                                        {{ Form::label('brand','Description  : ',['class'=>'control-label'])}}

                                        {{Form::textarea('description',old('description'),['class'=>'form-control','placeholder'=>'Ex: Hospital description...'])}}

                                        @if ($errors->has('description'))
                                            <span class="help-block">
                                             <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                        @endif

                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <br>
                                    </div>

                                    <div class="col-md-12 col-xs-12">
                                        {{ Form::button('SAVE HOSPITAL',['type'=>'submit','id'=>'savebrand','class'=>'col-sm-5 btn btn-primary']) }}
                                    </div>
                                    {{ Form::close() }}
                                </div>

                                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                    <table class="table table-bordered table-striped" id="brandTable">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Video</th>
                                            <th>Description</th>
                                            <th>Action </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=0; @endphp
                                        @foreach($homepage as $home)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $home->title }}</td>
                                                <td> <img src="{{ url('public/admin/product/upload/'.$home->image) }}"  class="img-responsive" style="height: 70px;width: 70px;">  </td>
                                                <td> {{$home->video}} </td>
                                                <td>{{ substr($home->description,0,30) }}</td>
                                                <td>
                                                    <a href="{{route('homepage.edit',$home->id)}}" class="btn btn-sm btn-info edit" ><i class="demo-pli-pen-5"></i></a> ||
                                                    <button class="btn btn-sm btn-danger erase fa fa-trash" data-id="{{$home->id}}" data-url="{{url('WebsiteManagement/erase')}}">
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