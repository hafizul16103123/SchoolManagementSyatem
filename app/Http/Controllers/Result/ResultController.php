<?php

namespace App\Http\Controllers\Result;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
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
            $result = Result::where('exam_type_id', 'LIKE', "%$keyword%")
                ->orWhere('my_class_id', 'LIKE', "%$keyword%")
                ->orWhere('section_id', 'LIKE', "%$keyword%")
                ->orWhere('subject_id', 'LIKE', "%$keyword%")
                ->orWhere('admission_id', 'LIKE', "%$keyword%")
                ->orWhere('mark', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $result = Result::latest()->paginate($perPage);
        }

        return view('result.result.index', compact('result'));
    }

    public function create()
    {
        return view('result.result.create');
    }


    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Result::create($requestData);

        return redirect('result')->with('flash_message', 'Result added!');
    }


    public function show($id)
    {
        $result = Result::findOrFail($id);

        return view('result.result.show', compact('result'));
    }


    public function edit($id)
    {
        $result = Result::findOrFail($id);
        return view('result.result.edit', compact('result'));
    }


    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $result = Result::findOrFail($id);
        $result->update($requestData);

        return redirect('result')->with('flash_message', 'Result updated!');
    }


    public function destroy($id)
    {
        Result::destroy($id);
        return redirect('result')->with('flash_message', 'Result deleted!');
    }
}
