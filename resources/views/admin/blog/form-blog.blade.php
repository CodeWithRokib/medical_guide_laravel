
<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 {{$errors->has('name') ? 'has-error' : ''}}">
    {{ Form::label('name','Name :* ',['class'=>'control-label'])}}
    {{ Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Ex: John Doe'])}}
    @if ($errors->has('name'))
        <span class="help-block">
             <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>

<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 {{$errors->has('description') ? 'has-error' : ''}}">
    <br>
    {{ Form::label('','Description :* ',['class'=>'control-label'])}}
    {{ Form::textarea('description',null,['class'=>'form-control','placeholder'=>'Brief on Client']) }}
    @if ($errors->has('description'))
        <span class="help-block">
             <strong>{{ $errors->first('description') }}</strong>
        </span>
    @endif
</div>


<div class="col-md-12 col-xs-12">
    <br>
</div>
<div class="col-md-12 col-xs-12">
    {{ Form::submit( $button,['id'=>'saveCategory','class'=>'btn-block btn btn-primary']) }}
</div>