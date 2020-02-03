@extends('layouts.Administration.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card bg-info">
                    <div class="card-header">Employee Attendance record View</div>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Total days</th>
                            <th scope="col">Present</th>
                            <th scope="col">Present(%)</th>
                            <th scope="col">Absent</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($AttendanceRecordUnique as $item)
                            <tr>
                                <td>{{$item->academic_id}}</td>
                                <td>{{App\Academic::find($item->academic_id)->name}}</td>
                                <td>{{$AttendanceRecordAll->where('academic_id',$item->academic_id)->count()}}</td>
                                <td>{{$AttendanceRecordAll->where('academic_id',$item->academic_id)->where('attend','present')->count()}}</td>
                                <td>{{(($AttendanceRecordAll->where('academic_id',$item->academic_id)->where('attend','present')->count())*100)/$AttendanceRecordAll->where('academic_id',$item->academic_id)->count() . ' %'}}</td>
                                <td>{{$AttendanceRecordAll->where('academic_id',$item->academic_id)->where('attend','absent')->count()}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

