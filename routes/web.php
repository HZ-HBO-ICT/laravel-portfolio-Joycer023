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
use App\Http\Controllers\ArticlesController;


// Routes
Route::get('/', [WelcomeController::class, 'show']);

Route::get('/profile', [ProfileController::class, function() {
    return view('profile', [
        'articles' => App\Models\Article::latest()->paginate(2)
    ]);
}
]);

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

Route::get('/posts/{post}', [PostController::class, 'show']);

//faq
Route::get('/faq', [FAQController::class, 'show']);
Route::post('/faq', [FAQController::class, 'store']);
Route::get('/faq/create', [FAQController::class, 'create']);
Route::get('/faq/{faq}/edit', [FAQController::class, 'edit']);
Route::put('/faq/{faq}', [FAQController::class, 'update']);
Route::delete('/faq/{faq}', [FAQController::class, 'destroy']);

// Article page
Route::get('/articles', [ArticlesController::class, function () {
    return view('articles.index', [
        'articles' => App\Models\Article::all()
    ]);
}
]);
Route::post('/articles', [ArticlesController::class, 'store']);
Route::get('/articles/create', [ArticlesController::class, 'create']);
Route::get('/articles/{article}', [ArticlesController::class, 'show']);
Route::get('/articles/{article}/edit', [ArticlesController::class, 'edit']);
Route::put('/articles/{article}', [ArticlesController::class, 'update']);
Route::delete('/articles/{article}', [ArticlesController::class, 'destroy']);
