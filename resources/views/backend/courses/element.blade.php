
 <div class="form-group">
    <label class="col-lg-2 control-label">Course Name<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="text" value="{{ isset($course->course_name) ? $course->course_name : old('course_name')}}" name="course_name" class="form-control">
        @error('course_name') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>


 <div class="form-group">
    <label class="col-lg-2 control-label">Course Code<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="text" value="{{ isset($course->course_code) ? $course->course_code : old('course_code')}}" name="course_code" class="form-control">
        @error('course_code') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>


 <div class="form-group">
    <label class="col-lg-2 control-label">Course Deception<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <textarea name="description" class="form-control" id="" cols="30" rows="10">
            {{ isset($course->description) ? $course->description : old('description')}}
        </textarea>
        @error('description') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>



 <div class="form-group"><label class="col-lg-2 control-label" for="status">Status</label>
     <div class="col-lg-10">
         <input {{ (isset($course->status) AND $course->status == 1) ? 'checked':'' }} name="status" value="1" type="checkbox" class="i-checks" id="status">
     </div>
 </div>
