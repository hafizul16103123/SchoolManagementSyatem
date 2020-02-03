<?php

namespace App\Http\Controllers\SubjectController;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
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
            $subject = Subject::where('name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $subject = Subject::latest()->paginate($perPage);
        }

        return view('subject.subject.index', compact('subject'));
    }


    public function create()
    {
        return view('subject.subject.create');
    }


    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Subject::create($requestData);

        return redirect('subject')->with('flash_message', 'Subject added!');
    }


    public function show($id)
    {
        $subject = Subject::findOrFail($id);

        return view('subject.subject.show', compact('subject'));
    }


    public function edit($id)
    {
        $subject = Subject::findOrFail($id);

        return view('subject.subject.edit', compact('subject'));
    }


    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $subject = Subject::findOrFail($id);
        $subject->update($requestData);

        return redirect('subject')->with('flash_message', 'Subject updated!');
    }


    public function destroy($id)
    {
        Subject::destroy($id);

        return redirect('subject')->with('flash_message', 'Subject deleted!');
    }
}
