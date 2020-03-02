
 <div class="form-group">
    <label class="col-lg-2 control-label">Class Name<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="text" value="{{ isset($classe->class_name) ? $classe->class_name : old('class_name')}}" name="class_name" class="form-control">
        @error('class_name') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>


 <div class="form-group">
    <label class="col-lg-2 control-label">Class Code<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="text" value="{{ isset($classe->class_code) ? $classe->class_code : old('class_code')}}" name="class_code" class="form-control">
        @error('class_code') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>
