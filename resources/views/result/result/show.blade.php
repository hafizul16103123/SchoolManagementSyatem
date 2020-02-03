@extends('layouts.academic.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card bg-info">
                    <div class="card-header">Result {{ $result->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/result') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/result/' . $result->id . '/edit') }}" title="Edit Result"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('result' . '/' . $result->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Result" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $result->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Exam Type</th>
                                        <td>{{App\Exam::find($result->exam_type_id)->exam_type->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Class</th>
                                        <td>{{App\Exam::find($result->exam_type_id)->myClass->name }}</td>
                                    </tr>
                                    <tr>
                                        <th> Section</th>
                                        <td>{{App\Exam::find($result->exam_type_id)->section->name  }}</td>

                                    </tr>
                                    <tr>
                                        <th> Subject</th>
                                        <td>{{App\Exam::find($result->exam_type_id)->subject->name  }}</td>
                                    </tr>
                                    <tr>
                                        <th> Student</th>
                                        <td>{{App\Result::find($result->admission_id)->admission->name}}</td>
                                    </tr>
                                    <tr>
                                        <th> Mark</th>
                                        <td> {{$result->mark }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
