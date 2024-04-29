
<div class="col-lg-12 col-sm-12 col-md-3 col-xs-12 {{ $errors->has('doctor_id') ? 'has-error' : '' }}">

    <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>

    <div class="form-group">
        <label for="">Doctors</label>
        <select name="doctor_id" class="form-control" id="">
            @if(!blank($doctors))
            @foreach ($doctors as $doctor )
            <option value="{{ $doctor->id }}" >{{ optional($doctor->user)->name }}</option>
            @endforeach
            @endif
        </select>
    </div>

    @if ($errors->has('doctor_id'))
        <span class="help-block">
            <strong>{{ $errors->first('doctor_id') }}</strong>
        </span>
    @endif

</div>
<div class="col-lg-12 col-sm-3 col-md-12 col-xs-12 {{ $errors->has('name') ? 'has-error' : '' }}">
    <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>

    <div class="form-gorup">
        <label for="">Slot Date</label>
        <input type="date" class="form-control" name="date" required>
    </div>
</div>

<div class="col-lg-12 col-sm-3 col-md-12 col-xs-12 {{ $errors->has('slot_from') ? 'has-error' : '' }}">
    <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>

    <div class="form-gorup">
        <label for="">Slot From</label>
        <input type="text" class="form-control timepicker" name="slot_from" required>
    </div>
</div>


<div class="col-lg-12 col-sm-3 col-md-12 col-xs-12 {{ $errors->has('slot_to') ? 'has-error' : '' }}">
    <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>

    <div class="form-gorup">
        <label for="">Slot To</label>
        <input type="text" class="form-control timepicker" name="slot_to" required>
    </div>
</div>



