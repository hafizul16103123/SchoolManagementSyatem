<div class="form-group {{ $errors->has('notice') ? 'has-error' : ''}}">
    <label for="notice" class="control-label">{{ 'Notice' }}</label>
    <input class="form-control" name="notice" type="text" id="notice" value="{{ $notice->notice}}" >
    {!! $errors->first('notice', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
