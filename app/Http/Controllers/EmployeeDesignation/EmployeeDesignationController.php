<?php

namespace App\Http\Controllers\EmployeeDesignation;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EmployeeDesignation;
use Illuminate\Http\Request;

class EmployeeDesignationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:administration');
    }

    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $employeedesignation = EmployeeDesignation::Orderby('id','asc')->where('name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $employeedesignation = EmployeeDesignation::Orderby('id','asc')->paginate($perPage);
        }

        return view('EmployeeDesignation.employee-designation.index', compact('employeedesignation'));
    }


    public function create()
    {
        return view('EmployeeDesignation.employee-designation.create');
    }


    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        EmployeeDesignation::create($requestData);

        return redirect('employee-designation')->with('flash_message', 'EmployeeDesignation added!');
    }


    public function show($id)
    {
        $employeedesignation = EmployeeDesignation::findOrFail($id);

        return view('EmployeeDesignation.employee-designation.show', compact('employeedesignation'));
    }


    public function edit($id)
    {
        $employeedesignation = EmployeeDesignation::findOrFail($id);

        return view('EmployeeDesignation.employee-designation.edit', compact('employeedesignation'));
    }


    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $employeedesignation = EmployeeDesignation::findOrFail($id);
        $employeedesignation->update($requestData);

        return redirect('employee-designation')->with('flash_message', 'EmployeeDesignation updated!');
    }


    public function destroy($id)
    {
        EmployeeDesignation::destroy($id);

        return redirect('employee-designation')->with('flash_message', 'EmployeeDesignation deleted!');
    }
}
