<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CursusController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\DashboardController;
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
Route::get('/cursussen', [CursusController::class, 'index'])->name('cursussen');
Route::get('/cursussen/{id}', [CursusController::class, 'showcursus'])->name('cursus.showmore');

# FORMS
Route::get('/contact', [ContactController::class, 'get'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.post');

# AUTH
Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'get'])->name('dashboard');
    
    Route::get('/dashboard/contact', [ContactController::class, 'dashboard'])->name('contact.dash');
    Route::put('/dashboard/contact/{id}', [ContactController::class, 'treated'])->name('contact.treated');
    


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

    //Cursussen
    Route::get('/dashboard/cursussen', [CursusController::class, 'get'])->name('cursus.get');
    Route::post('/dashboard/cursussen', [CursusController::class, 'store'])->name('cursus.store');
    Route::get('/dashboard/cursussen/edit/{id}', [CursusController::class, 'edit'])->name('cursus.edit');
    Route::post('/dashboard/cursussen/update/{id}', [CursusController::class, 'update'])->name('cursus.update');
    Route::get('/dashboard/cursussen/editfoto/{id}', [CursusController::class, 'editfoto'])->name('cursus.editphoto');
    Route::post('/dashboard/cursussen/updatefoto/{id}', [CursusController::class, 'updatefoto'])->name('cursus.updatefoto');
    Route::post('/dashboard/cursussen/delete/{id}', [CursusController::class, 'destroy'])->name('cursus.delete');

    #AUTH
    Route::put('password', [PasswordController::class, 'update'])->name('password.update');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});
