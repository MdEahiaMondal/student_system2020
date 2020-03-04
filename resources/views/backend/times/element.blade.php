<div class="form-group">
    <label class="col-lg-2 control-label">Time<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="text" value="{{ isset($time->time) ? $time->time : old('time')}}" name="time" class="form-control">
        @error('time') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

