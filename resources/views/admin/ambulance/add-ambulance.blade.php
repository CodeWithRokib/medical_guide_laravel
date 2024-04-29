@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Add / View Ambulance</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Ambulance</li>
                </ol>
            </div>

            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add New Ambulance</h3>
                            </div>
                                <div class="">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                                                {{ Form::open(['route' => 'ambulance.store', 'method' => 'post', 'enctype' => 'multipart/form-data']) }}
                                                <!--  PRODUCT NAME  -->
                                                <div
                                                    class="col-lg-12 col-sm-12 col-md-12 col-xs-12 {{ $errors->has('division_id') ? 'has-error' : '' }}">
                                                    <span
                                                        style="display: block;height: 10px;width: 100%;background: #fff;"></span>

                                                    {{ Form::label('product', 'Division :* ', ['class' => 'control-label']) }}
                                                    {{ Form::select('division_id', $divisions, true, ['class' => 'form-control']) }}
                                                    @if ($errors->has('division_id'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('division_id') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div
                                                    class="col-lg-12 col-sm-12 col-md-12 col-xs-12 {{ $errors->has('police_station_id') ? 'has-error' : '' }}">
                                                    <span
                                                        style="display: block;height: 10px;width: 100%;background: #fff;"></span>

                                                    {{ Form::label('product', 'Select Police Stations :* ', ['class' => 'control-label']) }}
                                                    {{ Form::select('police_station_id', $policeStation, true, ['class' => 'form-control']) }}
                                                    @if ($errors->has('police_station_id'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('police_station_id') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div
                                                    class="col-lg-12 col-sm-12 col-md-12 col-xs-12 {{ $errors->has('area_id') ? 'has-error' : '' }}">
                                                    <span
                                                        style="display: block;height: 10px;width: 100%;background: #fff;"></span>

                                                    {{ Form::label('product', 'Select Area :* ', ['class' => 'control-label']) }}
                                                    {{ Form::select('area_id', $area, true, ['class' => 'form-control']) }}
                                                    @if ($errors->has('area_id'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('area_id') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>

                                                <div
                                                    class="col-lg-12 col-sm-12 col-md-12 col-xs-12 {{ $errors->has('phone') ? 'has-error' : '' }}">
                                                    <span
                                                        style="display: block;height: 10px;width: 100%;background: #fff;"></span>

                                                    {{ Form::label('phone', 'Mobile/Phone :* ', ['class' => 'control-label']) }}
                                                    {{ Form::text('phone', old('phone'), ['class' => 'form-control', 'placeholder' => 'Ex: +880 123456789', 'id' => 'email']) }}
                                                    @if ($errors->has('phone'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('phone') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>

                                                <div class="col-lg-12 col-sm-12 col-xs-12"><span
                                                        style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                </div>

                                                <div class="col-lg-12 col-sm-12 col-xs-12">
                                                    {{ Form::button('SAVE AMBULANCE INFO', ['type' => 'submit', 'id' => 'savekarat', 'class' => 'btn btn-primary']) }}
                                                </div>
                                                {{ Form::close() }}
                                            </div>


                                            <div class="col-lg-8 col-sm-6 col-md-6 col-xs-12">
                                                <table id="protable" class="table table-bordered table-striped">
                                                    <thead>
                                                        <th>SL</th>
                                                        <th>Phone</th>
                                                        <th>District</th>
                                                        <th>Police Station</th>
                                                        <th>Area</th>
                                                        <th>Action</th>
                                                    </thead>
                                                    <tbody>
                                                        @php $i = 1;@endphp
                                                        @foreach ($ambulances as $vaccine)
                                                            <tr>
                                                                <td>{{ $i++ }}</td>
                                                                <td>{{ $vaccine->phone }}</td>
                                                                <td>{{ optional($vaccine->devision)->name }}</td>
                                                                <td>{{ optional($vaccine->policestation)->name }}</td>
                                                                <td>{{ optional($vaccine->area)->name }}</td>
                                                                {{-- <td> <img src="{{ url('public/admin/product/upload/'.$vaccine->image) }}" style="height: 45px;width: 45px;"> </td> --}}
                                                                <td>
                                                                    {{-- <a href="{{ route('ambulance.edit', $vaccine->id) }}"
                                                                        class="btn btn-primary fa fa-edit"></a> || --}}
                                                                    <button type="button" data-id="{{ $vaccine->id }}"
                                                                        data-url="{{ URL('AmbulanceManagement/erase') }}"
                                                                        class="btn btn-danger fa fa-trash erase delete"></button>
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
        </div>
        <script>
            $(document).ready(function() {
                $("#protable").DataTable();


            });

            $(document).on("keyup", "#price", function() {
                alert("Hello");
            });




            /* select category and load sub-category automatically end */
        </script>
    @endsection
