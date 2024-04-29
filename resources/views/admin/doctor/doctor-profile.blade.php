@extends('admin.layouts.admin')

@section('content')

    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Doctor Profile</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Doctor</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Doctor Slot</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-2 col-sm-3 col-md-3 col-xs-12">
                                        {{-- <div class="" style="border: 2px solid rgba(81,83,88,0.2);padding:6px;">
                                            <img src="{{ $doctor->image !=null  ? url('public/admin/product/upload/'.$doctor->image) : $doctor->gender ==0 ? url('public/admin/male-doctor.jpg') : url('public/admin/female-doctor.jpg') }}" style="height: 250px;width:250px;">
                                        </div> --}}
                                        <h5> {{ optional($doctor->user)->name }} </h5>
                                        <h5> Sex : {{ $doctor->gender == 0 ? "Male" : "Female" }} </h5>
                                        <h5> Contact : {{ optional($doctor->user)->phone }} </h5>
                                    </div>{{-- lg-3 left div end --}}

                                    {{-- right div start --}}


                                    <div class="col-lg-3 col-sm-3 col-md-9">
                                        <h4 >Doctor About : </h4>

                                            <p  style="list-style: none;font-size: 1.7rem;color: #000;line-height: 29px;font-weight: bold;"><strong style="background: #26A69A;color:#fff;margin: 0 5px 5px;"> Doctor Info : </strong> {!!  $doctor->description  !!}  </p>
                                    </div>
                                    {{-- right div End --}}
                                    <div class="col-lg-12">
                                        <a class="btn-block btn-mint text-center" style="padding: 10px;font-size: 2rem;font-weight: bold;text-transform: uppercase;letter-spacing: 2px;" href="{{ route('doctor.add') }}"> Back to Doctor List</a>
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
        $(function(){
            $('#brandTable').DataTable();
            $("#canceledit").hide();
        });
        $('#hospital_id').select2({
            tags:true
        });
        $('#specialist_id').select2({
            tags:true
        });
    </script>
@endsection
