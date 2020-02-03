<?php

namespace App\Http\Controllers\EmployeeDesignationFee;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EmployeeDesignationFee;
use Illuminate\Http\Request;

class EmployeeDesignationFeeController extends Controller
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
            $employeedesignationfee = EmployeeDesignationFee::where('employee_designation_id', 'LIKE', "%$keyword%")
                ->orWhere('salary', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $employeedesignationfee = EmployeeDesignationFee::Orderby('id','asc')->latest()->paginate($perPage);
        }

        return view('EmployeeDesignationFee.employee-designation-fee.index', compact('employeedesignationfee'));
    }


    public function create()
    {
        return view('EmployeeDesignationFee.employee-designation-fee.create');
    }


    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        EmployeeDesignationFee::create($requestData);

        return redirect('employee-designation-fee')->with('flash_message', 'EmployeeDesignationFee added!');
    }


    public function show($id)
    {
        $employeedesignationfee = EmployeeDesignationFee::findOrFail($id);

        return view('EmployeeDesignationFee.employee-designation-fee.show', compact('employeedesignationfee'));
    }


    public function edit($id)
    {
        $employeedesignationfee = EmployeeDesignationFee::findOrFail($id);

        return view('EmployeeDesignationFee.employee-designation-fee.edit', compact('employeedesignationfee'));
    }


    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $employeedesignationfee = EmployeeDesignationFee::findOrFail($id);
        $employeedesignationfee->update($requestData);

        return redirect('employee-designation-fee')->with('flash_message', 'EmployeeDesignationFee updated!');
    }


    public function destroy($id)
    {
        EmployeeDesignationFee::destroy($id);

        return redirect('employee-designation-fee')->with('flash_message', 'EmployeeDesignationFee deleted!');
    }
}
