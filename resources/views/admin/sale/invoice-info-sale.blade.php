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



{{--Mid content--}}
    <div class="boxed">
        <div>
            <div id="page-head">

            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="invoice-masthead">
                                    <div class="invoice-text">
                                        <h3 class="h1 text-uppercase text-thin mar-no text-primary">INVOICE</h3>
                                    </div>
                                    <div class="invoice-brand" style="white-space:nowrap">
                                        <div class="invoice-logo">
                                            <img src=" {{ url('public\admin\img\logo.png') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="invoice-bill row">
                                    <div class="col-sm-6 text-xs-center">
                                        <address>

                                                @if($invoice->supplier_id == null && $invoice->gold_maker_id == null)
                                                    <strong class="text-main"> {{ $invoice->customer->name }} - <label class="label label-primary">CUSTOMER</label> </strong><br>
                                                    {{ $invoice->customer->phone }}<br>
                                                    {{ $invoice->customer->address }}<br>
                                                @elseif($invoice->customer_id == null && $invoice->gold_maker_id == null)
                                                    <strong class="text-main"> {{ $invoice->supplier->name }} - <label class="label label-primary">SUPPLIER</label> </strong><br>
                                                    {{ $invoice->supplier->phone }}<br>
                                                    {{ $invoice->supplier->address }}<br>
                                                @else
                                                    <strong class="text-main"> {{ $invoice->GoldMaker->name }} - <label class="label label-primary">GOLD MAKER</label> </strong><br>
                                                    {{ $invoice->GoldMaker->phone }}<br>
                                                    {{ $invoice->GoldMaker->address }}<br>
                                                @endif
                                        </address>
                                    </div>
                                    <div class="col-sm-6 text-xs-center">
                                        <table class="invoice-details">
                                            <tbody>
                                            <tr>
                                                <td class="text-main text-bold">Invoice #</td>
                                                <td class="text-right text-info text-bold"> {{ $invoice->invoice_no }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-main text-bold">Order Status</td>
                                                @php
                                                @endphp

                                                <td class="text-right">
                                                    @if($invoice->order_status == 0)
                                                        <span class="badge badge-success">Complete</span>
                                                    @else
                                                        <span class="badge badge-success">Complete</span>
                                                    @endif
                                                </td>

                                            </tr>
                                            <tr>
                                                <td class="text-main text-bold">Billing Date</td>
                                                <td class="text-right">{{ Date('d-M-Y') }}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <hr class="new-section-sm bord-no">

                                <div class="row">
                                    <div class="col-lg-12 table-responsive">
                                        <table class="table table-bordered invoice-summary">
                                            <thead>
                                            <tr class="bg-trans-dark">
                                                <th class="text-uppercase">Product Name</th>
                                                <th class="min-col text-center text-uppercase">Qty</th>
                                                <th class="min-col text-center text-uppercase">Price</th>
                                                <th class="min-col text-center text-uppercase">Size</th>
                                                <th class="min-col text-center text-uppercase">Origin</th>
                                                <th class="min-col text-right text-uppercase">Karat</th>
                                                <th class="min-col text-center text-uppercase">Color</th>
                                                <th class="min-col text-center text-uppercase">Type</th>
                                                <th class="min-col text-right text-uppercase">Vori-Ana-Roti</th>
                                                <th class="min-col text-right text-uppercase">Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php
                                                $total = 0;
                                                $subtotal = 0;

                                            @endphp
                                            @foreach($invoice->Stockouts as $purchase_info)
                                                @php
                                                    $total+= $purchase_info->total_price;
                                                @endphp
                                                <tr>
                                                    <td>
                                                        <strong> {{ $purchase_info->Product->product_name }} </strong>
                                                    </td>
                                                     <td class="text-center">{{$purchase_info->product_qty}} </td>
                                                    <td class="text-center"> {{$purchase_info->product_price }} tk </td>
                                                   <td class="text-center"> {{$purchase_info->Product->size->name }}   </td>
                                                    <td class="text-center"> 
                                                        {{$purchase_info->Product->origin->name }}
                                                    <td class="text-center">
                                                      {{$purchase_info->Product->karat->karat_size }}  Karat </td>
                                                    <td class="text-center"> 
                                                            {{$purchase_info->Product->color->name }}
                                                    </td>
                                                    <td class="text-center"> 
                                                        {{$purchase_info->Product->gold_type->name }}  
                                                    </td>
                                                    <td class="text-center">
                                                    ভরি = {{ $purchase_info->vori }} , আনা = {{ $purchase_info->ana }}

                                                            @if($purchase_info->miliroti !=0)
                                                                সাড়ে {{ $purchase_info->roti }} রতি
                                                            @else
                                                                {{ $purchase_info->roti }} রতি
                                                            @endif

                                                    </td>
                                                    <td class="text-right">
                                                         {{ $purchase_info->total_price }} tk 
                                                    </td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="clearfix">
                                    <div class="row">
                                        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                            <div class="well well-sm">
                                                <p class="text-bold text-main text-uppercase">Notes &amp; Information</p>
                                                <p>{{ $invoice->note }}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                            <table class="table invoice-total">
                                                <tbody>
                                                    <tr>
                                                        <td><strong>TOTAL AMOUNT+Making charge  :</strong></td>
                                                        <td><b> {{ $total+$invoice->total_makingcharge }} </b></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong> DISCOUNT : </strong></td>
                                                        <td><b> {{ $invoice->total_discount }} </b></td>
                                                    </tr>
                                                    <tr>
                                                        @php 
                                                            $ttotal=0; 
                                                           
                                                            $total = $total+$invoice->total_makingcharge;
                                                            
                                                            $after_discount = $total-$invoice->total_discount;

                                                        @endphp
                                                        @foreach($invoice->cash_books as $CashBook)

                                                            @php $ttotal +=$CashBook->expense @endphp

                                                       @endforeach
                                                        <td><strong> BALANCE/DUE : </strong></td>
                                                        <td class="text-bold h4"> <b> {{ $after_discount-$ttotal-$invoice->total_less }} </b></td>

                                                    </tr>
                                                    <tr>
                                                        <td><strong>AFTER DISCOUNT :</strong></td>
                                                        <td class="text-bold h4"> <b> {{ $total-$invoice->total_discount }} </b></td>
                                                    </tr>

                                                    <tr>
                                                        <td><strong>TOTAL PAID :</strong></td>
                                                        <td class="text-bold h4"><b> {{ $ttotal }} </b></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    

                                    
                                </div>

                                <div class="text-right no-print">
                                    <a href="javascript:window.print()" class="btn btn-default"><i class="demo-pli-printer icon-lg"></i></a>
                                    <button type="button" class="btn btn-primary confirm_payment" data-id="{{ $invoice->id }}">Confirm Payment</button>
                                </div>

                                <hr class="new-section-sm bord-no">

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script>
            $(document).on("click",".confirm_payment",function(){
                var invoice_id = $(this).attr('data-id');
                $.ajax({
                    method:"post",
                    url:"{{ route('invoice.confirmation') }}",
                    data:{id:invoice_id,"_token":"{{ csrf_token() }}"},
                    dataType:"json",
                    success:function(response){
                        if(response.confirm == 1){
                            alert("Invoice Confirmation Done");
                            location.reload();
                        }

                    },
                    error:function(err){
                        console.log(err);
                    }
                });
            });
        </script>


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
