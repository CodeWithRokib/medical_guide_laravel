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
    <style>
        @media print {
            body{
                height: 21cm;
                width: 29.7cm;
                /*margin: 30mm 45mm 30mm 45mm;*/
                /* change the margins as you want them to be. */
            }
        }

    </style>

</head>
<body onload="window.print()">
{{--<body>--}}
<div class="container" style="line-height: 5px; width: 540px; float: left; border-right: 1px dashed #000; height: 100%; padding-right: 40px; margin-left: 10px;">
    <div class="row" style="margin-top: 5px;">
        <div class="col-md-12">
            <div class="col-md-8" style="float:left;text-align: center; margin-left: 25%;">
                <img src=" {{ url('public/front/assets/img/logo/2.png') }}">
                <p>vaccine home bd</p>
                <p>http://vaccinehomebd.com</p>
            </div>
            <div class="col-md-4" style="float:right">
                @if($invoice->patient != null)
                    <img src="{{ url('public/admin/user/'.$invoice->patient->user['qr'].'.svg') }}"  class="img-responsive" style="height: 120px;width: 120px;">
                @endif
            </div>
        </div>
    </div>
    {{--<br>--}}
    <div class="row"  style="margin-top:20px;">
        <div class="col-md-12">
            <div class="col-md-4" style="float:left;">
                <p><strong>Invoice No. </strong>{{$invoice->invoice_no}}</p>
                <p><strong>Name :</strong> {{ $invoice->patient['name'] or $invoice->supplier['name']}}</p>
                @if($invoice->patient != null)
                    <p><strong>Referred By :</strong>{{$invoice->sales->first()->doctor->name}}</p>
                @endif
            </div>
            <div class="col-md-2" style="float:right">
                <p><strong>Printed By: </strong>{{\Illuminate\Support\Facades\Auth::user()->name}}</p>
            </div>
            <div class="col-md-6" style="float:right">

                <p><strong>Date: </strong>{{$invoice->created_at->format('d-m-Y')}}</p>
                @if($invoice->patient !=null)
                    <p><strong>Age: </strong> {{ $invoice->patient['dob']}}</p>
                    <p><strong>Gender: </strong> {{ $invoice->patient['gender']}}</p>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th class="text-center">SN</th>
                    <th class="text-center">Vaccine Name</th>
                    <th class="text-center">Qty</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Total</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $i=0;
                @endphp
                @foreach($sales as $sale)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$sale->product->name}}</td>
                        <td>{{$sale->qty}}</td>
                        <td>{{$total_payable = $invoice->total}}</td>
                        <td class="text-right">{{$sale->qty*$total_payable}}/-</td>

                        {{--<td>{{$invoice->created_at->format('d-m-Y')}}</td>--}}
                    </tr>
                @endforeach
                <tr>
                    <td></td>
                    <td class="text-right" colspan="3">
                        <strong>Subtotal</strong><br>
                        <strong>Discount</strong>
                    </td>
                    <td class="text-right">
                        {{$total_payable = $invoice->total}} /-<br>
                        {{$discount = $invoice->discount}} /-
                    </td>
                    {{--<td>--}}
                    {{--@php $total=0; @endphp--}}
                    {{--@foreach($invoice->cashbooks as $cash)--}}
                    {{--@php--}}
                    {{--$total = $total+$cash->expense;--}}
                    {{--@endphp--}}
                    {{--@endforeach--}}

                    {{--<strong>Net Payable</strong>  {{$total_payable+$discount}} tk<br>--}}
                    {{--<strong>Amount Paid</strong> {{ $total }} tk<br>--}}
                    {{--<strong>Balance Due</strong>  {{ ($invoice->total-$invoice->discount)-$total }} tk--}}
                    {{--</td>--}}
                </tr>
                <tr>
                    @php
                        $paid=0;
                        $grand_total = $total_payable-$discount;
                        foreach($invoice->cashbooks as $cashbook){
                                $paid += $cashbook->income;
                        }
                        $due = $grand_total-$paid;
                    @endphp
                    <td></td>
                    <td class="text-center">
                        @if($due>0)
                            <div style="border: dotted 2px red; border-radius: 9px; font-size: xx-large; font-weight: bold; color: black;">
                                Due
                            </div>
                        @else
                            <div style="border: dotted 2px red; border-radius: 9px; font-size: xx-large; font-weight: bold; color: black;">
                                Paid
                            </div>
                        @endif
                    </td>
                    <td class="text-right" colspan="2">
                        <strong>Grand Total</strong><br>
                        <strong>Paid</strong><br>
                        <strong>Due</strong>
                    </td>
                    <td class="text-right"><strong>
                            {{$grand_total}}/-<br>
                            {{$paid}}/-<br>
                            {{$due}}/-</strong>
                    </td>
                </tr>
                </tbody>
            </table>
            <hr>
        </div>
    </div>
</div>

