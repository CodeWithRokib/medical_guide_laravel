
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Register | Cure Ways</title>


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



    <!--=================================================-->

    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="{{url('public/admin/plugins/pace/pace.min.css')}}" rel="stylesheet">
    <script src="{{url('public/admin/plugins/pace/pace.min.js')}}"></script>

    <!--Demo [ DEMONSTRATION ]-->
    <link href="{{url('public/admin/css/demo/nifty-demo.min.css')}}" rel="stylesheet">

</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
<div id="container" class="cls-container">


    <!-- BACKGROUND IMAGE -->
    <!--===================================================-->
    <div id="bg-overlay"></div>
    {{--Notification--}}

    @if (session()->has('success'))
        <script type="text/javascript">
            $(function () {
                $.notify("{{session()->get("success")}}", {globalPosition: 'bottom right',className: 'success'});
            });
        </script>
    @endif

    @if (session()->has('error'))
        <script type="text/javascript">
            $(function () {
                $.notify("{{session()->get("error")}}", {globalPosition: 'bottom right',className: 'error'});
            });
        </script>
    @endif

    @if (session()->has('warning'))
        <script type="text/javascript">
            $(function () {
                $.notify("{{session()->get("warning")}}", {globalPosition: 'bottom right',className: 'warn'});
            });
        </script>
    @endif

    <!-- REGISTRATION FORM -->
    <!--===================================================-->
    <div class="cls-content">
        <div class="cls-content-lg panel">
            <div class="panel-body">
                <div class="mar-ver pad-btm">
                    <h1 class="h3">Create a New Account</h1>
                    <p>Come join the ABC Vaccine LTD! Let's set up your account.</p>
                </div>
                {{ Form::open(['route'=>'custom.register','method'=>'post']) }}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }} ">
                                {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Full Name']) }}

                                @if($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="col-sm-6">

                            <div class="form-group {{ $errors->has("email") ? "has-error": "" }}">
                                {{ Form::email('email',null,['class'=>'form-control','placeholder'=>'Ex: Example@email.com']) }}

                                @if($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">

                                {{ Form::select('warehouse_id',$warehouses,false,['class'=>'form-control']) }}

                                @if($errors->has('warehouse_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('warehouse_id') }}</strong>
                                    </span>
                                @endif


                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                {{ Form::select('role_id',$roles,false,['class'=>'form-control','required']) }}

                                @if($errors->has('role_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('role_id') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                                {{ Form::password('password',['class'=>"  form-control ",'placeholder'=>'Password']) }}

                                @if($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                {{ Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'Confirm Password']) }}
                                @if($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="col-sm-12">

                        </div>

                    </div>
                    {{ Form::submit('SIGN-UP',['class'=>'btn btn-primary btn-lg btn-block']) }}
                </form>
            </div>
            <div class="pad-all">
                Already have an account ? <a href="#" class="btn-link mar-rgt text-bold">Sign In</a>
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
<script src="{{url('public/admin/js/jquery.min.js')}}"></script>
<script src="{{url('public/admin/js/bootstrap.min.js')}}"></script><!--NiftyJS [ RECOMMENDED ]-->
<script src="{{url('public/admin/js/nifty.min.js')}}"></script>

<!--Background Image [ DEMONSTRATION ]-->
<script src="js/demo/bg-images.js"></script>

</body>
</html>
