<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard</title>
    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{url('public/admin/css/bootstrap.min.css')}}" rel="stylesheet">

    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{url('public/admin/css/nifty.min.css')}}" rel="stylesheet">



    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="{{url('public/admin/css/demo/nifty-demo-icons.min.css')}}" rel="stylesheet">

    <!--Ion Icons [ OPTIONAL ]-->
    <link href="{{url('public/admin/plugins/ionicons/css/ionicons.min.css')}}" rel="stylesheet">


    <!--Font Awesome [ OPTIONAL ]-->
    <link href="{{url('public/admin/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Select 2 js Start  -->

    <link rel="stylesheet" type="text/css" href="{{ url('public/admin/css/select2.css') }}">


    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="{{url('public/admin/plugins/pace/pace.min.css')}}" rel="stylesheet">
    <script src="{{url('public/admin/plugins/pace/pace.min.js')}}"></script>

    <!--Demo [ DEMONSTRATION ]-->
    <link href="{{url('public/admin/css/demo/nifty-demo.min.css')}}" rel="stylesheet">
    <!--DataTable-->
    <link rel="stylesheet" href="{{url('public/admin/plugins/datatables/css/dataTables.bootstrap.min.css')}}">
    <!--Sweet Alert-->
    <link rel="stylesheet" href="{{url('public/admin/css/sweetalert.css')}}">

    <!--Bootstrap Datepicker [ OPTIONAL ]-->
    <link href="{{url('public/admin/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet">

    <!--jQuery [ REQUIRED ]-->
    <script src="{{url('public/admin/js/jquery.min.js')}}"></script>

    <!--Notify Js for operation alert-->
    <script src="{{url('public/admin/js/notify.min.js')}}"></script>



    <script src="{{url('public/admin/js/bootstrap.min.js')}}"></script>

    <!-- Select 2 js start  -->

    <script type="text/javascript" src="{{url('public/admin/js/select2.js')}}"></script>

    <!-- Select 2 js End -->

    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="{{url('public/admin/js/nifty.min.js')}}"></script>

    <!--Sweet Alert-->
    <script src="{{url('public/admin/js/sweetalert.min.js')}}"></script>

    <!--Sparkline [ OPTIONAL ]-->
    <script src="{{url('public/admin/plugins/sparkline/jquery.sparkline.min.js')}}"></script>

    <!--DataTable-->
    <script src="{{url('public/admin/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{url('public/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('public/admin/plugins/datatables/js/dataTables.bootstrap.min.js')}}"></script>

    <script src="{{url('public/admin/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
</head>
<body>
<div id="container" class="effect aside-float aside-bright mainnav-lg">

    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Customer-History</h1>
                </div>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title bg-primary text-center">Customer-History</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                <div class="form-group">
                                                    {{ Form::label('name','Name') }}
                                                    : {{ $patient->name }}
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                <div class="form-group">
                                                    {{ Form::label('name','Phone') }} :
                                                    {{ $patient->phone }}
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                <div class="form-group">
                                                    {{ Form::label('name','Father') }} :
                                                     {{ $patient->father }}
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                <div class="form-group">
                                                    {{ Form::label('name','Mother') }} :
                                                     {{ $patient->mother }}
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                <div class="form-group">
                                                    {{ Form::label('name','Address') }} :
                                                     {{ $patient->address }}
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                <div class="form-group">
                                                    {{ Form::label('name','Gender') }} : :
                                                    {{ $patient->gender }}
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                <div class="form-group">
                                                    {{ Form::label('name','Date of Birth') }} :
                                                    {{ $patient->dob }}
                                                </div>
                                            </div>

                                        </div>
                                   </div>
                                </div>


                                <div class="row">
                                    <h1 class="text-center bg-primary">Vaccine Applied Summary  :</h1>
                                    @php $i=0; @endphp
                                    @foreach($patient->sales as $info)
                                        @php ++$i; @endphp

                                        @if($i==1)
                                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                <label> Disease Name : </label>
                                                {{ $info->dieseas->name }}
                                            </div>

                                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                <label> Vaccine Name : </label>
                                                {{ $info->product->name }}
                                            </div>
                                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                <label> Dose Applied : </label>
                                                @foreach($patient->sales as $info)
                                                    <p> Dose No : {{ $info->does_no }} -- Applied Date : {{ $info->created_at }} </p>
                                                @endforeach
                                            </div>
                                         @else

                                        @endif
                                    @endforeach

                                </div>


                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>

