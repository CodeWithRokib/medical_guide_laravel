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
                                            <th>Vaccine</th>
                                            <th>Price </th>
                                            <th>Qty </th>
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
                                                    <td> {{ $report->warehouse->name }}</td>
                                                    <td> {{ $report->invoice->invoice_no }}</td>
                                                    <td> {{ $report->product->name }} </td>
                                                    <td> {{ $report->invoice->supplier }} </td>
                                                    <td> {{ $report->price }} tk </td>
                                                    <td> {{ $report->qty }} piece </td>
                                                    <td> {{ $report->price*$report->qty }} tk </td>

                                                    <td><img src="{{ $report->Product->image !=null ? asset("public/admin/product/upload/".$report->Product->image) : asset("public/admin/product/upload/noimage.png") }}" style="height: 50px;width: 50px;"></td>

                                                    <td>
                                                        @if($report->dieseas_id == null)
                                                            {{ Form::label('vaccine','Other Product',['class'=>'label label-info']) }}
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

        $(document).on('click','.activestatus',function(){
            var id = $(this).attr('data-id');
            $('#product_status').modal('show');
            $("#status_id").val(id);
            console.log("Fire Console : "+$(this).attr('data-id'));
        });

        /* UPDATE Category END */

    </script>




@endsection