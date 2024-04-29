@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Add / View Doctor</h1>
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
                                <h3 class="panel-title">Add New Doctor</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">

                                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">

                                    {{ Form::open(['route'=>'doctor.store','method'=>'post','enctype'=>'multipart/form-data']) }}

                                        <!--  PRODUCT NAME  -->
                                        @include('admin.doctor.form-doctor')
                                        <!-- / PRODUCT File NAME  -->
                                        <div class="col-lg-12 col-sm-12 col-xs-12"><span style="display: block;height: 10px;width: 100%;background: #fff;"></span></div>

                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                            {{ Form::button('SAVE DOCTOR',['type'=>'submit','id'=>'','class'=>'btn btn-primary']) }}
                                        </div>
                                        {{ Form::close() }}
                                    </div>
                                    <div class="col-lg-9 col-sm-6 col-md-6 col-xs-12 table-responsive">
                                        @include('admin.doctor.doctors')
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

        $(document).on('change','#hospital_id',function () {
            var hospital_id = $(this).val();
            var route = '{{ route("doctor.findSpecialist") }}';
            $.ajax({
                method:'post',
                url : route,
                data:{hospital_id:hospital_id,_token:'{{ csrf_token() }}'},
                dataType:'html',
                success:function (res) {
                    $("#specialist_id").html(res);
                }
            });
        });

    </script>
@endsection
