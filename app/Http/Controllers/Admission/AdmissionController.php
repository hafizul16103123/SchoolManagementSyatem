<?php

namespace App\Http\Controllers\Admission;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Admission;
use App\MyClass;
use App\StudentType;
use Illuminate\Http\Request;
use PhpParser\Builder\Class_;

class AdmissionController extends Controller
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
            $admission = Admission::where('id','LIKE', "%$keyword%")
                ->orWhere('name', 'LIKE', "%$keyword%")
                ->orWhere('birthday', 'LIKE', "%$keyword%")
                ->orWhere('student_type_id', 'LIKE', "%$keyword%")
                ->orWhere('my_class_id', 'LIKE', "%$keyword%")
                ->orWhere('nationality', 'LIKE', "%$keyword%")
                ->orWhere('bloodgroup', 'LIKE', "%$keyword%")
                ->orWhere('address', 'LIKE', "%$keyword%")
                ->orWhere('previous_institute', 'LIKE', "%$keyword%")
                ->orWhere('residence_phone_number', 'LIKE', "%$keyword%")
                ->orWhere('Email', 'LIKE', "%$keyword%")
                ->orWhere('father_name', 'LIKE', "%$keyword%")
                ->orWhere('father_phonenumber', 'LIKE', "%$keyword%")
                ->orWhere('transport', 'LIKE', "%$keyword%")
                ->orWhere('admission_date', 'LIKE', "%$keyword%")
                ->orderBy('id','asc')->paginate($perPage);
        } else {
            $admission = Admission::orderBy('id','asc')->paginate($perPage);
        }
        return view('admission.admission.index',['admission'=>$admission]);
    }


    public function create()
    {
        return view('admission.admission.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'father_phonenumber'=>'required|min:11|max:11',
        ]);
        $requestData = $request->all();
        Admission::create($requestData);
        return redirect('admission')->with('flash_message', 'Admission added!');
    }


    public function show($id)
    {
        $admission = Admission::findOrFail($id);

        return view('admission.admission.show', compact('admission'));
    }


    public function edit($id)
    {
        $admission = Admission::find($id);

        return view('admission.admission.edit', compact('admission'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request,[
           'student_type_id'=>'required',
           'my_class_id'=>'required',
        ]);
        $requestData = $request->all();
        $admission = Admission::findOrFail($id);
        $admission->update($requestData);
        return redirect('admission')->with('flash_message', 'Admission updated!');
    }


    public function destroy($id)
    {
        Admission::destroy($id);

        return redirect('admission')->with('flash_message', 'Admission deleted!');
    }
}
