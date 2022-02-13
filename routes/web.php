<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\NordwaveController;
use App\Http\Controllers\CapgeminiController;
use App\Http\Controllers\CentricController;
use App\Http\Controllers\IngController;
use App\Http\Controllers\BolController;
use App\Http\Controllers\MacawController;
use App\Http\Controllers\YoursurpriseController;
use App\Http\Controllers\VeracodeController;
use App\Http\Controllers\MotivationController;
use App\Http\Controllers\FAQController;


// Routes
Route::get('/', [WelcomeController::class, 'show']);

Route::get('/profile', [ProfileController::class, 'show']);

Route::get('/dashboard', [DashboardController::class, 'show']);

Route::get('/profession', [ProfessionController::class, 'show']);

Route::get('/nordwave', [NordwaveController::class, 'show']);

Route::get('/capgemini', [CapgeminiController::class, 'show']);

Route::get('/centric', [CentricController::class, 'show']);

Route::get('/ing', [IngController::class, 'show']);

Route::get('/bol', [BolController::class, 'show']);

Route::get('/macaw', [MacawController::class, 'show']);

Route::get('/yoursurprise', [YoursurpriseController::class, 'show']);

Route::get('/veracode', [VeracodeController::class, 'show']);

Route::get('/motivation', [MotivationController::class, 'show']);

Route::get('/faq', [FAQController::class, 'show']);


Route::get('/posts/{post}', [PostController::class, 'show']);
