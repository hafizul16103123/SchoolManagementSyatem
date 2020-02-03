<?php

namespace App\Http\Controllers\Exam;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:academic');
    }

    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $exam = Exam::where('exam_type_id', 'LIKE', "%$keyword%")
                ->orWhere('my_class_id', 'LIKE', "%$keyword%")
                ->orWhere('section_id', 'LIKE', "%$keyword%")
                ->orWhere('subject_id', 'LIKE', "%$keyword%")
                ->orWhere('academic_id', 'LIKE', "%$keyword%")
                ->orWhere('room_id', 'LIKE', "%$keyword%")
                ->orWhere('date_time', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $exam = Exam::latest()->paginate($perPage);
        }

        return view('Exam.exam.index', compact('exam'));
    }


    public function create()
    {
        return view('Exam.exam.create');
    }


    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Exam::create($requestData);

        return redirect('exam')->with('flash_message', 'Exam added!');
    }


    public function show($id)
    {
        $exam = Exam::findOrFail($id);

        return view('Exam.exam.show', compact('exam'));
    }


    public function edit($id)
    {
        $exam = Exam::findOrFail($id);

        return view('Exam.exam.edit', compact('exam'));
    }


    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $exam = Exam::findOrFail($id);
        $exam->update($requestData);

        return redirect('exam')->with('flash_message', 'Exam updated!');
    }

    public function destroy($id)
    {
        Exam::destroy($id);

        return redirect('exam')->with('flash_message', 'Exam deleted!');
    }
}
