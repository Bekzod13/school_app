<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->group(function (){
    Route::resources([
        'users' => \App\Http\Controllers\UserController::class
    ]);
});
