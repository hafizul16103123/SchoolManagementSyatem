<div class="form-group {{ $errors->has('admission_id') ? 'has-error' : ''}}">
    <label for="admission_id" class="control-label">{{ 'Admission Id' }}</label>
    <input class="form-control" name="admission_id" type="number" id="admission_id" value="{{ $attendance->admission_id or ''}}" >
    {!! $errors->first('admission_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('attend') ? 'has-error' : ''}}">
    <label for="attend" class="control-label">{{ 'Attend' }}</label>
    <input class="form-control" name="attend" type="number" id="attend" value="{{ $attendance->attend or ''}}" >
    {!! $errors->first('attend', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
