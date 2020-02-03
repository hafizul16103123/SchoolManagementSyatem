@extends('layouts.administration.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card bg-info">
                    <div class="card-header">AdmissionFeePay {{ $admissionfeepay->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/admission-fee-pay') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admission-fee-pay/' . $admissionfeepay->id . '/edit') }}" title="Edit AdmissionFeePay"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        <form method="POST" action="{{ url('admissionfeepay' . '/' . $admissionfeepay->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete AdmissionFeePay" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $admissionfeepay->id }}</td>
                                    </tr>
                                    <tr><th> Admission Id </th><td> {{ $admissionfeepay->admission_id }} </td></tr><tr><th> Fee Paid </th><td> {{ $admissionfeepay->fee_paid }} </td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
