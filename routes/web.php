<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//Route for Academic
// Authentication Routes...
Route::get('academic/home', 'AcademicController@index')->name('academic.home');
Route::get('academic', 'academic\LoginController@showLoginForm')->name('academic.login');
Route::post('academic', 'academic\LoginController@login')->name('academic.login');

Route::post('logout', 'academic\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('academic-register', 'academic\RegisterController@showRegistrationForm')->name('academic.register');
Route::post('academic-register', 'academic\RegisterController@register')->name('academic.register');

// Password Reset Routes...
Route::get('academic-password/reset', 'academic\ForgotPasswordController@showLinkRequestForm')->name('academic.password.request');
Route::post('academic-password/reset', 'academic\ResetPasswordController@reset')->name('academic.password.update');
Route::post('academic-password/email', 'academic\ForgotPasswordController@sendResetLinkEmail')->name('academic.password.email');
Route::get('academic-password/reset/{token}', 'academic\ResetPasswordController@showResetForm')->name('academic.password.reset');



//Route for Administration
// Authentication Routes...
Route::get('administration/home', 'AdministrationController@index')->name('administration.home');
Route::get('administration', 'administration\LoginController@showLoginForm')->name('administration.login');
Route::post('administration', 'administration\LoginController@login')->name('administration.login');

Route::post('logout', 'administration\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('administration-register', 'administration\RegisterController@showRegistrationForm')->name('administration.register');
Route::post('administration-register', 'administration\RegisterController@register')->name('administration.register');

// Password Reset Routes...
Route::get('administration-password/reset', 'administration\ForgotPasswordController@showLinkRequestForm')->name('administration.password.request');
Route::post('administration-password/reset', 'administration\ResetPasswordController@reset')->name('administration.password.update');
Route::post('administration-password/email', 'administration\ForgotPasswordController@sendResetLinkEmail')->name('administration.password.email');
Route::get('administration-password/reset/{token}', 'administration\ResetPasswordController@showResetForm')->name('administration.password.reset');

Route::resource('my-class', 'MyClass\\MyClassController');
Route::resource('section', 'Section\\SectionController');
Route::resource('my-class', 'MyClass\\MyClassController');

Route::resource('admission','Admission\\AdmissionController');
Route::get('stu_result', 'StudentController@stu_result')->name('stu_result');
Route::get('stu_result_notice', 'StudentController@stu_result_notice')->name('stu_result_notice');
Route::get('stu_notice', 'StudentController@stu_notice')->name('stu_notice');
Route::post('student_search_result','StudentController@student_search_result')->name('student_search_result');
Route::get('student_pdf_result/{student_id}/{exam_type_id}','StudentController@student_pdf_result')->name('student_pdf_result');
Route::resource('student-type', 'StudentType\\StudentTypeController');

Route::resource('my-class-section', 'MyClassSectionController\\MyClassSectionController');
Route::resource('subject', 'SubjectController\\SubjectController');
Route::resource('my-class-subject', 'MyClassSubjectController\\MyClassSubjectController');
//Attendance route
Route::resource('attendance', 'Attendance\\AttendanceController');
//show attendance sheet
Route::get('takeAttendance', 'TakeAttendanceController@attend_sheet')->name('takeAttendance');
Route::get('attendance_report_form', 'TakeAttendanceController@attendance_report_form')->name('attendance_report_form');
Route::get('attendance_report_record', 'TakeAttendanceController@attendance_report_record')->name('attendance_report_record');
//view attendance
Route::get('viewAttendanceForm', 'TakeAttendanceController@viewAttendanceForm')->name('viewAttendanceForm');
Route::get('viewAttendanceClass', 'TakeAttendanceController@viewAttendanceClass')->name('viewAttendance.class');
Route::get('ActionForAbsent/{id?}', 'TakeAttendanceController@action_for_absent')->name('ActionForAbsent');
//Update attendance
Route::put('updateAttendance', 'TakeAttendanceController@attendance_update')->name('attendance_update');
Route::get('attendance_report', 'TakeAttendanceController@attendance_report')->name('attendance_report');
Route::get('action_for_absent_form', 'TakeAttendanceController@action_for_absent_form')->name('action_for_absent_form');
Route::get('action_for_absent', 'TakeAttendanceController@action_absent')->name('action_for_absent');
Route::get('send_message', 'TakeAttendanceController@send_message')->name('send_message');

//Room
Route::resource('room', 'Room\\RoomController');
Route::resource('exam-type', 'ExamType\\ExamTypeController');
Route::resource('exam', 'Exam\\ExamController');
Route::resource('result', 'Result\\ResultController');
Route::get('result_search','Result\MyResultController@search_subject')->name('search_subject');
Route::post('result_store_form','Result\MyResultController@result_store_form')->name('result_store_form');
Route::get('student_result','Result\MyResultController@student_result_index')->name('student_result');
Route::post('result_store','Result\MyResultController@result_store')->name('result_store');
Route::post('search_result','Result\MyResultController@search_result')->name('search_result');
Route::get('pdf_result/{student_id}/{exam_type_id}','Result\MyResultController@pdf_result')->name('pdf_result');
//Account
Route::get('fee_check_form', 'StudentFee\\StudentFeeController@fee_check_form')->name('fee_check_form');
Route::get('fee_check', 'StudentFee\\StudentFeeController@fee_check')->name('fee_check');
Route::resource('student-fee', 'StudentFee\\StudentFeeController');
Route::resource('class-fee', 'ClassFee\\ClassFeeController');


Route::resource('notice', 'Notice\\NoticeController');
Route::resource('admission-fee', 'AdmissionFee\\AdmissionFeeController');
Route::get('admission_fee_check', 'AdmissionFeePay\\AdmissionFeePayController@admission_fee_check')->name('admission_fee_check');
Route::resource('admission-fee-pay', 'AdmissionFeePay\\AdmissionFeePayController');
Route::resource('employee-designation', 'EmployeeDesignation\\EmployeeDesignationController');
Route::resource('employee-designation-fee', 'EmployeeDesignationFee\\EmployeeDesignationFeeController');
Route::resource('employee-fee-manage', 'EmployeeFeeManage\\EmployeeFeeManageController');
Route::get('employee_attendance_report_form', 'EmployeeAttendance\\EmployeeAttendanceController@employee_attendance_report_form')->name('employee_attendance_report_form');
Route::get('employee_attendance_report', 'EmployeeAttendance\\EmployeeAttendanceController@employee_attendance_report')->name('employee_attendance_report');
Route::resource('employee-attendance', 'EmployeeAttendance\\EmployeeAttendanceController');