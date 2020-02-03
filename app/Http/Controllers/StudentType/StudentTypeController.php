<?php

namespace App\Http\Controllers\StudentType;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Student;
use App\StudentType;
use Illuminate\Http\Request;

class StudentTypeController extends Controller
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
            $studenttype = StudentType::where('name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $studenttype = StudentType::orderBy('id','asc')->paginate($perPage);
        }

        return view('StudentType.student-type.index', compact('studenttype'));
    }


    public function create()
    {
        return view('StudentType.student-type.create');
    }


    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        StudentType::create($requestData);

        return redirect('student-type')->with('flash_message', 'StudentType added!');
    }


    public function show($id)
    {
        $studenttype = StudentType::findOrFail($id);

        return view('StudentType.student-type.show', compact('studenttype'));
    }


    public function edit($id)
    {
        $studenttype = StudentType::findOrFail($id);

        return view('StudentType.student-type.edit', compact('studenttype'));
    }


    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $studenttype = StudentType::findOrFail($id);
        $studenttype->update($requestData);

        return redirect('student-type')->with('flash_message', 'StudentType updated!');
    }


    public function destroy($id)
    {
        StudentType::destroy($id);

        return redirect('student-type')->with('flash_message', 'StudentType deleted!');
    }
}
