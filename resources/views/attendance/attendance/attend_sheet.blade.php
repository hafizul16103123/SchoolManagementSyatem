@extends('layouts.academic.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card bg-info">
                    <div class="card-header">Attendance Sheet</div>
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
                        @if(Session::has('flash_message'))
                            <div class="alert alert-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <em> {!! session('flash_message') !!}</em>
                            </div>
                        @endif
                        <form method="post" action="{{route('attendance.store')}}">
                          @csrf
                            <table class="table table-hover">
                                <thead>
                                <center>
                                    Class :{{$class->name}}<br>
                                    Section :{{$section->name}}<br>
                                    Time :{{Carbon\Carbon::today()}}
                                </center>
                                <tr>
                                    <th scope="col">Serial</th>
                                    <th scope="col">Student</th>
                                    <th scope="col">Action</th>
                                    <th scope="col">Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <td>{{$id++}}</td>
                                        <td>{{$student->name}}</td>
                                        <td>
                                            <div class="form-group" >
                                                <select name="attend[{{$student->id}}]" class="form-control">
                                                    <option value="present">Present</option>
                                                    <option value="absent">Absent</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td>{{Carbon\Carbon::now()->format('d-M-Y')}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-raised btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

