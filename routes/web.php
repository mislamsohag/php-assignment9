<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;



Route::get('/', function () {
    return view('Home');
});

Route::get('/home', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/project', [PageController::class, 'project']);
Route::get('/contact', [PageController::class, 'contact']);