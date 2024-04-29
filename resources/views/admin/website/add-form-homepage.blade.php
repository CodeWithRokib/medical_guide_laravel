<div class="col-lg-12 col-sm-12 {{$errors->has('title') ? 'has-error' : ''}}">
    {{ Form::label('title','Title :* ',['class'=>'control-label'])}}
    {{ Form::text('title',old('title'),['class'=>'form-control','placeholder'=>'Title'])}}

    @if ($errors->has('title'))
        <span class="help-block">
                                             <strong>{{ $errors->first('title') }}</strong>
                                        </span>
    @endif
</div>


<div class="col-lg-12 col-sm-12 {{$errors->has('image') ? 'has-error' : ''}}">
    {{ Form::label('image','Image : ',['class'=>'control-label'])}}
    {{ Form::file('image',['class'=>'form-control'])}}
    @if ($errors->has('image'))
        <span class="help-block">
                                                 <strong>{{ $errors->first('image') }}</strong>
                                            </span>
    @endif
</div>

<div class="col-lg-12 col-sm-12 {{$errors->has('video') ? 'has-error' : ''}}">
    {{ Form::label('video','Video : ',['class'=>'control-label'])}}
    {{ Form::text('video',old('video'),['class'=>'form-control','placeholder'=>'Video Link'])}}
    @if ($errors->has('video'))
        <span class="help-block">
                                                 <strong>{{ $errors->first('video') }}</strong>
                                            </span>
    @endif
</div>

<div class="col-lg-12 col-sm-12 {{$errors->has('description') ? 'has-error' : ''}}">
    {{ Form::label('brand','Description  : ',['class'=>'control-label'])}}
    {{Form::textarea('description',old('description'),['class'=>'form-control','placeholder'=>'Ex: Hospital description...'])}}

    @if ($errors->has('description'))
        <span class="help-block">
                                                 <strong>{{ $errors->first('description') }}</strong>
                                            </span>
    @endif
</div>