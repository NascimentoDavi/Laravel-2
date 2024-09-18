<?php

use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Forum\ForumController;
use Illuminate\Support\Facades\Route;

// Forum development
Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');

Route::get('/contact', [SiteController::class, 'contact'])->name('contact.contact');

Route::get('/', function () {
    return view('welcome');
}); 
