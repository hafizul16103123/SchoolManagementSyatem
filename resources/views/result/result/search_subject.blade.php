@extends('layouts.academic.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card bg-info">
                    <div class="card-header">Search subject</div>
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
                        @if(Session::has('flash_message'))
                            <div class="alert alert-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <em> {!! session('flash_message') !!}</em>
                            </div>
                            @elseif(Session::has('msg'))
                            <div class="alert alert-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <em> {!! session('msg') !!}</em>
                            </div>
                        @endif
                        @if(Session::has('error_msg'))
                            <div class="alert alert-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <em> {!! session('error_msg') !!}</em>
                            </div>
                        @endif
                        <form method="POST" action="{{route('result_store_form')}}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('exam_type_id') ? 'has-error' : ''}}">
                                <label for="exam_type_id" class="control-label">{{ 'Exam Type' }}</label>
                                <select class="form-control" name="exam_type">
                                    @foreach(App\ExamType::all() as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group {{ $errors->has('my_class_id') ? 'has-error' : ''}}">
                                <label for="my_class_id" class="control-label">{{ 'Class' }}</label>
                                <select class="form-control" name="my_class">
                                    @foreach(App\MyClass::all() as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group {{ $errors->has('section_id') ? 'has-error' : ''}}">
                                <label for="section_id" class="control-label">{{ 'Section' }}</label>
                                <select class="form-control" name="section">
                                    @foreach(App\Section::all() as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group {{ $errors->has('admission') ? 'has-error' : ''}}">
                                <label for="admission" class="control-label">{{ 'Admission' }}</label>
                                <input class="form-control" name="admission" type="number" id="admission" value="" >
                                {!! $errors->first('admission', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Search Subject">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

