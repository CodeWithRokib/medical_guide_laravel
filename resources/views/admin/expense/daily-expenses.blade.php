@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Add / View Expenses</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Expenses</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add New Expense</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-3 col-sm-4 col-md-4 col-xs-12">
                                    {{ Form::open(['route'=>'daily-expenses.store','method'=>'post','enctype'=>'multipart/form-data','id'=>'brandForm']) }}
                                    <div class="col-lg-12 col-sm-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                        <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                        {{ Form::label('brand','Warehouse :* ',['class'=>'control-label'])}}
                                        {{ Form::select('warehouse',$warehouse,false,['class'=>'form-control','placeholder'=>'Ex: Select Warehouse'])}}
                                        @if ($errors->has('warehouse'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('warehouse') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-lg-12 col-sm-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                        <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                        {{ Form::label('brand','Title :* ',['class'=>'control-label'])}}
                                        {{ Form::text('title',old('title'),['class'=>'form-control','placeholder'=>'Ex: Daily Expense'])}}
                                        @if ($errors->has('title'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-lg-12 col-sm-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                        <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                        {{ Form::label('brand','Select Expense Category:* ',['class'=>'control-label'])}}
                                        {{ Form::select('expenses',$expenses,false,['class'=>'form-control','placeholder'=>'Ex: Select Expenses'])}}
                                        @if ($errors->has('expenses'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('expenses') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-lg-12 col-sm-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                        <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                        {{ Form::label('brand','Price :* ',['class'=>'control-label'])}}
                                        {{ Form::text('price',old('price'),['class'=>'form-control','placeholder'=>'Ex: Price'])}}
                                        @if ($errors->has('price'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('price') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-lg-12 col-sm-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                        <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                        {{ Form::label('brand','Details : ',['class'=>'control-label'])}}
                                        {{ Form::text('details',old('details'),['class'=>'form-control','placeholder'=>'Ex: Expense Details'])}}
                                        @if ($errors->has('details'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('details') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-12 col-xs-12">
                                        <br>
                                    </div>

                                    <div class="col-md-12 col-xs-12">
                                        {{ Form::button('SAVE',['type'=>'submit','id'=>'savebrand','class'=>'btn-block btn btn-primary']) }}
                                    </div>
                                    {{ Form::close() }}
                                </div>

                                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                    <table class="table table-bordered table-striped" id="brandTable">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Warehouse</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Price </th>
                                            <th>Action </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=0; @endphp
                                        @foreach($dailyexpense as $daily)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $daily->warehouse_id }}</td>
                                                <td>{{ $daily->title }}</td>
                                                <td>{{ $daily->expense->name }}</td>
                                                <td>{{ $daily->price }}</td>
                                                <td>
                                                    <a href="{{route('daily-expenses.edit',$daily->id)}}" class="btn btn-sm btn-info edit" ><i class="demo-pli-pen-5"></i></a> ||
                                                    <button class="btn btn-sm btn-danger erase fa fa-trash" data-id="{{$daily->id}}" data-url="{{url('ExpenseManagement/erase-daily')}}">
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