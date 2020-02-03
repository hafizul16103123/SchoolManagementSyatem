@extends('layouts.academic.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card bg-info">
                    <div class="card-header">Absent student</div>
                    {{$d}}<br>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-body">
                        <a class="btn btn-primary" href="{{route('viewAttendanceForm')}}">Back</a>
                        <form method="post" action="{{route('send_message')}}">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Enter Text</label>
                                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">Select</th>
                                    <th scope="col">Student</th>
                                    <th scope="col">Class</th>
                                    <th scope="col">Section</th>
                                    <th scope="col">Phone</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($attendance as $item)
                                    @if($item->attend=='absent')
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox" name="blankRadio" id="blankRadio1" value="{{App\Admission::find($item->admission_id)->residence_phone_number}}">
                                            </div>
                                        </td>
                                        <td>{{App\Admission::find($item->admission_id)->name}}</td>
                                        <td>{{App\Admission::find($item->admission_id)->myClass->name}}</td>
                                        <td>{{App\Admission::find($item->admission_id)->section->name}}</td>
                                        <td>{{App\Admission::find($item->admission_id)->residence_phone_number}}</td>
                                    </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                            <center>
                                <button type="submit" class="btn btn-raised btn-success w-50">Send SMS</button>
                    </div>
                    </center>
                    <div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

