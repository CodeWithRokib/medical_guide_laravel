@extends('admin.layouts.admin')
@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Add / View Customer</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Customer</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add New Customer</h3>
                            </div>
                            <div class="panel-body">

                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <table class="table table-bordered table-striped" id="brandTable">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Father/Husband</th>
                                            <th>Mother</th>
                                            <th>Gender </th>
                                            <th>Email </th>
                                            <th>Phone </th>
                                            <th>Pin</th>
                                            <th>Tele-Phone </th>
                                            <th>DOB</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=0; @endphp
                                        @foreach($patients as $info)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $info->name  }}</td>
                                                <td>{{ $info->father  }}</td>
                                                <td>{{ $info->mother  }}</td>
                                                <td>{{ $info->gender  }}</td>
                                                <td>{{ $info->email  }}</td>
                                                <td>{{ $info->phone  }}</td>
                                                <td>{{ $info->user['pin']  }}</td>
                                                <td>{{ $info->telephone  }}</td>
                                                <td>{{ $info->dob  }} ({{ \Carbon\Carbon::parse($info->dob)->age  }})</td>
                                                <td>
                                                    <a href="{{route('patient.edit',$info->id)}}" class="btn btn-sm btn-info edit" ><i class="demo-pli-pen-5"></i></a> ||
                                                    <button class="btn btn-sm btn-danger erase fa fa-trash" data-id="{{$info->id}}" data-url="{{url('PatientManagement/erase')}}">
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
