<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewslettersController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\InstagramController;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\TerminalController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthManager;

Route::get('/',[IndexController::class,'index']);
Route::get('/newsletters',[NewslettersController::class,'save']);
Route::post('/newsletters',[NewslettersController::class,'save']);
Route::view('about', 'about');
// blogy
Route::get('blog',[BlogController::class,'index']);
Route::get('blog-post',[BlogController::class,'show']);
// instagaram
Route::any('insta',[InstagramController::class,'index']);
Route::any('insta-post',[InstagramController::class,'show']);
// user
Route::view('sign-in', 'manager.user.sign-in');
Route::post('sign-in-create',[UserController::class , 'create'] );
Route::view('log-in', 'manager.user.log-in');
Route::post('log-in-check',[UserController::class , 'check'] );
Route::view('bloke', 'manager.action');
Route ::view('master','layouts.master');
Route::any('education', [EducationController::class,'index']);
// manager
Route::middleware([AuthManager::class])->group(function () {
    Route::get('manager', [UserController::class,'dashbord']);
    // blog
    Route::view('blog-manager','manager.blog-manager');
    Route::view('write-blog','manager.blog-manager.write-blog');
    Route::any('edite-blog', [BlogController::class,'edit']);
    Route::any('edite-update-blog', [BlogController::class,'update']);
    Route::any('delete-list-blog', [BlogController::class,'destroy']);
    Route::any('save-blog', [BlogController::class,'store']);
    // instagaram
    Route::view('instagram-manager','manager.instagram-manager');
    Route::view('write-instagram',  'manager.instagram-manager.write-instagram');
    Route::any('save-insta', [InstagramController::class,'store']);
    Route::any('edite-instagram', [InstagramController::class,'edit']);
    Route::any('edite-update-instagram', [InstagramController::class,'update']);
    Route::any('delete-list-instagram', [InstagramController::class,'destroy']);

    // profile
    Route::any('profile-edit', [UserController::class , 'edit']);
    Route::view('profile', 'manager.profile');
    Route::get('log-out', [UserController::class , 'out']);

    // terminal
    Route::any('terminal', [TerminalController::class,'setup']);
});

