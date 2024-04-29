@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Add / View Consults</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Consults</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add New Consults</h3>
                            </div>
                            <div class="panel-body">

                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <table class="table table-bordered table-striped" id="brandTable">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=0; @endphp
                                            @foreach($consults as $consult)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $consult->name }}</td>
                                                    <td>{{ $consult->email }}</td>
                                                    <td>{{ $consult->subject }}</td>
                                                    <td>{{ $consult->message }}</td>
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