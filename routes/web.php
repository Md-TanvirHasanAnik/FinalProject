<?php

Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/faculty', 'Auth\LoginController@showFacultyLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/faculty', 'Auth\RegisterController@showFacultyRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/faculty', 'Auth\LoginController@facultyLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/faculty', 'Auth\RegisterController@createFaculty');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin')->middleware('auth:admin');
Route::view('/faculties', 'faculty')->middleware('auth:faculty');
Route::view('/', 't2.index')->name('st');
Route::view('/faculty', 'faculty.index')->name('teacher')->middleware('auth:faculty');


Route::POST('/counseling/create', 'CounselingController@createCounseling' )->name('create.counseling');

