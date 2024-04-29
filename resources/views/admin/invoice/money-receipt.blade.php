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

{{-- onload="window.print()"  --}}
</head>
<body onload="window.print()">
<div class="container" style="line-height: 5px;">
    <div class="col-md-12" style="text-align: center">
        <img src=" {{ url('public/frontEnd/assets/img/logo/2.png') }}">
        <p>Vaccine Home BD</p>
        <p>http://vaccinehomebd.com</p>
    </div>
    <div class="col-md-12">
        <div class="col-md-6" style="float: left">
            <p style="line-height: 13px;"><strong>Invoice No : </strong>{{$invoice->invoice->invoice_no}}</p>
            <p style="line-height: 13px;"><strong>Name :</strong> {{ $invoice->invoice->patient['name'] or $invoice->invoice->supplier['name']}}</p>
            <p style="line-height: 13px;"><strong>Phone :  </strong>  {{ $invoice->invoice->patient['phone'] or $invoice->invoice->supplier['phone']}} </p>
        </div>
        <div class="col-md-6" style="float: right;padding: 0px 0px 15px; ">
            <p style="line-height: 13px;"><strong>Printed</strong> : {{ Auth::user()->name }}</p>
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-6" style="float: left">

            {{--<p><strong>Refd By</strong> Dr M Mazumder MBBS.PHD.</p>--}}
        </div>
        <div class="col-md-6" style="float: right">
            @if($invoice->patient != null)
                <p><strong>Sex</strong> F <strong>Age</strong> 50Y</p>
                <p><strong>Email</strong> </p>
            @endif
        </div>
    </div>
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Service(s) Booked</th>
                <th>Charges</th>
                <th>Delivery ETA</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>ECG</td>
                <td>{{$total_payable = $invoice->invoice->total }} TK</td>
                <td>{{$invoice->created_at->format('d-m-Y')}}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <strong>Subtotal</strong>  {{$total_payable = $invoice->invoice->total}} TK<br>
                    {{--<strong>Tax</strong>  0<br>--}}
                    {{--<strong>Discount</strong> {{$discount = $invoice->invoice->discount}} TK --}}
                    @php $discount = $invoice->invoice->discount  @endphp
                </td>
                <td>
                   {{-- <strong>Net Payable</strong>  {{$total_payable+$discount}}<br>--}}
                    <strong> Paid Amount :  </strong>  {{ $invoice->expense }} TK<br>
                    {{--<strong>Balance Due</strong>  140--}}
                </td>
            </tr>
            </tbody>
        </table>
        <hr>
    </div>
</div>
<hr>


<div class="container">
    <div class="row">
        <div class="text-right no-print">
            <a href="javascript:window.print()" class="btn btn-info"><i class="demo-pli-printer icon-lg"></i> PRINT INVOICE</a>
        </div>
    </div>
</div>

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
</body>
</html>