<div class="container" style="line-height: 5px; width: 500px; float: left; margin-left: 40px; height: 100%;">
    <div class="row" style="margin-top: 5px;">
        <div class="col-md-12">
            <div class="col-md-8" style="float:left;text-align: center; margin-left: 25%;">
                <img src=" {{ url('public/front/assets/img/logo/2.png') }}">
                <p>vaccine home bd</p>
                <p>http://vaccinehomebd.com</p>
            </div>
            <div class="col-md-4" style="float:right">
                @if($invoice->patient != null)
                    <img src="{{ url('public/admin/user/'.$invoice->patient->user['qr'].'.svg') }}"  class="img-responsive" style="height: 120px;width: 120px;">
                @endif
            </div>
        </div>
    </div>
    {{--<br>--}}
    <div class="row"  style="margin-top:20px;">
        <div class="col-md-12">
            <div class="col-md-4" style="float:left;">
                <p><strong>Invoice No. </strong>{{$invoice->invoice_no}}</p>
                <p><strong>Name :</strong> {{ $invoice->patient['name'] or $invoice->supplier['name']}}</p>
                @if($invoice->patient != null)
                    <p><strong>Referred By :</strong>{{$invoice->sales->first()->doctor->name}}</p>
                @endif
            </div>
            <div class="col-md-2" style="float:right">
                <p><strong>Printed By: </strong>{{\Illuminate\Support\Facades\Auth::user()->name}}</p>
            </div>
            <div class="col-md-6" style="float:right">

                <p><strong>Date: </strong>{{$invoice->created_at->format('d-m-Y')}}</p>
                @if($invoice->patient !=null)
                    <p><strong>Age: </strong> {{ $invoice->patient['dob']}}</p>
                    <p><strong>Gender: </strong> {{ $invoice->patient['gender']}}</p>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th class="text-center">SN</th>
                    <th class="text-center">Vaccine Name</th>
                    <th class="text-center">Qty</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Total</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $i=0;
                @endphp
                @foreach($sales as $sale)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$sale->product->name}}</td>
                        <td>{{$sale->qty}}</td>
                        <td>{{$total_payable = $invoice->total}}</td>
                        <td class="text-right">{{$sale->qty*$total_payable}}/-</td>

                        {{--<td>{{$invoice->created_at->format('d-m-Y')}}</td>--}}
                    </tr>
                @endforeach
                <tr>
                    <td></td>
                    <td class="text-right" colspan="3">
                        <strong>Subtotal</strong><br>
                        <strong>Discount</strong>
                    </td>
                    <td class="text-right">
                        {{$total_payable = $invoice->total}} /-<br>
                        {{$discount = $invoice->discount}} /-
                    </td>
                    {{--<td>--}}
                    {{--@php $total=0; @endphp--}}
                    {{--@foreach($invoice->cashbooks as $cash)--}}
                    {{--@php--}}
                    {{--$total = $total+$cash->expense;--}}
                    {{--@endphp--}}
                    {{--@endforeach--}}

                    {{--<strong>Net Payable</strong>  {{$total_payable+$discount}} tk<br>--}}
                    {{--<strong>Amount Paid</strong> {{ $total }} tk<br>--}}
                    {{--<strong>Balance Due</strong>  {{ ($invoice->total-$invoice->discount)-$total }} tk--}}
                    {{--</td>--}}
                </tr>
                <tr>
                    @php
                        $paid=0;
                        $grand_total = $total_payable-$discount;
                        foreach($invoice->cashbooks as $cashbook){
                                $paid += $cashbook->income;
                        }
                        $due = $grand_total-$paid;
                    @endphp
                    <td></td>
                    <td class="text-center">
                        @if($due>0)
                            <div style="border: dotted 2px red; border-radius: 9px; font-size: xx-large; font-weight: bold; color: black;">
                                Due
                            </div>
                        @else
                            <div style="border: dotted 2px red; border-radius: 9px; font-size: xx-large; font-weight: bold; color: black;">
                                Paid
                            </div>
                        @endif
                    </td>
                    <td class="text-right" colspan="2">
                        <strong>Grand Total</strong><br>
                        <strong>Paid</strong><br>
                        <strong>Due</strong>
                    </td>
                    <td class="text-right"><strong>
                            {{$grand_total}}/-<br>
                            {{$paid}}/-<br>
                            {{$due}}/-</strong>
                    </td>
                </tr>
                </tbody>
            </table>
            <hr>
        </div>
    </div>
</div>







<div class="container">
    <div class="row">
        <div class="text-right no-print">
            <a href="javascript:window.print()" class="btn btn-info"><i class="demo-pli-printer icon-lg"></i> PRINT INVOICE</a>
        </div>
    </div>
</div>

<!-- FOOTER -->
<!--===================================================-->
{{--<footer id="footer">--}}

{{--<!-- Visible when footer positions are fixed -->--}}
{{--<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->--}}
{{--<div class="show-fixed pad-rgt pull-right">--}}
{{--You have <a href="#" class="text-main"><span class="badge badge-danger">3</span> pending action.</a>--}}
{{--</div>--}}
{{--<!-- Visible when footer positions are static -->--}}
{{--<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->--}}
{{--<div class="hide-fixed pull-right pad-rgt">--}}
{{--Developed By <strong>Ringer Soft</strong>.--}}
{{--</div>--}}

{{--<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->--}}
{{--<!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->--}}
{{--<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->--}}

{{--<strong class="pad-lft">&#0169; {{date('Y')}} <a target="blank" href="http://ringersoft.com">Ringer Soft LTD.</a></strong>--}}



{{--</footer>--}}
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
