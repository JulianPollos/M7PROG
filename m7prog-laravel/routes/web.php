<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Http\Controllers\ProjectController;


Route::get('/about', [ \App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/detailpage', [ \App\Http\Controllers\DetailPageController::class, 'index'])->name('detailpage');
Route::get('/mainpage', [ \App\Http\Controllers\MainPageController::class, 'index'])->name('mainpage');
Route::get('/welcome', [ \App\Http\Controllers\WelcomepageController::class, 'index'])->name('welcome');
Route::get('/projects/add', [ProjectController::class, 'add'])->name('project.add');
Route::get('/projects/index', [ProjectController::class, 'index'])->name('project.index');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();


