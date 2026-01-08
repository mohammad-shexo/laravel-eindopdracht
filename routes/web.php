<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\FaqCategoryController;
use App\Http\Controllers\Admin\FaqController as AdminFaqController;

/*
|--------------------------------------------------------------------------
| Public routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// Public profiles
Route::get('/profiles/{user}', [ProfileController::class, 'show'])
    ->name('profiles.show');

// Public news
Route::resource('news', NewsController::class)
    ->only(['index', 'show']);

// public faq
Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');

// contact
Route::get('/contact', [ContactController::class, 'create'])
    ->name('contact.create');

Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');


/*
|--------------------------------------------------------------------------
| Authenticated user routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    // Profile edit (ONLY ONE VERSION)
    Route::get('/profile/edit', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');
});

/*
|--------------------------------------------------------------------------
| Admin routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'is_admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Admin users
        Route::resource('users', UserController::class);

        // Admin news
        Route::resource('news', NewsController::class)
            ->except(['index', 'show']);

        // Admin faq and faq category
        Route::resource('faq-categories', FaqCategoryController::class);
        Route::resource('faqs', AdminFaqController::class)
            ->except(['index', 'show']);
    });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
