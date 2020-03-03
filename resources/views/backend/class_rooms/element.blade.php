
 <div class="form-group">
    <label class="col-lg-2 control-label">Room Name<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="text" value="{{ isset($classRoom->classroom_name) ? $classRoom->classroom_name : old('classroom_name')}}" name="classroom_name" class="form-control">
        @error('classroom_name') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>


 <div class="form-group">
    <label class="col-lg-2 control-label">Room Code<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="text" value="{{ isset($classRoom->classroom_code) ? $classRoom->classroom_code : old('classroom_code')}}" name="classroom_code" class="form-control">
        @error('classroom_code') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>


 <div class="form-group">
    <label class="col-lg-2 control-label">Deception<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <textarea name="classroom_description" class="form-control" id="" cols="30" rows="10">
            {{ isset($classRoom->classroom_description) ? $classRoom->classroom_description : old('classroom_description')}}
        </textarea>
        @error('classroom_description') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>



 <div class="form-group"><label class="col-lg-2 control-label" for="classroom_status">Status</label>
     <div class="col-lg-10">
         <input {{ (isset($classRoom->classroom_status) AND $classRoom->classroom_status == 1) ? 'checked':'' }} name="classroom_status" value="1" type="checkbox" class="i-checks" id="classroom_status">
         @error('classroom_status') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
     </div>
 </div>
