<div class="form-group {{ $errors->has('my_class_id') ? 'has-error' : ''}}">
    <label for="my_class_id" class="control-label">{{ 'My Class Id' }}</label>
    <input class="form-control" name="my_class_id" type="number" id="my_class_id" value="{{ $myclasssubject->my_class_id or ''}}" >
    {!! $errors->first('my_class_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('subject_id') ? 'has-error' : ''}}">
    <label for="subject_id" class="control-label">{{ 'Subject Id' }}</label>
    <input class="form-control" name="subject_id" type="number" id="subject_id" value="{{ $myclasssubject->subject_id or ''}}" >
    {!! $errors->first('subject_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
