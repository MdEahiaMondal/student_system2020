
 <div class="form-group">
    <label class="col-lg-2 control-label">Name<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="text" value="{{ isset($semester->name) ? $semester->name : old('name')}}" name="name" class="form-control">
        @error('name') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>


 <div class="form-group">
    <label class="col-lg-2 control-label">Code<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="text" value="{{ isset($semester->code) ? $semester->code : old('code')}}" name="code" class="form-control">
        @error('code') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

 <div class="form-group">
    <label class="col-lg-2 control-label">Duration<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="date" value="{{ isset($semester->duration) ? $semester->duration : old('duration')}}" name="duration" class="form-control">
        @error('duration') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>


 <div class="form-group">
    <label class="col-lg-2 control-label">Deception<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <textarea name="description" class="form-control" id="" cols="30" rows="10">
            {{ isset($semester->description) ? $semester->description : old('description')}}
        </textarea>
        @error('description') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

