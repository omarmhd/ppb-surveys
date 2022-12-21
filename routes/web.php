<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
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


//Route::post('/employee',[\App\Http\Controllers\EmployeeController::class,'store'])->name('employee.store');
Route::resource("/employee",EmployeeController::class);
Route::resource("/users",\App\Http\Controllers\UserController::class);

Route::resource("/sections",\App\Http\Controllers\SectionController::class);
Route::post("/question/{section}",[\App\Http\Controllers\SectionController::class,'storeQuestion'])->name("question.store");

Route::resource("/surveys",\App\Http\Controllers\SurveyController::class);


Route::resource('activated-surveys',\App\Http\Controllers\ActivatedSurveyController::class);




//Route::resource("/employee",EmployeeController::class);
