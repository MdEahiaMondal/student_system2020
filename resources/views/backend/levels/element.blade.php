<div class="form-group">
    <label class="col-lg-2 control-label">Level Name<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="text" value="{{ isset($level->level) ? $level->level : old('level')}}" name="level" class="form-control">
        @error('level') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Course Name<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <select name="course_id" id="course_id" class="form-control">
            <option selected value="">Select  </option>
            @foreach($courses as $course)
                <option {{ (isset($level->course_id) AND $level->course_id == $course->id) ? 'selected':'' }} value="{{ $course->id }}">{{ $course->course_name }}</option>
            @endforeach
        </select>
        @error('course_id') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Deception<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <textarea name="level_description" class="form-control" id="" cols="30" rows="10">
            {{ isset($level->level_description) ? $level->level_description : old('level_description')}}
        </textarea>
        @error('level_description') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

