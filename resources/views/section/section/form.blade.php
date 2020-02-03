<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="id" class="control-label">{{ 'ID' }}</label>
    <input class="form-control" name="id" type="text" id="id" value="{{ $section->id}}" >
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ $section->name}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
