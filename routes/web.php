<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\aController;
 
Route::get('/', [aController::class, 'b']);
Route::get('/about', [aController::class, 'about']);
Route::get('/game', [aController::class, 'game']);
Route::get('/contact', [aController::class, 'contact']);
Route::get('/tranner', [aController::class, 'tranner']);

?>