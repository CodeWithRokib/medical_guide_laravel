@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Add / View Daily Cost</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Daily Cost</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add New Daily Cost</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    {{ Form::open(['route'=>'localcost.store','method'=>'post','id'=>'GoldMakerForm','enctype'=>'Multipart/form-data']) }}

                                    <div class="col-lg-12 col-sm-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                        {{ Form::hidden('id',null,['class'=>'form-control','id'=>'id']) }}
                                        {{ Form::label('cost','Cost Name : ',['class'=>'control-label'])}}
                                        {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Ex: Tea Cost','id'=>'name'])}}
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                        <hr>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 {{$errors->has('amount') ? 'has-error' : ''}}">

                                        {{ Form::label('GoldMakerphone','Cost Amount ( Tk ) : ',['class'=>'control-label'])}}
                                        {{ Form::text('amount',old('amount'),['class'=>'form-control','placeholder'=>'Ex: 100 tk','id'=>'amount'])}}
                                        @if ($errors->has('amount'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('amount') }}</strong>
                                            </span>
                                        @endif
                                        <hr>
                                    </div>

                                    <div class="col-md-12 col-xs-12">
                                        {{ Form::button('SAVE DAILY COST',['type'=>'submit','id'=>'saveGoldMaker','class'=>'btn btn-primary']) }}

                                        @if($errors->all())
                                            {{ Form::hidden('canceledit',"Cancel Edit",['type'=>'reset','id'=>'cancel','class'=>'btn btn-danger']) }}
                                        @endif

                                        {{ Form::hidden('canceledit',"Cancel Edit",['type'=>'reset','id'=>'cancel','class'=>'btn btn-danger']) }}

                                    </div>
                                    {{ Form::close() }}

                                </div>

                                

                                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                    <table class="table table-bordered table-striped" id="brandTable">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Phone </th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=0;$total=0; @endphp
                                            @foreach($costs as $info)
                                                @php $total =$total+$info->amount; @endphp
                                                <tr id="rowid{{$info->id}}" class="abcd">
                                                    <td>{{++$i}}</td>

                                                    <td id="name{{ $info->id }}" data-id="{{ $info->name }}">{{$info->name}}</td>
                                                    <td id="amount{{ $info->id }}" data-id="{{ $info->amount }}">{{$info->amount}}</td>
                                                    <td>
                                                      
                                                        <button class="btn btn-sm btn-danger erase" data-id="{{$info->id}}" data-url="{{url('localcost/erase')}}"><i class="demo-pli-trash"></i></button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="5" class="text-center bg-primary"> Total Tk : {{ $total }}   </td>
                                            </tr>

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

        $(function(){
            $('#brandTable').DataTable();
            $("#cancel").hide();
        });

        /* edit request start */
        $(document).on('click','.edit',function(){
            $("#cancel").show(200);

            $("#cancel").attr("type","button");
            var id = $(this).attr('data-id');
            var name = $("#name"+id).attr('data-id');
            var phone = $("#phone"+id).attr('data-id');
            var address = $("#address"+id).attr('data-id');
            var route = '{{ route("goldmaker.update") }}';
            var img = $("#image"+id).attr('data-id');
            $("#name").val(name);
            $("#phone").val(phone);
            $("#address").val(address);
            $("#id").val(id);
            $('#GoldMakerForm').attr('action',route);
            $("#saveGold Maker").text("Update Gold Maker");
            $("#saveGold Maker").attr('class','btn btn-info');
            $("#cancel").attr('type','reset');

            $("#oldimage").attr('src',"{{url('public/admin/goldmaker')}}"+"/"+img);
        });

        $("#cancel").click(function(){
            var route = '{{ route("goldmaker.add") }}';
            $("#GoldMakerForm").attr('action',route);
            $("#id").val("");
            $("#saveGold Maker").text("Add Gold Maker");
            $("#saveGold Maker").attr('class','btn btn-primary');
            $(this).hide(299)
        });
        /* edit request end */
    </script>

@endsection