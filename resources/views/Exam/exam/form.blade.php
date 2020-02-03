<div class="form-group {{ $errors->has('exam_type_id') ? 'has-error' : ''}}">
    <label for="exam_type_id" class="control-label">{{ 'Exam Type Id' }}</label>
    <select class="form-control" name="my_class_id">
        <option value="1"@if($exam->exam_type_id==1)selected @endif >First Term</option>
        <option value="2" @if($exam->exam_type_id==2)selected @endif>Mid Term</option>
        <option value="3" @if($exam->exam_type_id==3)selected @endif>Final</option>
    </select>
</div>
<div class="form-group {{ $errors->has('class_id') ? 'has-error' : ''}}">
    <label for="my_class_id" class="control-label">{{ 'Class'}}</label>
    <select class="form-control" name="my_class_id">
        <option value="1"@if($exam->my_class_id==1)selected @endif >One</option>
        <option value="2" @if($exam->my_class_id==2)selected @endif>Two</option>
        <option value="3" @if($exam->my_class_id==3)selected @endif>Three</option>
        <option value="4" @if($exam->my_class_id==4)selected @endif>Four</option>
        <option value="5" @if($exam->my_class_id==5)selected @endif>Five</option>
        <option value="6" @if($exam->my_class_id==6)selected @endif>Six</option>
        <option value="7" @if($exam->my_class_id==7)selected @endif>Seven</option>
        <option value="8" @if($exam->my_class_id==8)selected @endif>Eight</option>
        <option value="9" @if($exam->my_class_id==9)selected @endif>Nine</option>
        <option value="10" @if($exam->my_class_id==10)selected @endif>Ten</option>
    </select>
</div>
<div class="form-group {{ $errors->has('section_id') ? 'has-error' : ''}}">
    <label for="section_id" class="control-label">{{ 'Section Id' }}</label>
    <select class="form-control" name="my_class_id">
        <option value="1"@if($exam->section_id==1)selected @endif >A</option>
        <option value="2" @if($exam->section_id==2)selected @endif>B</option>
        <option value="3" @if($exam->section_id==3)selected @endif>C</option>
    </select>
</div>
<div class="form-group {{ $errors->has('subject_id') ? 'has-error' : ''}}">
    <label for="subject_id" class="control-label">{{ 'Subject Id' }}</label>
    <select class="form-control" name="my_class_id">
        <option value="1"@if($exam->subject_id==1)selected @endif >Bangla</option>
        <option value="2" @if($exam->subject_id==2)selected @endif>English</option>
        <option value="3" @if($exam->subject_id==3)selected @endif>Math</option>
    </select>
</div>
<div class="form-group {{ $errors->has('academic_id') ? 'has-error' : ''}}">
    <label for="academic_id" class="control-label">{{ 'Academic Id' }}</label>
    <select class="form-control" name="academic_id">
        <option value="1"@if($exam->academic_id==1)selected @endif >Piyash</option>
    </select>
</div>
<div class="form-group {{ $errors->has('room_id') ? 'has-error' : ''}}">
    <label for="room_id" class="control-label">{{ 'Room Id' }}</label>
    <select class="form-control" name="room_id">
        <option value="1"@if($exam->room_id==1)selected @endif >R-1</option>
        <option value="1"@if($exam->room_id==2)selected @endif >R-2</option>
        <option value="1"@if($exam->room_id==3)selected @endif >R-3</option>
    </select>
</div>
<div class="form-group {{ $errors->has('date_time') ? 'has-error' : ''}}">
    <label for="date_time" class="control-label">{{ 'Date Time' }}</label>
    <input class="form-control" name="date_time"id="date_time" value="{{$exam->date_time }}" >
    {!! $errors->first('date_time', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
