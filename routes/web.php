<?php

use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/layout/posts', [postController::class, 'index']);
