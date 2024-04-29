<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> Login | Cure Ways </title>
    
    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{asset('admin/css/nifty.min.css')}}" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="{{asset('admin/css/demo/nifty-demo-icons.min.css')}}" rel="stylesheet">


    <!--=================================================-->


    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="{{asset('admin/plugins/pace/pace.min.css')}}" rel="stylesheet">
    <script src="{{asset('admin/plugins/pace/pace.min.js')}}"></script>


    <!--Demo [ DEMONSTRATION ]-->
    <link href="{{asset('admin/css/demo/nifty-demo.min.css')}}" rel="stylesheet">
    

</head>


<body>
<div id="container" class="cls-container">

    <!-- BACKGROUND IMAGE -->
    <!--===================================================-->
    <div id="bg-overlay"></div>


    <!-- LOGIN FORM -->
    <!--===================================================-->
    <div class="cls-content">
        <div class="cls-content-sm panel">
            <div class="panel-body">
                <div class="mar-ver pad-btm">
                    <h1 class="h3">VACCINE HOME MANAGEMENT SYSTEM</h1>
                    <p>Sign In to your username and password</p>
                </div>

                {{ Form::open(['route'=>'login','method'=>'POST']) }}

                  {{--  <div class="form-group ">

                        {{ Form::select('warehouse_id',$warehouses,false,['class'=>'form-control']) }}
                    </div>--}}


                    <div class="form-group {{ $errors->has('email') ? "has-error" : "" }}">
                        <input name="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="Username or Email" autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                        @endif
                    </div>


                    <div class="form-group {{ $errors->has('password') ? "has-error" : "" }}">

                        <input name="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="help-block" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                    </div>

                    <button class="btn btn-primary btn-lg btn-block" type="submit">Sign In</button>
                 {{ Form::close() }}
            </div>
        </div>
    </div>
    <!--===================================================-->
    
</div>
<!--===================================================-->
<!-- END OF CONTAINER -->


<!--JAVASCRIPT-->
<!--=================================================-->

<!--jQuery [ REQUIRED ]-->
<script src="{{asset('admin/js/jquery.min.js')}}"></script>


<!--BootstrapJS [ RECOMMENDED ]-->
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>


<!--NiftyJS [ RECOMMENDED ]-->
<script src="{{asset('admin/js/nifty.min.js')}}"></script>


<!--=================================================-->

<!--Background Image [ DEMONSTRATION ]-->
<script src="{{asset('admin/js/demo/bg-images.js')}}"></script>

</body>

<!-- Mirrored from www.themeon.net/nifty/v2.9/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Apr 2018 06:11:16 GMT -->
</html>

