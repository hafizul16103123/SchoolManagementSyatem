<?php

namespace App\Http\Controllers;

use App\Admission;
use App\Attendance;
use App\MyClass;
use App\Section;
use PDF;
use Illuminate\Http\Request;

class TakeAttendanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:academic');
    }

    //Attendance sheet
    public function attend_sheet(Request $request)
    {
        $this->validate($request, [
            'class' => 'required',
            'section' => 'required',
        ]);
        $id = 1;

        $class_id = $request->get('class');
        $section_id = $request->get('section');

        $class_students = MyClass::find($class_id)->admissions;
        $section_students = Section::find($section_id)->admissions;
        $class = MyClass::find($class_id);
        $section = Section::find($section_id);
        $admission = Admission::find(1);
        $class_section_student = $class_students->intersect($section_students);

        return view('attendance.attendance.attend_sheet', [
            'students' => $class_section_student,
            'class' => $class,
            'section' => $section,
            'id' => $id,
            'admission' => $admission,
        ]);
    }

    //Search form attendance record of a certain day
    public function viewAttendanceForm()
    {
        $attendance = collect(Attendance::all());
        $date = $attendance->unique('created_at');
        return view('attendance.attendance.viewAttendanceForm', ['date' => $date]);
    }


    public function viewAttendanceClass(Request $request)
    {
        $d = $request->get('date');
        $date = Attendance::where('created_at', $request->get('date'))->get();
        $class_student = Attendance::where('my_class_id', $request->get('class'))->get();
        $section_student = Attendance::where('section_id', $request->get('section'))->get();
        $attendance_class_wise = $class_student->intersect($date);
        $attendance = $attendance_class_wise->intersect($section_student);
        return view('attendance.attendance.viewAttendanceClass', ['attendance' => $attendance, 'd' => $d]);
    }

//Update Attendance
    public function attendance_update(Request $request)
    {
        $attendance = collect($request->get('attend'));
        //get all attendance key
        $presence = $attendance->keys();
        //Now all are absent
        Attendance::whereIn('id', $presence)->update(['attend' => 'absent']);
        //get all present keys
        $present = $attendance->filter(function ($attend) {
            return $attend === 'present';
        })->keys();
        Attendance::whereIn('id', $present)->update(['attend' => 'present']);
        return redirect('attendance')->with('flash_message', 'Attendance Update successfully!');
    }
    public function action_for_absent($stu_id){

        $absent_student=Admission::find($stu_id);
//        dd($absent_student);
        return view('attendance.attendance.ActionForAbsent',['absent_student'=>$absent_student]);
    }
    public function attendance_report(){
        $pdf = PDF::loadView('attendance.attendance.attendance_report');
        return $pdf->stream('attendance_report.pdf');
    }
    //action for ansent
    public function action_for_absent_form()
    {
        $attendance = collect(Attendance::all());
        $date = $attendance->unique('created_at');
        return view('attendance.attendance.ActionForAbsentForm', ['date' => $date]);
    }
    public function action_absent(Request $request)
    {
        $d = $request->get('date');
        $date = Attendance::where('created_at', $request->get('date'))->get();
        $class_student = Attendance::where('my_class_id', $request->get('class'))->get();
        $section_student = Attendance::where('section_id', $request->get('section'))->get();
        $attendance_class_wise = $class_student->intersect($date);
        $attendance = $attendance_class_wise->intersect($section_student);
        return view('attendance.attendance.ActionAbsent', ['attendance' => $attendance, 'd' => $d]);

    }
    public function send_message (Request $request){
        $message=$request->get('message');
        $phone=$request->get('phone');
        $encode_message=urlencode($message);
        $authkey='248317AtsMROmDQg5bf4e70c';
        $senderId='MSGIND';
        $route=4;
        $postData=$request->all();
        $phoneNumber=implode('',$postData['phone']);
        $arr=str_split($phoneNumber,'11');
        $phoneNumbers=implode(',',$arr);
        $data=array(
          'authkey'=>$authkey,
          'phoneNumbers'=>$phoneNumbers,
          'message'=>$encode_message,
          'sender'=>$senderId,
          'route'=>$route,
        );

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://api.msg91.com/api/sendhttp.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "encode_message",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "data",
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }

    }

    //Attendance Report
    public function attendance_report_form(){
       return view('attendance.attendance.attendance_report_form');
    }
    public function attendance_report_record(Request $request){
        $from = $request->get('from_date');
        $to = $request->get('to_date');
        $allStudents=Attendance::whereBetween('created_at', [$from, $to])->get();

        $class=$request->get('class');
        $section=$request->get('section');
        $class_student = Attendance::where('my_class_id',$class )->get();
        $section_student = Attendance::where('section_id',$section)->get();
        $attendance_section_wise = $class_student->intersect($section_student);

        $AttendanceReordAll=$allStudents->intersect($attendance_section_wise);
        $AttendanceReordUnique=Collect($allStudents->intersect($attendance_section_wise)->unique('admission_id')->values()->all());
        return view('attendance.attendance.attendance_report_record',['attendance_record'=>$AttendanceReordUnique,'AttendanceReordAll'=>$AttendanceReordAll,'class'=>$class,'section'=>$section]);

    }
}