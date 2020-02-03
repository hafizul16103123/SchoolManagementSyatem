@extends('layouts.administration.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card bg-info">
                    <div class="card-header">Create New StudentFee</div>
                    <div class="card-body">
                        <a href="{{ url('/student-fee') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
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
                        <form method="POST" action="{{ url('/student-fee') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('admission_id') ? 'has-error' : ''}}">
                                <label for="admission_id" class="control-label">{{ 'Admission Id' }}</label>
                                <input class="form-control" name="admission_id" type="number" id="admission_id" value="" >
                                {!! $errors->first('admission_id', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('fee_paid') ? 'has-error' : ''}}">
                                <label for="fee_paid" class="control-label">{{ 'Fee' }}</label>
                                <input class="form-control" name="fee_paid" type="number" id="fee_paid" onchange="due()" >
                                {!! $errors->first('fee_paid', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('month') ? 'has-error' : ''}}">
                                <label for="month" class="control-label">{{ 'Month' }}</label>
                                <select class="form-control" name="month" type="text" id="month">
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                                </select>
                            </div>
                            <div class="form-group {{ $errors->has('year') ? 'has-error' : ''}}">
                                <label for="year" class="control-label">{{ 'Year' }}</label>
                                <input class="form-control" name="year" type="number" id="year" value="{{2018}}" >
                                {!! $errors->first('year', '<p class="help-block">:message</p>') !!}
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
