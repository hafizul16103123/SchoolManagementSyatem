<div class="form-group {{ $errors->has('admission_id') ? 'has-error' : ''}}">
    <label for="admission_id" class="control-label">{{ 'Admission Id' }}</label>
    <input class="form-control" name="admission_id" type="number" id="admission_id" value="{{ $admissionfeepay->admission_id}}" >
    {!! $errors->first('admission_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fee_paid') ? 'has-error' : ''}}">
    <label for="fee_paid" class="control-label">{{ 'Fee Paid' }}</label>
    <input class="form-control" name="fee_paid" type="number" id="fee_paid" value="{{ $admissionfeepay->fee_paid}}" >
    {!! $errors->first('fee_paid', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
