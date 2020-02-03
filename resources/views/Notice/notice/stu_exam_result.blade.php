@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="card bg-info">
                    <div class="card-header">Exam</div>
                    <div class="card-body">

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Exam Type</th>
                                    <th>My Class</th>
                                    <th>Section</th>
                                    <th>Subject</th>
                                    <th>Teacher</th>
                                    <th>Room</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($exam as $item)
                                    <tr>
                                        <td>{{App\Exam::find($item->exam_type_id)->exam_type->name }}</td>
                                        <td>{{App\Exam::find($item->exam_type_id)->myClass->name }}</td>
                                        <td>{{App\Exam::find($item->exam_type_id)->section->name  }}</td>
                                        <td>{{App\Exam::find($item->exam_type_id)->subject->name  }}</td>
                                        <td>{{App\Exam::find($item->exam_type_id)->academic->name  }}</td>
                                        <td>{{App\Exam::find($item->exam_type_id)->room->name  }}</td>
                                        <td>{{$item->date_time }}</td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $exam->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
