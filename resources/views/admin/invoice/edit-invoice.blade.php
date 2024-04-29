@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Edit Invoice - {{ $invoice->invoice_no }}</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Edit Invoice</li>
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
                            <h3 class="panel-title">Invoice - {{ $invoice->invoice_no }}</h3>
                        </div>


                        <div class="panel-body">
                            <div class="row">


                                <div class="col-lg-12 col-sm-12 col-md-12 ">
                                    <h1 class="text-center bg-primary">Purchased Product List</h1>
                                    {{ Form::open(['route'=>['invoice.update',$invoice->id],'method'=>'post']) }}
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Invoice No </th>
                                            <th>Product</th>
                                            <th>Qty </th>
                                            <th>Old Purchased Price</th>
                                            <th>Sub Total</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @php $i=0; @endphp

                                            @foreach($invoice->purchases as $purchase)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td> {{ $invoice->invoice_no }}</td>
                                                    <td> {{ $purchase->product->name }}</td>
                                                    <td>  {{ Form::number('qty[]',$purchase->qty,['class'=>'form-control onlyDigit','placeholder'=>'Product Qty']) }}</td>
                                                    <td> {{ Form::number('price[]',$purchase->price,['class'=>'form-control onlyDigit','placeholder'=>'Product Price']) }}</td>
                                                    <td> {{ Form::hidden('product_id[]',$purchase->product_id) }} {{ $purchase->price*$purchase->qty }}</td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr><td colspan="6"> {{ Form::submit('Update Invoice',['class'=>'btn btn-success']) }} || <a href="{{ route('invoice.vaccineinovice') }}" class="btn btn-primary"> Back to Invoice List Page</a> </td></tr>
                                        </tfoot>
                                    </table>
                                    {{ Form::close() }}
                                    <hr>

                                    {{-- suplier information added start from here --}}


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
            $('.select2').select2();

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
            var mrp = $('#mrp').val();

            if(product_price < 0 ||  qty <= 0 || id==0){
                alert("Please Select/Insert value for every single field before Add to Cart");
            }else{
                $.ajax({
                    method : "post",
                    url : "{{ route('otherpurchase.addCart') }}",
                    data:{id:id,product_price:product_price,mrp:mrp,"_token":'{{ csrf_token() }}',qty:qty},
                    dataType:'html',
                    success:function(response){
                        $("#price").val(0);
                        $("#qty").val(1);
                        $("#mrp").val(0);
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
            if(balance<0){
                $("#balance").css({"border": "2px red","background": "red","color": "#fff","font-size": "1.5rem","font-weight": "bold"});
                $(this).val(0);
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
    <script>
        $(document).on('change','#warehouse_id',function () {
            var warehouse_id = $('#warehouse_id').val();
            $('#warehouse').val(warehouse_id);
        })
    </script>
@endsection