<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectsController;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

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

Route::get("home",[HomeController::class,"Home"])->name('home');
Route::get('about-me', [AboutMeController::class, 'index'])->name('about.me');
Route::get("project",[ProjectsController::class,"Project"])->name('projects');
Route::get("contact",[ContactController::class,"Contact"])->name('contact');