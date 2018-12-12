<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// EDUARDO
Route::resources([
    'course' => 'AuditCourseController',  
]);

Route::get('filter/{filter}','AuditCourseController@getCourseOrInstitution');
Route::get('legislation','AuditCourseController@Legislation');
Route::get('urgency','AuditCourseController@UrgencyDeadline');
Route::get('students_enabled','AuditCourseController@EnabledStudents');
Route::get('report/pdf','AuditCourseController@ReportPdf');
Route::get('report/excel','AuditCourseController@ReportExcel');

// LUCAS
Route::resources([
    'student' => 'StudentController',
]);

Route::get('student/','AuditStudentController@show'); //lista todos alunos
Route::get('student-list/{filter}','AuditStudentController@StudentResearch'); // faz pesquisa na lista de aluno
Route::get('student-report/pdf','AuditStudentController@ReportPdf'); //rotas de Relatorios
Route::get('report/excel','AuditStudentController@ReportExcel');

Route::get('/rejected','AuditStudentController@RetainedStudent'); // Alunos rejeitados
Route::get('rejected/{id}','AuditStudentController@RetainedStudentList');//pesquisa alunos rejeitados
Route::get('rejected-report','AuditStudentController@RejectedReportPdf'); //rotas de Relatorios
Route::get('rejected-report/excel','AuditStudentController@RejectedReportExcel');


// RUBENS
Route::resources([
    
   
]);
// SERMAR
Route::resources([
    
   
]);
