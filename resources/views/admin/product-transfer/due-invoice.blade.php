@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow"> View Due Invoice</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Due Invoice</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"> Due Invoice</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <table class="table table-bordered table-striped" id="CategoryTable">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Invoice No</th>
                                            <th>Amount</th>
                                            <th>Discount </th>
                                            <th>After Discount+Less</th>
                                            <th>Balance</th>
                                            <th>Paid</th>
                                            <th> বাকী টাকা পরিষধের তারিখ ঃ  </th>
                                            <th>Due Amount Pay</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=0; @endphp

                                        @foreach($invoice as $invoice_info)
                                            @php
                                                $total = 0; 
                                                
                                                $amount_makingcharge = $invoice_info->total_amount;

                                                $discount_less = $invoice_info->total_discount+$invoice_info->total_less;

                                                $balance = $amount_makingcharge - $discount_less;

                                            @endphp

                                            @foreach($invoice_info->cash_books as $data)
                                                @php
                                                    $total+=$data->expense
                                                @endphp
                                            @endforeach

                                            @php  $duetk = $balance-$total;   @endphp


                                           @if( $duetk !=0)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $invoice_info->invoice_no }}</td>
                                                    <td id="tamount{{$invoice_info->id}}" data-id="{{ $amount_makingcharge }}">

                                                        {{ $invoice_info->total_amount }}

                                                    </td>

                                                    <td id="tdiscount{{ $invoice_info->id }}" data-id="{{ $amount_makingcharge }}">
                                                      
                                                        {{ $invoice_info->total_discount }}

                                                    </td>

                                                    <td id="afterdiscount{{ $invoice_info->id }}" data-id="{{ $amount_makingcharge- $invoice_info->total_discount }}">
                                                     {{ $amount_makingcharge- $invoice_info->total_discount  }} 
                                                    </td>

                                                    <td id="balance{{  $invoice_info->id }}" data-id="{{ $duetk }}"> 
                                                        {{ $duetk  }}
                                                    </td>

                                                    <td id="tpaid{{ $invoice_info->id }}" data-id="{{ $total }}"> {{ $total  }} </td>

                                                    <td> 
                                                      {{ \Carbon\Carbon::parse($invoice_info->payment_deadline)->diffInDays() }} দিন পরে বাকী টাকা পরিশোধ করবে 
                                                      
                                                    </td>

                                                    <td>
                                                        <button type="button" id="dueamountpay" data-id="{{ $invoice_info->id }}" class="fa fa-money btn btn-info"></button>
                                                    </td>
                                                </tr>
                                           @endif 
                                        @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Large Bootstrap Modal-->
    <!--===================================================-->
    <div id="duypayment" class="modal fade" tabindex="-1">
        <div class="modal-dialog  animated swing">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title" id="myLargeModalLabel">Due Payment</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        {{ Form::hidden('invoice_id',null,['id'=>'invoice_id']) }}
                        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                            <div class="form-group">
                                {{ Form::label('TotalAmount','Total Amount',['class'=>'label-control']) }}
                                {{ Form::number('totalamount',null,['id'=>'totalamount','class'=>'form-control','readonly']) }}
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                            <div class="form-group">
                                {{ Form::label('Total Discount','Total Discount',['class'=>'label-control']) }}
                                {{ Form::number('totaldiscount',null,['id'=>'totaldiscount','class'=>'form-control','readonly']) }}
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                            <div class="form-group">
                                {{ Form::label('Paid','After Discount',['class'=>'label-control']) }}
                                {{ Form::number('totalpaid',null,['id'=>'afterdiscount','class'=>'form-control','readonly']) }}
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                            <div class="form-group">
                                {{ Form::label('Paid','Total Paid',['class'=>'label-control']) }}
                                {{ Form::number('totalamount',null,['id'=>'totalpaid','class'=>'form-control','readonly']) }}
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                            <div class="form-group">
                                {{ Form::label('PayAmount','Need to Paid',['class'=>'label-control']) }}
                                {{ Form::number('needtopay',null,['id'=>'needtopay','class'=>'form-control','readonly']) }}
                            </div>
                        </div>

                        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-12">
                            <div class="form-group">
                                {{ Form::label('PayAmount','Pay Amount',['class'=>'label-control']) }}
                                {{ Form::text('lastpay',null,['id'=>'lastpay','class'=>'form-control']) }}
                            </div>
                        </div>

                    </div>
                </div>

                <div class="modal-footer">
                    <button data-bb-handler="cancel" type="button" class="btn btn-default">Cancel</button>
                    <button  type="button" class="btn btn-primary duepayment">Due Payment</button>
                </div>

            </div>
        </div>
    </div>
    <!--===================================================-->
    <!--End Large Bootstrap Modal-->

    <script>

        $(function(){
            $('#CategoryTable').DataTable();
        });

        $(document).on('click','#dueamountpay',function(){
            var id = $(this).attr('data-id');
            $("#invoice_id").val(id);
            var tamount = $("#tamount"+id).attr('data-id');
            var tdiscount = $("#tdiscount"+id).attr('data-id');
            var afterdiscount = $("#afterdiscount"+id).attr('data-id');
            var balance = $("#balance"+id).attr('data-id');
            var tpaid = $("#tpaid"+id).attr('data-id');

            $("#totalamount").val(tamount);
            $("#totaldiscount").val(tdiscount);
            $("#needtopay").val(balance);
            $("#afterdiscount").val(afterdiscount);
            $("#totalpaid").val(tpaid);
            $("#duypayment").modal('show');
        });
        var last_input = 0;

        $(document).on('keyup','#lastpay',function () {
            var amount = Number($(this).val());
            var needtopay = Number($("#needtopay").val());
            var invoice_id = $("#invoice_id").val();

            if(amount == " " || amount<0 ){
                $(this).val("");
                alert("White space or Less then 1 Not allowed");
            }else{
                if(needtopay>=amount ){
                    last_input = amount;
                }else{
                    $(this).val(last_input);
                    alert("Sir You have to pay only "+needtopay);
                }
            }
        });

        /* Apply for Due Payment start */

        $(document).on('click','.duepayment',function () {
            var amount = $("#lastpay").val();
            var invoice_id = $("#invoice_id").val();
            $.ajax({
                method:"post",
                url:"{{ route('invoice.duepayment') }}",
                data:{invoice_id:invoice_id,amount:amount,"_token":"{{ csrf_token() }}"},
                dataType:'json',
                success:function (done) {
                    console.log(done);
                    location.reload();
                },error:function (err) {
                    console.log(err);
                }
            });
        });

        /* Apply for Due Payment End */

        $(document).on('click','.activestatus',function(){
            var id = $(this).attr('data-id');
            $('#product_status').modal('show');
            $("#status_id").val(id);
            console.log("Fire Console : "+$(this).attr('data-id'));
        });

        /* UPDATE Category END */

    </script>




@endsection