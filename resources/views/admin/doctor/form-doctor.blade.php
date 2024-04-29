<div class="col-lg-12 col-sm-3 col-md-12 col-xs-12 {{ $errors->has('name') ? 'has-error' : '' }}">
    <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>

    {{ Form::label('name', 'Doctor Name :* ', ['class' => 'control-label']) }}
    {{ Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Ex: Jhon Doe']) }}
    @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>

<div class="col-lg-12 col-sm-3 col-md-12 col-xs-12 {{ $errors->has('email') ? 'has-error' : '' }}">
    <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>

    {{ Form::label('email', 'Email :* ', ['class' => 'control-label']) }}
    {{ Form::text('email', old('email'), ['class' => 'form-control', 'placeholder' => '']) }}
    @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
</div>

<div class="col-lg-12 col-sm-3 col-md-12 col-xs-12 {{ $errors->has('password') ? 'has-error' : '' }}">
    <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>

    {{ Form::label('password', 'Password :* ', ['class' => 'control-label']) }}
    {{ Form::text('password', old('password'), ['class' => 'form-control', 'placeholder' => '']) }}
    @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
</div>

<div class="col-lg-12 col-sm-3 col-md-12 col-xs-12 {{ $errors->has('gender') ? 'has-error' : '' }}">
    <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
    {{ Form::label('', 'Doctor Gender :* ', ['class' => 'control-label']) }}
    {{ Form::select('gender', ['0' => 'Male', '1' => 'Female'], null, ['class' => 'form-control']) }}
    @if ($errors->has('gender'))
        <span class="help-block">
            <strong>{{ $errors->first('gender') }}</strong>
        </span>
    @endif
</div>

<div class="col-lg-12 col-sm-3 col-md-12 col-xs-12 {{ $errors->has('type') ? 'has-error' : '' }}">
    <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
    {{ Form::label('', 'Type :* ', ['class' => 'control-label']) }}
    {{ Form::select('type', [1 => 'Local', 2 => 'Foreign'], null, ['class' => 'form-control']) }}
    @if ($errors->has('type'))
        <span class="help-block">
            <strong>{{ $errors->first('type') }}</strong>
        </span>
    @endif
</div>


<div class="col-lg-12 col-sm-3 col-md-12 col-xs-12 {{ $errors->has('phone') ? 'has-error' : '' }}">
    <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>

    {{ Form::label('phone', 'Phone : ', ['class' => 'control-label']) }}
    {{ Form::text('phone', old('phone'), ['class' => 'form-control']) }}
    @if ($errors->has('phone'))
        <span class="help-block">
            <strong>{{ $errors->first('phone') }}</strong>
        </span>
    @endif
</div>

<div class="col-lg-12 col-sm-12 col-md-3 col-xs-12 {{ $errors->has('hospital_id') ? 'has-error' : '' }}">

    <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>

    {{ Form::label('hospital_id', 'Hospital : ', ['class' => 'control-label']) }}
    {{ Form::select('hospital_id', $hospitals, false, ['class' => 'form-control', 'id' => 'hospital_id']) }}

    @if ($errors->has('hospital_id'))
        <span class="help-block">
            <strong>{{ $errors->first('hospital_id') }}</strong>
        </span>
    @endif

</div>

<div class="col-lg-12 col-sm-12 col-md-3 col-xs-12 {{ $errors->has('specialist_id') ? 'has-error' : '' }}">
    <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>

    {{ Form::label('specialist_id', 'Specialist In : ', ['class' => 'control-label']) }}
    {{ Form::select('specialist_id', $specialists, false, ['class' => 'form-control', 'id' => 'specialist_id']) }}

    @if ($errors->has('specialist_id'))
        <span class="help-block">
            <strong>{{ $errors->first('specialist_id') }}</strong>
        </span>
    @endif
</div>

<div class="col-lg-12 col-sm-12 col-md-3 col-xs-12 {{ $errors->has('image') ? 'has-error' : '' }}">
    <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
    {{ Form::label('image', 'Doctor Image : ', ['class' => 'control-label']) }}

    {{ Form::file('image', ['class' => 'form-control']) }}

    @if ($errors->has('image'))
        <span class="help-block">
            <strong>{{ $errors->first('image') }}</strong>
        </span>
    @endif
</div>

<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 {{ $errors->has('description') ? 'has-error' : '' }}">
    <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>

    {{ Form::label('description', 'Doctor Details : ', ['class' => 'control-label']) }}
    {{ Form::textarea('description', old('description'), ['class' => 'form-control', 'placeholder' => 'Doctor Details']) }}
    @if ($errors->has('description'))
        <span class="help-block">
            <strong>{{ $errors->first('description') }}</strong>
        </span>
    @endif

</div>
