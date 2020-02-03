@extends('layouts.academic.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card bg-info">
                    <div class="card-header">Create New Result</div>
                    <div class="card-body">
                        <a href="{{ url('/result') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form method="POST" action="{{ url('/result') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('exam_type_id') ? 'has-error' : ''}}">
                                <label for="exam_type_id" class="control-label">{{ 'Exam Type' }}</label>
                                <select class="form-control" name="exam_type_id">
                                    @foreach(App\ExamType::all() as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group {{ $errors->has('my_class_id') ? 'has-error' : ''}}">
                                <label for="my_class_id" class="control-label">{{ 'Class' }}</label>
                                <select class="form-control" name="my_class_id">
                                    @foreach(App\MyClass::all() as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group {{ $errors->has('section_id') ? 'has-error' : ''}}">
                                <label for="section_id" class="control-label">{{ 'Section' }}</label>
                                <select class="form-control" name="section_id">
                                    @foreach(App\Section::all() as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group {{ $errors->has('admission_id') ? 'has-error' : ''}}">
                                <label for="admission_id" class="control-label">{{ 'Admission Id' }}</label>
                                <input class="form-control" name="admission_id" type="number" id="admission_id" value="" >
                                {!! $errors->first('admission_id', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('subject_id') ? 'has-error' : ''}}">
                                <label for="subject_id" class="control-label">{{ 'Subject' }}</label>
                                <select class="form-control" name="subject_id">
                                @foreach(App\Subject::all() as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group {{ $errors->has('mark') ? 'has-error' : ''}}">
                                <label for="mark" class="control-label">{{ 'Mark' }}</label>
                                <input class="form-control" name="mark" type="text" id="mark" value="" >
                                {!! $errors->first('mark', '<p class="help-block">:message</p>') !!}
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
