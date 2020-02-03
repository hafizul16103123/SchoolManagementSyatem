@extends('layouts.administration.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card bg-info">
                    <div class="card-header">Employee Attendance record View Form</div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-body">
                        <form method="get" action="{{route('employee_attendance_report')}}">
                            @csrf()
                            <div class="form-group">
                                <div class="form-group {{ $errors->has('from_date') ? 'has-error' : ''}}">
                                    <label for="ate" class="control-label">{{ 'From' }}</label>
                                    <input class="form-control" name="from_date" type="date" id="from_date" value=" " >
                                    {!! $errors->first('from_date', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group {{ $errors->has('to_date') ? 'has-error' : ''}}">
                                    <label for="to_date" class="control-label">{{ 'To' }}</label>
                                    <input class="form-control" name="to_date" type="date" id="to_date" value=" " >
                                    {!! $errors->first('to_date', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Teacher</label>
                                <select name="academic" class="form-control" id="exampleFormControlSelect1">
                                    <option selected>Teacher</option>
                                    @foreach(App\Academic::all() as $teacher)
                                        <option value={{$teacher->id}}>{{$teacher->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <center><button type="submit" class="btn btn-primary">Search Record</button></center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

