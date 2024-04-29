@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">View Stock Summary</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Stock</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="loader" style=" overflow: hidden; width: 100%; margin: auto;text-align: center;position: absolute;top: 25%;
        z-index: 999;">
                    <img src="{{ url('public/admin/loader/loader.gif') }}">
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Stock </h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
                                            {{ Form::label('search','Search Stock : ') }}
                                            {{ Form::text('searchkey',null,['class'=>'form-control bg-primary','id'=>'searchkey','placeholder'=>'USE PRODUCT NAME']) }}
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xs-12">
                                        <span style="width:100%;height: 20px;display: block;"></span>
                                    </div>
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name </th>
                                            <th>Available Product </th>

                                        </tr>
                                        </thead>
                                        <tbody id="allstock">

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
    <style type="text/css">

    </style>

    <script>
        $(document).ready(function(){
            $(".loader").css("display","none");
            ViewStock();
        });


        function ViewStock() {
            $.ajax({
                url:"{{route('otherproduct.info')}}",
                dataType:"html",
                success:function(response){
                    $("#allstock").html(response);
                },
                error:function(err){
                    console.log(err);
                }
            });
        }

        $(document).on('keyup',"#searchkey",function () {
            var keysearch = $(this).val();
            $(".loader").css("display","block");
            $.ajax({
                method:"post",
                url:"{{route('otherstock.search')}}",
                data:{proname:keysearch,"_token":"{{ csrf_token() }}"},
                dataType:"html",
                success:function(response){
                    $(".loader").css("display","none");
                    $(".loader").hide(500);
                    $("#allstock").html(response);
                },
                error:function(err){
                    console.log(err);
                }
            });
        });


    </script>

@endsection