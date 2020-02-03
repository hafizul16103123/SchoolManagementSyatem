@extends('layouts.administration.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="card bg-info">
                    <div class="card-header">Create New Admission</div>
                    <div class="card-body">
                        <a href="{{ url('/admission') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admission') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                                <label for="name" class="control-label">{{ 'Name' }}</label>
                                <input class="form-control" name="name" type="text" id="name" value="" >
                                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('birthday') ? 'has-error' : ''}}">
                                <label for="birthday" class="control-label">{{ 'Birthday' }}</label>
                                <input class="form-control" name="birthday" type="datetime-local" id="birthday" value="" >
                                {!! $errors->first('birthday', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('student_type') ? 'has-error' : ''}}">
                                <label for="student_type_id" class="control-label">{{ 'Student Type ' }}</label>
                                <select name="student_type_id" class="form-control">
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="3">Orphan</option>
                                    <option value="4">Autistic</option>
                                </select>
                            </div>
                            <div class="form-group {{ $errors->has('my_class_id') ? 'has-error' : ''}}">
                                <label for="my_class_id" class="control-label">{{ 'Class Name' }}</label>
                                <select name="my_class_id" class="form-control">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>
                                    <option value="5">Five</option>
                                    <option value="6">Six</option>
                                    <option value="7">Seven</option>
                                    <option value="8">Eight</option>
                                    <option value="9">Nine</option>
                                    <option value="10">Ten</option>
                                </select>
                            </div>
                            <div class="form-group {{ $errors->has('section_id') ? 'has-error' : ''}}">
                                <label for="section_id" class="control-label">{{ 'Section Name' }}</label>
                                <select name="section_id" class="form-control">
                                    <option value="1">A</option>
                                    <option value="2">B</option>
                                    <option value="3">C</option>

                                </select>
                            </div>
                            <div class="form-group {{ $errors->has('nationality') ? 'has-error' : ''}}">
                                <label for="nationality" class="control-label">{{ 'Nationality' }}</label>
                                <input class="form-control" name="nationality" type="text" id="nationality" value="" >
                                {!! $errors->first('nationality', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('bloodgroup') ? 'has-error' : ''}}">
                                <label for="bloodgroup" class="control-label">{{ 'Bloodgroup' }}</label>
                                <input class="form-control" name="bloodgroup" type="text" id="bloodgroup" value="" >
                                {!! $errors->first('bloodgroup', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
                                <label for="address" class="control-label">{{ 'Address' }}</label>
                                <input class="form-control" name="address" type="text" id="address" value="" >
                                {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('previous_institute') ? 'has-error' : ''}}">
                                <label for="previous_institute" class="control-label">{{ 'Previous Institute' }}</label>
                                <input class="form-control" name="previous_institute" type="text" id="previous_institute" value="" >
                                {!! $errors->first('previous_institute', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('residence_phone_number') ? 'has-error' : ''}}">
                                <label for="residence_phone_number" class="control-label">{{ 'Residence Phone Number' }}</label>
                                <input class="form-control" name="residence_phone_number" type="number" id="residence_phone_number" value=" " >
                                {!! $errors->first('residence_phone_number', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('Email') ? 'has-error' : ''}}">
                                <label for="Email" class="control-label">{{ 'Email' }}</label>
                                <input class="form-control" name="Email" type="text" id="Email" value="" >
                                {!! $errors->first('Email', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('father_name') ? 'has-error' : ''}}">
                                <label for="father_name" class="control-label">{{ 'Father Name' }}</label>
                                <input class="form-control" name="father_name" type="text" id="father_name" value="" >
                                {!! $errors->first('father_name', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('father_phonenumber') ? 'has-error' : ''}}">
                                <label for="father_phonenumber" class="control-label">{{ 'Father Phonenumber' }}</label>
                                <input class="form-control" name="father_phonenumber" type="number" id="father_phonenumber" value="" >
                                {!! $errors->first('father_phonenumber', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('transport') ? 'has-error' : ''}}">
                                <label for="transport" class="control-label">{{ 'Transport' }}</label>
                                <input class="form-control" name="transport" type="text" id="transport" value="" >
                                {!! $errors->first('transport', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('admission_date') ? 'has-error' : ''}}">
                                <label for="admission_date" class="control-label">{{ 'Admission Date' }}</label>
                                <input class="form-control" name="admission_date" type="datetime-local" id="admission_date" value=" " >
                                {!! $errors->first('admission_date', '<p class="help-block">:message</p>') !!}
                            </div>


                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Create">
                            </div>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
