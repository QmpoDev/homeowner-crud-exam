<?php

use App\Http\Controllers\HomeownerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeownerController::class, 'index']);
Route::get('/add', [HomeownerController::class, 'add']);
Route::post('/store', [HomeownerController::class, 'store']);
Route::get('/edit/{id}', [HomeownerController::class, 'edit']);
Route::put('/update/{id}', [HomeownerController::class, 'update']);
Route::get('/delete_confirm/{id}', [HomeownerController::class, 'delete_confirm']);
Route::post('/delete/{id}', [HomeownerController::class, 'delete']);
Route::get('/success_message', [HomeownerController::class, 'check_success']);
