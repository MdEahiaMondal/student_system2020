<div class="form-group">
    <label class="col-lg-2 control-label">Academic Year<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="text" value="{{ isset($academic->academic_year) ? $academic->academic_year : old('academic_year')}}" name="academic_year" class="form-control">
        @error('academic_year') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

