@extends('layouts.administration.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="card bg-info">
                    <div class="card-header">Admission {{ $admission->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admission') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admission/' . $admission->id . '/edit') }}" title="Edit Admission"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admission' . '/' . $admission->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Admission" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>
                                            {{ $admission->id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> Name </th>
                                        <td>
                                            {{ $admission->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> Birthday </th>
                                        <td>
                                            {{ $admission->birthday }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Student Type Id </th>
                                        <td>
                                            {{ App\Admission::find($admission->id)->studentType->name }}
                                        </td>
                                    </tr><tr>
                                        <th>Class </th>
                                        <td>
                                            {{ App\Admission::find($admission->id)->myClass->name }}
                                        </td>
                                    </tr>
                                    </tr><tr>
                                        <th>Class </th>
                                        <td>
                                            {{ App\Admission::find($admission->id)->section->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Nationality </th>
                                        <td>
                                            {{ $admission->nationality }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Blood Group </th>
                                        <td>
                                            {{ $admission->bloodgroup }}
                                        </td>
                                    </tr><tr>
                                        <th>Address </th>
                                        <td>
                                            {{ $admission->address }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Previous Institute </th>
                                        <td>
                                            {{ $admission->previous_institute }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Father Name </th>
                                        <td>
                                            {{ $admission->father_name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Father Phone </th>
                                        <td>
                                            {{ $admission->father_phonenumber }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Email </th>
                                        <td>
                                            {{ $admission->Email }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Transport </th>
                                        <td>
                                            {{ $admission->transport }}
                                        </td>
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
