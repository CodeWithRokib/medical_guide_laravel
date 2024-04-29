@extends('admin.layouts.admin')
@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Wish List</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Wish List</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Wish List</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">

                                    <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                        <div style="float:right;margin-bottom: 10px">
                                            <a href="{{url('wishlist/truncate-list')}}" class="btn btn-success">CLEAR ALL</a>
                                        </div>
                                        <table id="protable" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>Sl</th>
                                                <th>User id</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Product</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php $i=0; @endphp
                                            @foreach( $wishlists as $wishlist )
                                                <tr>
                                                    <td>{{++$i}}</td>
                                                    <td>{{ $wishlist->user->id }}</td>
                                                    <td>{{ $wishlist->user->name }}</td>
                                                    <td> {{ \App\Patient::query()->where('user_id',$wishlist->user->id)->first(['phone']) }} </td>
                                                    <td>
                                                        {{ $wishlist->product->name }}
                                                    </td>
                                                    <td>

                                                        <a href="{{route('clear.wish',$wishlist->id)}}" class="btn btn-success">CLEAR</a>
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
    </div>
    <script>
        $(document).ready(function(){
            $('#datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
            $("#protable").DataTable();
            $("#role_id").select2({
                tags:true

            });
            $("#warehouse_id").select2({
                tags:true

            });
//            $("#warehouse").select2({
//                placeholder: 'Select Warehouse',
//                tags: true
//            });
//            $("#product_id").select2({
//                placeholder: 'Select Product',
//                tags: true
//            });
        });

        {{--$(function () {--}}
        {{--$.ajax({--}}
        {{--method:"post",--}}
        {{--url:"{{route('load.products')}}",--}}
        {{--data:{_token:"{{csrf_token()}}"},--}}
        {{--dataType:"html",--}}
        {{--success:function (data) {--}}
        {{--$('#product_id').html(data);--}}
        {{--//                    alert(data);--}}
        {{--}--}}
        {{--});--}}
        {{--});--}}


        {{--$(document).on("click","#findreportsale",function () {--}}
        {{--var start = $("#start").val();--}}
        {{--var end = $("#end").val();--}}

        {{--if (start != "" && end !=""){--}}
        {{--$.ajax({--}}
        {{--method:"post",--}}
        {{--url:"{{ route('report.salesearch') }}",--}}
        {{--data:{from:start, to:end, "_token":"{{ csrf_token() }}"},--}}
        {{--dataType:"html",--}}
        {{--success:function (response) {--}}
        {{--$("#sale_report").html(response);--}}
        {{--},--}}
        {{--error:function (err) {--}}
        {{--console.log(err);--}}
        {{--}--}}
        {{--});--}}
        {{--}--}}

        {{--});--}}

        {{--$("#product_id").change(function () {--}}
        {{--var product_id = $(this).val();--}}
        {{--var token = "{{csrf_token()}}";--}}
        {{--$.ajax({--}}
        {{--method:"post",--}}
        {{--url:"{{route('load.qty')}}",--}}
        {{--data:{product_id:product_id,_token:token},--}}
        {{--//                dataType:"html",--}}
        {{--success:function (data) {--}}
        {{--$('#qty').val(data);--}}
        {{--$('#product_stock').val(data);--}}
        {{--}--}}
        {{--});--}}

        {{--})--}}

        {{--$("#qty").focusout(function () {--}}
        {{--var qty = parseInt($("#qty").val());--}}
        {{--var product_stock = parseInt($("#product_stock").val());--}}

        {{--if(qty>product_stock){--}}
        {{--alert('You have not enough in stock');--}}
        {{--$("#qty").val(product_stock);--}}
        {{--}--}}
        {{--})--}}

        {{--/* select category and load sub-category automatically end */--}}

        {{--$("#save").click(function (e) {--}}


        {{--e.preventDefault();--}}
        {{--var product_id = $("#product_id").val();--}}
        {{--var qty = parseInt($("#qty").val());--}}
        {{--var product_stock = parseInt($("#product_stock").val());--}}
        {{--var warehouse_id = $("#warehouse").val();--}}
        {{--var date = $("#date").val();--}}
        {{--var description = $("#description").val();--}}
        {{--var token = "{{csrf_token()}}";--}}
        {{--if(qty>product_stock){--}}
        {{--alert('You have not enough in stock');--}}
        {{--$("#qty").val(product_stock);--}}
        {{--}else{--}}
        {{--$.ajax({--}}
        {{--method:"post",--}}
        {{--url:"{{route('transfer.product')}}",--}}
        {{--data:{product_id:product_id,warehouse_id:warehouse_id, qty:qty, date:date,description:description,_token:token},--}}
        {{--//                dataType:"html",--}}
        {{--success:function (data) {--}}
        {{--$('#product_stock').val(data);--}}
        {{--$('#product_id').val('');--}}
        {{--$('#qty').val('');--}}
        {{--$('#warehouse').val('');--}}
        {{--$('#date').val('');--}}
        {{--$('#description').val('');--}}
        {{--}--}}
        {{--});--}}

        {{--}--}}
        {{--})--}}


    </script>
@endsection
