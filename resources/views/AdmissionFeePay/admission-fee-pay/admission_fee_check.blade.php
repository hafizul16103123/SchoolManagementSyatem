@extends('layouts.administration.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card bg-info">
                    <div class="card-header">Admission Fee Check</div>
                    <div class="card-body">
                        <a href="{{ url('/admission-fee-pay/create') }}" class="btn btn-primary btn-sm" title="Add New AdmissionFeePay">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/admission-fee-pay') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                    
                                    <th>Admission Id</th>
                                    <th>Admission Fee</th>
                                    <th>Fee Paid</th>
                                    <th>Due</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    @if(App\MyClass::find(App\Admission::find($item->admission_id)->myClass->id)->admission_fee->fee-$item->fee_paid)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->admission_id }}
                                        {{--<td>{{App\MyClass::find(App\Admission::find($item->admission_id)->myClass->id)->admission_fee->fee}}--}}
                                        <td>{{App\MyClass::find(App\Admission::find($item->admission_id)->myClass->id)->admission_fee->fee}}
                                        </td><td>{{ $item->fee_paid }}</td>
                                        </td><td>{{App\MyClass::find(App\Admission::find($item->admission_id)->myClass->id)->admission_fee->fee-$item->fee_paid}}</td>
                                        <td>
                                            <a href="{{ url('/admission-fee-pay/' . $item->id) }}" title="View AdmissionFeePay"><button class="btn btn-dark btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admission-fee-pay/' . $item->id . '/edit') }}" title="Edit AdmissionFeePay"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/admission-fee-pay' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete AdmissionFeePay" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
