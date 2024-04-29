@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow"> View SALE</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">SALE</li>
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
                                            <th>Name</th>
                                            <th>Price </th>
                                            <th>Qty</th>
                                            <th>Rate</th>
                                            <th>Vori/Ana/Roti </th>
                                            <th>Karat </th>
                                            <th>Origin </th>
                                            <th>Image</th>
                                            <th>Type</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=0; @endphp
                                        @foreach($sales as $report)

                                            <tr>
                                                <td> {{ ++$i }}</td>
                                                <td> {{ $report->invoice_id }}</td>
                                                <td> {{ $report->Product->product_name }} </td>
                                                <td> {{ $report->product_price }} </td>
                                                <td> {{ $report->product_qty }} </td>
                                                <td> {{ $report->total_price }} </td>
                                                <td> ভরি = {{ $report->vori}}  , আনা = {{  $report->ana }} ,  রতি = {{ $report->roti }}  

                                                    @if($report->miliroti == 5)
                                                        - (1/2)
                                                    @else
                                                        
                                                    @endif

                                                    <?php

                                                        $vori = $report->vori;
                                                        $ana = $report->ana;
                                                        $roti = $report->roti;
                                                        $miliroti = $report->miliroti;



                                                        if($vori !=0){
                                                            $vg = 11.664*$vori;
                                                        }else{

                                                        }

                                                        if($ana !=0){
                                                            $ag = $ana*0.73;
                                                        }else{
                                                            $ag=0;
                                                        }

                                                        if($roti !=0){
                                                            $rg = $roti*0.1215;
                                                        }else{
                                                            $rg=0;
                                                        }

                                                        if($miliroti !=0){
                                                            $mg = $miliroti*0.01215;
                                                        }else{
                                                            $mg=0;
                                                        }

                                                       echo $vg+$ag+$rg+$mg." gm";


                                                    ?>
                                                </td>
                                                <td> {{ $report->Product->karat->karat_size }} </td>
                                                <td> {{ $report->Product->origin->name }} </td>
                                                <td><img src="{{ url("public/admin/product/upload/".$report->Product->product_image) }}" style="height: 80px;width: 80px;"></td>
                                                <td> {{ $report->Product->gold_type->name }} </td>
                                                <td>
                                                    <button type="button" class="fa fa-edit btn btn-primary"></button>
                                                    ||
                                                    <button type="button" class="fa fa-edit btn btn-danger"></button>
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