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

Route::get('/',[JobController::class,"viewpersonal"]);
Route::post('/',[JobController::class,"storepersonal"]);

Route::get('/contact',[JobController::class,"viewcontact"]);
Route::post('/contact',[JobController::class,"storecontact"]);



Route::get('/academic',[JobController::class,"viewacademic"]);
Route::post('/academic',[JobController::class,"storeacademic"]);  



Route::get('/temporal',[JobController::class,"viewtemporal"]);
Route::post('/temporal',[JobController::class,"storetemporal"]);


Route::get('/computer',[JobController::class,"viewcomputerskills"]);
Route::post('/computer', [JobController::class,"storecomputerskills"]);


Route::get('/experience',[JobController::class,"viewexperience"]);
Route::post('/experience', [JobController::class,"storeexperience"]);

// Route::get('/cv', function () {
//     return view('cv');
// });

