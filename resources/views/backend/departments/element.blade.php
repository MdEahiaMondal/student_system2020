
 <div class="form-group">
    <label class="col-lg-2 control-label">Department Name<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="text" value="{{ isset($department->name) ? $department->name : old('name')}}" name="name" class="form-control">
        @error('name') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

 <div class="form-group">
     <label class="col-lg-2 control-label">Faculty Name<span class="required-star"> *</span></label>
     <div class="col-lg-6">
         <select name="faculty_id" id="faculty_id" class="form-control">
             <option selected value="">Select  </option>
             @foreach($faculites as $faculty)
                 <option {{ (isset($department->faculty_id) AND $department->faculty_id == $faculty->id) ? 'selected':'' }} value="{{ $faculty->id }}">{{ $faculty->name }}</option>
             @endforeach
         </select>
         @error('faculty_id') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
     </div>
 </div>



 <div class="form-group">
    <label class="col-lg-2 control-label">Department Code<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="text" value="{{ isset($department->code) ? $department->code : old('code')}}" name="code" class="form-control">
        @error('code') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>


 <div class="form-group">
    <label class="col-lg-2 control-label">Department Deception<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <textarea name="description" class="form-control" id="" cols="30" rows="10">
            {{ isset($department->description) ? $department->description : old('description')}}
        </textarea>
        @error('description') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>



 <div class="form-group"><label class="col-lg-2 control-label" for="status">Status</label>
     <div class="col-lg-10">
         <input {{ (isset($department->status) AND $department->status == 1) ? 'checked':'' }} name="status" value="1" type="checkbox" class="i-checks" id="status">
     </div>
 </div>
