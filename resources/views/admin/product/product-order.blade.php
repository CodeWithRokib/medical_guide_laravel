@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Add / VACCINE ORDER LIST</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">VACCINE</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">VACCINE ORDER LIST</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-8 col-sm-7 col-md-7 col-xs-12 table-responsive">
                                        <table id="protable" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Vaccine</th>
                                                    <th>District</th>
                                                    <th>Police Stations</th>
                                                    <th>Phone</th>
                                                    <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $i=0; @endphp
                                                @foreach($vaccinesOrders as $order)
                                                    <tr>
                                                        <td>{{++$i}}</td>
                                                        <td>{{ optional($order->product)->name }}</td>
                                                        <td>{{ optional($order->devision)->name }}</td>
                                                        <td>{{ optional($order->policestation)->name  }}</td>
                                                        <td>{{ $order->phone  }}</td>
                                                        <td>{{ date('d-M-Y',strtotime($order->created_at))  }}</td>
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
@endsection
