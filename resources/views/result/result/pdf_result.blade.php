{{--@extends('layouts.academic.app')--}}
<center>
    <div>
        Exam type : {{App\ExamType::find($exam_type)->name}}<br>
        Student Name : {{App\Admission::find($student)->name}}<br>
        Class : {{App\Admission::find($student)->myClass->name}}<br>
        Section : {{App\Admission::find($student)->section->name}}<br>
        Status: {{ $isPass ? 'Pass' : 'Fail' }}
        <center>
        <table class="table table-hover align-content-center center-block">
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
                    <td>{{$item->mark}}</td>
                    <td>{{$item->grade}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </center>
    </div>
</center>







