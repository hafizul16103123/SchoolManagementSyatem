<?php

namespace App\Http\Controllers\ExamType;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ExamType;
use Illuminate\Http\Request;

class ExamTypeController extends Controller
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
            $examtype = ExamType::where('name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $examtype = ExamType::latest()->paginate($perPage);
        }

        return view('ExamType.exam-type.index', compact('examtype'));
    }


    public function create()
    {
        return view('ExamType.exam-type.create');
    }


    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        ExamType::create($requestData);

        return redirect('exam-type')->with('flash_message', 'ExamType added!');
    }


    public function show($id)
    {
        $examtype = ExamType::findOrFail($id);

        return view('ExamType.exam-type.show', compact('examtype'));
    }


    public function edit($id)
    {
        $examtype = ExamType::findOrFail($id);

        return view('ExamType.exam-type.edit', compact('examtype'));
    }


    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $examtype = ExamType::findOrFail($id);
        $examtype->update($requestData);

        return redirect('exam-type')->with('flash_message', 'ExamType updated!');
    }


    public function destroy($id)
    {
        ExamType::destroy($id);

        return redirect('exam-type')->with('flash_message', 'ExamType deleted!');
    }
}
