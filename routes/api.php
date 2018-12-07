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
    'course' => 'CourseController',   
]);

Route::get('filter/{filter}','CourseController@getCourseOrInstitution');
Route::get('legislation','CourseController@Legislation');
Route::get('urgency','CourseController@UrgencyDeadline');
Route::get('students_enabled','CourseController@EnabledStudents');
Route::get('report/pdf','CourseController@ReportPdf');
Route::get('report/excel','CourseController@ReportExcel');

// LUCAS
Route::resources([
    
   
]);
// RUBENS
Route::resources([
    
   
]);
// SERMAR
Route::resources([
    
   
]);
