@extends('admin.layouts.admin')

@section('content')
    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div id="page-title">
                    <h1 class="page-header text-overflow">Add Applier</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="active">Applier</li>
                </ol>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add New Applier</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">

                                    <div class="col-lg-4 col-sm-6 col-md-6 col-xs-12">

                                        {{ Form::open(['route'=>'applier.store','method'=>'post']) }}

                                        <div class="col-lg-12 col-sm-12 {{$errors->has('name') ? 'has-error' : ''}}">
                                            {{ Form::hidden('id',null,['class'=>'form-control','id'=>'id']) }}
                                            {{ Form::label('name','Name : ',['class'=>'control-label'])}}
                                            {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Ex: Vaccine Applier Name','id'=>'name'])}}
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="col-lg-12 col-sm-12 {{$errors->has('father') ? 'has-error' : ''}}">

                                            {{ Form::label('father','Father/Husband Name : ',['class'=>'control-label'])}}
                                            {{ Form::text('father',null,['class'=>'form-control','placeholder'=>'Ex: Father/Husband Name','id'=>'father'])}}
                                            @if ($errors->has('father'))
                                                <span class="help-block">
                                                     <strong>{{ $errors->first('father') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="col-lg-12 col-sm-12 {{$errors->has('mother') ? 'has-error' : ''}}">

                                            {{ Form::label('Mother','Mother Name : ',['class'=>'control-label'])}}
                                            {{ Form::text('mother',null,['class'=>'form-control','placeholder'=>'Ex: Mother Name','id'=>'mother'])}}
                                            @if ($errors->has('mother'))
                                                <span class="help-block">
                                                     <strong>{{ $errors->first('mother') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="col-lg-12 col-sm-12 {{$errors->has('dob') ? 'has-error' : ''}}" id="demo-dp-txtinput">
                                            {{ Form::label('dob','Age : ',['class'=>'control-label'])}}
                                            {{ Form::text('dob',old('dob'),['class'=>'form-control','placeholder'=>'Click for select Date']) }}
                                            @if ($errors->has('dob'))
                                                <span class="help-block">
                                                     <strong>{{ $errors->first('dob') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="col-lg-12 col-sm-12 {{$errors->has('phone') ? 'has-error' : ''}}">
                                            {{ Form::label('Phone','Phone : ',['class'=>'control-label'])}}
                                            {{ Form::text('phone',old('phone'),['class'=>'form-control','placeholder'=>'Ex: Patient Phone','id'=>'phone'])}}
                                            @if ($errors->has('phone'))
                                                <span class="help-block">
                                                      <strong>{{ $errors->first('phone') }}</strong>
                                                 </span>
                                            @endif
                                        </div>


                                        <div class="col-lg-12 col-sm-12 {{$errors->has('email') ? 'has-error' : ''}}">
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
                                    <div class="col-lg-8 col-sm-6 col-md-6 col-xs-12">
                                    <table class="table table-bordered table-striped" id="brandTable">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Father/Husband</th>
                                            <th>Mother</th>
                                            <th>Gender </th>
                                            <th>Email </th>
                                            <th>Phone </th>
                                            <th>Pin</th>
                                            <th>QR Code</th>
                                            <th>DOB</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=0; @endphp
                                        @foreach($patients as $info)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $info->name  }}</td>
                                                <td>{{ $info->father  }}</td>
                                                <td>{{ $info->mother  }}</td>
                                                <td>{{ $info->gender  }}</td>
                                                <td>{{ $info->email  }}</td>
                                                <td>{{ $info->phone  }}</td>
                                                <td>{{ $info->user['pin']  }}</td>
                                                <td>
                                                    <img src="{{ url('public/admin/user/'.$info->user['qr'].'.svg') }}"  class="img-responsive" style="height: 120px;width: 120px;">
                                                </td>
                                                <td>{{ $info->dob  }}</td>
                                                <td>
                                                    <a href="{{route('applier.edit',$info->id)}}" class="btn btn-sm btn-info edit" ><i class="demo-pli-pen-5"></i></a> ||
                                                    <button class="btn btn-sm btn-danger erase fa fa-trash" data-id="{{$info->id}}" data-url="{{url('PatientManagement/erase')}}">
                                                    </button>
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
    $(function(){
        $('#brandTable').DataTable();
    });
</script>


@endsection