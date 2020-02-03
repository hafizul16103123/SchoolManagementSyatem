@extends('layouts.administration.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="card bg-info">
                    <div class="card-header">Create New AdmissionFee</div>
                    <div class="card-body">
                        <a href="{{ url('/admission-fee') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admission-fee') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('my_class_id') ? 'has-error' : ''}}">
                                <label for="my_class_id" class="control-label">{{ 'My Class Id' }}</label>
                                <input class="form-control" name="my_class_id" type="number" id="my_class_id" value="" >
                                {!! $errors->first('my_class_id', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('fee') ? 'has-error' : ''}}">
                                <label for="fee" class="control-label">{{ 'Fee' }}</label>
                                <input class="form-control" name="fee" type="number" id="fee" value="" >
                                {!! $errors->first('fee', '<p class="help-block">:message</p>') !!}
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
