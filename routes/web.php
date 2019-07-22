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

// Route::resource('shares', 'ShareController');


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();


// for Classes route
Route::get('/classes', 'ClassController@index')->name("ShowAllCreateClass");
Route::get('/classes/create', 'ClassController@create')->name("ClassesCreate");
Route::post('/classes/store', 'ClassController@store')->name("StoreClassesCreate");
Route::get('/classes/{id}/edit', 'ClassController@edit')->name("EditClassesCreate");
// 1. problem for editing, due i use department in prof_dept so when id more than (6). it will response error
Route::post('/classes/update/{id}','ClassController@update')->name("UpdateClassCreate");
Route::post('/classes/delete/{id}','ClassController@destroy')->name("DeleteClassesCreate");


// Route for Schedule
Route::get('/schedules','Assigned_RoomController@index')->name('room.schedule');
Route::get('/schedules/{time}','Assigned_RoomController@create');
Route::post('/schedules','Assigned_RoomController@store')->name('StoreAssignedClass');

Route::resource('faculties', 'FacultyController');
Route::resource('departments', 'DepartmentController');
Route::get('departments/create/{id}', 'DepartmentController@create');
Route::resource('rooms', 'RoomController');
Route::get('rooms/create/{id}', 'RoomController@create');
Route::resource('subjects', 'SubjectController');
Route::resource('professors', 'ProfessorController');


//Building
Route::resource('buildings', 'BuildingController');
//Floor
Route::resource('floors', 'FloorController', ['except' => ['create']]);
Route::get('building/{building_id}/floors/create', 'FloorController@create')->name('floors.create');
//Room
Route::resource('rooms', 'RoomController', ['except' => ['create']]);
Route::get('floor/{floor_id}/rooms/create', 'RoomController@create')->name('rooms.create');


Route::get('/home', 'HomeController@index')->name('home');
