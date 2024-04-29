@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Attendance Report</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Attendance Report</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Attendance Report</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    {{ Form::open(['route'=>'attendance.report','method'=>'post','id'=>'attendanceForm']) }}
                                    <div class="row">
                                        <div class="col-lg-4">
                                            {{ Form::label('','Select Employee') }}



                                            <select class="form-control" id="registration_id" name="registration_id">
                                                <option value="1">All</option>
                                                @foreach($employee as $info)
                                                    <option value="{{ $info->registration_id }}"> {{ $info->user_name }}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                        <div class="col-lg-4">
                                                {{ Form::label(' ',' Select Date Range : ') }}
                                                    <div id="demo-dp-range">
                                                        <div class="input-daterange input-group" id="datepicker">
                                                            <input class="form-control" id="start" placeholder="From" required="" name="start" type="text">
                                                            <span class="input-group-addon">to</span>
                                                            <input class="form-control" id="end" placeholder="To" required="" name="end" type="text">
                                                        </div>
                                                    </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <strong style="margin-bottom: 23px;display: block;background: #fff"></strong>
                                                {{ Form::submit('Show Attendance',['class'=>'btn btn-info showReport']) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row table-responsive">
                                    <h2 class="text-center bg-primary" style="padding: 5px;">Attendance Summary</h2>
                                    <table class="table-hover table" id="reportDataTable">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Name</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                            </tr>
                                        </thead>
                                        <tbody id="dailyAttendence">
                                            @php $sl=0; @endphp
                                            @foreach($attendance as $info)
                                                <tr>
                                                    <td>{{ ++$sl }}</td>
                                                    <td>{{ $info->user_name }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($info->access_date)->format('D-m-Y') }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($info->access_date)->format('h:i:s A') }}</td>
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
        var table ='';
        $(document).ready(function(){
            table = $("#reportDataTable").DataTable();
            $('#datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
            $('#CategoryTable').DataTable();

        });


        $("#attendanceForm").submit(function (e) {
            e.preventDefault();

            var data = $(this).serialize();

            table.clear().draw();

            $.ajax({
                method: $(this).attr('method'),
                url: $(this).attr('action'),
                data: data,
                dataType:'json',
                success:function (res) {
                    for(i=0;i<res.report.sl.length;i++){
                        table.row.add([
                            res.report.sl[i],
                            res.report.user_name[i],
                            res.report.date[i],
                            res.report.time[i]
                        ]).draw();
                    }
                }
            });

        });

    </script>

@endsection