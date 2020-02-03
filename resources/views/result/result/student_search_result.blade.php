@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="card bg-info">
                    <div class="card-header">Student Result</div>
                    <div class="card-body">
                        <a href="{{route('stu_result')}}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <div>
                            <center>
                                <div>
                                    Exam type : {{App\ExamType::find($exam_type)->name}}<br>
                                    Id : {{$student}}<br>
                                    Student Name : {{App\Admission::find($student)->name}}<br>
                                    Class : {{App\Admission::find($student)->myClass->name}}<br>
                                    Section : {{App\Admission::find($student)->section->name}}<br>
                                    Status: {{ $isPass ? 'Pass' : 'Fail' }}

                                </div>
                            </center>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Mark</th>
                                    <th scope="col">Grade</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($results as $item)
                                    <tr>
                                        <td>{{App\Subject::find($item->subject_id)->name}}</td>
                                        <td>{{$item->mark}}  <small>out of 100</small></td>
                                        <td>{{$item->grade}}</td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            <a href="{{route('student_pdf_result',['student_id'=>App\Admission::find($student)->id,'exam_type_id'=>App\ExamType::find($exam_type)->id])}}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>Download Pdf Result</button></a>
                        </div>
                        {{--<a class="btn btn-outline-primary pull-md-right" href="{{route('result_report')}}">View PDF</a>--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

