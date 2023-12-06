<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ResumeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'index']);
Route::get('/resume', [ResumeController::class,'index']);
Route::get('/projects', [ProjectController::class,'index']);
Route::get('/contact', [ContactController::class,'index']);


// Ajax Call Routes
Route::get('/heroData', [HomeController::class,'heroData']);
Route::get('/aboutData', [AboutController::class,'aboutData']);
Route::get('/socialData', [AboutController::class,'socialData']);
Route::get('/projectsData', [ProjectController::class,'projectsData']);
Route::get('/resumeLink', [ResumeController::class,'resumeLink']);
Route::get('/experiencesData', [ResumeController::class,'experiencesData']);
Route::get('/educationData', [ResumeController::class,'educationData']);
Route::get('/skillsData', [ResumeController::class,'skillsData']);
Route::get('/languageData', [ResumeController::class,'languageData']);
Route::post('/contactRequest', [ContactController::class,'contactRequest']);




