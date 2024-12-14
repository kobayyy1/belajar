<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\OtherController;
use Illuminate\Support\Facades\Route;



Route::get('/', [IndexController::class,'home'])->name('home');
Route::get('home',[IndexController::class, 'home'])->name('home');
Route::get('about',[IndexController::class, 'about'])->name('about');
Route::get('other',[OtherController::class, 'other'])->name('other');
Route::get('sosmed',[OtherController::class, 'sosmed'])->name('sosmed');

