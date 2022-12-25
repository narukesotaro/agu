<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

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
Route::get('/', [CourseController::class, 'index']);
Route::get('/courses/create', [CourseController::class, 'create']);
Route::get('/courses/{course}', [CourseController::class ,'show']);
Route::post('/courses', [CourseController::class, 'store']);
Route::get('/courses/{course}/edit', [CourseController::class, 'edit']);
Route::put('/courses/{course}', [CourseController::class, 'update']);
Route::delete('/courses/{course}', [CourseController::class,'delete']);