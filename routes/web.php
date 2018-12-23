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
    return view('kkk');
});

Auth::routes();
Route::get('/homee', 'HomeController@index')->name('home');

Route::get('/campus','MyController@home');
Route::get('/demo','MyController@demo');

///Admin
Route::post('/adminLogIn','AdminController@login');
Route::get('/adminHome','AdminController@viewHome');
Route::get('/student','AdminController@addStudent');
Route::get('/addteacher','AdminController@addTeacher');
Route::post('postStudent','StudentController@store');
Route::post('postTeacher','AdminController@store');
Route::post('/searchStudent','StudentController@findStudent');
Route::get('/deleteStudent/{id}','StudentController@delete');
Route::get('/deleteTeacher/{id}','AdminController@deleteTeacher');
Route::post('/updateStudent','StudentController@update');
Route::post('/updateTeacher','AdminController@updateTeacher');
Route::get('/super','AdminController@adminLogin');
Route::get('/searchStudent','MyController@searchStudent');
Route::get('/viewTeachers','AdminController@viewTeachers');
Route::get('/teacherDetails/{id}','AdminController@detailsTeacher');
Route::get('/adminLogOut','AdminController@adminLogOut');

//Teacher
Route::get('/teacherLoginForm','TeacherController@teacherLoginForm');
Route::post('/teacherLogin','TeacherController@login');
Route::get('/teacherHome','TeacherController@index');
Route::get('/setQuestions','TeacherController@setQuestions');
Route::post('/postQuestion','TeacherController@postQuestion');
Route::post('/postSubmitQuestion','TeacherController@postSubmitQuestion');
Route::post('/startExam','TeacherController@startExam');
Route::get('/accurecy','TeacherController@accurecy');
Route::get('/studentResult','TeacherController@studentResult');
Route::get('/profile','TeacherController@profileInfo');
Route::get('/logOut','TeacherController@logOut');



//Student

Route::get('/registration','StudentController@register');
Route::get('/exam','StudentController@exam');
Route::post('/postRegister','StudentController@postRegister');
Route::post('/postLogin','StudentController@postLogin');
Route::post('/postAns','StudentController@postAns');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
