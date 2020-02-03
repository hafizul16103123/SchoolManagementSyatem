@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card bg-info">
                <div class="card-header"><h1>Home Page</h1></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>You are logged in as  a student!</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
