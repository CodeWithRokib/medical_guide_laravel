@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow"> View Money Receipt</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Money Receipt</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"> Money Receipt</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <table class="table table-bordered table-striped" id="CategoryTable">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Inv.No</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Product Type</th>
                                            <th>Total </th>
                                            <th>Discount </th>
                                            <th>Paid </th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=0; $vg=0;$ag=0;$rg=0;$mg=0;   $total=0; @endphp

                                        @foreach($invoices as $xyz)

                                            <tr>
                                                <td> {{ ++$i }}</td>
                                                <td> {{ $xyz->invoice_no }}</td>
                                                @if($xyz->supplier_id !=null)
                                                    <td>
                                                        {{ $xyz->supplier->name }} <label class="label label-primary">Supplier</label>
                                                    </td>
                                                    <td> {{ $xyz->supplier->phone }}</td>
                                                    <td> {{ $xyz->product_type }}</td>
                                                @elseif($xyz->patient_id !=null)
                                                    <td>
                                                        {{ $xyz->patient->name or '' }} <label class="label label-info">Customer</label>
                                                    </td>
                                                    <td> {{ $xyz->patient->phone or ''}}</td>
                                                    <td> {{ $xyz->product_type }}</td>
                                                @else
                                                    <td>
                                                        <label class="label label-warning">Product Transfer</label>
                                                    </td>
                                                    <td></td>
                                                    <td>{{ $xyz->product_type }}</td>
                                                @endif
                                                <td> {{ $xyz->total }}</td>
                                                <td> {{ $xyz->discount }}</td>


                                                <td>
                                                    @php
                                                        $total=0;
                                                    @endphp
                                                    @if($xyz->supplier_id!= null)
                                                    @foreach($xyz->cashbooks as $cash)
                                                        @php
                                                            $total = $total+$cash->expense;
                                                        @endphp
                                                    @endforeach
                                                    {{ $total }}
                                                    @elseif($xyz->patient_id !=null)
                                                    @foreach($xyz->cashbooks as $cash)
                                                        @php
                                                            $total = $total+$cash->income;
                                                        @endphp
                                                    @endforeach
                                                    {{ $total }}
                                                @else

                                                @endif
                                                <td>
                                                    @if(($xyz->total-$xyz->discount)-$total !=0)
                                                        <label class="label label-danger">Due {{ ($xyz->total-$xyz->discount)-$total }} tk</label>
                                                    @elseif(($xyz->total-$xyz->discount)-$total ==0)
                                                        <label class="label label-success">Full Paid</label>
                                                    @else
                                                        <label class="label label-warning">Product Transfer</label>
                                                    @endif
                                                </td>

                                                <td>
                                                    <button class="fa fa-print btn btn-info moneyreceipt_class" target="_blank" data-id="{{ $xyz->id }}"></button>
                                                </td>

                                            </tr>
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
    <div id="moneyreceipt_modal" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-lg  animated swing">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title" id="myLargeModalLabel">Payment History</h4>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Invoice No</th>
                                    <th>Total</th>
                                    <th>Discount</th>
                                    <th>Paid</th>
                                    <th>Date</th>
                                    <th>Due</th>
                                    <th>Print</th>
                                </tr>
                            </thead>

                            <tbody id="moneyreceipt_data_add"></tbody>
                        </table>

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
        $(document).on('click','.activestatus',function(){
            var id = $(this).attr('data-id');
            $('#product_status').modal('show');
            $("#status_id").val(id);
            console.log("Fire Console : "+$(this).attr('data-id'));
        });

        $(document).on("click",'.moneyreceipt_class',function () {
            var id = $(this).attr('data-id');
            $("#moneyreceipt_modal").modal("show");

            $.ajax({
                method:"post",
                url:"{{ route('cash.list') }}",
                data:{id:id, "_token":"{{ csrf_token() }}"},
                dataType:"html",
                success:function (response) {
                    $("#moneyreceipt_data_add").html(response);
                }

            });


        });
        /* UPDATE Category END */

    </script>




@endsection