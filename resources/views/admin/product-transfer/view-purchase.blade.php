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
                                            <th>Inv.No</th>
                                            <th>Supplier</th>
                                            <th>Vaccine</th>
                                            <th>Price </th>
                                            <th>MRP </th>
                                            <th>Qty </th>
                                            <th>Bonus </th>
                                            <th>Sub-Total </th>
                                            <th>Image</th>
                                            <th>Type</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=0; $vg=0;$ag=0;$rg=0;$mg=0;   $total=0; @endphp
                                        
                                        
                                        @foreach($purchases as $report)
                                     

                                            <tr>
                                                <td> {{ ++$i }}</td>
                                                <td><label class="label label-info"> {{ $report->invoice->invoice_no }} </label> </td>
                                                <td> {{ $report->invoice->supplier->name }} - ( {{$report->invoice->supplier->phone}} ) </td>
                                                <td> {{ $report->product->name }} </td>
                                                <td> {{ $report->price }} tk </td>
                                                <td> {{ $report->mrp }} tk </td>
                                                <td> {{ $report->qty }} piece </td>
                                                <td> {{ $report->bonus }} piece </td>
                                                <td> {{ $report->price*$report->qty }} tk </td>
                                                <td>
                                                    <img src="{{ url("public/admin/product/upload/".$report->product->image) }}" style="height: 50px;width: 50px;">
                                                </td>
                                                <td>  {{ Form::label('vaccine','Vaccine',['class'=>'label label-primary']) }} </td>

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

        $(document).on('click','.activestatus',function(){
            var id = $(this).attr('data-id');
            $('#product_status').modal('show');
            $("#status_id").val(id);
            console.log("Fire Console : "+$(this).attr('data-id'));
        });

        /* UPDATE Category END */

    </script>




@endsection