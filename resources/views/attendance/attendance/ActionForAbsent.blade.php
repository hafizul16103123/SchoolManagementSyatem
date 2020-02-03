@extends('layouts.academic.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 ">
                <div class="card bg-info">
                    <div class="card-header">Action For Absent</div>
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
                        <div class=" col-md-12">
                        Father Phone Number : {{$absent_student->father_phonenumber}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
