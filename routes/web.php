<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//ダッシュボードへのルートは一旦削除
Route::get('/dashboard', function () {
    return view('/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//元のルート   profileが呼ばれると、(functionて書く代わりに)コントローラーのクラスを書いているだけ
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/// 新しく作ったルート 
//after login route
Route::middleware('auth')->group(function () {
    //timeline(after login)
    Route::get('/front/timeline',function(){
        return view('front.timeline');
    });
    //detail(after login)
    Route::get('/front/detail',function(){
        return view('front.detail');
    });
    //logout
    Route::get('/logout',function(){
        return view('front.logout');
    });

    //logout
    Route::get('/front/mypage',function(){
        return view('front.mypage');
    });

    //secret
    Route::get('/front/secret',function(){
        return view('front.secret');
    });

    //edit
    Route::get('/front/edit',function(){
        return view('front.edit');
    });

     //edit
    Route::get('/front/detail_edit',function(){
        return view('front.detail_edit');
    });
    //setting
    //testで記載
    Route::get('/front/test',function(){
        return view('front.test');
    });
  
});

//before login route
//timeline(before login)
Route::get('/front/timeline',function(){
    return view('front.timeline');
});

//detail(before login)
Route::get('/front/detail',function(){
    return view('front.detail');
})->name('setting');





require __DIR__.'/auth.php';
