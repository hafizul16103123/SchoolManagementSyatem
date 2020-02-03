@extends('layouts.academic.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card bg-info">
                    <div class="card-header">Attendance Record of a Class and update</div>
                    {{$d}}<br>
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
                        <a class="btn btn-primary" href="{{route('viewAttendanceForm')}}">Back</a>
                        <form method="post" action="{{route('attendance_update')}}">
                            @csrf
                            @method('put')
                        <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">Student</th>
                                    <th scope="col">Class</th>
                                    <th scope="col">Section</th>
                                    <th scope="col">Attendance</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($attendance as $item)
                                        <tr>
                                        <td>{{App\Admission::find($item->admission_id)->name}}</td>
                                        <td>{{App\Admission::find($item->admission_id)->myClass->name}}</td>
                                        <td>{{App\Admission::find($item->admission_id)->section->name}}</td>
                                        {{--<td>{{$item->attend}}</td>--}}
                                        <td>
                                            <div class="form-group" >
                                                <select name="attend[{{$item->id}}]" class="form-control">
                                                    <option value="present" @if($item->attend=='present') selected @endif>Present</option>
                                                    <option value="absent" @if($item->attend=='absent') selected @endif>Absent</option>
                                                </select>
                                            </div>
                                        </td>
                                            @if($item->attend=='absent')
                                        <td>
                                            <a class="btn btn-primary" href="{{route('ActionForAbsent',['stu_id'=>$item->admission_id])}}">Action For Absent</a>
                                        </td>
                                            @endif

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <center>
                                Total Students:{{$attendance->count()}}<br>
                                Total Present:{{$attendance->where('attend','present')->count()}}<br>
                                Total Absent:{{$attendance->where('attend','absent')->count()}}<br>
                                <button type="submit" class="btn btn-raised btn-success w-50">Update</button>
                    </div>
                    </center>
                    <div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

