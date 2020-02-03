<div class="form-group {{ $errors->has('academic_id') ? 'has-error' : ''}}">
    <label for="academic_id" class="control-label">{{ 'Academic Id' }}</label>
    <input class="form-control" name="academic_id" type="number" id="academic_id" value="{{ $employeefeemanage->academic_id or ''}}" >
    {!! $errors->first('academic_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fee_paid') ? 'has-error' : ''}}">
    <label for="fee_paid" class="control-label">{{ 'Fee Paid' }}</label>
    <input class="form-control" name="fee_paid" type="number" id="fee_paid" value="{{ $employeefeemanage->fee_paid or ''}}" >
    {!! $errors->first('fee_paid', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('month') ? 'has-error' : ''}}">
    <label for="month" class="control-label">{{ 'Month' }}</label>
    <input class="form-control" name="month" type="text" id="month" value="{{ $employeefeemanage->month or ''}}" >
    {!! $errors->first('month', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('year') ? 'has-error' : ''}}">
    <label for="year" class="control-label">{{ 'Year' }}</label>
    <input class="form-control" name="year" type="number" id="year" value="{{ $employeefeemanage->year or ''}}" >
    {!! $errors->first('year', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
