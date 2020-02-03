<div class="form-group {{ $errors->has('employee_designation_id') ? 'has-error' : ''}}">
    <label for="employee_designation_id" class="control-label">{{ 'Employee Designation Id' }}</label>
    <input class="form-control" name="employee_designation_id" type="number" id="employee_designation_id" value="{{ $employeedesignationfee->employee_designation_id}}" >
    {!! $errors->first('employee_designation_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('salary') ? 'has-error' : ''}}">
    <label for="salary" class="control-label">{{ 'Salary' }}</label>
    <input class="form-control" name="salary" type="text" id="salary" value="{{ $employeedesignationfee->salary}}" >
    {!! $errors->first('salary', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
