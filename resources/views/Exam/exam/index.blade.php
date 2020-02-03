@extends('layouts.academic.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="card bg-info">
                    <div class="card-header">Exam</div>
                    <div class="card-body">
                        <a href="{{ url('/exam/create') }}" class="btn btn-primary btn-sm" title="Add New Exam">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <form method="GET" action="{{ url('/exam') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
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
                                        <th>Actions</th>
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
                                        <td>
                                            <a href="{{ url('/exam/' . $item->id) }}" title="View Exam"><button class="btn btn-dark btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/exam/' . $item->id . '/edit') }}" title="Edit Exam"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/exam' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Exam" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
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
