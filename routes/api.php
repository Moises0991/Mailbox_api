<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\sign_inController;
use App\Http\Controllers\Api\sign_upController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ReportController;

Route::post('sign_in', [sign_inController::class, 'auth']);
Route::post('sign_up', [sign_upController::class, 'create']);


Route::group(['middleware' => ['auth:sanctum']], function() {
    
    Route::group(['prefix' => 'student'], function() {
        Route::get('list', [StudentController::class, 'list']);
    });
    
    Route::group(['prefix' => 'admin'], function() {
        Route::get('list', [AdminController::class, 'list']);
    });

    Route::group(['prefix' => 'report'], function() {
        Route::get('list', [ReportController::class, 'list']);
        Route::post('show', [ReportController::class, 'show']);
        Route::post('create', [ReportController::class, 'create']);
    });

    Route::group(['prefix' => 'news'], function() {
        Route::get('list', [NewsController::class, 'list']);
        Route::post('show', [NewsController::class, 'show']);
        Route::post('create', [NewsController::class, 'create']);
    });
    
    Route::group(['prefix' => 'comment'], function() {
        Route::get('list', [CommentController::class, 'list']);
        Route::post('show', [CommentController::class, 'show']);
        Route::post('create', [CommentController::class, 'create']);
    });

    Route::get('profile', [sign_inController::class, 'profile']);
    Route::get('logout', [sign_inController::class, 'logout']);
});


// authentification with google
// Route::get('/login-google', [loginController::class, 'redirectToGoogle'])->name('login-google');
// Route::get('/google-callback', [loginController::class, 'callbackFromGoogle'])->name('google-callback');