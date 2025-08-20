<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

//Rotas do site
Route::get("/", [SiteController::class, "index"])->name("site.index");
Route::get("/sobre", [SiteController::class, "sobre"])->name("site.sobre");
Route::get("/categoria", [SiteController::class, "categoria"])->name("site.categoria");
Route::get("/post", [SiteController::class, "post"])->name("site.post");
Route::get("/busca", [SiteController::class, "busca"])->name("site.busca");
Route::get("/contato", [SiteController::class, "contato"])->name("site.contato");


//Rotas do dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
