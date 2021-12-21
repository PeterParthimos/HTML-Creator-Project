<?php

use App\Http\Controllers\ClientRequestController;
use App\Http\Controllers\FinalResponseController;
use App\Models\ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/request', [ClientRequestController::class, 'getAll']);
Route::post('/request', [ClientRequestController::class, 'newRequest']);

Route::get('/responses', [FinalResponseController::class, 'getAll']);
