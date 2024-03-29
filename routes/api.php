<?php

use App\Http\Controllers\CompetitorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/competitors', [CompetitorController::class, 'index']);
Route::post('/newcompetitor', [CompetitorController::class, 'store']);
Route::delete('/competitor/{id}', [CompetitorController::class, 'destroy']);
