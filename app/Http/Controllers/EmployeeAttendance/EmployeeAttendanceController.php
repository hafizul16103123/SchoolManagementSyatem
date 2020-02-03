<?php

namespace App\Http\Controllers\EmployeeAttendance;

use App\Academic;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EmployeeAttendance;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmployeeAttendanceController extends Controller
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
            $employeeattendance = EmployeeAttendance::where('academic_id', 'LIKE', "%$keyword%")
                ->orWhere('attend', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $employeeattendance = EmployeeAttendance::latest()->paginate($perPage);
        }

        return view('EmployeeAttendance.employee-attendance.index', compact('employeeattendance'));
    }


    public function create()
    {
        return view('EmployeeAttendance.employee-attendance.create');
    }


    public function store(Request $request)
    {

        $requestData = $request->all();
        if(EmployeeAttendance::where('academic_id', $request->get('academic_id'))->where('created_at', Carbon::parse($request->get('created_at'))->format('Y/m/d'))->exists()) {
            return redirect()->back()->withInput()->with('flash_message', 'Employee attendance already taken');
        }
        EmployeeAttendance::create($requestData);
        return redirect('employee-attendance')->with('flash_message', 'EmployeeAttendance added!');
    }


    public function show($id)
    {
        $employeeattendance = EmployeeAttendance::findOrFail($id);

        return view('EmployeeAttendance.employee-attendance.show', compact('employeeattendance'));
    }


    public function edit($id)
    {
        $employeeattendance = EmployeeAttendance::findOrFail($id);

        return view('EmployeeAttendance.employee-attendance.edit', compact('employeeattendance'));
    }


    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $employeeattendance = EmployeeAttendance::findOrFail($id);
        $employeeattendance->update($requestData);

        return redirect('employee-attendance')->with('flash_message', 'EmployeeAttendance updated!');
    }


    public function destroy($id)
    {
        EmployeeAttendance::destroy($id);

        return redirect('employee-attendance')->with('flash_message', 'EmployeeAttendance deleted!');
    }

    public  function employee_attendance_report_form(){
        return view('EmployeeAttendance.employee-attendance.employee_attendance_report_form');
    }

    public  function employee_attendance_report(Request $request){
        $from = $request->get('from_date');
        $to = $request->get('to_date');
        $allrecord=EmployeeAttendance::whereBetween('created_at', [$from, $to])->get();

        $teacher=$request->get('academic');
        $teacher=EmployeeAttendance::where('academic_id',$teacher)->get();
        $AttendanceRecordAll=$allrecord->intersect($teacher);
        $AttendanceRecordUnique=Collect($allrecord->intersect($teacher))->unique('academic_id')->values()->all();

        return view('EmployeeAttendance.employee-attendance.employee_attendance_report',['AttendanceRecordAll'=>$AttendanceRecordAll,'AttendanceRecordUnique'=>$AttendanceRecordUnique]);
    }
}
