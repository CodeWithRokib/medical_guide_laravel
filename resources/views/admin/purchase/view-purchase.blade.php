@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow"> View Purchase</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Purchase</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"> Purchase</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <table class="table table-bordered table-striped" id="CategoryTable">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Warehouse Name</th>
                                            <th>Inv.No</th>
                                            <th>Supplier</th>
                                            <th>Vaccine</th>
                                            <th>Price </th>
                                            <th>MRP </th>
                                            <th>Qty </th>
                                            {{-- <th>Bonus </th> --}}
                                            <th>Sub-Total </th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=0; $vg=0;$ag=0;$rg=0;$mg=0;   $total=0; @endphp
                                        @foreach($purchases as $report)
                                            <tr>
                                                <td> {{ ++$i }}</td>
                                                <td> {{ $report->warehouse->name }}</td>
                                                <td><label class="label label-info"> {{ $report->invoice->invoice_no }} </label> </td>
                                                <td> {{ $report->invoice->supplier['name'] }} <br> ( {{$report->invoice->supplier['phone']}} ) </td>
                                                <td> {{ $report->product->name }} </td>
                                                <td class="text-right"> {{ number_format($report->product->price,2) }} </td>
                                                <td class="text-right"> {{ number_format($report->mrp,2) }}  </td>
                                                <td class="text-right"> {{ $report->qty }} </td>
                                                {{-- <td class="text-right"> {{ $report->bonus }} </td> --}}
                                                <td class="text-right"> {{ number_format(($report->price*$report->qty),2) }}  </td>
                                                <td>
                                                    <img src="{{ url("public/admin/product/upload/".$report->product->image) }}" style="height: 50px;width: 50px;">
                                                </td>
                                                <td>  
                                                    {{-- {{ Form::label('vaccine','Vaccine',['class'=>'label label-primary']) }}  --}}
                                                    <button class="fa fa-edit btn btn-info moneyreceipt_class" target="_blank" data-id="{{ $report->id }}" data-price="{{ $report->price }}" data-qty="{{ $report->qty }}"></button>
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
    <div id="moneyreceipt_modal" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-lg  animated swing">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                        <h4 class="modal-title" id="myLargeModalLabel">Purchase History</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        <form action="{{route('purchase.update')}}" method="post">
                            @csrf
                            <table class="table table-hover" id="moneyreceipt_data_add">
                                
    
                               
                            </table>
    
                        </div>
                    </div>
    
                    <div class="modal-footer">
                        <button data-bb-handler="cancel" type="button" class="btn btn-default">Cancel</button>
                        <button  type="submit" class="btn btn-primary duepayment">Change Purchase History</button>
                    </div>
                </form>
    
                </div>
            </div>
        </div>

        
       

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
            var price = $(this).attr('data-price');
            var qty = $(this).attr('data-qty');
            var response=`<tr><td style="min-width:10px"> </td>
        <th> Prevoius Qty:</th><th>`+qty+`</th><td> <input type="hidden" name="purchase_id" value="`+id+`"> <input type="number" name="qty" min="1" value="`+qty+`" class="form-control-sm"></td><td style="min-width:10px"></td>
    </tr><tr><td style="min-width:10px"></td>
        <th> Prevoius Price:</th><th>`+price+`</th><td><input type="number" name="price" min="1" value="`+price+`" class="form-control-sm"></td><td style="min-width:10px"></td>
        </tr>`;

        $("#moneyreceipt_data_add").html(response);
        $("#moneyreceipt_modal").modal("show");

            });

        /* UPDATE Category END */

    </script>




@endsection