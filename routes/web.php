<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\PasswordController;

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


Route::get('/', [PagesController::class, 'index'])->name('index');


Route::get('/nieuws', [NewsController::class, 'index'])->name('news');

# FORMS
Route::get('/contact', [ContactController::class, 'get'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.post');

Route::get('/dashboard', function () {
    return view('content.admin.dashboard');
})->middleware(['auth'])->name('dashboard');

# AUTH
Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store']);

Route::middleware('auth')->group(function () {
    # Profiel bewerken
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    //NEWS
    Route::get('/dashboard/news', [NewsController::class, 'get'])->name('news.get');
    Route::post('/dashboard/news', [NewsController::class, 'store'])->name('news.store');
    Route::get('/dashboard/news/edit/{id}', [NewsController::class, 'edit'])->name('news.edit');
    Route::post('/dashboard/news/update/{id}', [NewsController::class, 'update'])->name('news.update');
    Route::get('/dashboard/news/editfoto/{id}', [NewsController::class, 'editfoto'])->name('news.editphoto');
    Route::post('/dashboard/news/updatefoto/{id}', [NewsController::class, 'updatefoto'])->name('news.updatefoto');
    Route::post('/dashboard/news/delete/{id}', [NewsController::class, 'destroy'])->name('news.delete');

    #AUTH
    Route::put('password', [PasswordController::class, 'update'])->name('password.update');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});
