@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">View Invoice Summary</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Invoice</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Invoice </h3>
                            </div>
                            <div class="panel-body">
                               <div class="row">
                                    <table class="table table-bordered table-striped" id="CategoryTable">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Inv. ID</th>
                                            <th>S.Name</th>
                                            <th>S.Phone </th>
                                            <th>T.Amount</th>
                                            <th>Discount</th>
                                            <th>Balance</th>
                                            <th>Paid</th>
                                            <th>P.Type</th>
                                            <th>TrxID</th>
                                            <th>Inv. Date</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=0; @endphp
                                        @foreach($invoice as $invoice_info)

                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $invoice_info->invoice_no }}</td>
                                                
                                                @if($invoice_info->supplier_id == null && $invoice_info->gold_maker_id == null)
                                                    <td> <label class='label label-primary'>Customer</label> {{ $invoice_info->customer->name }}</td>
                                                    <td><label class='label label-primary'>Customer</label>{{ $invoice_info->customer->phone }} </td>
                                                @elseif($invoice_info->customer_id == null && $invoice_info->gold_maker_id == null)
                                                    <td> <label class='label label-info'>Supllier</label> {{ $invoice_info->supplier->name }}</td>
                                                    <td><label class='label label-info'>Supllier</label>{{ $invoice_info->supplier->phone }}</td>
                                               @else
                                                    <td>
                                                        <label class='label label-success'>Gold Maker</label>
                                                        {{ $invoice_info->GoldMaker->name }}
                                                    </td>
                                                    <td>
                                                        <label class='label label-success'>Gold Maker</label>
                                                        {{ $invoice_info->GoldMaker->phone }}
                                                    </td>
                                                @endif
                                                <td>{{ $invoice_info->total_amount }}</td>
                                                <td>{{ $invoice_info->total_discount }}</td>

                                                @php
                                                    $total = 0;
                                                
                                                    $amount_makingcharge = $invoice_info->total_amount;

                                                    $discount_less = $invoice_info->total_discount+$invoice_info->total_less;

                                                    $balance = $amount_makingcharge-$discount_less;


                                                @endphp

                                                @foreach($invoice_info->cash_books as $data)
                                                    @php
                                                        $total+=$data->expense
                                                    @endphp
                                                @endforeach


                                                <td>
                                                
                                                    @php  $duetk = $balance-$total;  @endphp

                                                    @if($duetk == 0)
                                                        <label class="label label-success">Full Paid</label>
                                                    @else
                                                        <label class="label label-danger">Due :  
                                                            {{ $duetk }}
                                                        tk</label>
                                                    @endif
                                                </td>
                                                <td> {{ $total }} </td>
                                                <td>{{ $invoice_info->payment_type }}</td>
                                                <td>{{ $invoice_info->payment_trxid }}</td>
                                                <td>{{ $invoice_info->created_at}}</td>
                                                <td>

                                                        @if($invoice_info->supplier_id == null && $invoice_info->gold_maker_id == null)
                                                            <a href="{{ url('SaleManagement/sale-invoice/'.$invoice_info->id) }}" target="_blank" class="btn btn-primary fa fa-print"></a>
                                                        @elseif($invoice_info->customer_id == null && $invoice_info->gold_maker_id == null)
                                                            <a href="{{ url('PurchaseMangement/Invoice-Visit/'.$invoice_info->id) }}" target="_blank" class="btn btn-info fa fa-print"></a>
                                                        @else
                                                            <a href="{{ url('Stock/Invoice-stockout/'.$invoice_info->id) }}" target="_blank" class="btn btn-success fa fa-print"></a>
                                                        @endif





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

    <script>

        $(function(){
            $('#CategoryTable').DataTable();

        });

    </script>

@endsection