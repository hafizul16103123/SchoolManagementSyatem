<div class="form-group {{ $errors->has('class_id') ? 'has-error' : ''}}">
    <label for="mt_class_id" class="control-label">{{ 'Class Id' }}</label>
    <input class="form-control" name="mt_class_id" type="number" id="mt_class_id" value="{{ $myclasssection->mt_class_id or ''}}" >
    {!! $errors->first('mt_class_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('section_id') ? 'has-error' : ''}}">
    <label for="section_id" class="control-label">{{ 'Section Id' }}</label>
    <input class="form-control" name="section_id" type="number" id="section_id" value="{{ $myclasssection->section_id or ''}}" >
    {!! $errors->first('section_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
