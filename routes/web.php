<?php

use Illuminate\Support\Facades\Route;

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
	return redirect()->route('view.login.admin');
});

Route::get('register', 'Auth\RegisterController@index')
	->name('view.register');
Route::post('register', 'Auth\RegisterController@register')
	->name('register');


Route::prefix('admin')->group(function() {
	Route::get('login', 'Auth\LoginAdminController@index')
		->name('view.login.admin');
	Route::post('login', 'Auth\LoginAdminController@login')
		->name('login.admin');
});
	
Route::prefix('teacher')->group(function() {
	Route::get('login', 'Auth\LoginTeacherController@index')
		->name('view.login.teacher');
	Route::post('login', 'Auth\LoginTeacherController@login')
		->name('login.teacher');
});
	
Route::prefix('homeroom-teacher')->group(function() {
	Route::get('login', 'Auth\LoginHomeroomTeacherController@index')
		->name('view.login.homeroom.teacher');
	Route::post('login', 'Auth\LoginHomeroomTeacherController@login')
		->name('login.homeroom.teacher');
});

Route::prefix('student')->group(function() {
	Route::get('login', 'Auth\LoginStudentController@index')
		->name('view.login.student');
	Route::post('login', 'Auth\LoginStudentController@login')
		->name('login.student');
});

Route::middleware('check.auth')->group(function() {
	Route::post('logout', 'HomeController@logout')
		->name('logout');
	Route::get('dashboard', 'HomeController@index')
		->name('view.dashboard');
});