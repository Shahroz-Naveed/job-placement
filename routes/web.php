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
    return view('personal');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/academic', function () {
    return view('academic');
});   
Route::get('/temporal', function () {
    return view('temporal');
});
Route::get('/proficiency', function () {
    return view('proficiency');
});
Route::get('/computer', function () {
    return view('computer');
});
Route::get('/experience', function () {
    return view('jobExperience');
});
Route::get('/cv', function () {
    return view('cv');
});

