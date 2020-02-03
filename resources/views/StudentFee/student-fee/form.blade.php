<div class="form-group {{ $errors->has('admission_id') ? 'has-error' : ''}}">
    <label for="admission_id" class="control-label">{{ 'Admission Id' }}</label>
    <input class="form-control" name="admission_id" type="number" id="admission_id" value="{{ $studentfee->admission_id}}" >
    {!! $errors->first('admission_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fee_paid') ? 'has-error' : ''}}">
    <label for="fee_paid" class="control-label">{{ 'FeeController' }}</label>
    <input class="form-control" name="fee_paid" type="number" id="fee_paid" value="{{ $studentfee->fee_paid}}" >
    {!! $errors->first('fee_paid', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('month') ? 'has-error' : ''}}">
    <label for="month" class="control-label">{{ 'Month' }}</label>
    <input class="form-control" name="month" type="text" id="month" value="{{ $studentfee->month}}" >
    {!! $errors->first('month', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('year') ? 'has-error' : ''}}">
    <label for="year" class="control-label">{{ 'Year' }}</label>
    <input class="form-control" name="year" type="number" id="year" value="{{ $studentfee->year}}" >
    {!! $errors->first('year', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
