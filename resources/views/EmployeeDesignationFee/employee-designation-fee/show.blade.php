@extends('layouts.administration.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card bg-info">
                    <div class="card-header">EmployeeDesignationFee {{ $employeedesignationfee->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/employee-designation-fee') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/employee-designation-fee/' . $employeedesignationfee->id . '/edit') }}" title="Edit EmployeeDesignationFee"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('employeedesignationfee' . '/' . $employeedesignationfee->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete EmployeeDesignationFee" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $employeedesignationfee->id }}</td>
                                    </tr>
                                    <tr><th> Employee Designation Id </th><td> {{ $employeedesignationfee->employee_designation_id }} </td></tr><tr><th> Salary </th><td> {{ $employeedesignationfee->salary }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
