<?php

use App\Models\Course;
use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/course/users', [CourseController::class, 'getAllUsers'])->name('getAllUsers');

Route::get('/user-profiles', [ProfileController::class, 'showAllUsers'])->name('getAllUsers');

Route::get('/user/{id}/profile', [UserController::class, 'showProfile'])->name('getAllProfile');

Route::get('/user/{id}/courses', [UserController::class, 'getAllCourses'])->name('getAllCourses');
