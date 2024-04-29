@extends('admin.layouts.admin')

@section('content')
<div class="boxed">
    <div id="content-container">
        <div id="page-head">
            <div id="page-title">
                <h1 class="page-header text-overflow">Health Profile</h1>
            </div>
            <ol class="breadcrumb">
                <li><a href="#"><i class="demo-pli-home"></i></a></li>
                <li><a href="#">Admin</a></li>
                <li class="active">Health Profile</li>
            </ol>
        </div>
        <div id="page-content">
            <div class="row">
                <div class="col-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Health Profile</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-8 offset-2">
                                <table class="table table-bordered table-striped" id="brandTable">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>User</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Height </th>
                                        <th>Weight </th>
                                        <th>Marital </th>
                                        <th>Chief Complain </th>
                                        <th>previous Disease </th>
                                        <th>Ot History </th>
                                        <th>Medication </th>
                                        <th>Disabilities </th>
                                        <th>Test Result </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @php $i=0; @endphp
                                        @foreach($healthprofiles as $info)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ optional($info->user)->name }}</td>
                                                <td>{{ $info->age }}</td>
                                                <td>{{ $info->gender}}</td>
                                                <td>{{ $info->height}}</td>
                                                <td>{{ $info->weight}}</td>
                                                <td>{{ $info->marital}}</td>
                                                <td>{{ $info->chief_complain}}</td>
                                                <td>{{ $info->prev_disease}}</td>
                                                <td>{{ $info->ot_history}}</td>
                                                <td>{{ $info->medication}}</td>
                                                <td>{{ $info->disabilities}}</td>
                                                <td>{{ $info->test_result}}</td>
        
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