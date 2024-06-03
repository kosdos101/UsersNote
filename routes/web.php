<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;
use App\Mail\BasicEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('/note',NoteController::class);

Route::get('/mail',function(){
    Mail::to('pajex23007@fresec.com')->send(new BasicEmail);
    return 'Email was send';
});

Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::post('/contact/send',[ContactController::class,'store'])->name('contact.send');