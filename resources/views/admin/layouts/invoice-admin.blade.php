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