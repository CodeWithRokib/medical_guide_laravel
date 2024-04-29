{{-- <div class="col-lg-12 form-group col-sm-12 {{$errors->has('name') ? 'has-error' : ''}}">
    {{ Form::label('','Hospital :* ',['class'=>'control-label'])}}
    {{ Form::select('hospital_id',$hospitals,null,['class'=>'form-control'])}}
    @if ($errors->has('hospital_id'))
        <span class="help-block">
             <strong>{{ $errors->first('hospital_id') }}</strong>
        </span>
    @endif
</div> --}}

<div class="col-lg-12 col-sm-12 {{$errors->has('name') ? 'has-error' : ''}}">

    {{ Form::label('','Name : ',['class'=>'control-label'])}}
    {{ Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Ex: Cardiologist'])}}
    @if ($errors->has('name'))
        <span class="help-block">
             <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif

</div>
