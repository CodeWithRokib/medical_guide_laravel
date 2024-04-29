@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Applied History</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Vaccine Applied History</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Applied History</h3>
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
                                            <th>Phone </th>
                                            <th>Tele-Phone </th>
                                            <th>DOB</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>View Applied Dose</th>
                                            <th>Created At</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @php $i=0; @endphp
                                        @foreach($applied as $history)
                                            {{--{{dd()}}--}}
                                           <tr>
                                               <td>{{ ++$i }}</td>
                                                <td>{{ $history->patient['name'] }}</td>
                                                <td>{{ $history->patient['father'] }}</td>
                                                <td>{{ $history->patient['mother'] }}</td>
                                                <td>{{ $history->patient['gender'] }}</td>
                                                <td>{{ $history->patient['phone'] }}</td>
                                                <td>{{ $history->patient['telephone'] }}</td>
                                                <td>{{ $history->patient['dob'] }}</td>
                                                <td>{{ $history->product['name'] }}</td>
                                                <td>{{ $history->invoice['total'] }}</td>
                                                <td>
                                                    <img src="{{ url('public/admin/user/'.$history->patient->user['qr'].'.svg') }}"  class="img-responsive" style="height: 100px;width: 100px;">
                                                </td>
                                               <td>{{ Carbon\Carbon::parse($history->created_at->format('d-m-Y'))}}</td>
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
