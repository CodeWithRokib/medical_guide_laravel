@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">View Stock Smmary</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Stock</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="loader" style=" overflow: hidden; width: 100%; margin: auto;text-align: center;position: absolute;top: 25%;
        z-index: 999;">
                    <img src="{{ url('public/admin/loader/loader.gif') }}">
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Stock </h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                   {{-- <div class="col-lg-offset-2 col-lg-8 col-sm-6 col-md-6 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-xs-12 {{$errors->has('product_name') ? 'has-error' : ''}}">
                                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                {{ Form::label('warehouse','Warehouse Select  : ',['class'=>'control-label'])}}

                                                <select class="form-control" name="warehouse_id" id="warehouse">
                                                    <option value=null>All</option>
                                                    @foreach($warehouses as $warehouse)
                                                        <option value="{{$warehouse->id}}">{{$warehouse->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-xs-12 {{$errors->has('product_type') ? 'has-error' : ''}}">
                                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                {{ Form::label('product_type','Product Type',['class'=>'control-label'])}}
                                                {{ Form::select('product_type',['vaccine'=>'Vaccine','other'=>'Other Product'],null,['class'=>'form-control ','required','id'=>'product_type','placeholder'=>'Select product type'])}}
                                            </div>
                                        </div>


                                        <div class="row"> <span style="height: 10px; display: block;width: 100%;background: #fff"></span> </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-xs-12 {{$errors->has('product_name') ? 'has-error' : ''}}">
                                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                {{ Form::label('product','Product',['class'=>'control-label'])}}
                                                <select id="product_id" name="product_id" class="form-control select2">

                                                </select>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" style="float: right;">
                                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                <div id="demo-dp-range">
                                                    {{ Form::label("em","Select Date",['class'=>'label-control']) }}
                                                    <div class="input-daterange input-group" id="datepicker">
                                                        {{ Form::text('start',old('start'),['class'=>'form-control select2','id'=>'start','placeholder'=>'From','required']) }}
                                                        <span class="input-group-addon">to</span>
                                                        {{ Form::text('end',old('end'),['class'=>'form-control','id'=>'end','placeholder'=>'To','required']) }}

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-offset-4 col-lg-2 col-sm-4 col-md-4 col-xs-12" style="margin-top: 21px">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            <div class="form-group">
                                                <button class="btn btn-info form-control" type="button" id="madd_bucket">
                                                    SUBMIT
                                                </button>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="col-lg-12 col-xs-12">
                                        <span style="width:100%;height: 20px;display: block;"></span>
                                    </div>
                                       
                                    <div class="col-lg-12 col-sm-12 col-md-12 table-responsive">
                                        <table class="table table-bordered table-striped" id="stockTable">
                                            <thead >
                                                <tr>
                                                    <th class="bg-mint text-center" style="font-size: 1.5rem; color: #fff;" >SL</th>
                                                    <th class="bg-mint text-center" style="font-size: 1.5rem; color: #fff;">Warehouse</th>
                                                    <th class="bg-mint text-center" style="font-size: 1.5rem; color: #fff;">Product</th>
                                                    <th class="bg-mint text-center" style="font-size: 1.5rem; color: #fff;">Qty </th>
                                                    <th class="bg-mint text-center" style="font-size: 1.5rem; color: #fff;">Market Value</th>
                                                </tr>
                                            </thead>
                                            <tbody id="allstocknm" class="text-center">
                                                    @forelse($return_data as $key=>$data)
                                                    <tr>
                                                        <td>{{ $key+1 }}</td>
                                                        <td>{{ $data['warehouse'] }}</td>
                                                        <td>{{ $data['name'] }}</td>
                                                        <td>{{ $data['total'] }}</td>
                                                        <td>{{ $data['total_price'] }}</td>
                                                    </tr>
                                                    @empty
                                                    <tr><td colspan="5">There is no Product In Stock</td></tr>
                                                    @endforelse
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
    <style type="text/css">

    </style>

    <script>
        xyz = '';
        $(document).ready(function(){

            xyz = $("#stockTable").DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf','print'
                ]
            });

            $(".loader").css("display","none");
//            ViewStock();
            $("#product_id").select2({
                placeholder: 'Select Product'
            });
            $("#warehouse").select2({
                placeholder: 'Select Warehouse'
            });
        });

        $("#product_type").change(function () {
            var product_type = $('#product_type').val();
            $.ajax({
                method:'post',
                url:"{{route('product.stock.search')}}",
                data:{product_type:product_type,_token:"{{ csrf_token() }}"},
                success:function (data) {
                    $('#product_id').html(data);
                }
            });
        });

        $('#add_bucket').on('click',function () {
            var product_id = $('#product_id').val();
            var warehouse_id = $('#warehouse').val();
            var product_type = $('#product_type').val();
            var from = $('#start').val();
            var to = $('#end').val();

            xyz.clear().draw();

            $.ajax({
                type:"post",
                url:"{{route('stock.vaccine')}}",
                data:{product_id:product_id,warehouse_id:warehouse_id,product_type:product_type,from:from,to:to,_token:"{{ csrf_token() }}"},
                //dataType:"json",
                success:function(rep){
                    var json = JSON.parse(rep);
                    console.log(json.length-1);
                    
                    var last_index = json.length-1;
                    
                    for (i=0;i<json.length;i++){
                        
                        if(i==last_index){
                            xyz.row.add([
                                json[i].sl,
                                json[i].warehouse,
                                json[i].name,
                                json[i].total,
                                json[i].total_price
                            ]).draw(false);
                            
                            xyz.row.add([
                                json[i].sl+1,
                                '',
                                'Total = ',
                                json[i].available,
                                ''
                            ]).draw(false);
                        }else{
                            
                            xyz.row.add([
                                json[i].sl,
                                json[i].warehouse,
                                json[i].name,
                                json[i].total,
                                json[i].total_price
                            ]).draw(false);
                        }
                        
                    }


                    //console.log(typeof rep.result);
                    /*$.each(rep.result,function(index,value){
                        console.log(value.sl);
                        xyz.row.add([
                            value.sl,
                            value.warehouse,
                            value.name,
                            value.total,
                            value.total_price
                        ]).draw(false);

            
                    });*/
                    
                    // $("#allstock").html(rep);

                },
                error:function(err){
                    console.log(err);
                }
            });
        });


        // function ViewStock() {
        //     $.ajax({
        //         url:"{{route('stock.vaccine')}}",
        //         dataType:"html",
        //         success:function(response){
        //             //$("#allstock").html(response);
        //         },
        //         error:function(err){
        //             console.log(err);
        //         }
        //     });
        // }

        $(document).ready(function(){
            $('#datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
            $("#protable").DataTable();
        });


        </script>

@endsection