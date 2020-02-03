<?php

namespace App\Http\Controllers\ClassFee;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ClassFee;
use Illuminate\Http\Request;

class ClassFeeController extends Controller
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
            $classfee = ClassFee::where('my_class_id', 'LIKE', "%$keyword%")
                ->orWhere('fee', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $classfee = ClassFee::orderBy('id', 'asc')->paginate($perPage);
        }

        return view('ClassFee.class-fee.index', compact('classfee'));
    }


    public function create()
    {
        return view('ClassFee.class-fee.create');
    }


    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        ClassFee::create($requestData);

        return redirect('class-fee')->with('flash_message', 'ClassFee added!');
    }


    public function show($id)
    {
        $classfee = ClassFee::findOrFail($id);

        return view('ClassFee.class-fee.show', compact('classfee'));
    }


    public function edit($id)
    {
        $classfee = ClassFee::findOrFail($id);

        return view('ClassFee.class-fee.edit', compact('classfee'));
    }


    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $classfee = ClassFee::findOrFail($id);
        $classfee->update($requestData);

        return redirect('class-fee')->with('flash_message', 'ClassFee updated!');
    }


    public function destroy($id)
    {
        ClassFee::destroy($id);

        return redirect('class-fee')->with('flash_message', 'ClassFee deleted!');
    }
}
