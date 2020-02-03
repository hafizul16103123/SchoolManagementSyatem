<?php

namespace App\Http\Controllers\Attendance;

use App\Academic;
use App\Admission;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AttendanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:academic');
    }

    public function index()
    {
        return view('attendance.attendance.index');
    }

    public function create()
    {
        return view('attendance.attendance.create');
    }

    public function store(Request $request)
    {

        $attendance = collect($request->get('attend'))->map(function ($present, $student) {

            return [
            'admission_id' => $student,
            'attend' => $present,
            'my_class_id'=>Admission::find($student)->myClass->id,
            'section_id'=>Admission::find($student)->section->id,
            'created_at' =>Carbon::parse(Carbon::now())->format('Y/m/d'),
            'updated_at' =>Carbon::parse(Carbon::now())->format('Y/m/d'),
            ];
        });
        if(Attendance::where('admission_id',collect($request->get('attend'))->keys()->first())->where('created_at',Carbon::parse(Carbon::now())->format('Y/m/d'))->exists()) {
            return redirect()->back()->withInput()->with('flash_message', 'Student Attendance already taken');
        };
        Attendance::insert($attendance->toArray());
        return redirect('attendance')->with('flash_message', 'Attendance added!');
    }

    public function show($id)
    {
        $attendance = Attendance::findOrFail($id);
        return view('attendance.attendance.show', compact('attendance'));
    }

    public function edit($id)
    {
        $attendance = Attendance::findOrFail($id);
        return view('attendance.attendance.edit', compact('attendance'));
    }

    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        $attendance = Attendance::findOrFail($id);
        $attendance->update($requestData);
        return redirect('attendance')->with('flash_message', 'Attendance updated!');
    }

    public function destroy($id)
    {
        Attendance::destroy($id);
        return redirect('attendance')->with('flash_message', 'Attendance deleted!');
    }
}
