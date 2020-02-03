@extends('layouts.academic.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card bg-info">
                    <div class="card-header">Search subject</div>
                    <div class="card-body">
                        <a href="{{route('search_subject')}}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{route('result_store')}}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <center>
                                <div>
                                    <h1> Insert mark</h1>
                                    <table class="table table-hover">
                                        <tbody>
                                        <tr>
                                            <td>Exam Type</td>
                                            <td><input type="text"name="exam_type" value="{{App\ExamType::find($exam_type)->id}}"></td>
                                        </tr>
                                        <tr>
                                            <td>Class</td>
                                            <td><input type="text" name="my_class" value="{{App\MyClass::find($my_class)->name}}"></td>
                                        </tr>
                                        <tr>
                                            <td>Section</td>
                                            <td><input type="text" name="section" value="{{App\Section::find($section)->name}}"></td>
                                        </tr>
                                        <tr>
                                            <td>Student</td>
                                            <td><input type="text" name="student" value="{{App\Admission::find($student)->id}}"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </center>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Mark</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($subject as $item)
                                    <tr>
                                        <td>{{App\Subject::find($item->subject_id)->name}}</td>
                                        <td><input type="text" name="mark[{{$item->subject_id}}]" value=""></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Submit Result">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

