@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Add / View Sub-Category</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Sub-Category</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add New Sub-Category</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    {{ Form::open(['route'=>'sub-category.store','method'=>'post']) }}
                                    <div class="form-group">
                                        {{ Form::label('category','Select Category',['class'=>'label-control']) }}
                                        {{ Form::select('category_id',$category,null,['class'=>'form-control']) }}
                                    </div>

                                    <div class="col-lg-12 col-sm-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                        {{ Form::label('SubCategory','Sub-Category Name : ',['class'=>'control-label'])}}
                                        {{Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Ex: Men-Ring'])}}
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
                                        {{ Form::button('SAVE Category',['type'=>'submit','id'=>'saveCategory','class'=>'col-sm-5 btn btn-primary']) }}
                                    </div>
                                    {{ Form::close() }}
                                </div>

                                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                    <table class="table table-bordered table-striped" id="CategoryTable">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Category</th>
                                            <th>Sub-Category</th>
                                            <th>Action </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=0; @endphp
                                        @foreach($subcategory as $info)
                                            <tr id="rowid{{$info->id}}" class="abcd">
                                                <td>{{++$i}}</td>
                                                <td id="Category{{$info->id}}">{{$info->category->name}}</td>
                                                <td id="Category{{$info->id}}">{{$info->name}}</td>
                                                <td>
                                                    <a href="{{route('sub-category.edit',$info->id)}}" class="btn btn-sm btn-info edit" ><i class="demo-pli-pen-5"></i></a> ||
                                                    <button class="btn btn-sm btn-danger erase" data-id="{{$info->id}}" data-url="{{url('ProductManagement/sub-Category/erase')}}"><i class="demo-pli-trash"></i></button>
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
            $('#CategoryTable').DataTable();

        });

        /* UPDATE Category END */

    </script>



@endsection