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
                                <div class="row">
                                    <div class="col-lg-offset-2 col-lg-8 col-sm-6 col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <div class="col-lg-4 col-sm-4 col-xs-12 {{$errors->has('warehouse') ? 'has-error' : ''}}">
                                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                {{ Form::label('warehouse','Warehouse Select  : ',['class'=>'control-label'])}}
                                                {{ Form::select('warehouse',$warehouses ,null,['class'=>'form-control','required','id'=>'warehouse_id'])}}
                                            </div>

                                            <div class="col-lg-4 col-sm-4 col-xs-12 {{$errors->has('report') ? 'has-error' : ''}}">
                                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                {{ Form::label('product','Select Type : ',['class'=>'control-label'])}}
                                                {{ Form::select('report',['1'=>'Purchase Report','2'=>'Sale Report'],false,['class'=>'form-control ','required','id'=>'report_type'])}}
                                            </div>

                                            <div class="col-lg-4 col-sm-4 col-xs-12 {{$errors->has('report') ? 'has-error' : ''}}">
                                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                {{ Form::label('product_type','Select Product Type : ',['class'=>'control-label'])}}
                                                {{ Form::select('product_type',['vaccine'=>'Vaccine','other'=>'Health Product'],false,['class'=>'form-control ','required','id'=>'product_type'])}}
                                            </div>

                                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12" style="margin-left: 20%;margin-top: 40px">
                                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                <div class="form-group">
                                                    {{ Form::button('View Report',['class'=>'form-control btn-primary','id'=>'view_report']) }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <table class="table table-bordered table-striped" id="CategoryTable">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Invoice No</th>
                                            <th>Supplier/Customer</th>
                                            <th>Amount</th>
                                            <th>Discount </th>
                                            <th>After Discount</th>
                                            <th>Due</th>
                                            <th>Paid</th>
                                            <th>Due Amount Pay</th>
                                        </tr>
                                        </thead>
                                        <tbody id="all_due_invoices">

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
                        <div class="col-md-5">
                            <div class="form-group">
                                {{Form::checkbox('cheque_payment',null,null,['id'=>'cheque_payment'])}}
                                {{Form::label('PayAmount','Pay Amount by cheque',['class'=>'label-control']) }}
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" id="cheque_number">
                            <div class="form-group">
                                {{ Form::label('cheque_number','Cheque Number',['class'=>'label-control']) }}
                                {{ Form::text('cheque_number',null,['class'=>'form-control','id'=>'trxId']) }}
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

    <!--Modal of Partial Payment Log -->
    <div id="partialpayment" class="modal fade" tabindex="-1">
        <div class="modal-dialog  animated swing">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title" id="myLargeModalLabel">Partial Payment Log</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <table class="table table-bordered table-striped" id="PartialPaymentTable">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Invoice No</th>
                                    <th>Supplier/Customer</th>
                                    <th>Cheque No</th>
                                    <th>Paid</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                </tr>
                                </thead>
                                <tbody id="partial_payment_log">

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <div class="modal-footer">
                    <button data-bb-handler="cancel" type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>

                </div>
            </div>
        </div>
    </div>
    <!--End Modal of Partial Payment Log -->

    <script>

        $(function(){
            $('#CategoryTable').DataTable();
            all_due_invoice_report();
            $("#cheque_number").hide();
        });
//        $(function(){
//            $('#PartialPaymentTable').DataTable();
//            partial_payment_log();
//        });

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

        $(document).on('click','#log',function(){
            var id = $(this).attr('data-id');
            $('#partialpayment').html(partial_payment_log(id));
            $("#partialpayment").modal('show');
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
            var trxId = $('#trxId').val();
            $.ajax({
                method:"post",
                url:"{{ route('invoice.duepayment') }}",
                data:{invoice_id:invoice_id,amount:amount,trxId:trxId,"_token":"{{ csrf_token() }}"},
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


        /* custom report view button start */

        $(document).on('click','#view_report',function () {
            var warehouse_id = $("#warehouse_id").val();
            var report_type = $("#report_type").val();
            var product_type = $("#product_type").val();
            $.ajax({
                method:"post",
                url:'{{ route("invoice.dueinvoice-type") }}',
                data:{product_type:product_type,warehouse_id:warehouse_id,report_type:report_type,"_token":"{{ csrf_token() }}"},
                dataType:"html",
                success:function (response) {
                    $("#all_due_invoices").html(response);
                }
            });
        });

        /* custom report view button end */

        /* All Due Invoice Start */
        function all_due_invoice_report() {
            $.ajax({
                method:'get',
                url:'{{ route('invoice.all-dues') }}',
                dataType:'html',
                success:function (response) {
                    $("#all_due_invoices").html(response);
                },error:function (err) {
                    $("#all_due_invoices").html(err);
                }
            });
        }
        /* All Due Invoice End */

        /*Partial Payment Log Start*/
        function partial_payment_log(id) {
            $.ajax({
                method:'get',
                url:'{{ route('invoice.partial-payment') }}',
                dataType:'html',
                data:{id:id},
                success:function (response) {
                    $("#partial_payment_log").html(response);
                },error:function (err) {
                    $("#partial_payment_log").html(err);
                }
            });
        }
        /*Partial Payment Log End*/

        $('#cheque_payment').click(function () {
            if ($('#cheque_payment').is(":checked")) {
                $("#cheque_number").show();
            }else{
                $("#cheque_number").hide();
            }
        });



    </script>
@endsection