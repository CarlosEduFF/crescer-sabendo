<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/donates', function () {
    return view('donates');
});
Route::get('/account', function () {
    return view('account');
});
Route::get('/courses', function () {
    return view('courses');
});
Route::get('/signin', function () {
    return view('signIn');
});
Route::get('/signup', function () {
    return view('signUp');
});
Route::get('/ongs', function () {
    return view('ongs');
});
Route::get('/home', function () {
    return view('index');
});
Route::get('/teacher-profile', function () {
    return view('teacher-profile');
});
Route::get('/teacher-profile-mural', function () {
    return view('teacher-profile-mural');
});
Route::get('/teacher-profile-chat', function () {
    return view('/teacher-profile-chat');
});
Route::get('/response-profile', function () {
    return view('//response-profile');
});
Route::get('/grades', function () {
    return view('/grades');
});
