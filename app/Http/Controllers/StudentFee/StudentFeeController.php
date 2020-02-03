<?php

namespace App\Http\Controllers\StudentFee;

use App\Admission;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\MyClass;
use App\StudentFee;
use Illuminate\Http\Request;

class StudentFeeController extends Controller
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
            $studentfee = StudentFee::Orderby('admission_id','asc')->where('admission_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $studentfee = StudentFee::Orderby('admission_id','asc')->latest()->paginate($perPage);
        }
        $total_fee=StudentFee::all()->sum('fee_paid');
        return view('StudentFee.student-fee.index',['studentfee'=>$studentfee,'total_fee'=>$total_fee]);
    }


    public function create()
    {
        return view('StudentFee.student-fee.create');
    }

    public function _create(Admission $admission)
    {
        return view('StudentFee.student-fee._create', compact('admission'));
    }


    public function store(Request $request)
    {


            $requestData = $request->all();
            if(StudentFee::where('admission_id', $request->get('admission_id'))->where('month', $request->get('month'))->where('year', $request->get('year'))->exists()) {
               return redirect()->back()->withInput()->with('flash_message', 'StudentFee already paid for this month');
            }
            StudentFee::create($requestData);
            return redirect('student-fee')->with('flash_message', 'StudentFee added!');

    }


    public function show($id)
    {
        $studentfee = StudentFee::findOrFail($id);

        return view('StudentFee.student-fee.show', compact('studentfee'));
    }


    public function edit($id)
    {
        $studentfee = StudentFee::findOrFail($id);

        return view('StudentFee.student-fee.edit', compact('studentfee'));
    }


    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $studentfee = StudentFee::findOrFail($id);
        $studentfee->update($requestData);

        return redirect('student-fee')->with('flash_message', 'StudentFee updated!');
    }


    public function destroy($id)
    {
        StudentFee::destroy($id);

        return redirect('student-fee')->with('flash_message', 'StudentFee deleted!');
    }

    public function fee_check_form()
    {
        return view('StudentFee.student-fee.fee_check_form');
    }
    public function fee_check(Request $request)
    {
        $month=$request->month;
        $year=$request->year;
        $students=StudentFee::where('month',$month)->where('year',$year)->get();
        return view('StudentFee.student-fee.fee_check',['students'=>$students]);
    }
}
