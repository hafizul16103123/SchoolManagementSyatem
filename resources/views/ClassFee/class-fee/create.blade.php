@extends('layouts.administration.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card bg-info">
                    <div class="card-header">Create New ClassFee</div>
                    <div class="card-body">
                        <a href="{{ url('/class-fee') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/class-fee') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('my_class_id') ? 'has-error' : ''}}">
                                <label for="my_class_id" class="control-label">{{ 'Class' }}</label>
                                <select class="form-control" name="my_class_id">
                                    @foreach(App\MyClass::all() as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group {{ $errors->has('fee') ? 'has-error' : ''}}">
                                <label for="fee" class="control-label">{{ 'FeeController' }}</label>
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
