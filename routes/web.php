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

// Teacher Routes
Route::group(['prefix' => 'teachers'], function () {
	Route::get('/{id?}', [
	    'uses' => 'TeacherController@getAllTeachers',
	    'as' => 'teacher.index'
	]);

	Route::get('/teachers/create', [
	    'uses' => 'TeacherController@create',
	    'as' => 'teacher.create'
	]);

	Route::post('store', [
	    'uses' => 'TeacherController@postStoreTeacher',
	    'as' => 'teacher.store'
	]);

	Route::get('/teachers/{id}/edit', [
	    'uses' => 'TeacherController@edit',
	    'as' => 'teacher.edit'
	]);

	Route::patch('{id}/update', [
	    'uses' => 'TeacherController@postUpdateTeacher',
	    'as' => 'teacher.update'
	]);

	Route::get('{id}/delete', [
	    'uses' => 'TeacherController@postDeleteTeacher',
	    'as' => 'teacher.delete'
	]);
});


