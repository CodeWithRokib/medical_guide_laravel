@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Add New Other-Pruduct Purchase</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Product</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="loader" style=" overflow: hidden; width: 100%; margin: auto;text-align: center;position: absolute;top: 5%;
        z-index: 999;left:-14%">
                        <img src="{{ url('public/loader/6.gif') }}">
                    </div>
                    <div class="panel">

                        <div class="panel-heading">
                            <h3 class="panel-title">Add New Other-Pruduct Purchase</h3>
                        </div>


                        <div class="panel-body">
                            <div class="row">


                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                    <div class="row">

                                        <div class="col-lg-4 col-sm-4 col-xs-12 {{$errors->has('product_name') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('product','Vaccine/Product Name  :* ',['class'=>'control-label'])}}
                                            <select name="id" class="form-control" id='product_name'>
                                                @foreach($product as $pro)
                                                     <option value="{{ $pro->id }}">{{ $pro->name }}</option>
                                               @endforeach
                                            </select>
                                        </div>

                                        <div class="col-lg-4 col-sm-4 col-xs-12 {{$errors->has('price') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('product','Quantity  :* ',['class'=>'control-label'])}}
                                            {{ Form::text('qty',1,['class'=>'form-control ','id'=>'qty','placeholder'=>'Qty : 1 qty','min'=>1])}}
                                        </div>

                                        <div class="col-lg-4 col-sm-4 col-xs-12 {{$errors->has('price') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('product','Price  :* ',['class'=>'control-label'])}}
                                            {{ Form::text('price',null,['class'=>'form-control ','id'=>'price','placeholder'=>'Tk : 100 tk'])}}
                                        </div>

                                        <div class="col-lg-4 col-sm-4 col-xs-12 {{$errors->has('mrpprice') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('product','MRP Price  :* ',['class'=>'control-label'])}}
                                            {{ Form::text('price',null,['class'=>'form-control ','id'=>'mrpprice','placeholder'=>'Tk : 100 tk'])}}
                                        </div>


                                    </div> {{-- Product COde and Product Name Search Row End --}}

                                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                        <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                        <div class="form-group">
                                            <button class="btn btn-info form-control" type="button" id="add_bucket">
                                                Add To Bucket
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 pull-right">
                                    <h1 class="text-center bg-primary">Bucket List</h1>
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Qty </th>
                                            <th>Price</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody id="all_cart_item">

                                        </tbody>
                                    </table>
                                    <hr>

                                    {{-- suplier information added start from here --}}

                                    <div class="row">
                                        {{ Form::open(['route'=>'otherpurchase.store','method'=>'post','enctype'=>'multipart/form-data']) }}
                                        <h4 class="text-center bg-primary" style="padding: 8px 0">Supplier Information : </h4>
                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                            {{ Form::label('searchsupplier','Search Supplier',['class'=>'label-control']) }}

                                            <select id="supplier_id" name="supplier_id" class="form-control">
                                                <option>SELECT SUPPLIER</option>
                                                @foreach($supplier as $sup)
                                                    <option value="{{ $sup->id }}">{{ $sup->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-xs-12 {{ $errors->has('supplier_name') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('customername','Supplier Name : ',['class'=>'label-control']) }}
                                            {{ Form::text('supplier_name',null,['class'=>'form-control','id'=>'supplier_name','placeholder'=>'Ex. Mr.xyz']) }}

                                            @if($errors->has('supplier_name'))
                                                <span class="help-block">
                                                     <strong>{{ $errors->first('supplier_name') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-xs-12 {{ $errors->has('phone') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('customerphone','Supplier Phone : ',['class'=>'label-control']) }}
                                            {{ Form::text('phone',null,['class'=>'form-control','placeholder'=>'Ex : 923584596','id'=>'supplier_phone']) }}
                                            @if($errors->has('phone'))
                                                <span class="help-block">
                                                     <strong>{{ $errors->first('phone') }}</strong>
                                                </span>
                                            @endif
                                        </div>


                                        <div class="col-lg-12 col-sm-12 col-xs-12">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('customeraddress','Supplier Address : ',['class'=>'label-control']) }}
                                            {{ Form::textarea('Supplier_address',null,['id'=>'supplier_address','class'=>'form-control','placeholder'=>'New York City','rows'=>5,'cols'=>'10']) }}
                                        </div>
                                    </div>


                                    {{-- Suplier information added end from here --}}

                                    <div class="row">
                                        <h4 class="text-center bg-primary" style="padding: 8px 0">Buy Information : </h4>
                                        <div class="col-lg-12 col-sm-12 col-xs-12">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            <div class="row">
                                                {{ Form::label('customername','Customer Note : ',['class'=>'label-control']) }}
                                                {{ Form::textarea('sale_note','Thank you so much for stay with Vaccine Home Shop',['class'=>'form-control','rows'=>2,'cols'=>8,'placeholder'=>'Thank you so much for buy from here']) }}
                                            </div>
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            <div class="row">
                                                {{ Form::label('customername','Payment Type : ',['class'=>'label-control']) }}
                                                {{ Form::select('payment_type',[''=>'SELECT PAYMENT TYPE','cash'=>'CASH','bkash'=>'Bkash','rocket'=>'Rocket','card'=>'Credit Card','check'=>'Bank Check'],false,['class'=>'form-control','id'=>'payment_type']) }}
                                                <hr>
                                                {{ Form::text('trxId','',['class'=>'form-control bg-primary text-center','id'=>'trxId','placeholder'=>'Ex: T5x1G2']) }}
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12 col-xs-12">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            <table class="table-hover table table-bordered table-responsive">
                                                <tbody>



                                                {{-- Total amount of cart loop end from here --}}
                                                <tr>
                                                    <td> <span class="btn btn-primary">Total Amount : </span>  </td>
                                                    <td>
                                                        {{ Form::number('total_amount',null,['class'=>'form-control','id'=>'total_amount','placeholder'=>'100 tk','readonly']) }}
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <span class="btn btn-primary"> Total Discount : </span>
                                                    </td>
                                                    <td>
                                                        {{ Form::text('total_discount',null,['class'=>'form-control','id'=>'discount','placeholder'=>'Discount : 100 tk','required']) }}
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><span class="btn btn-primary"> Total Balance : </span></td>
                                                    <td>
                                                        {{ Form::number('total_balance',null,['class'=>'form-control','id'=>'balance','placeholder'=>' 100 tk','readonly']) }}
                                                    </td>
                                                </tr>



                                                <tr>
                                                    <td> <span class="btn btn-primary"> Total Paid : </span></td>
                                                    <td>
                                                        {{ Form::text('total_paid',null,['class'=>'form-control','id'=>'paid','placeholder'=>'Total Paid : 100 tk','required']) }}
                                                    </td>
                                                </tr>

                                                {{--  <tr id="payment_date">
                                                      <td> <span class="btn btn-primary"> Payment Date : </span></td>
                                                      <td>
                                                          <input type="text" name="payment_deadline" class="form-control pull-right pdate" id="datepicker" >
                                                      </td>
                                                  </tr>--}}

                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="submit" value="PRODUCT PURCHASE" class="btn btn-primary">
                                                        {{ Form::close() }}
                                                    </td>
                                                </tr>

                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                    {{--/ Buy and Supllier Information end here  /--}}


                                </div>
                            </div>
                        </div><!--  Panel Body Close -->

                    </div><!-- Panel Close -->

                </div><!-- Row Close -->
            </div><!-- Page Content Close -->
        </div>
    </div>



    <script>
        var global_price;
        var amount=0;
        var amount = "{{ Cart::total() }}";

        $(document).ready(function(){

            $(".loader").css("display","none");

            Carts();
            $("#datepicker").datepicker({
                minDate:0,
            });

            $('.supplier_id_select2').select2({tags:true,maximumSelectionLength : 1});
            $("#trxId").hide(500);

            /* Auto  */
            var id = $("#product_name").val();
            var token = "{{ csrf_token() }}";
            $.ajax({
                method:"post",
                url:"{{ route('product.otherprofind') }}",
                data:{id:id,"_token":token},
                dataType:"json",
                success:function(response){
                    $(".loader").css("display","none");
                    $("#price").val(response.price);
                },
                error:function(err){
                    console.log(err);
                }
            });

        });



        $(document).on('change','#supplier_id',function(){
            var supplier_id = $(this).val();
            var token = "{{ csrf_token() }}";
            if(supplier_id !=0){
                $.ajax({
                    method:"post",
                    url:"{{ route('supplier.search') }}",
                    data:{supplier_id:supplier_id,"_token":token},
                    dataType:'json',
                    success:function(response){
                        $("#supplier_name").val(response.name);
                        $("#supplier_phone").val(response.phone);
                        $("#supplier_address").val(response.address);
                    },
                    error:function(err){console.log("Error List : "+err);}
                });
            }
        });


        $(document).on('change','#dieseas_id',function(){
            $(".loader").css("display","block");
            var dieseas_id = $(this).val();
            var token = "{{ csrf_token() }}";
            if(dieseas_id != ''){
                $.ajax({
                    method:"post",
                    url:"{{ route('product.find') }}",
                    data:{dieseas_id: dieseas_id,"_token":token},
                    dataType:"html",
                    success:function(response){
                        $("#product_name").html(response);
                        $(".loader").css("display","none");
                    },
                    error:function(err){
                        console.log(err);
                    }
                });
            }
        });

        /*
         ========== product information search with Product Name ===========
         */

        $(document).on('click','#remove_item',function(){
            var token = '{{ csrf_token() }}';
            var rowId = $(this).attr('data-id');
            $.ajax({
                method:"post",
                url:'{{ route("otherpurchase.cart-remove") }}',
                data:{rowId:rowId,"_token":token},
                dataType:"html",
                success:function(response){
                    $("#all_cart_item").html(response);
                },
                error:function(err){
                    console.log(err);
                }
            });
        });
        /*  Cart Remove End */



        $(document).on('change','#product_name',function(){
            var id = $("#product_name").val();
            var token = "{{ csrf_token() }}";
            $.ajax({
                method:"post",
                url:"{{ route('product.otherprofind') }}",
                data:{id:id,"_token":token},
                dataType:"json",
                success:function(response){
                    $(".loader").css("display","none");
                    $("#price").val(response.price);
                },
                error:function(err){
                    console.log(err);
                }
            });
        });

        $(document).on('change','#payment_type',function(){
            var type = $(this).val();
            if(type == 'bkash'){
                $("#trxId").show(500);
            }else if(type == 'rocket'){
                $("#trxId").show(500);
            }
            else if(type == 'check'){
                $("#trxId").show(500);
            }

            else{
                $("#trxId").hide(500);
            }
        });
        /* onchange quantity for total amount */

        /*
         When someone try to increment and decrement product price and if there price value found less then zero then
         it will be Original Product Price automatically
         */



        $(document).on('keyup change','#qty',function(){
            var qty = $(this).val();

            if(qty<=0){
                //alert('Sir/Madam Product Quantity Never be Zero');
                $(this).val(0)
            }

        });

        /**/


        /* Product add to Cart / Bucket Start From Here */

        $(document).on('click','#add_bucket',function(){

            var id = $("#product_name").val();

            var product_price = $("#price").val();
            var qty = $("#qty").val();

            if(product_price < 0 ||  qty <= 0 || id==0){
                alert("Please Select/Insert value for every single field before Add to Cart");
            }else{
                $.ajax({
                    method : "post",
                    url : "{{ route('otherpurchase.addCart') }}",
                    data:{id:id,product_price:product_price,"_token":'{{ csrf_token() }}',qty:qty},
                    dataType:'html',
                    success:function(response){
                        $("#price").val(0);
                        $("#qty").val(0);
                        $("#product_name").val(0).selected;
                        $("#all_cart_item").html(response);
                    },
                    error:function(err){
                        console.log(err);
                    }
                });
            }
        });
        /* Product add to Cart / Bucket End Here */

        /* onload added products fetch */

        function Carts(){
            $.ajax({
                method:"get",
                url : "{{ route('purchase.bucket') }}",
                dataType:'html',
                success:function(response){
                    $("#all_cart_item").html(response);
                },
                error:function(err){
                    console.log(err);
                }
            });
        }

        /* payment calculation start from here */

        $(document).on('keyup','#discount',function() {
            /* regEx start */




            /* regEx end */
            var total_amount = $("#total_amount").val();
            var discount = $(this).val();
            var balance = total_amount - discount;
            if(balance>0){
                $("#balance").css({"border": "2px red","background": "red","color": "#fff","font-size": "1.5rem","font-weight": "bold"});
            }
            else{
                $("#balance").css({"border": "2px green","background": "#fff","color": "#000","font-size": "1.5rem","font-weight": "bold"});
            }
            $("#balance").val(balance.toFixed(2));
        });

        var z =0;
        var tk = 0;

        $(document).on('keyup','#paid',function() {
            var total_value  = $(this).val();

            var total_amount = $("#total_amount").val();
            var total_discount = $("#discount").val();
            var after_discount_less = Number(total_amount) - Number(total_discount);


            if(after_discount_less < total_value){
                alert("You have to pay : "+after_discount_less);
                $("#balance").val(after_discount_less);
                $(this).val(0);
            }else{
                var amount = Number(after_discount_less)-Number(total_value);
                $("#balance").val(amount);
            }


        });
    </script>
@endsection