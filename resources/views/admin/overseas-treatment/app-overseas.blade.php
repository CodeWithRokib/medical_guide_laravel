@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">View Overseas Treatment</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Overseas Treatment</li>
                </ol>
            </div>

            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Overseas Treatment</h3>
                            </div>
                                <div class="">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-6 col-md-6 col-xs-12">
                                                <table id="protable" class="table table-bordered table-striped">
                                                    <thead>
                                                        <th>SL</th>
                                                        <th>Name</th>
                                                        <th>Type</th>
                                                        <th>Details</th>
                                                        <th>Documents</th>
                                                        <th>Action</th>
                                                    </thead>
                                                    <tbody>
                                                        @php $i = 1;@endphp
                                                        @foreach ($overseastreatment as $data)
                                                            <tr>
                                                                <td>{{ $i++ }}</td>
                                                                <td>
                                                                    <p style="margin: 0">{{ $data->name }}</p>
                                                                    <p style="margin: 0">{{ $data->phone }}</p>
                                                                    <p style="margin: 0">{{ $data->email }}</p>
                                                                </td>
                                                                <td>{{ $data->type}}</td>
                                                                <td>
                                                                    <p style="margin: 0">UHID: {{ $data->uhid }}</p>
                                                                    <p style="margin: 0">Hospital name: {{ $data->hostpital_name }}</p>
                                                                    <p style="margin: 0">Arrival date/Time: {{ $data->arrival_date }}/{{ $data->time }}</p>
                                                                    <p style="margin: 0">Total Passenger: {{ $data->total_passengers }}</p>
                                                                </td>
                                                                <td>
                                                                    <p style="margin: 0">Passport: @if($data->passport_copy) <a style="color: #ff031c" href="/{{ $data->passport_copy }}" download="passport_copy-{{ date('d-M-Y') }}" >Download</a> @endif</p>
                                                                    <p style="margin: 0">Report: @if($data->previous_report) <a style="color: #ff031c" href="/{{ $data->previous_report }}" download="previous_report-{{ date('d-M-Y') }}" >Download</a> @endif</p>
                                                                    <p style="margin: 0">Prescription: @if($data->previous_prescription) <a style="color: #ff031c" href="/{{ $data->previous_prescription }}" download="previous_prescription-{{ date('d-M-Y') }}" >Download</a> @endif</p>
                                                                    <p style="margin: 0">Ticket: @if($data->ticket_upload) <a style="color: #ff031c" href="/{{ $data->ticket_upload }}" download="ticket_upload-{{ date('d-M-Y') }}" >Download</a> @endif</p>
                                                                </td>
                                                                <td>
                                                                    <a href="{{ route('overseastreatment.edit', $data->id) }}"
                                                                        class="btn btn-primary fa fa-edit"></a> ||
                                                                    <button type="button" data-id="{{ $data->id }}"
                                                                        data-url="{{ URL('OverseasTreatmentManagement/erase') }}"
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
