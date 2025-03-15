<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Route;

/* - AKSES TANPA AUTH - */
Route::middleware('guest')->group(function(){
    /* - GET - */
    Route::get('/auth/register', function() {
        return view('page.auth.page-register');
    }) -> name('register');
    
    Route::get('/', function() {
        return view('page.auth.page-login');
    }) -> name('login');
    
    /* - POST - */
    Route::post('/register/submit', [AuthController::class, 'register']) -> name('register.submit');
    Route::post('/login/submit', [AuthController::class, 'login']) -> name('login.submit'); 
});

/* - AKSES DENGAN AUTH - */
Route::middleware('auth') -> group(function () {
    /* - GET - */
    Route::get('/home', function() {
        return view('page.main.home');
    }) -> name('home');

    Route::get('/user/admin', function() {
        return view('page.user.page-admin');
    }) -> middleware('role') -> name('user.admin');

    Route::get('/user/users', function() {
        return view('page.user.page-user');
    }) -> middleware('role') -> name('user.users');

    Route::get('/content/upload', function() {
        return view(view: 'page.content.page-upload');
    }) -> middleware('role') -> name('content.upload');
    
    /* - POST - */
    Route::post('/auth/logout', [AuthController::class, 'logout']) -> name('logout'); 
    Route::post('/content/upload/submit', [ContentController::class, 'store']) -> middleware('role') -> name('content.upload.submit');
});


