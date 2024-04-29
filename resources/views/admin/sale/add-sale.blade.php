@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">New Sale</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Sale</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Sale Management </h3>
                            </div>
                            <div class="panel-body">
                                {{-- Product Name search Button --}}
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

                                        {{-- First Row For Product Search --}}
                                        <div class="row">

                                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active">
                                                            <a data-toggle="tab" href="#home" class="btn btn-primary" style="font-weight: bold;letter-spacing: 2px;">SIGLE SALE</a>
                                                        </li>
                                                        <li>
                                                            <a data-toggle="tab" href="#menu1" class="btn btn-primary" style="font-weight: bold;letter-spacing: 2px;">SERIAL SALE</a>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content">
                                                        <div id="home" class="tab-pane fade in active">
                                                            <br>
                                                          {{ Form::text('fbarcode',null,['class'=>'form-control sigleinput','id'=>'fbarcode','placeholder'=>'SINGLE BARCODE','onchange'=>'singlechange()'])}}

                                                        </div> <!-- Home End -->
                                                        


                                                        <div id="menu1" class="tab-pane fade">
                                                          <div class="row">
                                                                <br>

                                                            <div class="col-lg-6 col-sm-5 col-md-5 col-xs-12 singlediv">

                                                              {{ Form::text('fbarcode',null,['class'=>'form-control serialinput','id'=>'start_barcode','placeholder'=>'START BARCODE','onchange'=>'serialchange()'])}}

                                                            </div>


                                                            <div class="col-lg-6 col-sm-5 col-md-5 col-xs-12 singlediv">
                                                              

                                                              {{ Form::text('fbarcode',null,['class'=>'form-control serialinput','id'=>'end_barcode','placeholder'=>'END BARCODE','onchange'=>'serialchange()'])}}

                                                            </div>

                                                          </div><!-- row End -->
                                                        </div><!-- menu1 End -->
                                                    </div>
                                            </div>
                                        </div>
                                        {{-- Row Search End --}}

                                        {{-- Added Product View  --}}
                                                <span style="display: block;height: 40px;width: 100%;background: #fff;"></span>

                                        <div class="row">

                                            <table class="table table-striped">
                                                <thead>
                                                  <tr>
                                                    <th>SL</th>
                                                    <th>Barcode</th>
                                                    <th>Pro.Code</th>
                                                    <th>Name</th>
                                                    <th>Brand</th>
                                                    <th>Origin</th>
                                                    <th>Karat</th>
                                                    <th>Status</th>
                                                    <th>Price</th>
                                                    <th>Qty</th>
                                                    <th>Sub-total</th>
                                                    <th>Action</th>
                                                  </tr>
                                                </thead>
                                                <tbody id="saleitem">
                                                  
                                                </tbody>
                                            </table>
                                        </div>
                                        {{-- Price Weight , Weight-amount Row End From Here --}}


                                    </div>{{-- left div end--}}

                                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                        
                                        {{-- Customer Information --}}
                                        <h4 class="bg-primary text-center" style="padding:10px 0;">Customer Information</h4>
                                        <div class="row">
                                            {{ Form::open(['route'=>'sale.store','method'=>'post','enctype'=>'multipart/form-data'])}}
                                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                
                                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                <div class="row">
                                                    {{ Form::label('customername','Customer Note : ',['class'=>'label-control']) }}
                                                    {{ Form::textarea('sale_note','Thank you so much for stay with Vaccine home bd.',['class'=>'form-control','rows'=>2,'cols'=>8,'placeholder'=>'Thank you so much for buy from here']) }}
                                                    {{ Form::hidden('product_type','vaccine')}}
                                                </div>
                                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                <div class="row">
                                                    {{ Form::label('customername','Payment Type : ',['class'=>'label-control']) }}
                                                    {{ Form::select('payment_type',[''=>'SELECT PAYMENT TYPE','cash'=>'CASH','bkash'=>'Bkash','card'=>'Credit Card','check'=>'Bank Check'],false,['class'=>'form-control','id'=>'payment_type','required']) }}
                                                    <hr>
                                                    {{ Form::text('bkash_code',null,['class'=>'form-control','id'=>'bkash_code','placeholder'=>'TrxID : 5XTV45CD']) }}
                                                </div>


                                            </div> {{-- payment and note end --}}


                                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                    {{ Form::label('customer_serach','Old Customer Search : ',['class'=>'bg-primary form-control']) }}
                                                    {{ Form::select('customer_id',$Customer,false,['class'=>'form-control customer_select2','multiple','id'=>'customer_id']) }}
                                                </div>
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                    <div class="form-group">
                                                        {{ Form::label('customername','Customer Name : ',['class'=>'label-control']) }}
                                                        {{ Form::text('customer_name',null,['class'=>'form-control','id'=>'customer_name','placeholder'=>'Ex. Mr.X','required']) }}
                                                    </div>
                                                </div>

                                                 <div class="col-lg-12 col-sm-12 ">
                                                    <div class="form-group {{$errors->has('customerimage') ? 'has-error' : ''}}">

                                                        {{ Form::label('Customerimage','Customer Image : ',['class'=>'control-label'])}}
                                                        {{ Form::file('customerimage',['class'=>'form-control'])}}
                                                        @if ($errors->has('customerimage'))
                                                            <span class="help-block">
                                                                 <strong>{{ $errors->first('customerimage') }}</strong>
                                                            </span>
                                                        @endif
                                                        <hr>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                    <div class="form-group {{ $errors->has('phone') ? "has-error" : "" }}">
                                                        {{ Form::label('customername','Phone : ',['class'=>'label-control']) }}
                                                        {{ Form::text('phone',null,['class'=>'form-control','id'=>'customer_phone','placeholder'=>'Ex : 123456789','required']) }}
                                                         @if ($errors->has('phone'))
                                                            <span class="help-block">
                                                                 <strong>{{ $errors->first('phone') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                    <div class="form-group">
                                                        {{ Form::label('customername','Address : ',['class'=>'label-control']) }}
                                                        {{ Form::textarea('customer_address',null,['class'=>'form-control','id'=>'customer_address','placeholder'=>'Ex : Customer Address','rows'=>5,'cols'=>10]) }}
                                                    </div>
                                                </div>

                                            </div> {{-- customer end --}}


                                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                <h4 class="text-center bg-primary" style="padding:10px 0;">Sale Information :  </h4>
                                                    <table  class="table table-bordered table-condensed">
                                                        <tbody>
                                                            <tr>
                                                                <td class="bg-primary text-left" style="width:40%">Total Amount : </td>
                                                                <td class=" text-left">
                                                                    {{ Form::number('total_amount',null,['id'=>'total_price','class'=>'form-control text-center','placeholder'=>'Ex : 00 Tk','readonly']) }}                                    </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="bg-primary text-left" style="width:40%">Discount : </td>
                                                                <td class=" text-left">
                                                                  {{ Form::number('total_discount',0,['id'=>'total_discount','class'=>'form-control text-center','placeholder'=>'Ex : 00 Tk','required']) }}
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="bg-primary text-left" style="width:40%">Balance : </td>
                                                                <td class="text-left">
                                                                    {{ Form::number('total_balance',null,['id'=>'total_balance','class'=>'form-control text-center','placeholder'=>'Ex : 00 Tk','readonly']) }}
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="bg-primary text-left" style="width:40%">After Discount : </td>
                                                                <td class="text-left">
                                                                    {{ Form::number('afterdiscount',null,['id'=>'afterdiscount','class'=>'form-control text-center','placeholder'=>'Ex : 00 Tk','readonly']) }}
                                                                </td>
                                                            </tr>


                                                            <tr>
                                                                <td class="bg-primary text-left" style="width:40%">Making Charge  : </td>
                                                                <td class="text-left">
                                                                    {{ Form::number('making_charge',0,['id'=>'makingcharge','class'=>'form-control text-center','placeholder'=>'Ex : 00 Tk','required']) }}
                                                                </td>
                                                            </tr>


                                                            <tr>
                                                                <td class="bg-primary text-left" style="width:40%">Total Less  : </td>
                                                                <td class="text-left">
                                                                    {{ Form::number('total_less',0,['id'=>'total_less','class'=>'form-control text-center','placeholder'=>'Ex : 00 Tk','required']) }}
                                                                </td>
                                                            </tr>



                                                            <tr>
                                                                <td class="bg-primary text-left" style="width:40%">Total Paid : </td>
                                                                <td class="text-left">
                                                                    {{ Form::number('total_paid',null,['id'=>'total_paid','class'=>'form-control text-center','placeholder'=>'Ex : 00 Tk','required']) }}                                                        </td>
                                                            </tr>

                                                            <tr id="payment_date">
                                                                <td class="bg-primary text-left" style="width:40%">Payment Date : </td>

                                                                <td>
                                                                    <input type="text" name="payment_deadline" class="form-control pull-right pdate" id="datepicker" >
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="text-left"></td>
                                                                <td class="text-left">
                                                                    <button type="submit" class="btn btn-primary form-control" >SALE NOW</button>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                    {{ Form::close()}}

                                            </div> {{-- sale information end --}}

                                        </div> {{-- Customer Information Row End --}}
                                        
                                    </div>
                               </div>{{-- Right div end--}}
                           </div>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#payment_date").hide();
            $("#datepicker").datepicker({
                minDate:0,
            });

            SaleCart();
            $("#bkash_code").hide();
            $('.customer_select2').select2({tags:true,maximumSelectionLength : 1});
            $(".sigleinput").css({ "background": "#25476a", "text-align": "center", "font-size":" 2rem", "padding":" 10px", "color": "#fff","font-weight": "bold" , "font-style": "italic"});
            $(".serialinput").css({ "background": "#25476a", "text-align": "center", "font-size":" 2rem", "padding":" 10px", "color": "#fff","font-weight": "bold" , "font-style": "italic"});

            /* without number press block start */

            $('#fbarcode').bind('keypress', function (event) {
                var regex = new RegExp("^[0-9]+$");
                var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
                if (!regex.test(key)) {
                   event.preventDefault();
                   return false;
                }
            });

            $('#sbarcode').bind('keypress', function (event) {
                var regex = new RegExp("^[0-9]+$");
                var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
                if (!regex.test(key)) {
                   event.preventDefault();
                   return false;
                }
            });

            $('#ebarcode').bind('keypress', function (event) {
                var regex = new RegExp("^[0-9]+$");
                var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
                if (!regex.test(key)) {
                   event.preventDefault();
                   return false;
                }
            });
            /* without number press block end here */
        });

        $(document).on('keyup change',"#makingcharge",function(){

            var makingcharge = $(this).val();
            var total_price = $("#total_price").val();
            var total_discount = $("#total_discount").val();
            var afterdiscount =Number(total_price)-Number(total_discount);
            var amount = Number(afterdiscount)+Number(makingcharge);

            $("#total_balance").val(amount.toFixed(2));
        });




        $(document).on('keyup change',"#total_less",function(){

            var total_less = $(this).val();

            var makingcharge = $("#makingcharge").val();

            var afterdiscount = $("#afterdiscount").val();
           
            var amount = Number(afterdiscount)+Number(makingcharge);

             var af =Number(amount)-Number(total_less);

            $("#total_balance").val(af.toFixed(2));
        });


        


        


        


        /* Single sale start */

        function singlechange(){
            var barcode = $("#fbarcode").val();
            $("#rowid"+barcode).css("color",'navy-blue');
            $.ajax({
                method:"post",
                url:"{{ route('sale.barcode')}}",
                data:{barcode:barcode,"_token":"{{ csrf_token() }}"},
                dataType:"html",
                success:function(response){
                    $("#fbarcode").val("");

                    if(response.length == 12){
                        $.notify("Already added this : "+response+" in Sale Cart", {globalPosition: 'bottom right',className: 'primary'});
                        $("#rowid"+response).css({
                            "border": "4px red !important",
                            "overflow": "hidden",
                            "background": "#000",
                            "color": "white"
                        });
                    }else if(response.length == 14){
                        $.notify("No Record found for this : "+response+" in Database", {globalPosition: 'bottom right',className: 'success'});
                        alert("No Record Found for this ");
                    }else if(response == "goldmaker"){
                        $.notify("This product already given to Gold Maker", {globalPosition: 'bottom right',className: 'success'});
                        alert("This product already given to Gold Maker");
                    }else{
                        $("#saleitem").html(response);
                    }
                    // console.log(response.size[0]['name']);
                },
                error:function(err){
                    console.log(err);
                }
            });

        }

        /* Single Sale End */



        /* Serial Sale Start */

        function serialchange(){
            var start = $("#start_barcode").val();
            var end = $("#end_barcode").val();
            if(start !="" && end !=""){
                /* compare start is smaller then end value */
                if(start<end){

                    /* SERIAL SALE AJAX REQUEST FIRE FROM HERE */
                    $.ajax({
                        method:"post",
                        url:"{{ route('sale.barcode-serial')}}",
                        data:{start:start,end:end,"_token":"{{ csrf_token() }}"},
                        dataType:"html",
                        success:function(response){

                            $("#start_barcode").val("");
                            $("#end_barcode").val("");
                            $("#fbarcode").val("");

                            if(response.length == 12){
                                $.notify("Already added this : "+response+" in Sale Cart", {globalPosition: 'bottom right',className: 'primary'});
                                $("#rowid"+response).css({
                                    "border": "4px red !important",
                                    "overflow": "hidden",
                                    "background": "#000",
                                    "color": "white"
                                });
                            }else if(response.length == 14){
                                $.notify("No Record found for this : "+response+" in Database", {globalPosition: 'bottom right',className: 'success'});
                                alert("No Record Found for this ");
                            }else if(response == "goldmaker"){
                                $.notify("This product already given to Gold Maker", {globalPosition: 'bottom right',className: 'success'});
                                alert("This product already given to Gold Maker");
                            }else{
                                $("#saleitem").html(response);
                            }
                        },
                        error:function(err){
                            console.log(err);
                        }
                    });

                    /* SERIAL SALE AJAX REQUEST END FROM HERE */
                }else{
                    alert("START AND END BARCODE NEVER BE EQUAL OR START BARCODE CANT LARGER THEN END BARCOD");
                }
            }

        }

        /* Serial Sale Start */


        /* Sale Now Start */



        /* Sale Now End */


        function SaleCart()
        {
            $.ajax({
                url:"{{route('sale.find')}}",
                dataType:"html",
                success:function(response){
                    $("#saleitem").html(response);
                },
                error:function(er){
                    console.log(er);
                }
            });
        }

        /* Barcode Select and Fire every single Field Start  */

        $(document).on('change','#barcode',function(){
            var barcode = $(this).val();

            $.ajax({
                method:"post",
                url:"{{ route('sale.barcode')}}",
                data:{barcode:barcode,"_token":"{{ csrf_token() }}"},
                dataType:"html",
                success:function(response){
                    if(response == 'exit'){
                        $("tbody #barcode").setAttr("class",'has-error');
                    }
                    console.log(response);

                    // console.log(response.size[0]['name']);
                },
                error:function(err){
                    console.log(err);
                }
            });

        });

        /* Barcode Select and Fire every single Field Ebd  */

        /* item remove from list start */

        function itemremove(id){
            
            var data = confirm("Press 'OK' for Delete/remove from Bucket List");
            if(data){
                var rowId = $("#removelist"+id).attr('data-id');
                var token = '{{ csrf_token() }}';
                $.ajax({
                    method:"post",
                    url:"{{ route('sale.remove') }}",
                    data:{rowId:rowId,"_token":token},
                    dataType:"html",
                    success:function(response){
                        $("#saleitem").html(response);
                    },
                    error:function(err){
                        console.log(err);
                    }
                });
            }
           
        }
      
        /* item remove from list end */

        $(document).on('change','#payment_type',function(){
            var type = $(this).val();
            if(type == 'bkash'){
                $("#bkash_code").show(500).attr("class","btn btn-primary form-control");
            }else{
                $("#bkash_code").hide(500);

            }
        });


       $(document).on('keyup','#total_discount',function() {
        $("#total_paid").val(0);
            var total_amount = $("#total_price").val();

            var discount = $(this).val();
            var balance = Number(total_amount) - Number(discount);
            var makingcharge = $("#makingcharge").val();
            var amount = Number(balance)+Number(makingcharge);
            if(balance>0){
                $("#total_balance").css({"border": "2px red","background": "red","color": "#fff","font-size": "1.5rem","font-weight": "bold"});
               
            }else{
                 $("#total_balance").css(
                    {"border": "2px green","background": "#fff","color": "#000","font-size": "1.5rem","font-weight": "bold"}
                );
            }
            $("#total_balance").val(amount.toFixed(2));
            $("#afterdiscount").val(amount.toFixed(2));
        });


        $(document).on('keyup','#total_paid',function() {


            var total_amount = $("#afterdiscount").val();

            var makingcharge = $("#makingcharge").val();

            var amount = Number(total_amount)+Number(makingcharge);

            var total_less = $("#total_less").val();

            var total_value  = $(this).val();

            var paid_amount = Number(total_value)+Number(total_less);

            var bal = Number(amount)-Number(paid_amount);

            if(bal>0){
                $("#payment_date").show(500);
                $("#total_balance").css({"border": "2px red","background": "red","color": "#fff","font-size": "1.5rem","font-weight": "bold"});
            }else{
                $("#payment_date").hide(500);

                $("#total_balance").css({"border": "2px green","background": "#fff","color": "#000","font-size": "1.5rem","font-weight": "bold"});
            }
            $("#total_balance").val(bal.toFixed(2));
        });


        /* CUSTOMER INFORMATION FETCH AJAX REQUEST START */
         /* suppliers search start */

        $(document).on('change','#customer_id',function(){
            $("#customer_name").val("");
            $("#customer_phone").val("");
            $("#customer_address").val("");

            var customer_id = $(this).val();
            var token = "{{ csrf_token() }}";
            $.ajax({
                method:"post",
                url:"{{route('customer.search')}}",
                data:{customer_id:customer_id,"_token":token},
                dataType:'json',
                success:function(response){
                    
                    $("#customer_name").val(response[0].name);
                    $("#customer_phone").val(response[0].phone);
                    $("#customer_address").val(response[0].address);
                    console.log("Response List : "+response[0].id);
                },
                error:function(err){console.log("Error List : "+err);}
            });

        });

        /* suppliers search end */

        /* CUSTOMER INFORMATION FETCH AJAX REQUEST END */


    </script>
@endsection