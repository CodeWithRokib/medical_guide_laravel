@extends('admin.layouts.admin')

@section('content')
<div class="boxed">
    <div id="content-container">
        <div id="page-head">
            <div id="page-title">
                <h1 class="page-header text-overflow">Health Report</h1>
            </div>
            <ol class="breadcrumb">
                <li><a href="#"><i class="demo-pli-home"></i></a></li>
                <li><a href="#">Admin</a></li>
                <li class="active">Health Report</li>
            </ol>
        </div>
        <div id="page-content">
            <div class="row">
                <div class="col-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Report</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-8 offset-2">
                                <table class="table table-bordered table-striped" id="brandTable">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Date</th>
                                        <th>time</th>
                                        <th>Test Name</th>
                                        <th>Result</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @php $i=0; @endphp
                                        @foreach($reports as $info)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $info->date}}</td>
                                                <td>{{ $info->time }}</td>
                                                <td>{{ $info->test_name }}</td>
                                                <td>{{ $info->result }}</td>
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
