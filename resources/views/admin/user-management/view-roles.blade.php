@extends('admin.layouts.admin')
@section('content')
    <style>
        input[type='checkbox']{
            width: 50px;
            height: 20px;
        }

        input[type='checkbox']:checked + label{
            color: green;
            font-weight: bold;
        }

        input[type='checkbox'] + label {
            color: #0a6aa1;
            font-weight: 600;
        }

        label{
            line-height: 26px;
        }
    </style>
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">View Role</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">View Role</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-offset-2 col-lg-8 col-sm-6 col-md-6 col-xs-12">
                                        <table id="protable" class="table table-bordered table-striped">
                                                <a href="{{route('role.create')}}" class="btn btn-success " style="float: right">Add Role</a>
                                            <br><br>
                                            <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Role Name</th>
                                                <th>Permissions</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody id="sale_report">
                                            @php $i =0;
                                            @endphp
                                            @foreach($roles as $role)
                                                <tr>
                                                    <td>{{++$i}}</td>
                                                    <td>{{$role->name}}</td>
                                                    <td>
                                                        <ul>
                                                            @foreach($role->permissions as $permission)
                                                                <li>{{$permission->name}}</li>
                                                            @endforeach
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <a href="{{route('role.edit',$role->id)}}" class="btn btn-success fa fa-edit"></a> || <button class="btn btn-sm btn-danger fa fa-trash erase" data-id="{{$role->id}}" data-url="{{url('role/erase')}}"></button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    {{--vaccine-transfer End--}}
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
            $('#permission_id').select2({
                tags:true
            });
            $('#role_id').select2({
                tags:true
            });
//            $("#product_name").select2({
//                placeholder: 'Select Product'
//
//            });
//            $("#warehouse").select2({
//                placeholder: 'Select Warehouse',
//                tags: true
//            });
//            $("#product_id").select2({
//                placeholder: 'Select Product',
//                tags: true
//            });
        });

        $(document).ready(function () {
            $("#user-select-all").click(function () {
                $(".user-select").prop('checked', $(this).prop('checked'));
            });
        });

        $(document).ready(function () {
            $("#company-select-all").click(function () {
                $(".company-select").prop('checked', $(this).prop('checked'));
            });
        });

        $(document).ready(function () {
            $("#supplier-select-all").click(function () {
                $(".supplier-select").prop('checked', $(this).prop('checked'));
            });
        });

        $(document).ready(function () {
            $("#vaccine-select-all").click(function () {
                $(".vaccine-select").prop('checked', $(this).prop('checked'));
            });
        });

        $(document).ready(function () {
            $("#dose-select-all").click(function () {
                $(".dose-select").prop('checked', $(this).prop('checked'));
            });
        });

        $(document).ready(function () {
            $("#purchase-select-all").click(function () {
                $(".purchase-select").prop('checked', $(this).prop('checked'));
            });
        });

        $(document).ready(function () {
            $("#stock-select-all").click(function () {
                $(".stock-select").prop('checked', $(this).prop('checked'));
            });
        });

        $(document).ready(function () {
            $("#sale-select-all").click(function () {
                $(".sale-select").prop('checked', $(this).prop('checked'));
            });
        });

        $(document).ready(function () {
            $("#transfer-select-all").click(function () {
                $(".transfer-select").prop('checked', $(this).prop('checked'));
            });
        });


        $(document).ready(function () {
            $("#invoice-select-all").click(function () {
                $(".invoice-select").prop('checked', $(this).prop('checked'));
            });
        });

        $(document).ready(function () {
            $("#expense-select-all").click(function () {
                $(".expense-select").prop('checked', $(this).prop('checked'));
            });
        });

        $(document).ready(function () {
            $("#report-select-all").click(function () {
                $(".report-select").prop('checked', $(this).prop('checked'));
            });
        });

        $(document).ready(function () {
            $("#hospital-select-all").click(function () {
                $(".hospital-select").prop('checked', $(this).prop('checked'));
            });
        });

        $(document).ready(function () {
            $("#doctor-select-all").click(function () {
                $(".doctor-select").prop('checked', $(this).prop('checked'));
            });
        });

        $(document).ready(function () {
            $("#division-select-all").click(function () {
                $(".division-select").prop('checked', $(this).prop('checked'));
            });
        });

        $(document).ready(function () {
            $("#blood-bank-select-all").click(function () {
                $(".blood-bank-select").prop('checked', $(this).prop('checked'));
            });
        });

        $(document).ready(function () {
            $("#ambulance-select-all").click(function () {
                $(".ambulance-select").prop('checked', $(this).prop('checked'));
            });
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