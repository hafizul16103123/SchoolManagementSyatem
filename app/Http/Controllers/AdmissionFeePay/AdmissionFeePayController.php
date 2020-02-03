<?php

namespace App\Http\Controllers\AdmissionFeePay;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\AdmissionFeePay;
use Illuminate\Http\Request;

class AdmissionFeePayController extends Controller
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
            $admissionfeepay = AdmissionFeePay::where('admission_id', 'LIKE', "%$keyword%")
                ->orWhere('fee_paid', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $admissionfeepay = AdmissionFeePay::latest()->paginate($perPage);
        }
        return view('AdmissionFeePay.admission-fee-pay.index', compact('admissionfeepay'));
    }


    public function create()
    {
        return view('AdmissionFeePay.admission-fee-pay.create');
    }

    public function store(Request $request)
    {
        
        $requestData = $request->all();
        if(AdmissionFeePay::where('admission_id', $request->get('admission_id'))->exists()) {
            return redirect()->back()->withInput()->with('flash_message', 'Admission already paid for this month');
        }
        AdmissionFeePay::create($requestData);

        return redirect('admission-fee-pay')->with('flash_message', 'AdmissionFeePay added!');
    }


    public function show($id)
    {
        $admissionfeepay = AdmissionFeePay::findOrFail($id);

        return view('AdmissionFeePay.admission-fee-pay.show', compact('admissionfeepay'));
    }


    public function edit($id)
    {
        $admissionfeepay = AdmissionFeePay::findOrFail($id);

        return view('AdmissionFeePay.admission-fee-pay.edit', compact('admissionfeepay'));
    }


    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $admissionfeepay = AdmissionFeePay::findOrFail($id);
        $admissionfeepay->update($requestData);

        return redirect('admission-fee-pay')->with('flash_message', 'AdmissionFeePay updated!');
    }


    public function destroy($id)
    {
        AdmissionFeePay::destroy($id);

        return redirect('admission-fee-pay')->with('flash_message', 'AdmissionFeePay deleted!');
    }

    public function admission_fee_check()
    {
        $students=AdmissionFeePay::All();
        return view('AdmissionFeePay.admission-fee-pay.admission_fee_check',compact('students'));
    }
}
