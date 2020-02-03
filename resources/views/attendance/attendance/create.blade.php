@extends('layouts.academic.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card bg-info">
                    <div class="card-header">Create New Attendance</div>
                    <div class="card-body">
                        <a href="{{ route('attendance.index') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form method="POST" action="{{ url('/attendance') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('admission_id') ? 'has-error' : ''}}">
                                <label for="admission_id" class="control-label">{{ 'Admission Id' }}</label>
                                <input class="form-control" name="admission_id" type="number" id="admission_id" value="" >
                                {!! $errors->first('admission_id', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('attend') ? 'has-error' : ''}}">
                                <label for="attend" class="control-label">{{ 'Attend' }}</label>
                                <input class="form-control" name="attend" type="number" id="attend" value="" >
                                {!! $errors->first('attend', '<p class="help-block">:message</p>') !!}
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
