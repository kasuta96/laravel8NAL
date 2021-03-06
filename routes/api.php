<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WordController;

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

// create new word
Route::post('/word', [WordController::class, 'create']);

// get list words
Route::get('/words', [WordController::class, 'index']);

// get a word by id
Route::get('/word/{id}', [WordController::class, 'details']);

// delete a word
Route::delete('/word/{id}', [WordController::class, 'delete']);
