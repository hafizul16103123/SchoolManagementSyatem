<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ $admission->name }}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('student_type_id') ? 'has-error' : ''}}">
    <label for="student_type_id" class="control-label">{{ 'Catagory' }}</label>
    <select class="form-control" name="student_type_id">
        <option value="1"@if($admission->student_type_id==1)selected @endif >Male</option>
        <option value="2" @if($admission->student_type_id==2)selected @endif>Female</option>
        <option value="3" @if($admission->student_type_id==3)selected @endif>Orphan</option>
        <option value="4" @if($admission->student_type_id==4)selected @endif>Autistic</option>
    </select>
</div>
<div class="form-group {{ $errors->has('class_id') ? 'has-error' : ''}}">
    <label for="my_class_id" class="control-label">{{ 'Class Id' }}</label>
    <select class="form-control" name="my_class_id">
        <option value="1"@if($admission->my_class_id==1)selected @endif >One</option>
        <option value="2" @if($admission->my_class_id==2)selected @endif>Two</option>
        <option value="3" @if($admission->my_class_id==3)selected @endif>Three</option>
        <option value="4" @if($admission->my_class_id==4)selected @endif>Four</option>
        <option value="5" @if($admission->my_class_id==5)selected @endif>Five</option>
        <option value="6" @if($admission->my_class_id==6)selected @endif>Six</option>
        <option value="7" @if($admission->my_class_id==7)selected @endif>Seven</option>
        <option value="8" @if($admission->my_class_id==8)selected @endif>Eight</option>
        <option value="9" @if($admission->my_class_id==9)selected @endif>Nine</option>
        <option value="10" @if($admission->my_class_id==10)selected @endif>Ten</option>
    </select>
</div>
<div class="form-group {{ $errors->has('section_id') ? 'has-error' : ''}}">
    <label for="section_id" class="control-label">{{ 'Section Name' }}</label>
    <select class="form-control" name="section_id">
        <option value="1"@if($admission->section_id==1)selected @endif >A</option>
        <option value="2" @if($admission->section_id==2)selected @endif>B</option>
        <option value="3" @if($admission->section_id==3)selected @endif>C</option>
    </select>
</div>
<div class="form-group {{ $errors->has('nationality') ? 'has-error' : ''}}">
    <label for="nationality" class="control-label">{{ 'Nationality' }}</label>
    <input class="form-control" name="nationality" type="text" id="nationality" value="{{$admission->nationality}}" >
    {!! $errors->first('nationality', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('bloodgroup') ? 'has-error' : ''}}">
    <label for="bloodgroup" class="control-label">{{ 'Bloodgroup' }}</label>
    <input class="form-control" name="bloodgroup" type="text" id="bloodgroup" value="{{$admission->bloodgroup}}" >
    {!! $errors->first('bloodgroup', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="control-label">{{ 'Address' }}</label>
    <input class="form-control" name="address" type="text" id="address" value="{{$admission->address}}" >
    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('previous_institute') ? 'has-error' : ''}}">
    <label for="previous_institute" class="control-label">{{ 'Previous Institute' }}</label>
    <input class="form-control" name="previous_institute" type="text" id="previous_institute" value="{{$admission->previous_institute}}" >
    {!! $errors->first('previous_institute', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('residence_phone_number') ? 'has-error' : ''}}">
    <label for="residence_phone_number" class="control-label">{{ 'Residence Phone Number' }}</label>
    <input class="form-control" name="residence_phone_number" type="number" id="residence_phone_number" value="{{$admission->residence_phone_number}}" >
    {!! $errors->first('residence_phone_number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Email') ? 'has-error' : ''}}">
    <label for="Email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="Email" type="text" id="Email" value="{{$admission->Email}}" >
    {!! $errors->first('Email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('father_name') ? 'has-error' : ''}}">
    <label for="father_name" class="control-label">{{ 'Father Name' }}</label>
    <input class="form-control" name="father_name" type="text" id="father_name" value="{{$admission->father_name}}" >
    {!! $errors->first('father_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('father_phonenumber') ? 'has-error' : ''}}">
    <label for="father_phonenumber" class="control-label">{{ 'Father Phonenumber' }}</label>
    <input class="form-control" name="father_phonenumber" type="number" id="father_phonenumber" value="{{$admission->father_phonenumber}}" >
    {!! $errors->first('father_phonenumber', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('transport') ? 'has-error' : ''}}">
    <label for="transport" class="control-label">{{ 'Transport' }}</label>
    <input class="form-control" name="transport" type="text" id="transport" value="{{$admission->transport}}" >
    {!! $errors->first('transport', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
