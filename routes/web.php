<?php

use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("project",[ProjectsController::class,"Project"])->name('home');
Route::get('about-me', [AboutMeController::class, 'index'])->name('about.me');
