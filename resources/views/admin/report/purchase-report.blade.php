@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Vaccine Sale / Purchase Report</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Report</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Vaccine Sale / Purchase Report</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">

                                    <div class="col-lg-offset-1 col-lg-10 col-sm-6 col-md-6 col-xs-12" style="">
                                        {{ Form::open(['route'=>'show_report','method'=>'post','id'=>'report_form']) }}
                                            <!--  PRODUCT NAME  -->

                                            <div class="col-lg-2 col-sm-4 col-xs-12 {{$errors->has('warehouse_id') ? 'has-error' : ''}}">
                                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                {{ Form::label('warehouse_id','Warehouse  :* ',['class'=>'control-label'])}}
                                                {{ Form::select('warehouse_id',$warehouses,false,['class'=>'form-control ','placeholder'=>'All','required','id'=>'warehouse_id'])}}
                                            </div>

                                            <div class="col-lg-2 col-sm-4 col-xs-12 {{$errors->has('product_type') ? 'has-error' : ''}}">
                                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                {{ Form::label('product_type','Product Type',['class'=>'control-label'])}}
                                                {{ Form::select('product_type',['vaccine'=>'Vaccine','other'=>'Health Product'],null,['class'=>'form-control ','required','id'=>'product_type','placeholder'=>'Select product type'])}}
                                            </div>

                                            <div class="col-lg-2 col-sm-4 col-xs-12 ">
                                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                {{ Form::label('type','Sale/Purchase report type:* ',['class'=>'control-label'])}}
                                                {{ Form::select('type',['sale'=>'Sale report','purchase'=>'Purchase report'],false,['class'=>'form-control ','required','id'=>'type'])}}
                                            </div>
                                            <div class="col-lg-2 col-sm-4 col-xs-12 ">
                                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                {{ Form::label('product_id','Product Name:* ',['class'=>'control-label'])}}
                                                <select id="product_id" name ="product_id" class="form-control select2">

                                                </select>
                                            </div>
                                            {{--<div class=""></div>--}}
                                            <div class="col-lg-4 col-sm-6 col-md-6 col-xs-12" style="float: right;">
                                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                <div id="demo-dp-range">
                                                    <label for="em" class="label-control">Query Date:</label>
                                                    <div class="input-daterange input-group" id="datepicker">
                                                        <input class="form-control" id="start" placeholder="From" required="" name="start" type="text">
                                                        <span class="input-group-addon">to</span>
                                                        <input class="form-control" id="end" placeholder="To" required="" name="end" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12" style="margin-left: 35%;margin-top: 50px">
                                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                <div class="form-group">
                                                    <button class="btn btn-info form-control" type="button" id="show_report">
                                                        Show Report
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- / PRODUCT NAME  -->
                                        {{Form::close()}}
                                    </div>


                                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                        <table class="table table-bordered table-striped" id="reportTable">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Invoice No</th>
                                                    <th>Warehouse</th>
                                                    <th>Vaccine</th>
                                                    <th>Customer Name - Mobile</th>
                                                    <th>Price</th>
                                                    <th>Transfer</th>
                                                    <th>Qty</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody id="sale_report">
                                            </tbody>
                                            <tfoot id="tfootSale">
                                                <tr class="bg-mint">
                                                    <td class="bg-mint"></td>
                                                    <td class="bg-mint"></td>
                                                    <td class="bg-mint"></td>
                                                    <td class="bg-mint"></td>
                                                    <td class="bg-mint"></td>
                                                    <td class="bg-mint"></td>
                                                    <td class="bg-mint"></td>
                                                    <td class="bg-mint">Total Sale : </td>
                                                    <td class="bg-mint" > <p id="totalSold" style="display: inline-block;"> 0 </p> TK </td>
                                                </tr>

                                            </tfoot>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var t = '';
        $(document).ready(function(){
             t = $('#reportTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf','print'
                ]
            });



            $('#datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
            $("#protable").DataTable();
            $("#product_id").select2({
                placeholder: 'Select Product'
            });
            $("#product_type").select2({
                placeholder: 'Select Product'
            });
        });

        $(document).on("click","#findreportsale",function () {
            var start = $("#start").val();
            var end = $("#end").val();

            if (start != "" && end !=""){
                $.ajax({
                    method:"post",
                    url:"{{ route('report.salesearch') }}",
                    data:{from:start, to:end, "_token":"{{ csrf_token() }}"},
                    dataType:"html",
                    success:function (response) {
                        $("#sale_report").html(response);
                    },
                    error:function (err) {
                        console.log(err);
                    }
                });
            }

        });
        /* select category and load sub-category automatically end */

        $('#product_type').change(function () {
            var product_type = $('#product_type').val();
            $.ajax({
                method:"post",
                url:"{{ route('load_products') }}",
                data:{product_type:product_type, _token:"{{ csrf_token() }}"},
                dataType:"html",
                success:function (response) {
                    $("#product_id").html(response);
                },
                error:function (err) {
                    console.log(err);
                }
            });
        });

        $('#type').change(function () {
            var product_type = $('#product_type').val();
            var type = $('#type').val();
            $.ajax({
                method:"post",
                url:"{{ route('load_products') }}",
                data:{product_type:product_type,type:type, _token:"{{ csrf_token() }}"},
                dataType:"html",
                success:function (response) {
                    $("#product_id").html(response);
                },
                error:function (err) {
                    console.log(err);
                }
            });
        });


        $("#show_report").click(function (e) {
            e.preventDefault();
            var form=$("#report_form");
            t.clear().draw();
            $("#sale_report").html("<tr> <td colspan='7' style='text-align: center;font-size: 1.4rem;letter-spacing: 3px;text-transform: uppercase;background: #18A460;color:#fff;font-weight: bold;'>Please wait .... Result Loading....</td> </tr>");
            total = 0;
            $.ajax({
                method:"post",
                url:"{{ route('show_report') }}",
                data:form.serialize(),
                dataType:"json",
                success:function (response) {
                   // $("#sale_report").html(response);

                    alert(response.result.date.length);

                    if(response.result.size == 0){
                        $("#totalSold").text(0);
                        $("#sale_report").html("<tr> <td colspan='7' style='width: 100%;text-align: center;background: brown;color: #fff;font-size: 1.rem;text-transform: uppercase;font-weight: bold;letter-spacing: 33px;'>No data found</td> </tr>");
                    }else{
                        var i =0;
                        for (i;i<response.result.date.length;i++){
                            total= total+response.result.total[i];
                            t.row.add([
                                response.result.date[i],
                                response.result.invoice[i],
                                response.result.warehouse[i],
                                response.result.name[i],
                                response.result.customer[i],
                                response.result.price[i],
                                response.result.transfer[i],
                                response.result.qty[i],
                                response.result.total[i]
                            ]).draw(false);
                        } /* for loop end */
                        $("#totalSold").text(total);
                    }


                   /* t.row.add([
                       "","","","","Total Sale : ",total
                    ]).draw(false);*/
                    console.log("Total Sale : ",total);
                    total =0;

                   // $("#sale_report").append("Total Sale : "+total);
                },
                error:function (err) {
                    console.log(err);
                }
            });

            })
    </script>
@endsection
