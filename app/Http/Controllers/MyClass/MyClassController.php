<?php

namespace App\Http\Controllers\MyClass;

use App\Admission;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\MyClass;
use Illuminate\Http\Request;

class MyClassController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:administration');
    }


    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 10;

        if (!empty($keyword)) {
            $myclass = MyClass::where('name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $myclass = MyClass::orderBy('id','asc')->paginate($perPage);
        }

        return view('MyClass.my-class.index', compact('myclass'));
    }

    public function create()
    {
        return view('MyClass.my-class.create');
    }


    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        MyClass::create($requestData);

        return redirect('my-class')->with('flash_message', 'MyClass added!');
    }


    public function show($id)
    {
        $myclass = MyClass::findOrFail($id);

        return view('MyClass.my-class.show', compact('myclass'));
    }

    public function edit($id)
    {
        $myclass = MyClass::findOrFail($id);

        return view('MyClass.my-class.edit', compact('myclass'));
    }


    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $myclass = MyClass::findOrFail($id);
        $myclass->update($requestData);

        return redirect('my-class')->with('flash_message', 'MyClass updated!');
    }


    public function destroy($id)
    {
        MyClass::destroy($id);

        return redirect('my-class')->with('flash_message', 'MyClass deleted!');
    }
}
