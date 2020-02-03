<div class="form-group {{ $errors->has('exam_type_id') ? 'has-error' : ''}}">
    <label for="exam_type_id" class="control-label">{{ 'Exam Type Id' }}</label>
    <select class="form-control" name="my_class_id">
        <option value="1"@if($result->exam_type_id==1)selected @endif >First Term</option>
        <option value="2" @if($result->exam_type_id==2)selected @endif>Mid Term</option>
        <option value="3" @if($result->exam_type_id==3)selected @endif>Final</option>
    </select>
</div>
<div class="form-group {{ $errors->has('class_id') ? 'has-error' : ''}}">
    <label for="my_class_id" class="control-label">{{ 'Class'}}</label>
    <select class="form-control" name="my_class_id">
        <option value="1"@if($result->my_class_id==1)selected @endif >One</option>
        <option value="2" @if($result->my_class_id==2)selected @endif>Two</option>
        <option value="3" @if($result->my_class_id==3)selected @endif>Three</option>
        <option value="4" @if($result->my_class_id==4)selected @endif>Four</option>
        <option value="5" @if($result->my_class_id==5)selected @endif>Five</option>
        <option value="6" @if($result->my_class_id==6)selected @endif>Six</option>
        <option value="7" @if($result->my_class_id==7)selected @endif>Seven</option>
        <option value="8" @if($result->my_class_id==8)selected @endif>Eight</option>
        <option value="9" @if($result->my_class_id==9)selected @endif>Nine</option>
        <option value="10" @if($result->my_class_id==10)selected @endif>Ten</option>
    </select>
</div>
<div class="form-group {{ $errors->has('section_id') ? 'has-error' : ''}}">
    <label for="section_id" class="control-label">{{ 'Section Id' }}</label>
    <select class="form-control" name="my_class_id">
        <option value="1"@if($result->section_id==1)selected @endif >A</option>
        <option value="2" @if($result->section_id==2)selected @endif>B</option>
        <option value="3" @if($result->section_id==3)selected @endif>C</option>
    </select>
</div>
<div class="form-group {{ $errors->has('subject_id') ? 'has-error' : ''}}">
    <label for="subject_id" class="control-label">{{ 'Subject Id' }}</label>
    <select class="form-control" name="my_class_id">
        <option value="1"@if($result->subject_id==1)selected @endif >Bangla</option>
        <option value="2" @if($result->subject_id==2)selected @endif>English</option>
        <option value="3" @if($result->subject_id==3)selected @endif>Math</option>
    </select>
</div>
<div class="form-group {{ $errors->has('admission_id') ? 'has-error' : ''}}">
    <label for="admission_id" class="control-label">{{ 'Admission Id' }}</label>
    <input class="form-control" name="admission_id" type="number" id="admission_id" value="{{$result->admission_id}}">
    {!! $errors->first('admission_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mark') ? 'has-error' : ''}}">
    <label for="mark" class="control-label">{{ 'Mark' }}</label>
    <input class="form-control" name="mark" type="text" id="mark" value="{{ $result->mark}}" >
    {!! $errors->first('mark', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
