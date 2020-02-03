<?php

namespace App\Http\Controllers\AdmissionFee;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\AdmissionFee;
use Illuminate\Http\Request;

class AdmissionFeeController extends Controller
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
            $admissionfee = AdmissionFee::where('my_class_id', 'LIKE', "%$keyword%")
                ->orWhere('fee', 'LIKE', "%$keyword%")
                ->orderBy('id','asc')->paginate($perPage);
        } else {
            $admissionfee = AdmissionFee::orderBy('id','asc')->paginate($perPage);
        }

        return view('AdmissionFee.admission-fee.index', compact('admissionfee'));
    }


    public function create()
    {
        return view('AdmissionFee.admission-fee.create');
    }


    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        AdmissionFee::create($requestData);

        return redirect('admission-fee')->with('flash_message', 'AdmissionFee added!');
    }


    public function show($id)
    {
        $admissionfee = AdmissionFee::findOrFail($id);

        return view('AdmissionFee.admission-fee.show', compact('admissionfee'));
    }


    public function edit($id)
    {
        $admissionfee = AdmissionFee::findOrFail($id);

        return view('AdmissionFee.admission-fee.edit', compact('admissionfee'));
    }

    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $admissionfee = AdmissionFee::findOrFail($id);
        $admissionfee->update($requestData);

        return redirect('admission-fee')->with('flash_message', 'AdmissionFee updated!');
    }


    public function destroy($id)
    {
        AdmissionFee::destroy($id);

        return redirect('admission-fee')->with('flash_message', 'AdmissionFee deleted!');
    }
}
