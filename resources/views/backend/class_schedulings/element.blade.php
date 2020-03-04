
<div class="form-group">
    <label class="col-lg-2 control-label">Class Name<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <select name="class_id" id="class_id" class="form-control">
            <option selected value="">Select  </option>
            @foreach($classes as $classe)
                <option {{ (isset($classScheduling->class_id) AND $classScheduling->class_id == $classe->id) ? 'selected':'' }} value="{{ $classe->id }}">{{ $classe->class_name }}</option>
            @endforeach
        </select>
        @error('class_id') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Course Name<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <select name="course_id" id="course_id" class="form-control">
            <option selected value="">Select  </option>
            @foreach($courses as $course)
                <option {{ (isset($classScheduling->course_id) AND $classScheduling->course_id == $course->id) ? 'selected':'' }} value="{{ $course->id }}">{{ $course->course_name }}</option>
            @endforeach
        </select>
        @error('course_id') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Level<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <select name="level_id" id="level_id" class="form-control">
            <option selected value="">Select </option>
            @foreach($levels as $level)
                <option {{ (isset($classScheduling->level_id) AND $classScheduling->level_id == $level->id) ? 'selected':'' }} value="{{ $level->id }}">{{ $level->level }}</option>
            @endforeach
        </select>
        @error('level_id') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Shift<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <select name="shift_id" id="shift_id" class="form-control">
            <option selected value="">Select </option>
            @foreach($shifts as $shift)
                <option {{ (isset($classScheduling->shift_id) AND $classScheduling->shift_id == $shift->id) ? 'selected':'' }} value="{{ $shift->id }}">{{ $shift->shift }}</option>
            @endforeach
        </select>
        @error('shift_id') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Class Room<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <select name="classroom_id" id="classroom_id" class="form-control">
            <option selected value="">Select </option>
            @foreach($classrooms as $classroom)
                <option {{ (isset($classScheduling->classroom_id) AND $classScheduling->classroom_id == $classroom->id) ? 'selected':'' }} value="{{ $classroom->id }}">{{ $classroom->classroom_name }}</option>
            @endforeach
        </select>
        @error('classroom_id') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Batch<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <select name="batch_id" id="batch_id" class="form-control">
            <option selected value="">Select </option>
            @foreach($batches as $batch)
                <option {{ (isset($classScheduling->batch_id) AND $classScheduling->batch_id == $batch->id) ? 'selected':'' }} value="{{ $batch->id }}">{{ $batch->batch }}</option>
            @endforeach
        </select>
        @error('batch_id') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Day<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <select name="day_id" id="day_id" class="form-control">
            <option selected value="">Select </option>
            @foreach($days as $day)
                <option {{ (isset($classScheduling->day_id) AND $classScheduling->day_id == $day->id) ? 'selected':'' }} value="{{ $day->id }}">{{ $day->day }}</option>
            @endforeach
        </select>
        @error('day_id') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Time<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <select name="time_id" id="time_id" class="form-control">
            <option selected value="">Select </option>
            @foreach($times as $time)
                <option {{ (isset($classScheduling->time_id) AND $classScheduling->time_id == $time->id) ? 'selected':'' }} value="{{ $time->id }}">{{ $time->time }}</option>
            @endforeach
        </select>
        @error('time_id') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Semester<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <select name="semester_id" id="semester_id" class="form-control">
            <option selected value="">Select </option>
            @foreach($semesters as $semester)
                <option {{ (isset($classScheduling->semester_id) AND $classScheduling->semester_id == $semester->id) ? 'selected':'' }} value="{{ $semester->id }}">{{ $semester->name }}</option>
            @endforeach
        </select>
        @error('semester_id') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>


 <div class="form-group">
    <label class="col-lg-2 control-label">Start Date<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="date" value="{{ isset($classScheduling->start_time) ? $classScheduling->start_time : old('start_time')}}" name="start_time" class="form-control">
        @error('start_time') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>


 <div class="form-group">
    <label class="col-lg-2 control-label">End Date<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="date" value="{{ isset($classScheduling->end_time) ? $classScheduling->end_time : old('end_time')}}" name="end_time" class="form-control">
        @error('end_time') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

<div class="form-group"><label class="col-lg-2 control-label" for="status">Status</label>
    <div class="col-lg-10">
        <input {{ (isset($classScheduling->status) AND $classScheduling->status == 1) ? 'checked':'' }} name="status" value="1" type="checkbox" class="i-checks" id="status">
        @error('status') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

