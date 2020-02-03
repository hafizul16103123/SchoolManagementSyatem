<?php

namespace App\Http\Controllers;

use App\Exam;
use App\Notice;
use App\Result;
use PDF;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function stu_result(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $result = Result::where('exam_type_id', 'LIKE', "%$keyword%")
                ->orWhere('my_class_id', 'LIKE', "%$keyword%")
                ->orWhere('section_id', 'LIKE', "%$keyword%")
                ->orWhere('subject_id', 'LIKE', "%$keyword%")
                ->orWhere('admission_id', 'LIKE', "%$keyword%")
                ->orWhere('mark', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $result = Result::latest()->paginate($perPage);
        }
        return view('result.result.student_result_index', compact('result'));
    }
    public function student_search_result(Request $request)
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
        return view('result.result.student_search_result', ['results' => $results, 'student' => $student, 'exam_type' => $exam_type, 'isPass' => $isPass]);
    }
    public function student_pdf_result($stu, $exam)
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
        $pdf = PDF::loadView('result.result.student_pdf_result', ['results' => $results, 'student' => $student, 'exam_type' => $exam_type,'isPass' => $isPass]);
        return $pdf->stream('student_pdf_result.pdf');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function stu_notice(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $notice = Notice::where('notice', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $notice = Notice::latest()->paginate($perPage);
        }

        return view('Notice.notice.notice', compact('notice'));
    }

    public function stu_result_notice(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $exam = Exam::where('exam_type_id', 'LIKE', "%$keyword%")
                ->orWhere('my_class_id', 'LIKE', "%$keyword%")
                ->orWhere('section_id', 'LIKE', "%$keyword%")
                ->orWhere('subject_id', 'LIKE', "%$keyword%")
                ->orWhere('academic_id', 'LIKE', "%$keyword%")
                ->orWhere('room_id', 'LIKE', "%$keyword%")
                ->orWhere('date_time', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $exam = Exam::latest()->paginate($perPage);
        }

        return view('Notice.notice.stu_exam_result', compact('exam'));
    }
}
