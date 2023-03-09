<?php

use App\Http\Controllers\Api\LinkController;
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

Route::apiResource('links', LinkController::class);
Route::put('links/{link}/toggle-status', [LinkController::class, 'updateStatus']);
