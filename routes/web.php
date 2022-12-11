<?php


use Illuminate\Support\Facades\Route;
use Nur13171\FirstPackage\Facades\FirstPackage;
use Nur13171\FirstPackage\Http\Controllers\UserController;

 Route::get('dashboard',[UserController::class,'ViewDashboard'])->name('dashboard')->middleware('admin');
 Route::get('register',[UserController::class,'UserRegister'])->name('user.register');
 Route::post('store',[UserController::class,'UserStore'])->name('user.store');
 Route::get('index',[UserController::class,'Index'])->name('index');
 Route::post('login',[UserController::class,'UserLogin'])->name('user.login');
 route::get('logout',[UserController::class,'Logout'])->name('logout');