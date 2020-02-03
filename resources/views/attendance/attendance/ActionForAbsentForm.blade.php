@extends('layouts.academic.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card bg-info">
                    <div class="card-header">Actiopn For Absent Form</div>

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
                        <form method="get" action="{{route('action_for_absent')}}">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Select Class</label>
                                <select name="date" class="form-control" id="exampleFormControlSelect1">
                                    <option selected>Date</option>
                                    @foreach($date as $item)
                                        <option value="{{$item->created_at}}">{{$item->created_at->format('d-M-Y')}}</option>
                                    @endforeach
                                </select>
                            </div>
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
                                <label for="exampleFormControlSelect1">Select Class</label>
                                <select name="section" class="form-control" id="exampleFormControlSelect1">
                                    <option value="" hidden>Section</option>
                                    @foreach(App\Section::all() as $sections)
                                        <option value={{$sections->id}}>{{$sections->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <center><button type="submit" class="btn btn-primary">Action</button></center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

