@extends('layouts.administration.app')

@section('content')
    <div class="container">
         <div class="row">
                <div class="col-md-2"></div>
                  <div class="col-md-9">
                <div class="card bg-info">
                    <div class="card-header">ExamType {{ $examtype->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/exam-type') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/exam-type/' . $examtype->id . '/edit') }}" title="Edit ExamType"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('examtype' . '/' . $examtype->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete ExamType" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $examtype->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $examtype->name }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
