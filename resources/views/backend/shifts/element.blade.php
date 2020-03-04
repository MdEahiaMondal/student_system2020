<div class="form-group">
    <label class="col-lg-2 control-label">Shift Name<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="text" value="{{ isset($shift->shift) ? $shift->shift : old('shift')}}" name="shift" class="form-control">
        @error('shift') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

