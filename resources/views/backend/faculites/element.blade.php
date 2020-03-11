
 <div class="form-group">
    <label class="col-lg-2 control-label">Faculty Name<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="text" value="{{ isset($faculty->name) ? $faculty->name : old('name')}}" name="name" class="form-control">
        @error('name') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>


 <div class="form-group">
    <label class="col-lg-2 control-label">Faculty Code<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="text" value="{{ isset($faculty->code) ? $faculty->code : old('code')}}" name="code" class="form-control">
        @error('code') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>


 <div class="form-group">
    <label class="col-lg-2 control-label">Faculty Deception<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <textarea name="description" class="form-control" id="" cols="30" rows="10">
            {{ isset($faculty->description) ? $faculty->description : old('description')}}
        </textarea>
        @error('description') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>



 <div class="form-group"><label class="col-lg-2 control-label" for="status">Status</label>
     <div class="col-lg-10">
         <input {{ (isset($faculty->status) AND $faculty->status == 1) ? 'checked':'' }} name="status" value="1" type="checkbox" class="i-checks" id="status">
     </div>
 </div>
