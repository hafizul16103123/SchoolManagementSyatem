
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="card bg-info">
                    <div class="card-header">Student Result</div>
                    <div class="card-body">
                        <br />
                        <br />
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{route('student_search_result')}}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('exam_type_id') ? 'has-error' : ''}}">
                                <label for="exam_type_id" class="control-label">{{ 'Exam Type' }}</label>
                                <select class="form-control" name="exam_type">
                                    @foreach(App\ExamType::all() as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group {{ $errors->has('admission') ? 'has-error' : ''}}">
                                <label for="admission" class="control-label">{{ 'Admission Id' }}</label>
                                <input class="form-control" name="admission" type="number" id="admission" value="" >
                                {!! $errors->first('admission', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Search Result">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection