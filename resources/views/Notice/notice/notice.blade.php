@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="card bg-info">
                    <div class="card-header">Notice</div>
                    <div class="card-body">
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Notice</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($notice as $item)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td><a href="{{route('stu_result_notice')}}">{{$item->notice }}</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $notice->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
