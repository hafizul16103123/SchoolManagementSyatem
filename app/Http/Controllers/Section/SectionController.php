<?php

namespace App\Http\Controllers\Section;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
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
            $section = Section::where('name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $section = Section::orderby('id','asc')->paginate($perPage);
        }

        return view('section.section.index', compact('section'));
    }


    public function create()
    {
        return view('section.section.create');
    }

    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Section::create($requestData);

        return redirect('section')->with('flash_message', 'Section added!');
    }


    public function show($id)
    {
        $section = Section::findOrFail($id);

        return view('section.section.show', compact('section'));
    }

    public function edit($id)
    {
        $section = Section::findOrFail($id);
        return view('section.section.edit', compact('section'));
    }


    public function update(Request $request, $id)
    {
        
        $requestData = $request->get();
        
        $section = Section::findOrFail($id);
        $section->update($requestData->toString);

        return redirect('section')->with('flash_message', 'Section updated!');
    }


    public function destroy($id)
    {
        Section::destroy($id);

        return redirect('section')->with('flash_message', 'Section deleted!');
    }
}
