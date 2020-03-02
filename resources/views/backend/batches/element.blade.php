<div class="form-group">
    <label class="col-lg-2 control-label">Batch Name<span class="required-star"> *</span></label>
    <div class="col-lg-6">
        <input type="text" value="{{ isset($batch->batch) ? $batch->batch : old('batch')}}" name="batch" class="form-control">
        @error('batch') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
    </div>
</div>

