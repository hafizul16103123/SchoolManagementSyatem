<?php

namespace App\Http\Controllers\MyClassSubjectController;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\MyClassSubject;
use Illuminate\Http\Request;

class MyClassSubjectController extends Controller
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
            $myclasssubject = MyClassSubject::where('my_class_id', 'LIKE', "%$keyword%")
                ->orWhere('subject_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $myclasssubject = MyClassSubject::latest()->paginate($perPage);
        }

        return view('myClassSubject.my-class-subject.index', compact('myclasssubject'));
    }


    public function create()
    {
        return view('myClassSubject.my-class-subject.create');
    }


    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        MyClassSubject::create($requestData);

        return redirect('my-class-subject')->with('flash_message', 'MyClassSubject added!');
    }


    public function show($id)
    {
        $myclasssubject = MyClassSubject::findOrFail($id);

        return view('myClassSubject.my-class-subject.show', compact('myclasssubject'));
    }


    public function edit($id)
    {
        $myclasssubject = MyClassSubject::findOrFail($id);

        return view('myClassSubject.my-class-subject.edit', compact('myclasssubject'));
    }


    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $myclasssubject = MyClassSubject::findOrFail($id);
        $myclasssubject->update($requestData);

        return redirect('my-class-subject')->with('flash_message', 'MyClassSubject updated!');
    }


    public function destroy($id)
    {
        MyClassSubject::destroy($id);

        return redirect('my-class-subject')->with('flash_message', 'MyClassSubject deleted!');
    }
}
