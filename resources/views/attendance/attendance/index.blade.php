@extends('layouts.academic.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 ">
                <div class="card bg-info">
                    <div class="card-header">Attendance Index</div>
                    @if(Session::has('flash_message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('flash_message') }}</p>
                    @endif
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
                        <a class="btn btn-outline-primary pull-md-right" href="{{route('viewAttendanceForm')}}">View</a>
                        <a class="btn btn-outline-primary pull-md-right" href="{{route('action_for_absent_form')}}">Action For Absent</a>

                        <div class=" col-md-12">
                                <form method="get" action="{{ route('takeAttendance') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Class</label>
                                        <select name="class" class="form-control" id="exampleFormControlSelect1">
                                            <option selected>Class</option>
                                            @foreach(App\MyClass::all() as $classes)
                                                <option value={{$classes->id}}>{{$classes->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Section</label>
                                        <select name="section" class="form-control" id="exampleFormControlSelect1">
                                            <option selected>Section</option>
                                            @foreach(App\Section::all() as $sections)
                                                <option value={{$sections->id}}>{{$sections->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
