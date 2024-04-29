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
                                    {{ Form::open(['route'=>'warehouse.store','method'=>'post']) }}
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        {{ Form::label('warehousename','Name : ',['class'=>'control-label']) }}
                                                        {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Warehouse Name']) }}
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        {{ Form::label('phone','Phone : ',['class'=>'control-label']) }}
                                                        {{ Form::number('phone',null,['class'=>'form-control','placeholder'=>'Phone No. 123456789']) }}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        {{ Form::label('warehousename','Address : ',['class'=>'control-label']) }}
                                                        {{ Form::textarea('address',null,['class'=>'form-control','rows'=>5,'cols'=>5,'placeholder'=>'Warehouse address']) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer text-left">
                                            {{ Form::submit('ADD WAREHOUSE',['class'=>'btn btn-primary ']) }}
                                        </div>
                                    {{ Form::close() }}
                                </div>{{-- left col -lg-6 close here --}}

                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                    <table id="warehousetable" class="table table-info">
                                        <thead>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                        @php $i=0; @endphp
                                        @foreach($warehouses as $warehouse)
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td>{{$warehouse->name}}</td>
                                                <td>{{$warehouse->phone}}</td>
                                                <td>{{$warehouse->address}}</td>
                                                <td>
                                                    <a href="{{ url('warehouse/edit/'.$warehouse->id) }}" class="btn btn-success fa fa-edit"></a> || <button class="btn btn-sm btn-danger fa fa-trash erase" data-id="{{$warehouse->id}}" data-url="{{url('warehouse/erase')}}"></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
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