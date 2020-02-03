<?php

namespace App\Http\Controllers\Result;

use App\Admission;
use App\ExamType;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\MyClassSubject;
use App\Result;
use App\Section;
use App\Subject;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use PDF;
use Illuminate\Http\Request;

class MyResultController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:academic');
    }


    public function search_subject()
    {
        return view('result.result.search_subject', compact('result'));
    }
    public function result_store_form(Request $request)
    {
        $exam_type = $request->get('exam_type');
        $my_class = $request->get('my_class');
        $section = $request->get('section');
        $student = $request->get('admission');
        $class_subjects = MyClassSubject::where('my_class_id', $my_class)->get();
        return view('result.result.result_store_form', ['exam_type' => $exam_type, 'section' => $section, 'my_class' => $my_class, 'student' => $student, 'subject' => $class_subjects]);
    }
    public function result_store(Request $request)
    {
        foreach ($request->get('mark') as $mark){
            if($mark>100 || $mark<0){
                return redirect()->route('search_subject')->with('error_msg', ' Invalid Marks ');
            };
        };

        $student = $request->get('student');
        $exam_type = $request->get('exam_type');
        $my_class = $request->get('my_class');
        $section = $request->get('section');
        $marks = collect($request->get('mark'))->map(function ($value, $key) use ($student, $my_class, $section, $exam_type) {
            return [
                'subject_id' => $key,
                'mark' => $value,
                'admission_id' => $student,
                'my_class_id' => $my_class,
                'section_id' => $section,
                'exam_type_id' => $exam_type,
                'created_at'=>Carbon::parse(Carbon::now())->format('Y/m/d'),
                'updated_at'=>Carbon::parse(Carbon::now())->format('Y/m/d'),
            ];
        });
        if(Result::where('exam_type_id',$exam_type)->where('admission_id', $student)->where('my_class_id', $my_class)->where('section_id', $section)->exists()) {
            return redirect()->route('search_subject')->with('flash_message', 'Marks already given for this student');
        }

        Result::insert($marks->toArray());
        return redirect()->route('search_subject')->with('msg', 'Result store successfully');
    }
    public function search_result(Request $request)
    {
        $exam_type = $request->get('exam_type');
        $student = $request->get('admission');
        /** @var Collection $results */
        $results = Result::where('exam_type_id', $exam_type)->where('admission_id', $student)->get();
        $isPass = true;
        $grades = collect([
            100 => 'A+',
            79 => 'A',
            69 => 'A-',
            59 => 'B',
            49 => 'C',
            39 => 'D',
            32 => 'F',
        ]);
        $results = $results->map(function ($result) use (&$isPass, $grades) {
            $grade = 'F';
            $mark = $result->mark;
            foreach ($grades as $m => $g) {
                if ($mark <= $m) {
                    $grade = $g;
                    if ($grade == 'F') {
                        $isPass = false;
                    }
                } else {
                    break;
                }
            }
            $result->grade = $grade;
            return $result;
        });
        return view('result.result.search_result', ['results' => $results, 'student' => $student, 'exam_type' => $exam_type, 'isPass' => $isPass]);
    }
    public function pdf_result($stu, $exam)
    {
        $exam_type = $exam;
        $student = $stu;
        $results = Result::where('exam_type_id', $exam_type)->where('admission_id', $student)->get();
        $isPass = true;
        $grades = collect([
            100 => 'A+',
            79 => 'A',
            69 => 'A-',
            59 => 'B',
            49 => 'C',
            39 => 'D',
            32 => 'F',
        ]);
        $results = $results->map(function ($result) use (&$isPass, $grades) {
            $grade = 'F';
            $mark = $result->mark;
            foreach ($grades as $m => $g) {
                if ($mark <= $m) {
                    $grade = $g;
                    if ($grade == 'F') {
                        $isPass = false;
                    }
                } else {
                    break;
                }
            }
            $result->grade = $grade;
            return $result;
        });
        $pdf = PDF::loadView('result.result.pdf_result', ['results' => $results, 'student' => $student, 'exam_type' => $exam_type,'isPass' => $isPass]);
        return $pdf->stream('pdf_result.pdf');
    }
}
