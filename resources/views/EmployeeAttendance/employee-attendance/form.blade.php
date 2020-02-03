<div class="form-group {{ $errors->has('academic_id') ? 'has-error' : ''}}">
    <label for="academic_id" class="control-label">{{ 'Academic Id' }}</label>
    <input class="form-control" name="academic_id" type="number" id="academic_id" value="{{ $employeeattendance->academic_id}}" >
    {!! $errors->first('academic_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('attend') ? 'has-error' : ''}}">
    <label for="attend" class="control-label">{{ 'Attend' }}</label>
    <select name="attend" class="form-control">
        <option value="present" @if($employeeattendance->attend=='present')selected @endif >Present</option>
        <option value="absent" @if($employeeattendance->attend=='absent')selected @endif>Absent</option>
    </select>
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
