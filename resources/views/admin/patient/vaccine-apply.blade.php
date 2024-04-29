@extends('admin.layouts.admin')
@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Add Vaccine Applier</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Vaccine Applier</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add New Vaccine Applier</h3>
                            </div>
                            <div class="panel-body">
                                {{ Form::open(['route'=>'vaccine.applytocustomer','method="post']) }}
                                {{ csrf_field() }}

                                <div class="row">
                                    <div class="col-lg-6 pull-left">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 {{ $errors->has('doctor_id') ? "has-error" : "" }} ">
                                                <h3>Select Old Doctor</h3>
                                                {{ Form::select('doctor_id',$doctors,false,['class'=>'form-control select2','id'=>'doctor_list','required','placeholder'=>'Select Doctor']) }}
                                                @if($errors->has('doctor_id'))
                                                   <span class="help-block">
                                                        <strong>{{ $errors->first('doctor_id') }}</strong>
                                                    </span>
                                                @endif
                                                <hr>
                                                <button id="new_doctor" class="btn btn-info">Register New Doctor</button>
                                            </div>

                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <h3>Select Vaccine Appliers </h3>
                                                {{ Form::select('patient_id',[''=>'SELECT Vaccine Appliers'],'false',['class'=>'form-control select2','id'=>'patient_id','placeholder'=>'Select Vaccine Applier']) }}
                                                <hr>
                                                <button id="new_vaccine_appliers" class="btn btn-info">Register New Vaccine Appliers</button>
                                            </div>

                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <h3>Product's List</h3>
                                                {{ Form::select('product_id',$products,null,['class'=>'form-control','placeholder'=>'Select Product','id'=>'product_id']) }}
                                                {{ Form::hidden('product_type','vaccine')}}
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <h3>Dose List</h3>
                                                <select class="form-control" name="does_no" id="does_no"></select>
                                            </div>

                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <h3> Sale Price</h3>
                                                {{ Form::text('saleprice',null,['class'=>'form-control','id'=>'saleprice','placeholder'=>'0.00 TK']) }}
                                            </div>

                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <span style="display: block;height: 55px;background: #fff;"></span>
                                                {{ Form::button('Add to Sale List',['class'=>'form-control btn btn-mint','id'=>'addTosaleList']) }}
                                            </div>

                                            <div class="col-lg-12"> <hr> </div>

                                            <div class="col-lg-12 col-sm-6 col-md-6 col-xs-12">

                                                <br>
                                                <div id="paymentmsg" style="display: block; background: red;padding:10px;color:#fff;text-transform: uppercase;font-weight: bold;"></div>
                                                <table class="table-hover table table-bordered table-responsive">
                                                    <tbody>
                                                    {{-- Total amount of cart loop end from here --}}
                                                    <tr>
                                                        <td> <span class="btn btn-primary btn-block">Total : </span>  </td>
                                                        <td>
                                                            {{ Form::number('total_amount',null,['class'=>'form-control','id'=>'total_amount','placeholder'=>'100 tk',"readonly"]) }}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <span class="btn btn-primary btn-block"> Discount : </span>
                                                        </td>
                                                        <td>
                                                            {{ Form::text('total_discount',null,['class'=>'form-control','id'=>'discount','placeholder'=>'Discount : 100 tk','required']) }}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><span class="btn btn-primary btn-block"> Due : </span></td>
                                                        <td>
                                                            {{ Form::number('total_balance',null,['class'=>'form-control','id'=>'balance','placeholder'=>' 100 tk','readonly']) }}
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td> <span class="btn btn-primary btn-block"> Paid : </span></td>
                                                        <td>
                                                            {{ Form::text('total_paid',0,['class'=>'form-control','id'=>'paid','placeholder'=>'Total Paid : 100 tk','required']) }}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> <span class="btn btn-primary btn-block"> Client/Customer Type : </span></td>
                                                        <td>
                                                            {{ Form::select('customer_type',['0'=>'General Customer','1'=>'Corporate Customer'],true,['class'=>'form-control']) }}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> <span class="btn btn-primary btn-block"> Payment Type : </span></td>
                                                        <td>
                                                            {{ Form::select('payment_type',['cash'=>'CASH','bkash'=>'BKASH','rocket'=>'ROCKET','check'=>'CHECK','credit_cart'=>'CREDIT CARD','visa'=>'VISA-CARD'],true,['class'=>'form-control','id'=>'payment_type']) }}
                                                        </td>
                                                    </tr>

                                                    <tr id="paymentTrxID">
                                                        <td> <span class="btn btn-primary btn-block"> TrxId : </span></td>
                                                        <td>
                                                            {{ Form::text('trxId',0,['class'=>'form-control','id'=>'trxId','placeholder'=>'TrxId : 1eD45RD33']) }}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> <span class="btn btn-primary btn-block"> Welcome Note : </span></td>
                                                        <td>
                                                            <textarea class="form-control text-left" rows="3" cols="3" name="note">Welcome to Vaccine Home. Thank you for become part-of Vaccine Home</textarea>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> <span class="btn btn-primary btn-block"> Sale Date : </span> </td>
                                                        <td>  {{ Form::text('custom_date',null,['class'=>'datepicker form-control','placeholder'=>'Ex. YYYY-mm-dd','id'=>'datepicker']) }} </td>
                                                    </tr>

                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            {{ Form::submit('APPLY VACCINE CONFIRM',['class'=>'btn btn-primary']) }}
                                                            {{ Form::close() }}
                                                        </td>
                                                    </tr>

                                                    </tbody>

                                                </table>

                                            </div>
                                        </div> {{-- left portion inside row --}}
                                    </div> {{-- left portion --}}

                                    <div class="col-lg-6 pull-right">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Doss</th>
                                                <th>Qty</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody id="pendingSaleProductList">

                                            </tbody>
                                        </table>

                                    </div> {{-- Right Portion product List --}}



                                </div>  {{-- Main Row End --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="new_doc" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-lg  animated swing">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title" id="myLargeModalLabel">New Doctor Registration </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                        {{ Form::open(['route'=>'doctor.ajaxstore','method'=>'post','enctype'=>'multipart/form-data','id'=>"ajax_doctor_registration"]) }}
                        <!--  PRODUCT NAME  -->
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                {{ Form::label('name','Doctor Name :* ',['class'=>'control-label'])}}
                                {{ Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Ex: Jhon Doe','required'])}}
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                            <!-- / PRODUCT NAME  -->
                            <!--  PRODUCT LOCAL NAME  -->
                            {{--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 {{$errors->has('email') ? 'has-error' : ''}}">--}}
                            {{--<span style="display: block;height: 10px;width: 100%;background: #fff;"></span>--}}
                            {{--{{ Form::label('email','Email : ',['class'=>'control-label'])}}--}}
                            {{--{{ Form::text('email',old('email'),['class'=>'form-control'])}}--}}
                            {{--@if ($errors->has('email'))--}}
                            {{--<span class="help-block">--}}
                            {{--<strong>{{ $errors->first('email') }}</strong>--}}
                            {{--</span>--}}
                            {{--@endif--}}
                            {{--</div>--}}

                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 {{$errors->has('phone') ? 'has-error' : ''}}">
                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                {{ Form::label('phone','Phone : ',['class'=>'control-label'])}}
                                {{ Form::text('phone',old('phone'),['class'=>'form-control'])}}
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 {{$errors->has('hospital_id') ? 'has-error' : ''}}">
                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                {{ Form::label('hospital','Hospital : ',['class'=>'control-label'])}}
                                {{ Form::select('hospital_id',$hospitals,false,['class'=>'form-control','placeholder'=>'Select Hospital' ,'id'=>'hospital_id']) }}
                                @if($errors->has('hospital_id'))
                                    <span class="help-block">
                                    <strong>{{$errors->first('hospital_id')}}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 {{$errors->has('specialist_id') ? 'has-error' : ''}}">
                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                {{ Form::label('specialist','Specialist In : ',['class'=>'control-label'])}}
                                {{ Form::select('specialist_id',$specialists,false,['class'=>'form-control','placeholder'=>'Select Specialist'])}}
                                @if ($errors->has('specialist_id'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('specialist_id') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 {{$errors->has('image') ? 'has-error' : ''}}">
                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                {{ Form::label('image','Doctor Image : ',['class'=>'control-label'])}}
                                {{ Form::file('image', ['class'=>'form-control']) }}
                                @if($errors->has('image'))
                                    <span class="help-block">
                                    <strong>{{$errors->first('image')}}</strong>
                                </span>
                                @endif
                            </div>
                            <!-- categorie_id Select End -->

                            <!-- categorie_id Select Start -->
                            <div class="col-lg-6 col-sm-6 col-md-6 col-md-3 col-xs-12 {{$errors->has('description') ? 'has-error' : ''}}">
                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                {{ Form::label('description','Dotor Details : ',['class'=>'control-label'])}}
                                {{ Form::textarea('description',old('description'),['class'=>'form-control','placeholder'=>'Doctor Details'])}}
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                                @endif
                            </div>
                            <!-- categorie_id Select End -->
                            <!--  PRODUCT File NAME  -->
                            <!-- / PRODUCT File NAME  -->
                            <div class="col-lg-12 col-sm-12 col-xs-12"><span style="display: block;height: 10px;background: #fff;"></span></div>
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                {{ Form::button('SAVE DOCTOR',['type'=>'submit','id'=>'savekarat','class'=>'btn btn-primary','style'=>'margin:10px 0 0 0;']) }}
                            </div>
                            {{ Form::close() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="vappliersmodal" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-lg  animated swing">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title" id="myLargeModalLabel">New Customer/Client Registration </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            {{ Form::open(['route'=>'ajaxpatient.store','method'=>'post','id'=>'ajax_vaccine_appliers_registration']) }}

                            <div class="col-lg-4 col-sm-4 {{$errors->has('name') ? 'has-error' : ''}}">
                                {{ Form::hidden('id',null,['class'=>'form-control','id'=>'id']) }}
                                {{ Form::label('name','Name : ',['class'=>'control-label'])}}
                                {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Ex: Vaccine Applier Name','id'=>'name'])}}
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                     <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="col-lg-4 col-sm-4 {{$errors->has('name') ? 'has-error' : ''}}">

                                {{ Form::label('father','Father/Husband Name : ',['class'=>'control-label'])}}
                                {{ Form::text('father',null,['class'=>'form-control','placeholder'=>'Ex: Father/Husband Name','id'=>'father'])}}
                                @if ($errors->has('father'))
                                    <span class="help-block">
                                                 <strong>{{ $errors->first('father') }}</strong>
                                            </span>
                                @endif
                            </div>

                            <div class="col-lg-4 col-sm-4 {{$errors->has('name') ? 'has-error' : ''}}">

                                {{ Form::label('Mother','Mother Name : ',['class'=>'control-label'])}}
                                {{ Form::text('mother',null,['class'=>'form-control','placeholder'=>'Ex: Mother Name','id'=>'mother'])}}
                                @if ($errors->has('mother'))
                                    <span class="help-block">
                                                 <strong>{{ $errors->first('mother') }}</strong>
                                            </span>
                                @endif
                            </div>

                            <div class="col-lg-4 col-sm-4 {{$errors->has('dob') ? 'has-error' : ''}}">
                                {{ Form::label('dob','Age : ',['class'=>'control-label'])}}
                                {{ Form::text('dob',old('dob'),['class'=>'form-control','placeholder'=>'Ex: 20']) }}
                                @if ($errors->has('dob'))
                                    <span class="help-block">
                                     <strong>{{ $errors->first('dob') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="col-lg-4 col-sm-4 {{$errors->has('phone') ? 'has-error' : ''}}">
                                {{ Form::label('Phone','Phone : ',['class'=>'control-label'])}}
                                {{ Form::text('phone',old('phone'),['class'=>'form-control','placeholder'=>'Ex: Patient Phone','id'=>'phone'])}}
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                     <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="col-lg-4 col-sm-4 {{$errors->has('telephone') ? 'has-error' : ''}}">
                                {{ Form::label('telephone','Tele-Phone : ',['class'=>'control-label'])}}
                                {{ Form::text('telephone',old('telephone'),['class'=>'form-control','placeholder'=>'Ex: Patient Tele-Phone','id'=>'phone'])}}
                                @if ($errors->has('telephone'))
                                    <span class="help-block">
                                     <strong>{{ $errors->first('telephone') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="col-lg-4 col-sm-4 {{$errors->has('email') ? 'has-error' : ''}}">
                                {{ Form::label('email','Email : ',['class'=>'control-label'])}}
                                {{ Form::text('email',old('email'),['class'=>'form-control','placeholder'=>'Ex: Patient Email','id'=>'email'])}}
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                     <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="col-lg-6 col-sm-6 {{$errors->has('gender') ? 'has-error' : ''}}">
                                <span style="height: 19px;background: #fff;display: block"></span>
                                {{ Form::label('dob','Gender : ',['class'=>'control-label'])}}
                                {{ Form::radio('gender','male') }} Male
                                {{ Form::radio('gender','female') }} Female
                                {{ Form::radio('gender','other') }} Others
                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                     <strong>{{ $errors->first('gender') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="col-md-12 col-xs-12 {{$errors->has('address') ? 'has-error' : ''}}">
                                <span style="height: 19px;background: #fff;display: block"></span>
                                {{ Form::label('Customeraddress','Address : ',['class'=>'control-label'])}}
                                {{ Form::textarea('address',null,['class'=>'form-control','placeholder'=>'Ex: Patient Address','id'=>'address'])}}
                                @if ($errors->has('address'))
                                    <span class="help-block">
                                     <strong>{{ $errors->first('address') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="col-md-12 col-xs-12">
                                {{ Form::button('Save Vaccine Applier',['type'=>'submit','id'=>'saveCustomer','class'=>'btn btn-primary','style'=>'margin:10px 0 0 0;']) }}
                            </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>

        $(document).ready(function () {

            if ($("#saleprice").val() <= 0){
                $("#addTosaleList").attr('disabled','disabled');
            }

            allPendingProductList();

            $("#datepicker").datepicker();
            $('.select2').select2({tags:true});
            $('.product_select2').select2({tags:true,placeholder:'Select Product'});
            var certification_id = $("#certification_id").val();
            getcertification(certification_id);
            doctor_list();
            vaccine_appliers_list();
//        product_list();
            $("#paymentmsg").hide();
            $("#paymentTrxID").hide(500);
        });



        function doctor_list() {
            $.ajax({
                url:"{{ route('doctorlist.get') }}",
                dataType:"html",
                success:function (response){
                    $("#doctor_list").html(response);
                },
                error:function (err) {
                    console.log(err);
                }
            });
        }

        function product_list(){
            $.ajax({
                url:"{{ route('productlist.get') }}",
                dataType:"html",
                success:function (response){
                    $("#product_id").html(response);
                },
                error:function (err) {
                    console.log(err);
                }
            });
        }

        $('#product_id').on('change',function () {
            var patient_id = $('#patient_id').val();
            var product_id = $(this).val();
            var token = '{{csrf_token()}}';
            //  doeslist(product_id);
            $.ajax({
                url:"{{route('vaccinedose.get')}}",
                method:'post',
                data:{product_id:product_id,patient_id:patient_id,_token:token},
                dataType:"html",
                success:function (response) {
                    console.log(response);
                    $('#does_no').html(response);
                    $('#total_amount').html(response);
                    if(response == '0'){
                            $.notify("This product is out of stock.", {globalPosition: 'right center',className: 'error'});
                    }
                },
                error:function(err){
                    console.log(err);
                }
            })
        });


        /* Dose List Start */
        {{--function doeslist(product_id){--}}
        {{--$.ajax({--}}
        {{--method:"post",--}}
        {{--url:"{{ route('vaccine.doeslist') }}",--}}
        {{--data:{product_id:product_id,"_token":"{{ csrf_token() }}"},--}}
        {{--dataType:"html",--}}
        {{--success:function (response) {--}}
        {{--$("#does_no").html(response);--}}
        {{--}--}}
        {{--});--}}
        {{--}--}}
        /* Dose List End */



        function vaccine_appliers_list() {
            $.ajax({
                url:"{{ route('vaccineapplier.get') }}",
                dataType:"html",
                success:function (response){
                    $("#patient_id").html(response);
                },
                error:function (err) {
                    console.log(err);
                }
            });
        }




        $(document).on('click',"#new_doctor",function () {
            $("#new_doc").modal("show");
        });

        $(document).on("change","#certification_id",function(){
            var certification_id = $(this).val();
            getcertification(certification_id);
        });

        function getcertification(certification_id){
            $.ajax({
                method:"post",
                url:"{{ route('subcertification.request') }}",
                data:{certification_id:certification_id,"_token":"{{ csrf_token() }}"},
                dataType:"html",
                success:function (response) {
                    $("#subcertification_id").html(response);
                }
            });
        }

        /* New Doctor Registraiton Start */

        $("#ajax_doctor_registration").on("submit",function (e) {
            e.preventDefault(e);

            var token = "{{ csrf_token() }}";
            var route = $(this).attr('action');

            $.ajax({
                headers: { 'X-CSRF-TOKEN': token },
                method:"post",
                data: new FormData(this),
                url:route,
                contentType: false,
                cache: false,
                processData:false,
                dataType:"json",
                success:function(res){
                    doctor_list();
                    $("#new_doc").modal("hide");
                    $.notify("Congratulations!. New Doctor Successfully Registration Complete.", {globalPosition: 'top right',className: 'success'});
                },
                error:function (err) {
                    console.log(err);
                }
            });
        });

        /* New Doctor Registration End */

        /* New Vaccine Appliers Apply Start */

        $(document).on('click',"#new_vaccine_appliers",function () {
            $("#vappliersmodal").modal("show");
        });

        $("#ajax_vaccine_appliers_registration").on("submit",function (e) {
            e.preventDefault(e);
            var token = "{{ csrf_token() }}";
            var route = $(this).attr('action');

            $.ajax({
                headers: { 'X-CSRF-TOKEN': token },
                method:"post",
                data: new FormData(this),
                url:route,
                contentType: false,
                cache: false,
                processData:false,
                dataType:"json",
                success:function(res){
                    vaccine_appliers_list();
                    $("#vappliersmodal").modal("hide");
                    $.notify("Congratulations!. New Vaccine Appliers Successfully Registration Complete.", {globalPosition: 'top right',className: 'success'});
                },
                error:function (err) {
                    console.log(err);
                }
            });
        });

        /* New Vaccine Appliers Apply End */
        /* Vaccine According to Dieseas */




        var dummy_balance = dummy_total = dummy_discount = dummy_paid = 0;

        $(document).on('keyup','#discount',function() {


            dummy_discount = $(this).val();  dummy_paid = $("#paid").val();
            dummy_total = $("#total_amount").val();

            var total_payable = Number(dummy_discount)+Number(dummy_paid);

            var stilldue = Number(dummy_total)-Number(total_payable);

            if(stilldue>0){
                $("#balance").val(stilldue);
                $("#paymentmsg").html("You have to pay : "+stilldue+" tk").show(500);
            }else if (stilldue == 0){
                $("#balance").val(stilldue);
                $("#paymentmsg").html("You have to pay : "+stilldue+" tk").show(500);
            }else{
                $(this).val(0);
                var t = Number(dummy_total)-Number(dummy_paid);
                $("#balance").val(t);
                $("#paymentmsg").html("You have to pay : "+t+" tk").show(500);
            }
        });

        var z =0;
        var tk = 0;

        var last_val = 0;
        $(document).on('keyup','#paid',function() {

            var paid  = $(this).val();

            var amount = $("#total_amount").val();

            var discount = $("#discount").val();

            var total = Number(paid)+Number(discount);

            var payable = Number(amount)-Number(total); /* Total Amount Minus Paid + Discount Total Amount */

            var dueamount = Number(amount)-Number(discount);

            if(amount-total==0){

                $("#paymentmsg").html("You have to pay : "+payable+" tk ").show(500);
                $("#balance").val(amount-total);
            }
            else if(amount > total){
                $("#paymentmsg").html("You have to pay : "+payable+" tk ").show(500);
                $("#balance").val(payable);
            }
            else{
                $("#balance").val(dueamount);
                $(this).val(0);
                $("#paymentmsg").html("You have to pay : "+dueamount+" tk ").show(500);

            }


        });
        /* Payment calculation end here */


        $(document).on("change","#payment_type",function () {
            var payment_type = $(this).val();
            if (payment_type!='cash'){
                $("#paymentTrxID").fadeIn();
            }else{
                $("#paymentTrxID").fadeOut();
            }
        });


        /* Appliers info */
        function applied_info(){
            var patient_id = $("#patient_id").val();
            var dieseas_id = $("#dieseas_id").val();
            var product_id = $("#product_id").val();

            if (patient_id !=0 && dieseas_id !=0 && product_id !=0){
                $.ajax({
                    method:"post",
                    url:"{{ route('applied.info') }}",
                    data:{patient_id:patient_id,dieseas_id:dieseas_id,product_id:product_id,"_token":"{{ csrf_token() }}"},
                    dataType:"json",
                    success:function (con) {
                        $("#namevalue").text(con.name);
                        $("#phone").text(con.phone);
                        $("#dieseas").text(con.dieseas);
                        $("#vaccine").text(con.product);
                        $("#doseapplied").text(con.dose);
                        $("#currentdose").text(con.date);


                        console.log(con);
                    }
                });
            }

        }


        $(document).on("change",'#doctor_list',function () {
            var doctor_id = $(this).val();
            if (doctor_id !=0){
                // applied_info();
                console.log("Doctor id : "+doctor_id);
            }else{
                $("#namevalue").text("");
                $("#phone").text("");
                $("#dieseas").text("");
                $("#vaccine").text("");
                $("#doseapplied").text("");
                $("#currentdose").text("");
            }
        });



        /* Appliers Info end*/

        $(document).on("keyup","#saleprice",function () {
            var price = $(this).val();
            console.log(price);
            if (Number(price) == 0){
                console.log("Price 0");
                $("#addTosaleList").prop("disabled",true);
            }else{
                $("#addTosaleList").prop("disabled",false);
            }
        });


        $(document).on("click","#addTosaleList",function () {
            var product_id = $("#product_id").val();
            var price = $("#saleprice").val();
            var doss = $("#does_no").val();
            $("#pendingSaleProductList").html("<tr> <td colspan='6'> <p class='btn btn-mint btn-block'>Product List Loading.........</p> </td> </tr>");
            $.ajax({
                method:"post",
                url : "{{ route('sale.pendingList') }}",
                data:{product_id:product_id,price:price, doss:doss, _token:"{{ csrf_token() }}"},
                dataType:"json",
                success:function (res) {
                    if (res.exit == 1){
                        $.notify("Already added this product in sale queuee ", {globalPosition: 'bottom right',className: 'error'});
                    }
                   allPendingProductList();
                }
            });
        });

        function allPendingProductList() {
            $.ajax({
                method:"get",
                url:"{{ route('pending.saleproduct') }}",
                dataType:"html",
                success:function (res) {
                    $("#pendingSaleProductList").html(res);
                }
            });
        }
    </script>

@endsection
