<div class="form-group">
    <label class="col-lg-2 control-label">First Name<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="text" value="{{ isset($teacher->first_name) ? $teacher->first_name : old('first_name')}}" name="first_name" class="form-control">
        @error('first_name') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Last Name<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="text" value="{{ isset($teacher->last_name) ? $teacher->last_name : old('last_name')}}" name="last_name" class="form-control">
        @error('last_name') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Email<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="email" value="{{ isset($teacher->email) ? $teacher->email : old('email')}}" name="email" class="form-control">
        @error('email') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Phone<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="text" value="{{ isset($teacher->phone) ? $teacher->phone : old('phone')}}" name="phone" class="form-control">
        @error('phone') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Nationality<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="text" value="{{ isset($teacher->nationality) ? $teacher->nationality : old('nationality')}}" name="nationality" class="form-control">
        @error('nationality') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Passport<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="text" value="{{ isset($teacher->passport) ? $teacher->passport : old('passport')}}" name="passport" class="form-control">
        @error('passport') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Date Of Birth<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="date" value="{{ isset($teacher->dob) ? $teacher->dob : old('dob')}}" name="dob" class="form-control">
        @error('dob') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Date Registered<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="date" value="{{ isset($teacher->dateregistered) ? $teacher->dateregistered : old('dateregistered')}}" name="dateregistered" class="form-control">
        @error('dateregistered') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Gender<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="radio"  {{ (isset($teacher->gender) AND $teacher->gender == 'male') ? 'checked':'' }} value="male" name="gender" >Male
        <input type="radio" {{ (isset($teacher->gender) AND $teacher->gender == 'female') ? 'checked':'' }} value="female" name="gender" >Female
        @error('gender') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Address<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <textarea name="address" class="form-control">
            {{ isset($teacher->address) ? $teacher->address : old('address')}}
        </textarea>
        @error('address') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>


<div class="form-group">
    <label class="col-lg-2 control-label">Image<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="file" name="img" class="form-control">
        @error('img') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>


<div class="form-group"><label class="col-lg-2 control-label" for="status">Status</label>
    <div class="col-lg-10">
        <input {{ (isset($teacher->status) AND $teacher->status == 1) ? 'checked':'' }} name="status" value="1" type="checkbox" class="i-checks" id="status">
        @error('status') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>
