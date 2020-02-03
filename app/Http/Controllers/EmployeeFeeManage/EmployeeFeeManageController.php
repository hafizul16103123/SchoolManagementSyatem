<?php

namespace App\Http\Controllers\EmployeeFeeManage;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EmployeeFeeManage;
use Illuminate\Http\Request;

class EmployeeFeeManageController extends Controller
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
            $employeefeemanage = EmployeeFeeManage::where('academic_id', 'LIKE', "%$keyword%")
                ->Orderby('academic_id','asc')->paginate($perPage);
        } else {
            $employeefeemanage = EmployeeFeeManage::Orderby('academic_id','asc')->paginate($perPage);
        }

        return view('EmployeeFeeManage.employee-fee-manage.index', compact('employeefeemanage'));
    }


    public function create()
    {
        return view('EmployeeFeeManage.employee-fee-manage.create');
    }


    public function store(Request $request)
    {
        
        $requestData = $request->all();
        if(EmployeeFeeManage::where('academic_id', $request->get('academic_id'))->where('month', $request->get('month'))->where('year', $request->get('year'))->exists()) {
            return redirect()->back()->withInput()->with('flash_message', 'Teacher  Salary already given for this month');
        }
        EmployeeFeeManage::create($requestData);

        return redirect('employee-fee-manage')->with('flash_message', 'EmployeeFeeManage added!');
    }


    public function show($id)
    {
        $employeefeemanage = EmployeeFeeManage::findOrFail($id);

        return view('EmployeeFeeManage.employee-fee-manage.show', compact('employeefeemanage'));
    }


    public function edit($id)
    {
        $employeefeemanage = EmployeeFeeManage::findOrFail($id);

        return view('EmployeeFeeManage.employee-fee-manage.edit', compact('employeefeemanage'));
    }


    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $employeefeemanage = EmployeeFeeManage::findOrFail($id);
        $employeefeemanage->update($requestData);

        return redirect('employee-fee-manage')->with('flash_message', 'EmployeeFeeManage updated!');
    }


    public function destroy($id)
    {
        EmployeeFeeManage::destroy($id);

        return redirect('employee-fee-manage')->with('flash_message', 'EmployeeFeeManage deleted!');
    }
}
