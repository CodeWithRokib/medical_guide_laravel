<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Cure Ways</title>

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

    <!--Ion Icons [ OPTIONAL ]-->
    <link href="{{asset('admin/plugins/ionicons/css/ionicons.min.css')}}" rel="stylesheet">


      <!--Font Awesome [ OPTIONAL ]-->
    <link href="{{asset('admin/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Select 2 js Start  -->

    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/select2.css') }}">



    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="{{asset('admin/plugins/pace/pace.min.css')}}" rel="stylesheet">
    <script src="{{asset('admin/plugins/pace/pace.min.js')}}"></script>

    <!--Demo [ DEMONSTRATION ]-->
    <link href="{{asset('admin/css/demo/nifty-demo.min.css')}}" rel="stylesheet">
    <!--DataTable-->
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables/css/dataTables.bootstrap.min.css')}}">
    <!--Sweet Alert-->
    <link rel="stylesheet" href="{{asset('admin/css/sweetalert.css')}}">

    {{-- Animate Css --}}
    <link rel="stylesheet" href="{{ asset('admin/plugins/animate-css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/iconselect.css') }}">
    <!--Bootstrap Datepicker [ OPTIONAL ]-->
    <link href="{{asset('admin/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet">
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
     <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote.min.css') }}">


    <!--jQuery [ REQUIRED ]-->
    <script src="{{asset('admin/js/jquery.min.js')}}"></script>

    <!--Notify Js for operation alert-->
    <script src="{{asset('admin/js/notify.min.js')}}"></script>

    {{-- icon with image show js--}}
    <script src="{{asset('admin/js/iconselect.js')}}"></script>

    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>

    <!-- Select 2 js start  -->

    <script type="text/javascript" src="{{asset('admin/js/select2.js')}}"></script>

    <!-- Select 2 js End -->

    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="{{asset('admin/js/nifty.min.js')}}"></script>

    <!--Sweet Alert-->
    <script src="{{asset('admin/js/sweetalert.min.js')}}"></script>

    <!--Sparkline [ OPTIONAL ]-->
    <script src="{{asset('admin/plugins/sparkline/jquery.sparkline.min.js')}}"></script>

    <!--DataTable-->


    <script src="{{ asset('public/admin/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>

    <script src="{{asset('public/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/js/dataTables.bootstrap.min.js')}}"></script>

    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>









    <script src="{{asset('admin/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('admin/plugins/summernote/summernote.min.js')}}"></script>
    <script src="{{asset('admin/js/demo/form-text-editor.js')}}"></script>

   {{--  <script src="{{asset('admin/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script> --}}

    <!--JAVASCRIPT-->
    <!--=================================================-->
    <script>
        $(function(){
            $('.date').datepicker({autoclose:true});
        });
        /** CHECK EVERY ACTION DELETE CONFIRMATION BY SWEET ALERT **/
        $(document).on('click', '.erase', function () {
            var id = $(this).attr('data-id');
            var url=$(this).attr('data-url');
            console.log("Clicked ID : "+id+ " Request URL : "+url);
            var token = '{{csrf_token()}}';
            var $tr = $(this).closest('tr');
            swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this information!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: 'btn-danger',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: "No, cancel plz!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function (isConfirm) {
                    if (isConfirm) {

                        $.ajax({
                            url: url,
                            type: "post",
                            data: {id: id, _token: token},
                            dateType:'html',
                            success: function (response) {
                                swal("Deleted!", "Data has been Deleted.", "success"),
                                    swal({
                                            title: "Deleted!",
                                            text: "Data has been Deleted.",
                                            type: "success"
                                        },
                                        function (isConfirm) {
                                            if (isConfirm) {
                                                $tr.find('td').fadeOut(1000, function () {
                                                    $tr.remove();
                                                });
                                            }
                                        });
                            }
                        });
                    } else {
                        swal("Cancelled", "Your data is safe :)", "error");
                    }
                });

        });
    </script>
    <!--BootstrapJS [ RECOMMENDED ]-->

    <meta name="csrf-token" content="{{ csrf_token() }}">


</head>
<body>
<div id="container" class="effect aside-float aside-bright mainnav-lg">
<!--NAVBAR-->
<!--===================================================-->
<header id="navbar">
    <div id="navbar-container" class="boxed">
        <!--Brand logo & name-->
        <!--================================-->
        <div class="navbar-header">
            <a href="{{url('/home')}}" class="navbar-brand">
                {{--<img src="{{asset('admin/img/logo.png')}}" alt="Nifty Logo" class="brand-icon">--}}
                <div class="brand-title">
                    <span class="brand-text">Cure Ways</span>
                </div>
            </a>
        </div>
        <!--================================-->
        <!--End brand logo & name-->
        <!--================================-->
        <div class="navbar-content">
            <ul class="nav navbar-top-links">

                <!--Navigation toogle button-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li class="tgl-menu-btn">
                    <a class="mainnav-toggle" href="#">
                        <i class="demo-pli-list-view"></i>
                    </a>
                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End Navigation toogle button-->

                <!--Search-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li>
                    <div class="custom-search-form">
                        <label class="btn btn-trans" for="search-input" data-toggle="collapse" data-target="#nav-searchbox">
                            <i class="demo-pli-magnifi-glass"></i>
                        </label>
                        <form>
                            <div class="search-container collapse" id="nav-searchbox">
                                <input id="search-input" type="text" class="form-control" placeholder="Type for search...">
                            </div>
                        </form>
                    </div>
                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End Search-->

            </ul>
            <ul class="nav navbar-top-links">
                <!--User dropdown-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li id="dropdown-user" class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="ic-user pull-right">
                                    <i class="demo-pli-male"></i>
                                </span>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--You can also display a user name in the navbar.-->
                        <div class="username hidden-xs">{{ Auth::user()->name }}</div>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    </a>

                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right panel-default">
                        <ul class="head-list">
                            <li>
                                <a href="#"><i class="demo-pli-male icon-lg icon-fw"></i> Profile</a>
                            </li>

                            <li>
                                <a href="#"><i class="demo-pli-computer-secure icon-lg icon-fw"></i> Lock screen</a>
                            </li>
                            <li>
                                <a href="{{route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logoutForm').submit();">
                                    <i class="demo-pli-unlock icon-lg icon-fw"></i> Log Out</a>
                                <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End user dropdown-->
            </ul>
        </div>
        <!--================================-->
        <!--End Navbar Dropdown-->

    </div>
</header>
<!--===================================================-->
<!--END NAVBAR-->
    @include('admin.layouts.admin-menu')

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


{{--Mid content--}}
    @yield('content')


<!-- FOOTER -->
<!--===================================================-->
<footer id="footer">

    <!-- Visible when footer positions are fixed -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="show-fixed pad-rgt pull-right">
        You have <a href="#" class="text-main"><span class="badge badge-danger">3</span> pending action.</a>
    </div>
    <!-- Visible when footer positions are static -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="hide-fixed pull-right pad-rgt">
        Developed By <strong>Ringer Soft</strong>.
    </div>

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

    <strong class="pad-lft">&#0169; {{date('Y')}} <a target="blank" href="http://ringersoft.com">Ringer Soft LTD.</a></strong>



</footer>
<!--===================================================-->
<!-- END FOOTER -->
<!-- SCROLL PAGE BUTTON -->
<!--===================================================-->
<button class="scroll-top btn">
    <i class="pci-chevron chevron-up"></i>
</button>
<!--===================================================-->
</div>
</body>
</html>