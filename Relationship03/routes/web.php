<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user',[UserController::class, 'index']);
Route::get('/profile',[ProfileController::class, 'index']);
Route::get('/post',[PostController::class, 'index']);
Route::get('/student',[StudentController::class, 'index']);
Route::get('/course',[CourseController::class, 'index']);