<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

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


]);
// RUBENS
Route::resources([

]);
Route::get('audit_status', 'CourseController@AuditStatus');


// SERMAR
Route::resources([


]);
