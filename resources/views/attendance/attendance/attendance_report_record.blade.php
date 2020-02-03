@extends('layouts.academic.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card bg-info">
                    <div class="card-header">Attendance record </div>
                    <center>
                        <div>
                            Class  :  {{App\MyClass::find($class)->name}}<br>
                            Section  :  {{App\Section::find($section)->name}}
                        </div>
                    </center>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Total class</th>
                            <th scope="col">Present</th>
                            <th scope="col">Present(%)</th>
                            <th scope="col">Absent</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($attendance_record as $item)
                                <tr>
                                    <td>{{$item->admission_id}}</td>
                                    <td>{{App\Admission::find($item->admission_id)->name}}</td>
                                    <td>{{$AttendanceReordAll->where('admission_id',$item->admission_id)->count()}}</td>
                                    <td>{{$AttendanceReordAll->where('admission_id',$item->admission_id)->where('attend','present')->count()}}</td>
                                    <td>{{(($AttendanceReordAll->where('admission_id',$item->admission_id)->where('attend','present')->count())*100)/$AttendanceReordAll->where('admission_id',$item->admission_id)->count() . ' %'}}</td>
                                    <td>{{$AttendanceReordAll->where('admission_id',$item->admission_id)->where('attend','absent')->count()}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

