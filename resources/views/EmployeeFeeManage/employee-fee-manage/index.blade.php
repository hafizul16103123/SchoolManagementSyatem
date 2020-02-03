@extends('layouts.administration.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card bg-info">
                    <div class="card-header">Employeefeemanage</div>
                    <div class="card-body">
                        <a href="{{ url('/employee-fee-manage/create') }}" class="btn btn-primary btn-sm" title="Add New EmployeeFeeManage">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/employee-fee-manage') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>Academic Id</th>
                                        <th>Salary</th>
                                        <th>Fee Paid</th>
                                        <th>Payable</th>
                                        <th>Month</th>
                                        <th>Year</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($employeefeemanage as $item)
                                    <tr>
                                        <td>{{ $item->academic_id }}</td>
                                        <td>{{App\EmployeeDesignationFee::where('employee_designation_id','=',App\Academic::find($item->academic_id)->employee_designation_id)->first()->salary}}</td>
                                        <td>{{ $item->fee_paid }}</td>
                                        <td>{{ App\EmployeeDesignationFee::where('employee_designation_id','=',App\Academic::find($item->academic_id)->employee_designation_id)->first()->salary-$item->fee_paid }}</td>
                                        <td>@if($item->month==1)January
                                            @elseif($item->month==2)February
                                            @elseif($item->month==3)March
                                            @elseif($item->month==4)April
                                            @elseif($item->month==5)May
                                            @elseif($item->month==6)June
                                            @elseif($item->month==7)July
                                            @elseif($item->month==8)August
                                            @elseif($item->month==9)September
                                            @elseif($item->month==10)October
                                            @elseif($item->month==11)November
                                            @elseif($item->month==12)December
                                            @endif
                                        </td>
                                        <td>{{ $item->year }}</td>
                                        <td>
                                            <a href="{{ url('/employee-fee-manage/' . $item->id) }}" title="View EmployeeFeeManage"><button class="btn btn-dark btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/employee-fee-manage/' . $item->id . '/edit') }}" title="Edit EmployeeFeeManage"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/employee-fee-manage' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EmployeeFeeManage" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $employeefeemanage->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
