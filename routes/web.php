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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Backend', 'middleware' => ['auth']], function (){

    Route::get('/', 'AdminController@index')->name('admin.home')->middleware('auth');
    Route::resource('classe', 'ClasseController');
    Route::resource('role', 'RoleController');
    Route::resource('course', 'CourseController');
    Route::resource('batch', 'BatchController');
    Route::resource('day', 'DayController');
    Route::resource('class_room', 'ClassRoomController');
    Route::resource('academic', 'AcademicController');
    Route::resource('semester', 'SemesterController');
    Route::resource('level', 'LevelController');
    Route::resource('time', 'TimeController');
    Route::resource('shift', 'ShiftController');
    Route::resource('class_scheduling', 'ClassSchedulingController');
    Route::get('course-wise-level', 'ClassSchedulingController@dynamicLevel')->name('dynamiclevel');

    Route::resource('teacher', 'TeacherController');
});
