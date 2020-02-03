@extends('layouts.administration.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">>
                <div class="card bg-info">
                    <div class="card-header">Create New EmployeeAttendance</div>
                    <div class="card-body">
                        <a href="{{ url('/employee-attendance') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
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
                        @endif
                        <form method="POST" action="{{ url('/employee-attendance') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('academic_id') ? 'has-error' : ''}}">
                                <label for="academic_id" class="control-label">{{ 'Academic Id' }}</label>
                                <input class="form-control" name="academic_id" type="number" id="academic_id" value="" >
                                {!! $errors->first('academic_id', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group" >

                            </div>
                            <div class="form-group {{ $errors->has('attend') ? 'has-error' : ''}}">
                                <label for="attend" class="control-label">{{ 'Attend' }}</label>
                                <select name="attend" class="form-control">
                                    <option value="present">Present</option>
                                    <option value="absent">Absent</option>
                                </select>
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
