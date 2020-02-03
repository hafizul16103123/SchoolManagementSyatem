@extends('layouts.administration.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-info">
                    <div class="card-header">Admission</div>
                    <div class="card-body">
                        <a href="{{ url('/admission/create') }}" class="btn btn-primary btn-sm" title="Add New Admission">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/admission') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>Id</th>
                                        <th>Name</th>
                                        {{--<th>Birthday</th>--}}
                                        <th>Category</th>
                                        <th>Class</th>
                                        <th>Section</th>
                                        <th>Father</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        {{--<th>Blood</th>--}}
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($admission as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        {{--<td>{{ $item->birthday }}</td>--}}
                                        <td>{{App\Admission::find($item->id)->studentType->name}}</td>
                                        <td>{{app\Admission::find($item->id)->myClass->name}}</td>
                                        <td>{{app\Admission::find($item->id)->section->name}}</td>
                                        <td>{{app\Admission::find($item->id)->father_name}}</td>
                                        <td>{{app\Admission::find($item->id)->Email}}</td>
                                        <td>{{app\Admission::find($item->id)->father_phonenumber}}</td>
                                        <td>{{app\Admission::find($item->id)->address}}</td>
                                        {{--<td>{{app\Admission::find($item->id)->bloodgroup}}</td>--}}
                                        <td>
                                            <a href="{{ route('admission.show',['id'=>$item->id])}}" title="View Admission"><button class="btn btn-dark btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admission/' . $item->id . '/edit') }}" title="Edit Admission"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/admission' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Admission" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $admission->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
