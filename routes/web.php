<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Models\Academic;
use App\Models\Computer;
use App\Models\Contact;
use App\Models\JobExperience;
use App\Models\Personal;
use App\Models\Proficiency;
use App\Models\Temporal;

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
Route::get('/proficiency',[JobController::class,"viewproficiency"]);
Route::post('/proficiency',[JobController::class,"getproficiency"]);


Route::get('/computer',[JobController::class,"viewcomputerskills"]);
Route::post('/computer', [JobController::class,"getcomputerskills"]);


Route::get('/experience', function () {
    return view('jobExperience');
});
Route::get('/cv', function () {
    return view('cv');
});

