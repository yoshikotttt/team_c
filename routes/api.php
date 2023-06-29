<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditSentenceController;
use App\Http\Controllers\PersonalityController;
use App\Models\EditSentence;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/', function () {
//     return 'welcome';
// });

// Route::get('/aaa', function () {
//     return 'しんじさんありがとう';
// });

// Route::get('/sentence', [PersonalityController::class, 'index']);
// Route::get('/sentence/{id}', [PersonalityController::class, 'show']);

Route::apiResource('/timeline', RegisteredUserController::class);
Route::apiResource('/mypage', EditSentenceController::class);
