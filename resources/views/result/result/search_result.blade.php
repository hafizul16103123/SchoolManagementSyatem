@extends('layouts.academic.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card bg-info">
                    <div class="card-header">Search Result</div>
                    <div class="card-body">
                        <a href="{{route('search_subject')}}" title="Search Subject"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Search Subject</button></a>
                        <a href="{{url('/result')}}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
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
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($results as $item)
                                    <tr>
                                        <td>{{App\Subject::find($item->subject_id)->name}}</td>
                                        <td>{{$item->mark}}  <small>out of 100</small></td>
                                        <td>{{$item->grade}}</td>
                                        <td>
                                            <a href="{{ url('/result/' . $item->id . '/edit') }}" title="Edit ExamType"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/result' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete ExamType" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            <a href="{{route('pdf_result',['student_id'=>App\Admission::find($student)->id,'exam_type_id'=>App\ExamType::find($exam_type)->id])}}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>Download Pdf Result</button></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

