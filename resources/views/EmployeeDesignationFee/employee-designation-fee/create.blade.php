@extends('layouts.administration.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card bg-info">
                    <div class="card-header">Create New EmployeeDesignationFee</div>
                    <div class="card-body">
                        <a href="{{ url('/employee-designation-fee') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/employee-designation-fee') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('employee_designation_id') ? 'has-error' : ''}}">
                                <label for="employee_designation_id" class="control-label">{{ 'Employee Designation Id' }}</label>
                                <input class="form-control" name="employee_designation_id" type="number" id="employee_designation_id" value="" >
                                {!! $errors->first('employee_designation_id', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('salary') ? 'has-error' : ''}}">
                                <label for="salary" class="control-label">{{ 'Salary' }}</label>
                                <input class="form-control" name="salary" type="text" id="salary" value="" >
                                {!! $errors->first('salary', '<p class="help-block">:message</p>') !!}
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
