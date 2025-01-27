<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SettingController;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', function () {
    return view('admin.home');
});


#Liens d'administration du site isgemo pour les inscriptions en ligne
Route::get('admin/dashboard',[HomeController::class,'index'])->middleware(['auth','admin']);
Route::get('/admin/settings', [SettingController::class, 'edit'])->name('settings.edit');
Route::post('/admin/settings', [SettingController::class, 'update'])->name('settings.update');

###"Liens des differentes page du site web coté client 

Route::get('/', [AdminController::class, 'show'])->name('home.home');

Route::get('/contact', function () {
    return view('home.contact');
});

Route::get('/about', function () {
    return view('home.about');
});

require __DIR__.'/auth.php';
