<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('articles', ArticleController::class);
Route::resource('newsletters', NewsletterController::class);
Route::resource('members', MemberController::class);

Route::middleware('admin')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});