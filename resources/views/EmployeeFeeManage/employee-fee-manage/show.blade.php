@extends('layouts.administration.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card bg-info">
                    <div class="card-header">EmployeeFeeManage {{ $employeefeemanage->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/employee-fee-manage') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/employee-fee-manage/' . $employeefeemanage->id . '/edit') }}" title="Edit EmployeeFeeManage"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('employeefeemanage' . '/' . $employeefeemanage->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete EmployeeFeeManage" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $employeefeemanage->id }}</td>
                                    </tr>
                                    <tr><th> Academic Id </th><td> {{ $employeefeemanage->academic_id }} </td></tr><tr><th> Fee Paid </th><td> {{ $employeefeemanage->fee_paid }} </td></tr><tr><th> Month </th><td> {{ $employeefeemanage->month }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
