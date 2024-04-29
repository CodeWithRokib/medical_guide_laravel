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
<body   style="margin-top: 60px;">
<div class="container" style="line-height: 5px; width: 540px; float: left; border-right: 1px dashed #000; height: 100%; padding-right: 40px; margin-left: 10px;">
    <div class="row" style="margin-top: 5px;">
        <div class="col-md-12">
            <div class="col-md-8" style="float:left;text-align: center; margin-left: 25%;">
                <img src=" {{ url('public/frontEnd/assets/img/logo/2.png') }}">
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
            <div class="col-md-6" style="float:left;">
                <p><strong>Date: </strong>{{ $invoice->custom_date !=null ? $invoice->custom_date : $invoice->created_at->format('d-m-Y') }}</p>

                <p style="line-height: 15px;"><strong> <u> Invoice No. </u> </strong> {{$invoice->invoice_no}}</p>
                <p><strong>Name :</strong> {{ $invoice->patient['name'] or $invoice->supplier['name']}}</p>
                @if($invoice->patient != null)
                    <p><strong>Referred By :</strong>
                        @if($invoice->sales != null)
                            {{$invoice->sales->first()['doctor']['name']}}
                        @endif
                    </p>
                @endif
            </div>
            <div class="col-md-4" style="float:right">
                <p style="line-height: 15px;"><strong>Printed By: </strong>{{\Illuminate\Support\Facades\Auth::user()->name}}</p>
            </div>
            <div class="col-md-6" style="float:right">


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
                    <th class="text-center">Sub-Total</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $i=$total_purchase_tk=0;
                @endphp
                @foreach($sales as $sale)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$sale->product->name}}</td>
                        <td>{{$sale->qty}}</td>
                        <td>{{ $sale->price }}</td>
                        <td class="text-right">{{ $sale->price*$sale->qty }}/-</td>
                        {{--<td>{{$invoice->created_at->format('d-m-Y')}}</td>--}}
                    </tr>
                    @php $total_purchase_tk+=($sale->price*$sale->qty);  @endphp
                @endforeach
                <tr>
                    <td></td>
                    <td class="text-right" colspan="3">
                        <strong>Total</strong><br>
                        <strong>Discount</strong>
                    </td>
                    <td class="text-right">
                        {{ $total_purchase_tk }} <br>
                        {{ $invoice->discount }}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="text-center">

                        @php
                            $paid=0;
                            $grand_total = $total_purchase_tk-$invoice->discount;
                            foreach($invoice->cashbooks as $cashbook){
                                    $paid += $cashbook->income;
                            }
                            $due = $grand_total-$paid;
                        @endphp

                        @if($due>0)
                            <div style="border: dotted 2px red; border-radius: 9px; font-size: xx-large; font-weight: bold; color: black; opacity: .7;">
                                Due
                            </div>
                        @else
                            <div style="border: dotted 2px red; border-radius: 9px; font-size: xx-large; font-weight: bold; color: black; opacity: .7;">
                                Paid
                            </div>
                        @endif
                    </td>

                    <td class="text-right" colspan="2">

                        @php $total=0; @endphp
                        @foreach($invoice->cashbooks as $cash)
                            @php
                                $total = $total+$cash->expense;
                            @endphp
                        @endforeach
                        <strong>Grand Total</strong><br>
                        <strong> Paid</strong><br>
                        <strong> Due</strong>
                    </td>
                    <td class="text-right">
                        {{$total_purchase_tk-$invoice->discount}} tk<br>
                        {{ $total }} tk<br>
                        {{ ($invoice->total-$invoice->discount)-$total }} tk
                    </td>
                </tr>
                {{--<tr>
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
                            <div style="border: dotted 2px red; border-radius: 9px; font-size: xx-large; font-weight: bold; color: black; opacity: .7;">
                                Due
                            </div>
                        @else
                            <div style="border: dotted 2px red; border-radius: 9px; font-size: xx-large; font-weight: bold; color: black; opacity: .7;">
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
                </tr>--}}
                </tbody>
            </table>
            <hr>
        </div>
    </div>
</div>


<div class="container" style="line-height: 5px; width: 540px; float: left;  height: 100%; padding-right: 40px; margin-left: 10px;">
    <div class="row" style="margin-top: 5px;">
        <div class="col-md-12">
            <div class="col-md-8" style="float:left;text-align: center; margin-left: 25%;">
                <img src=" {{ url('public/frontEnd/assets/img/logo/2.png') }}">
                <p>vaccine home bd</p>
                <p>http://vaccinehomebd.com 123</p>
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
            <div class="col-md-6" style="float:left;">
                <p><strong>Date: </strong>{{ $invoice->custom_date !=null ? $invoice->custom_date : $invoice->created_at->format('d-m-Y') }}</p>

                <p style="line-height: 15px;"><strong> <u> Invoice No. </u> </strong> {{$invoice->invoice_no}}</p>
                <p><strong>Name :</strong> {{ $invoice->patient['name'] or $invoice->supplier['name']}}</p>
                @if($invoice->patient != null)
                    <p><strong>Referred By :</strong>
                        @if($invoice->sales != null)
                            {{$invoice->sales->first()['doctor']['name']}}
                        @endif
                    </p>
                @endif
            </div>
            <div class="col-md-4" style="float:right">
                <p style="line-height: 15px;"><strong>Printed By: </strong>{{\Illuminate\Support\Facades\Auth::user()->name}}</p>
            </div>
            <div class="col-md-6" style="float:right">


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
                    <th class="text-center">Sub-Total</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $i=$total_purchase_tk=0;
                @endphp
                @foreach($sales as $sale)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$sale->product->name}}</td>
                        <td>{{$sale->qty}}</td>
                        <td>{{ $sale->price }}</td>
                        <td class="text-right">{{ $sale->price*$sale->qty }}/-</td>
                        {{--<td>{{$invoice->created_at->format('d-m-Y')}}</td>--}}
                    </tr>
                    @php $total_purchase_tk+=($sale->price*$sale->qty);  @endphp
                @endforeach
                <tr>
                    <td></td>
                    <td class="text-right" colspan="3">
                        <strong>Total</strong><br>
                        <strong>Discount</strong>
                    </td>
                    <td class="text-right">
                        {{ $total_purchase_tk }} <br>
                        {{ $invoice->discount }}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="text-center">

                        @php
                            $paid=0;
                            $grand_total = $total_purchase_tk-$invoice->discount;
                            foreach($invoice->cashbooks as $cashbook){
                                    $paid += $cashbook->income;
                            }
                            $due = $grand_total-$paid;
                        @endphp

                        @if($due>0)
                            <div style="border: dotted 2px red; border-radius: 9px; font-size: xx-large; font-weight: bold; color: black; opacity: .7;">
                                Due
                            </div>
                        @else
                            <div style="border: dotted 2px red; border-radius: 9px; font-size: xx-large; font-weight: bold; color: black; opacity: .7;">
                                Paid
                            </div>
                        @endif
                    </td>

                    <td class="text-right" colspan="2">

                        @php $total=0; @endphp
                        @foreach($invoice->cashbooks as $cash)
                            @php
                                $total = $total+$cash->expense;
                            @endphp
                        @endforeach
                        <strong>Grand Total</strong><br>
                        <strong> Paid</strong><br>
                        <strong> Due</strong>
                    </td>
                    <td class="text-right">
                        {{$total_purchase_tk-$invoice->discount}} tk<br>
                        {{ $total }} tk<br>
                        {{ ($invoice->total-$invoice->discount)-$total }} tk
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


<button class="scroll-top btn">
    <i class="pci-chevron chevron-up"></i>
</button>
</body>
</html>
