<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[PostController::class, 'index'])->name('post.index');

Route::get('/blog/create',[PostController::class, 'create'])->name('post.create');

Route::post('/create',[PostController::class, 'store'])->name('post.store');

Route::get('/blog/{post}', [PostController::class, 'show'])->name('post.show');

Route::get('/blog/{post}/edit',[PostController::class, 'edit'])->name('post.edit');

Route::patch('/update/{post}',[PostController::class, 'update'])->name('post.update');

Route::delete('/blog/{post}', [PostController::class, 'destroy'])->name('post.delete');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
