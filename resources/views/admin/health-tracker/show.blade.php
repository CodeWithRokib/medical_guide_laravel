@extends('admin.layouts.admin')

@section('content')
<div class="boxed">
    <div id="content-container">
        <div id="page-head">
            <div id="page-title">
                <h1 class="page-header text-overflow">Health Tracker</h1>
            </div>
            <ol class="breadcrumb">
                <li><a href="#"><i class="demo-pli-home"></i></a></li>
                <li><a href="#">Admin</a></li>
                <li class="active">Health Tracker</li>
            </ol>
        </div>
        <div id="page-content">
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Diet</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-8 offset-2">
                                <div class="card">
                                  <div class="card-body">
                                    <table class="table table-bordered table-striped" id="brandTable">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Food Qty</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @php $i=0; @endphp
                                            @if(!blank($diets))
                                            @foreach($diets as $info)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ date('d-M-Y',strtotime($info->date))}}</td>
                                                    <td>{{ $info->time }}</td>
                                                    <td>{{$info->food_qty}}</td>
                                                </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">BP</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-8 offset-2">
                                <div class="card">
                                  <div class="card-body">
                                    <table class="table table-bordered table-striped" id="brandTable">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Date</th>
                                            <th>Sysotolic</th>
                                            <th>Diastolic</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @php $i=0; @endphp
                                            @if(!blank($bps))
                                            @foreach($bps as $info)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ date('d-M-Y',strtotime($info->date))}}</td>
                                                    <td>{{ $info->sysotolic }}</td>
                                                    <td>{{$info->diastolic}}</td>
                                                </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                  </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            <br>
            <div class="col-lg-6">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Glucose</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-8 offset-2">
                            <div class="card">
                              <div class="card-body">
                                <table class="table table-bordered table-striped" id="brandTable">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Date</th>
                                        <th>Time Period</th>
                                        <th>Test Result</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @php $i=0; @endphp
                                        @if(!blank($glucoses))
                                        @foreach($glucoses as $info)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ date('d-M-Y',strtotime($info->date))}}</td>
                                                <td>{{ trans('time_perioud.'.$info->time_period)  }}</td>
                                                <td>{{$info->test_result}}</td>
                                            </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Body Temperature</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-8 offset-2">
                            <div class="card">
                              <div class="card-body">
                                <table class="table table-bordered table-striped" id="brandTable">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Date</th>
                                        <th>Body Temperature</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @php $i=0; @endphp
                                        @if(!blank($bodys))
                                        @foreach($bodys as $info)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ date('d-M-Y',strtotime($info->date))}}</td>
                                                <td>{{ trans('time_perioud.'.$info->time_period)  }}</td>
                                                <td>{{$info->body_temperature}}</td>
                                            </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                              </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <br/>
            <div class="col-lg-6">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Weight Helath</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-8 offset-2">
                            <div class="card">
                              <div class="card-body">
                                <table class="table table-bordered table-striped" id="brandTable">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Date</th>
                                        <th>Weight</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @php $i=0; @endphp
                                        @if(!blank($weight))
                                        @foreach($weight as $info)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{$info->weight}}</td>
                                            </tr>
                                        @endforeach
                                        @endif
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
</div>

<script>

    $(function(){
        $('#brandTable').DataTable();
        $("#canceledit").hide();
    });
</script>

@endsection