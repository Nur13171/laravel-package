<?php

use Illuminate\Support\Facades\Route;
use Nur13171\FirstPackage\Facades\FirstPackage;
use Nur13171\FirstPackage\Http\Controllers\UserController;

 Route::get('home',[UserController::class,'home']);

 Route::get('register',[UserController::class,'index']);
 Route::get('register',[UserController::class,'index'])->name('register');
 Route::get('login',[UserController::class,'Userlogin'])->name('user.login');
 Route::post('store',[UserController::class,'UserStore'])->name('user.store');