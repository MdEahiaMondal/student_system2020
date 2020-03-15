@if(Session::get('create'))
<div class="form-group">
    <label class="col-lg-2 control-label">UserName<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="text" value="{{\Illuminate\Support\Str::random(6)}}" name="username" class="form-control">
        @error('username') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Password<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="password" value="{{\Illuminate\Support\Str::random(8)}}" name="password" class="form-control">
        @error('password') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>
@endif

<div class="form-group">
    <label class="col-lg-2 control-label">Faculty<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <select name="faculty_id" id="faculty_id" class="form-control">
            <option selected value="">Select </option>
            @foreach($faculties as $faculty)
                <option {{ (isset($admission->faculty_id) AND $admission->faculty_id == $faculty->id) ? 'selected':'' }} value="{{ $faculty->id }}">{{ $faculty->name }}</option>
            @endforeach
        </select>
        @error('faculty_id') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Department<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <select name="department_id" id="department_id" class="form-control">
            <option selected value="">Select </option>
            @foreach($departments as $department)
                <option {{ (isset($admission->department_id) AND $admission->department_id == $department->id) ? 'selected':'' }} value="{{ $department->id }}">{{ $department->name }}</option>
            @endforeach
        </select>
        @error('department_id') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Batch<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <select name="batch_id" id="batch_id" class="form-control">
            <option selected value="">Select </option>
            @foreach($batches as $batch)
                <option {{ (isset($admission->batch_id) AND $admission->batch_id == $batch->id) ? 'selected':'' }} value="{{ $batch->id }}">{{ $batch->batch }}</option>
            @endforeach
        </select>
        @error('batch_id') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>


<div class="form-group">
    <label class="col-lg-2 control-label">Father Name<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="text" value="{{ isset($admission->father_name) ? $admission->father_name : old('father_name')}}" name="father_name" class="form-control">
        @error('father_name') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Father Phone<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="text" value="{{ isset($admission->father_phone) ? $admission->father_phone : old('father_phone')}}" name="father_phone" class="form-control">
        @error('father_phone') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Mother Name<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="text" value="{{ isset($admission->mother_name) ? $admission->mother_name : old('mother_name')}}" name="mother_name" class="form-control">
        @error('mother_name') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">First Name<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="text" value="{{ isset($admission->first_name) ? $admission->first_name : old('first_name')}}" name="first_name" class="form-control">
        @error('first_name') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>


 <div class="form-group">
    <label class="col-lg-2 control-label">Last Name <span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="text" value="{{ isset($admission->last_name) ? $admission->last_name : old('last_name')}}" name="last_name" class="form-control">
        @error('last_name') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

 <div class="form-group">
    <label class="col-lg-2 control-label">Email <span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="email" value="{{ isset($admission->email) ? $admission->email : old('email')}}" name="email" class="form-control">
        @error('email') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

 <div class="form-group">
     <label class="col-lg-2 control-label">Phone <span class="required-star"> *</span></label>
     <div class="col-lg-6">
         <input type="text" value="{{ isset($admission->phone) ? $admission->phone : old('phone')}}" name="phone" class="form-control">
         @error('phone') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
     </div>
 </div>

 <div class="form-group">
     <label class="col-lg-2 control-label">Nationality <span class="required-star"> *</span></label>
     <div class="col-lg-6">
         <input type="text" value="{{ isset($admission->nationality) ? $admission->nationality : old('nationality')}}" name="nationality" class="form-control">
         @error('nationality') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
     </div>
 </div>

 <div class="form-group">
     <label class="col-lg-2 control-label">Passport <span class="required-star"> *</span></label>
     <div class="col-lg-6">
         <input type="text" value="{{ isset($admission->passport) ? $admission->passport : old('passport')}}" name="passport" class="form-control">
         @error('passport') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
     </div>
 </div>


 <div class="form-group">
     <label class="col-lg-2 control-label">Date Of Birth<span class="required-star"> *</span></label>
     <div class="col-lg-6">
         <input type="date" value="{{ isset($admission->dob) ? $admission->dob : old('dob')}}" name="dob" class="form-control">
         @error('dob') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
     </div>
 </div>


 <div class="form-group">
     <label class="col-lg-2 control-label">Gender<span class="required-star"> *</span></label>
     <div class="col-lg-6">
         <input type="radio"  {{ (isset($admission->gender) AND $admission->gender == 'male') ? 'checked':'' }} value="male" name="gender" >Male
         <input type="radio" {{ (isset($admission->gender) AND $admission->gender == 'female') ? 'checked':'' }} value="female" name="gender" >Female
         @error('gender') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
     </div>
 </div>

 <div class="form-group">
     <label class="col-lg-2 control-label">Address<span class="required-star"> *</span></label>
     <div class="col-lg-6">
        <textarea name="address" class="form-control">
            {{ isset($admission->address) ? $admission->address : old('address')}}
        </textarea>
         @error('address') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
     </div>
 </div>

 <div class="form-group">
     <label class="col-lg-2 control-label">Current Address<span class="required-star"> *</span></label>
     <div class="col-lg-6">
        <textarea name="current_address" class="form-control">
            {{ isset($admission->current_address) ? $admission->current_address : old('current_address')}}
        </textarea>
         @error('current_address') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
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
         <input {{ (isset($admission->status) AND $admission->status == 1) ? 'checked':'' }} name="status" value="1" type="checkbox" class="i-checks" id="status">
         @error('status') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
     </div>
 </div>

@push('script')
    <script>
        $().ready(function () {

            // old value catch
            @if(old('faculty_id') > 0)
            $("#faculty_id").val("{!! old('faculty_id') !!}");
            $("#faculty_id").trigger('change'); // autometic run
            updateDynamicField($("#faculty_id"));
            @endif

            $("#faculty_id").change(function () {
                var faculty_id = $(this).val();
                if(faculty_id) {
                    updateDynamicField(this);
                }
            });

            function updateDynamicField(element)
            {
                if ($(element).val() !== ''){
                    var faculty_id = $(element).val();
                    $.get("{{ route('admin.dynamicFaculity') }}", { faculty_id: faculty_id }, function (res) {
                        if (res.department)
                        {
                            $("#department_id").html(res.department);
                        }
                        if (res.false)
                        {
                            toastr.error('Not Found');
                        }
                    });
                }
            }
        });
    </script>
@endpush
