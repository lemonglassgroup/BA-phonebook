<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::middleware(['auth'])->group(function (){
    Route::resource('contacts', ContactController::class);
    Route::get('contacts/{contact}/share', [ContactController::class, 'getShareForm'])->name('contact.share-form');
    Route::post('contacts/{contact}/share', [ContactController::class, 'share'])->name('contact.share');
});

require __DIR__ . '/auth.php';
