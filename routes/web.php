<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\EmployeeSkillController;
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
    return view('home');
});
Route::resource('employees', EmployeeController::class);
Route::resource('positions', PositionController::class);
Route::resource('skills', SkillController::class);
Route::resource('employeeSkills', EmployeeSkillController::class);