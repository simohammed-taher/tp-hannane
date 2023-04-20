<?php

use App\Http\Controllers\EleveController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


// Route::get('/', [PagesController::class, 'home']);
// Route::get('/student', [PagesController::class, 'student']);
// Route::get('/contact', [PagesController::class, 'contact']);

// Route::get('/', [ EleveController::class, 'index']);
// Route::get('/create', [EleveController::class, 'create']);
// Route::post('/create', [EleveController::class, 'store']);

Route::resource('/eleve', EleveController::class);

