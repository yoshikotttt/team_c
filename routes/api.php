<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\UserController; //追加
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditSentenceController;
use App\Http\Controllers\PersonalityController;
use App\Http\Controllers\freeCommentController;
use App\Http\Controllers\SentenceController;
use App\Http\Controllers\UserSentenceController;
use App\Models\EditSentence;
use App\Models\Sentence;
use App\Models\Personality;
use App\Models\freeComment;
use App\Models\UserSentence;
use App\Models\User;


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



// Route::get('/sentence', [PersonalityController::class, 'index']);
// Route::get('/sentence/{id}', [PersonalityController::class, 'show']);

// Route::apiResource('/front/timeline', RegisteredUserController::class);
// Route::apiResource('/mypage', EditSentenceController::class);
Route::get('users', [UserController::class, 'index']); 
Route::get('personalities', [PersonalityController::class, 'index']); 
Route::get('user_sentences', [UserSentenceController::class, 'index']); 
Route::get('editSentences', [EditSentenceController::class, 'index']); 
Route::get('sentences', [SentenceController::class, 'index']); 
Route::get('/users/{id}', [userController::class, 'show']);
Route::post('edit', [EditSentenceController::class, 'store']);
Route::post('search', [userController::class, 'index']); //追加
//sentence getOne
Route::get('/sentences/{id}', [SentenceController::class, 'show']); 




// Route::apiResource('personalities', PersonalityController::class);