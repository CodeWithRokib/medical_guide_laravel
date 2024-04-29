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
                    <h1 class="page-header text-overflow">Add Role</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Add Role</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Personal Information</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    {{--vaccine-transfer Start--}}
                                    <div class="col-lg-5 col-sm-5 col-md-6 col-xs-12">
                                        {{ Form::open(['route'=>'role.store','method'=>'post']) }}
                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                            <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                            {{ Form::label('name','Role Name:* ',['class'=>'control-label'])}}
                                            {{ Form::text('name',null,['class'=>'form-control','id'=>'name'])}}
                                            @if($errors->has('name'))
                                                <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                                            @endif
                                        </div>
                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 {{$errors->has('permission') ? 'has-error' : ''}}">
                                            {{--<span style="display: block;height: 10px;width: 100%;background: #fff;"></span>--}}
{{--                                            {{ Form::label('permission','Permission :* ',['class'=>'control-label'])}}--}}

                                            <div class="col-md-12"><br></div>
                                            <label for="permission"><h4>Permissions</h4></label>
                                            <div class="col-md-12"><br></div>

                                            {{--User Permission Start--}}
                                            <div class="col-md-4">
                                                <h5>User</h5>
                                            </div>
                                            <div class="col-md-4 checkbox">
                                                <input id="user-select-all" type="checkbox">
                                                <label for="demo-form-checkbox"> Select all</label>
                                            </div>

                                            <div class="col-md-4">
                                                @foreach($user as $user_permission)
                                                    <div class="checkbox">
                                                        <input  type="checkbox" class="user-select" name="asignpermission[]" value="{{$user_permission->id}}">
                                                        <label for="demo-form-checkbox">{{$user_permission->name}}</label>
                                                    </div>
                                                @endforeach
                                            </div>

                                            <div class="col-md-12"><hr /></div>
                                            {{--User Permission End--}}
                                            {{--Role Permission Start--}}
                                            <div class="col-md-4">
                                                <h5>Role</h5>
                                            </div>
                                            <div class="col-md-4 checkbox">
                                                <input id="role-select-all" type="checkbox">
                                                <label for="demo-form-checkbox"> Select all</label>
                                            </div>

                                            <div class="col-md-4">
                                                @foreach($role_permission as $role)
                                                    <div class="checkbox">
                                                        <input  type="checkbox" class="role-select" name="asignpermission[]" value="{{$role->id}}">
                                                        <label for="demo-form-checkbox">{{$role->name}}</label>
                                                    </div>
                                                @endforeach
                                            </div>

                                            <div class="col-md-12"><hr /></div>
                                            {{--Role Permission End--}}

                                            {{--Company Start--}}
                                            <div class="col-md-4">
                                                <h5>Company/Brand Management</h5>
                                            </div>
                                            <div class="col-md-4 checkbox">
                                                <input id="company-select-all" type="checkbox">
                                                <label for="demo-form-checkbox"> Select all</label>
                                            </div>

                                            <div class="col-md-4">
                                                @foreach($company as $company_permission)
                                                    <div class="checkbox">
                                                        <input  type="checkbox" class="company-select" name="asignpermission[]" value="{{$company_permission->id}}">
                                                        <label for="demo-form-checkbox">{{$company_permission->name}}</label>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="col-md-12"><hr /></div>
                                            {{--Company end--}}
                                            {{--Supplier Start--}}
                                            <div class="col-md-4">
                                                <h5>Supplier Management</h5>
                                            </div>
                                            <div class="col-md-4 checkbox">
                                                <input id="supplier-select-all" type="checkbox">
                                                <label for="demo-form-checkbox"> Select all</label>
                                            </div>

                                            <div class="col-md-4">
                                                @foreach($supplier as $supplier_permission)
                                                    <div class="checkbox">
                                                        <input  type="checkbox" class="supplier-select" name="asignpermission[]" value="{{$supplier_permission->id}}">
                                                        <label for="demo-form-checkbox">{{$supplier_permission->name}}</label>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="col-md-12"><hr /></div>
                                            {{--Supplier end--}}
                                            {{--Customer Start--}}
                                            <div class="col-md-4">
                                                <h5>Customer Management</h5>
                                            </div>
                                            <div class="col-md-4 checkbox">
                                                <input id="customer-select-all" type="checkbox">
                                                <label for="demo-form-checkbox"> Select all</label>
                                            </div>

                                            <div class="col-md-4">
                                                @foreach($customers as $customer_permission)
                                                    <div class="checkbox">
                                                        <input  type="checkbox" class="customer-select" name="asignpermission[]" value="{{$customer_permission->id}}">
                                                        <label for="demo-form-checkbox">{{$customer_permission->name}}</label>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="col-md-12"><hr /></div>
                                            {{--Customer end--}}
                                            {{--Vaccine Start--}}
                                            <div class="col-md-4">
                                                <h5>Product Management</h5>
                                            </div>
                                            <div class="col-md-4 checkbox">
                                                <input id="vaccine-select-all" type="checkbox">
                                                <label for="demo-form-checkbox"> Select all</label>
                                            </div>

                                            <div class="col-md-4">
                                                @foreach($product as $vaccine)
                                                    <div class="checkbox">
                                                        <input  type="checkbox" class="vaccine-select" name="asignpermission[]" value="{{$vaccine->id}}">
                                                        <label for="demo-form-checkbox">{{$vaccine->name}}</label>
                                                    </div>
                                                @endforeach

                                                @foreach($other_product as $other)
                                                    <div class="checkbox">
                                                        <input  type="checkbox" class="vaccine-select" name="asignpermission[]" value="{{$other->id}}">
                                                        <label for="demo-form-checkbox">{{$other->name}}</label>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="col-md-12"><hr /></div>
                                            {{--Supplier end--}}
                                            {{--Dose Management Start--}}
                                            {{--<div class="col-md-4">--}}
                                                {{--<h5>Dose Management</h5>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-md-4 checkbox">--}}
                                                {{--<input id="user-select-all" type="checkbox">--}}
                                                {{--<label for="demo-form-checkbox"> Select all</label>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-md-12"><hr /></div>--}}
                                            {{--Dose Management end--}}
                                            {{--Purchase Management Start--}}
                                            <div class="col-md-4">
                                                <h5>Purchase Management</h5>
                                            </div>
                                            <div class="col-md-4 checkbox">
                                                <input id="purchase-select-all" type="checkbox">
                                                <label for="demo-form-checkbox"> Select all</label>
                                            </div>

                                            <div class="col-md-4">
                                                @foreach($purchase_vaccine as $p_vaccine)
                                                    <div class="checkbox">
                                                        <input  type="checkbox" class="purchase-select" name="asignpermission[]" value="{{$p_vaccine->id}}">
                                                        <label for="demo-form-checkbox">{{$p_vaccine->name}}</label>
                                                    </div>
                                                @endforeach

                                                @foreach($purchase_other as $p_other)
                                                     <div class="checkbox">
                                                        <input  type="checkbox" class="purchase-select" name="asignpermission[]" value="{{$p_other->id}}">
                                                        <label for="demo-form-checkbox">{{$p_other->name}}</label>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="col-md-12"><hr /></div>
                                            {{--Purchase Management end--}}
                                            {{--Stock Start--}}
                                            <div class="col-md-4">
                                                <h5>Stock Management</h5>
                                            </div>
                                            <div class="col-md-4 checkbox">
                                                <input id="stock-select-all" type="checkbox">
                                                <label for="demo-form-checkbox"> Select all</label>
                                            </div>

                                            <div class="col-md-4">
                                                @foreach($stock as $product_stock)
                                                    <div class="checkbox">
                                                        <input  type="checkbox" class="stock-select" name="asignpermission[]" value="{{$product_stock->id}}">
                                                        <label for="demo-form-checkbox">{{$product_stock->name}}</label>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="col-md-12"><hr /></div>
                                            {{--Stock end--}}
                                            {{--Sale Start--}}
                                            <div class="col-md-4">
                                                <h5>Sale Management</h5>
                                            </div>
                                            <div class="col-md-4 checkbox">
                                                <input id="sale-select-all" type="checkbox">
                                                <label for="demo-form-checkbox"> Select all</label>
                                            </div>

                                            <div class="col-md-4">
                                                @foreach($sale as $product_sale)
                                                    <div class="checkbox">
                                                        <input  type="checkbox" class="sale-select" name="asignpermission[]" value="{{$product_sale->id}}">
                                                        <label for="demo-form-checkbox">{{$product_sale->name}}</label>
                                                    </div>
                                                @endforeach

                                            </div>
                                            <div class="col-md-12"><hr /></div>
                                            {{--Sale end--}}
                                            {{--Transfer Start--}}
                                            <div class="col-md-4">
                                                <h5>Transfer Management</h5>
                                            </div>
                                            <div class="col-md-4 checkbox">
                                                <input id="transfer-select-all" type="checkbox">
                                                <label for="demo-form-checkbox"> Select all</label>
                                            </div>

                                            <div class="col-md-4">
                                                @foreach($transfer as $product_transfer)
                                                    <div class="checkbox">
                                                        <input  type="checkbox" class="transfer-select" name="asignpermission[]" value="{{$product_transfer->id}}">
                                                        <label for="demo-form-checkbox">{{$product_transfer->name}}</label>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="col-md-12"><hr /></div>
                                            {{--Trasfer end--}}
                                            {{--Invoice Start--}}
                                            <div class="col-md-4">
                                                <h5>Invoice Management</h5>
                                            </div>
                                            <div class="col-md-4 checkbox">
                                                <input id="invoice-select-all" type="checkbox">
                                                <label for="demo-form-checkbox"> Select all</label>
                                            </div>

                                            <div class="col-md-4">
                                                @foreach($invoice as $product_invoice)
                                                    <div class="checkbox">
                                                        <input  type="checkbox" class="invoice-select" name="asignpermission[]" value="{{$product_invoice->id}}">
                                                        <label for="demo-form-checkbox">{{$product_invoice->name}}</label>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="col-md-12"><hr /></div>
                                            {{--Invoice end--}}
                                            {{--Expense Start--}}
                                            <div class="col-md-4">
                                                <h5>Expense Management</h5>
                                            </div>
                                            <div class="col-md-4 checkbox">
                                                <input id="expense-select-all" type="checkbox">
                                                <label for="demo-form-checkbox"> Select all</label>
                                            </div>

                                            <div class="col-md-4">
                                                @foreach($expenses as $expense)
                                                    <div class="checkbox">
                                                        <input  type="checkbox" class="expense-select" name="asignpermission[]" value="{{$expense->id}}">
                                                        <label for="demo-form-checkbox">{{$expense->name}}</label>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="col-md-12"><hr /></div>
                                            {{--Expense end--}}
                                            {{--Report Start--}}
                                            <div class="col-md-4">
                                                <h5>All Report</h5>
                                            </div>
                                            <div class="col-md-4 checkbox">
                                                <input id="report-select-all" type="checkbox">
                                                <label for="demo-form-checkbox"> Select all</label>
                                            </div>

                                            <div class="col-md-4">
                                                @foreach($reports as $report)
                                                    <div class="checkbox">
                                                        <input  type="checkbox" class="report-select" name="asignpermission[]" value="{{$report->id}}">
                                                        <label for="demo-form-checkbox">{{$report->name}}</label>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="col-md-12"><hr/></div>
                                            {{--Report end--}}
                                            {{--Hospital Start--}}
                                            <div class="col-md-4">
                                                <h5>Hospital Management</h5>
                                            </div>
                                            <div class="col-md-4 checkbox">
                                                <input id="hospital-select-all" type="checkbox">
                                                <label for="demo-form-checkbox"> Select all</label>
                                            </div>

                                            <div class="col-md-4">
                                                @foreach($hospitals as $hospital)
                                                    <div class="checkbox">
                                                        <input  type="checkbox" class="hospital-select" name="asignpermission[]" value="{{$hospital->id}}">
                                                        <label for="demo-form-checkbox">{{$hospital->name}}</label>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="col-md-12"><hr /></div>
                                            {{--Hospital end--}}
                                            {{--Doctor Start--}}
                                            <div class="col-md-4">
                                                <h5>Doctor Management</h5>
                                            </div>
                                            <div class="col-md-4 checkbox">
                                                <input id="doctor-select-all" type="checkbox">
                                                <label for="demo-form-checkbox"> Select all</label>
                                            </div>

                                            <div class="col-md-4">
                                                @foreach($doctors as $doctor)
                                                    <div class="checkbox">
                                                        <input  type="checkbox" class="doctor-select" name="asignpermission[]" value="{{$doctor->id}}">
                                                        <label for="demo-form-checkbox">{{$doctor->name}}</label>
                                                    </div>
                                                @endforeach

                                                @foreach($specialists as $specialist)
                                                    <div class="checkbox">
                                                        <input  type="checkbox" class="specialist-select" name="asignpermission[]" value="{{$specialist->id}}">
                                                        <label for="demo-form-checkbox">{{$specialist->name}}</label>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="col-md-12"><hr /></div>
                                            {{--Doctor end--}}
                                            {{--Division Start--}}
                                            <div class="col-md-4">
                                                <h5>Division Management</h5>
                                            </div>
                                            <div class="col-md-4 checkbox">
                                                <input id="division-select-all" type="checkbox">
                                                <label for="demo-form-checkbox"> Select all</label>
                                            </div>

                                            <div class="col-md-4">
                                                @foreach($divisions as $division)
                                                    <div class="checkbox">
                                                        <input  type="checkbox" class="division-select" name="asignpermission[]" value="{{$division->id}}">
                                                        <label for="demo-form-checkbox">{{$division->name}}</label>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="col-md-12"><hr /></div>
                                            {{--Division end--}}
                                            {{--BloodBank Start--}}
                                            <div class="col-md-4">
                                                <h5>Blood Bank Management</h5>
                                            </div>
                                            <div class="col-md-4 checkbox">
                                                <input id="blood-bank-select-all" type="checkbox">
                                                <label for="demo-form-checkbox"> Select all</label>
                                            </div>

                                            <div class="col-md-4">
                                                @foreach($blood_banks as $blood_bank)
                                                    <div class="checkbox">
                                                        <input  type="checkbox" class="blood-bank-select" name="asignpermission[]" value="{{$blood_bank->id}}">
                                                        <label for="demo-form-checkbox">{{$blood_bank->name}}</label>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="col-md-12"><hr /></div>
                                            {{--BloodBank end--}}
                                            {{--Ambulance Start--}}
                                            <div class="col-md-4">
                                                <h5>Ambulance Management</h5>
                                            </div>
                                            <div class="col-md-4 checkbox">
                                                <input id="ambulance-select-all" type="checkbox">
                                                <label for="demo-form-checkbox"> Select all</label>
                                            </div>

                                            <div class="col-md-4">
                                                @foreach($ambulances as $ambulance)
                                                    <div class="checkbox">
                                                        <input  type="checkbox" class="ambulance-select" name="asignpermission[]" value="{{$ambulance->id}}">
                                                        <label for="demo-form-checkbox">{{$ambulance->name}}</label>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="col-md-12"><hr /></div>
                                            {{--Ambulance end--}}
                                            {{--Wishlist Start--}}
                                            <div class="col-md-4">
                                                <h5>Cart Management</h5>
                                            </div>
                                            <div class="col-md-4 checkbox">
                                                <input id="wishlist-select-all" type="checkbox">
                                                <label for="demo-form-checkbox"> Select all</label>
                                            </div>

                                            <div class="col-md-4">
                                                @foreach($wishlists as $wishlist)
                                                    <div class="checkbox">
                                                        <input  type="checkbox" class="wishlist-select" name="asignpermission[]" value="{{$wishlist->id}}">
                                                        <label for="demo-form-checkbox">{{$wishlist->name}}</label>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="col-md-12"><hr /></div>
                                            {{--Trasfer end--}}
                                        </div>



                                        <div class="col-lg-12 col-sm-12 col-xs-12"><span style="display: block;height: 10px;width: 100%;background: #fff;"></span></div>
                                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                            <div class="col-lg-4 col-sm-4 col-xs-12">
                                                {{ Form::submit('SUBMIT',['class'=>'btn btn-success']) }}
                                            </div>
                                        </div>
                                        {{ Form::close() }}
                                    </div>
                                    <div class="col-lg-offset-1 col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                        <table id="protable" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Name</th>
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
            $("#role-select-all").click(function () {
                $(".role-select").prop('checked', $(this).prop('checked'));
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
            $("#customer-select-all").click(function () {
                $(".customer-select").prop('checked', $(this).prop('checked'));
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

        $(document).ready(function () {
            $("#wishlist-select-all").click(function () {
                $(".wishlist-select").prop('checked', $(this).prop('checked'));
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