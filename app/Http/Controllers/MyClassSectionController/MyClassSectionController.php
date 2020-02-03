<?php

namespace App\Http\Controllers\MyClassSectionController;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\MyClassSection;
use Illuminate\Http\Request;

class MyClassSectionController extends Controller
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
            $myclasssection = MyClassSection::where('class_id', 'LIKE', "%$keyword%")
                ->orWhere('section_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $myclasssection = MyClassSection::latest()->paginate($perPage);
        }

        return view('myClassSection.my-class-section.index', compact('myclasssection'));
    }


    public function create()
    {
        return view('myClassSection.my-class-section.create');
    }


    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        MyClassSection::create($requestData);

        return redirect('my-class-section')->with('flash_message', 'MyClassSection added!');
    }


    public function show($id)
    {
        $myclasssection = MyClassSection::findOrFail($id);

        return view('myClassSection.my-class-section.show', compact('myclasssection'));
    }


    public function edit($id)
    {
        $myclasssection = MyClassSection::findOrFail($id);

        return view('myClassSection.my-class-section.edit', compact('myclasssection'));
    }


    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $myclasssection = MyClassSection::findOrFail($id);
        $myclasssection->update($requestData);

        return redirect('my-class-section')->with('flash_message', 'MyClassSection updated!');
    }


    public function destroy($id)
    {
        MyClassSection::destroy($id);

        return redirect('my-class-section')->with('flash_message', 'MyClassSection deleted!');
    }
}
