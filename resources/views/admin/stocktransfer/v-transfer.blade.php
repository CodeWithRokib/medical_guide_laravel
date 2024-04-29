@extends('admin.layouts.admin')
@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">New Sale</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Sale</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Sale Management </h3>
                            </div>
                            <div class="panel-body">
                                {{-- Product Name search Button --}}
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

                                        {{-- First Row For Product Search --}}
                                        <div class="row">

                                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a data-toggle="tab" href="#home" class="btn btn-primary" style="font-weight: bold;letter-spacing: 2px;">SIGLE SALE</a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="tab" href="#menu1" class="btn btn-primary" style="font-weight: bold;letter-spacing: 2px;">SERIAL SALE</a>
                                                    </li>
                                                </ul>

                                                <div class="tab-content">
                                                    <div id="home" class="tab-pane fade in active">
                                                        <br>
                                                        {{ Form::text('fbarcode',null,['class'=>'form-control sigleinput','id'=>'fbarcode','placeholder'=>'SINGLE BARCODE','onchange'=>'singlechange()'])}}

                                                    </div> <!-- Home End -->



                                                    <div id="menu1" class="tab-pane fade">
                                                        <div class="row">
                                                            <br>

                                                            <div class="col-lg-6 col-sm-5 col-md-5 col-xs-12 singlediv">

                                                                {{ Form::text('fbarcode',null,['class'=>'form-control serialinput','id'=>'start_barcode','placeholder'=>'START BARCODE','onchange'=>'serialchange()'])}}

                                                            </div>


                                                            <div class="col-lg-6 col-sm-5 col-md-5 col-xs-12 singlediv">


                                                                {{ Form::text('fbarcode',null,['class'=>'form-control serialinput','id'=>'end_barcode','placeholder'=>'END BARCODE','onchange'=>'serialchange()'])}}

                                                            </div>

                                                        </div><!-- row End -->
                                                    </div><!-- menu1 End -->
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Row Search End --}}

                                        {{-- Added Product View  --}}
                                        <span style="display: block;height: 40px;width: 100%;background: #fff;"></span>

                                        <div class="row">

                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Barcode</th>
                                                    <th>Pro.Code</th>
                                                    <th>Name</th>
                                                    <th>Brand</th>
                                                    <th>Origin</th>
                                                    <th>Karat</th>
                                                    <th>Status</th>
                                                    <th>Price</th>
                                                    <th>Qty</th>
                                                    <th>Sub-total</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody id="saleitem">

                                                </tbody>
                                            </table>
                                        </div>
                                        {{-- Price Weight , Weight-amount Row End From Here --}}


                                    </div>{{-- left div end--}}

                                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

                                        {{-- Customer Information --}}
                                        <h4 class="bg-primary text-center" style="padding:10px 0;">Customer Information</h4>
                                        <div class="row">
                                            {{ Form::open(['method'=>'post','enctype'=>'multipart/form-data'])}}
                                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

                                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                <div class="row">
                                                    {{ Form::label('customername','Customer Note : ',['class'=>'label-control']) }}
                                                    {{ Form::textarea('sale_note','Thank you so much for stay with Ringer-Soft jewellery Shop',['class'=>'form-control','rows'=>2,'cols'=>8,'placeholder'=>'Thank you so much for buy from here']) }}
                                                </div>
                                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                <div class="row">
                                                    {{ Form::label('customername','Payment Type : ',['class'=>'label-control']) }}
                                                    {{ Form::select('payment_type',[''=>'SELECT PAYMENT TYPE','cash'=>'CASH','bkash'=>'Bkash','card'=>'Credit Card','check'=>'Bank Check'],false,['class'=>'form-control','id'=>'payment_type','required']) }}
                                                    <hr>
                                                    {{ Form::text('bkash_code',null,['class'=>'form-control','id'=>'bkash_code','placeholder'=>'TrxID : 5XTV45CD']) }}
                                                </div>


                                            </div> {{-- payment and note end --}}


                                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                    {{ Form::label('customer_serach','Old Customer Search : ',['class'=>'bg-primary form-control']) }}
                                                    {{ Form::select('customer_id',$Customer,false,['class'=>'form-control customer_select2','multiple','id'=>'customer_id']) }}
                                                </div>
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                    <div class="form-group">
                                                        {{ Form::label('customername','Customer Name : ',['class'=>'label-control']) }}
                                                        {{ Form::text('customer_name',null,['class'=>'form-control','id'=>'customer_name','placeholder'=>'Ex. Mr.X','required']) }}
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-sm-12 ">
                                                    <div class="form-group {{$errors->has('customerimage') ? 'has-error' : ''}}">

                                                        {{ Form::label('Customerimage','Customer Image : ',['class'=>'control-label'])}}
                                                        {{ Form::file('customerimage',['class'=>'form-control'])}}
                                                        @if ($errors->has('customerimage'))
                                                            <span class="help-block">
                                                                 <strong>{{ $errors->first('customerimage') }}</strong>
                                                            </span>
                                                        @endif
                                                        <hr>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                    <div class="form-group {{ $errors->has('phone') ? "has-error" : "" }}">
                                                        {{ Form::label('customername','Phone : ',['class'=>'label-control']) }}
                                                        {{ Form::text('phone',null,['class'=>'form-control','id'=>'customer_phone','placeholder'=>'Ex : 123456789','required']) }}
                                                        @if ($errors->has('phone'))
                                                            <span class="help-block">
                                                                 <strong>{{ $errors->first('phone') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                    <div class="form-group">
                                                        {{ Form::label('customername','Address : ',['class'=>'label-control']) }}
                                                        {{ Form::textarea('customer_address',null,['class'=>'form-control','id'=>'customer_address','placeholder'=>'Ex : Customer Address','rows'=>5,'cols'=>10]) }}
                                                    </div>
                                                </div>

                                            </div> {{-- customer end --}}


                                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                <h4 class="text-center bg-primary" style="padding:10px 0;">Sale Information :  </h4>
                                                <table  class="table table-bordered table-condensed">
                                                    <tbody>
                                                    <tr>
                                                        <td class="bg-primary text-left" style="width:40%">Total Amount : </td>
                                                        <td class=" text-left">
                                                            {{ Form::number('total_amount',null,['id'=>'total_price','class'=>'form-control text-center','placeholder'=>'Ex : 00 Tk','readonly']) }}                                    </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-primary text-left" style="width:40%">Discount : </td>
                                                        <td class=" text-left">
                                                            {{ Form::number('total_discount',0,['id'=>'total_discount','class'=>'form-control text-center','placeholder'=>'Ex : 00 Tk','required']) }}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-primary text-left" style="width:40%">Balance : </td>
                                                        <td class="text-left">
                                                            {{ Form::number('total_balance',null,['id'=>'total_balance','class'=>'form-control text-center','placeholder'=>'Ex : 00 Tk','readonly']) }}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-primary text-left" style="width:40%">After Discount : </td>
                                                        <td class="text-left">
                                                            {{ Form::number('afterdiscount',null,['id'=>'afterdiscount','class'=>'form-control text-center','placeholder'=>'Ex : 00 Tk','readonly']) }}
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="bg-primary text-left" style="width:40%">Making Charge  : </td>
                                                        <td class="text-left">
                                                            {{ Form::number('making_charge',0,['id'=>'makingcharge','class'=>'form-control text-center','placeholder'=>'Ex : 00 Tk','required']) }}
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="bg-primary text-left" style="width:40%">Total Less  : </td>
                                                        <td class="text-left">
                                                            {{ Form::number('total_less',0,['id'=>'total_less','class'=>'form-control text-center','placeholder'=>'Ex : 00 Tk','required']) }}
                                                        </td>
                                                    </tr>



                                                    <tr>
                                                        <td class="bg-primary text-left" style="width:40%">Total Paid : </td>
                                                        <td class="text-left">
                                                            {{ Form::number('total_paid',null,['id'=>'total_paid','class'=>'form-control text-center','placeholder'=>'Ex : 00 Tk','required']) }}                                                        </td>
                                                    </tr>

                                                    <tr id="payment_date">
                                                        <td class="bg-primary text-left" style="width:40%">Payment Date : </td>

                                                        <td>
                                                            <input type="text" name="payment_deadline" class="form-control pull-right pdate" id="datepicker" >
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="text-left"></td>
                                                        <td class="text-left">
                                                            <button type="submit" class="btn btn-primary form-control" >SALE NOW</button>
                                                        </td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                                {{ Form::close()}}

                                            </div> {{-- sale information end --}}

                                        </div> {{-- Customer Information Row End --}}

                                    </div>
                                </div>{{-- Right div end--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#payment_date").hide();
            $("#datepicker").datepicker({
                minDate:0,
            });

    </script>
@endsection