@extends('layouts.academic.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card bg-info">
                    <div class="card-header">Attendance {{ $attendance->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/attendance') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/attendance/' . $attendance->id . '/edit') }}" title="Edit Attendance"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('attendance' . '/' . $attendance->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Attendance" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $attendance->id }}</td>
                                    </tr>
                                    <tr><th> Admission Id </th>
                                        <td> {{ $attendance->admission_id }} </td>
                                    </tr>
                                    <tr>
                                        <th> Attend </th>
                                        <td>{{ $attendance->attend}} </td>
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
