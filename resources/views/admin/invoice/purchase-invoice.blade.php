@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow"> View Vaccine-Invoice</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Vaccine-Invoice</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"> Vaccine-Invoice</h3>
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
                                                {{ Form::label('report','Purchase/Sale Report : ',['class'=>'control-label'])}}
                                                {{ Form::select('report',['1'=>'Purchase Report','2'=>'Sale Report'],false,['class'=>'form-control ','required','id'=>'report_type'])}}
                                            </div>

                                            <div class="col-lg-4 col-sm-4 col-xs-12 {{$errors->has('type') ? 'has-error' : ''}}">
                                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                {{ Form::label('type','Select Product Type : ',['class'=>'control-label'])}}
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
                                            <th>Inv.No</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Total </th>
                                            <th>Discount </th>
                                            <th>Paid </th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody id="all_purchase_report">
                                        @php $i=0; $vg=0;$ag=0;$rg=0;$mg=0;   $total=0; @endphp

                                        @foreach($invoices as $invoice)

                                            <tr>
                                                <td> {{ ++$i }}</td>
                                                <td> {{ $invoice->invoice_no }}</td>
                                                @if($invoice->supplier_id !=null)

                                                    <td>
                                                        {{ $invoice->supplier->name }} <label class="label label-primary">Supplier</label>
                                                    </td>
                                                    <td> {{ $invoice->supplier->phone }}</td>
                                                @else
                                                    <td>
                                                        {{ $invoice->patient->name }} <label class="label label-primary">Customer</label>
                                                    </td>
                                                    <td> {{ $invoice->patient->phone }}</td>
                                                @endif
                                                
                                                <td> {{ $invoice->total }}</td>
                                                <td> {{ $invoice->discount }}</td>
                                                <td>
                                                    @php $total=0; @endphp
                                                    @foreach($invoice->cashbooks as $cash)
                                                        @php
                                                            $total = $total+$cash->expense;
                                                        @endphp
                                                    @endforeach
                                                    {{ $total }}
                                                </td>

                                                <td>
                                                    @if(($invoice->total-$invoice->discount)-$total !=0)
                                                        <label class="label label-danger">Due {{ ($invoice->total-$invoice->discount)-$total }} tk</label>
                                                    @else
                                                        <label class="label label-success">Full Paid</label>
                                                    @endif

                                                </td>

                                                <td>
                                                    <a class="fa fa-print btn btn-info" href="{{ route('invoice.vaccinepurchase',$invoice->id) }}" target="_blank"></a>
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
            $("#warehouse").select2({
                placeholder: 'Select Warehouse'

            });
        });
        $(document).on('click','.activestatus',function(){
            var id = $(this).attr('data-id');
            $('#product_status').modal('show');
            $("#status_id").val(id);
            console.log("Fire Console : "+$(this).attr('data-id'));
        });

        function all_purchase_report() {
            $.ajax({
                method:'get',
                url:'{{ route('purchase.allreport') }}',
                dataType:'html',
                success:function (response) {
                    $("#all_purchase_report").html(response);
                },error:function (err) {
                    $("#all_purchase_report").html(err);
                }
            });
        }

        /* UPDATE Category END */


        /* custom report view button start */

        $(document).on('click','#view_report',function () {
            var warehouse_id = $("#warehouse_id").val();
            var report_type = $("#report_type").val();
            var product_type = $("#product_type").val();
            $.ajax({
                method:"post",
                url:'{{ route("purchase.warehouse_report") }}',
                data:{product_type:product_type,warehouse_id:warehouse_id,report_type:report_type,"_token":"{{ csrf_token() }}"},
                dataType:"html",
                success:function (response) {
                    $("#all_purchase_report").html(response);
                }
            });
        });
        /* custom report view button end */

    </script>




@endsection