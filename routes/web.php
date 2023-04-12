<?php

use App\Http\Controllers\EleveController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
Route::get('/', function () {
    return view('welcome');
});

*/

// Route::get('/', [PagesController::class, 'home']);
// Route::get('/student', [PagesController::class, 'student']);
// Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/', [ EleveController::class, 'index']);
Route::get('/create', [EleveController::class, 'create']);
Route::post('/create', [EleveController::class, 'store']);

