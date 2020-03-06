<?php

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'] , function () {
	Route::get('/', 'DashboardController@index')->name('dashboard');
	Route::resource('faculty', 'FacultyController');
	Route::get('/faculty', 'FacultyController@index')->name('admin.faculty');
	Route::resource('feedback', 'FeedbackController');
	Route::resource('student-feedback', 'StudentFeedbackController');
});

Route::group(['namespace' => 'Student', 'prefix' => 'student'] , function () {
	Route::get('/', 'DashboardController@index')->name('dashboard1');
	Route::resource('student', 'StudentController');
	Route::resource('studentfeedback', 'StudentFeedbackController');
	Route::get('/password', 'StudentController@password')->name('password');
	Route::get('/register', 'RegistrationController@index')->name('register');

});

Route::get('/', 'HomeController@index')->name('index');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('admin')->group(function() {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
});
