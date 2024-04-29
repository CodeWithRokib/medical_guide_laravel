@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Customer-History</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Customer-History</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Customer-History</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Phone</th>
                                                        <th>Father</th>
                                                        <th>Mother</th>
                                                        <th>Address</th>
                                                        <th>Date of Birth</th>
                                                        <th>QR CODE</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        <tr>
                                                            <td>{{ $patient->name }}</td>
                                                            <td>{{ $patient->phone }}</td>
                                                            <td>{{ $patient->father }}</td>
                                                            <td>{{ $patient->mother }}</td>
                                                            <td>{{ $patient->address }}</td>
                                                            <td>{{ $patient->dob }}</td>
                                                            <td>
                                                                <div class="qr_code" style="height: 100px;width: 100px;">
                                                                    @php
                                                                        $url = url('qr-profile-info/'.$patient->id);
                                                                        QRCode::URL($url)->setSize(3)->setMargin(2)->setOutfile($this)->svg();
                                                                    @endphp
                                                                </div>
                                                            </td>
                                                        </tr>
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

        $(function(){
            $('#brandTable').DataTable();
            $("#datepicker").datepicker();
        });

        /* edit request start */

        /* edit request end */
    </script>

@endsection