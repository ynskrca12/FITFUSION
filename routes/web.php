<?php

use App\Http\Controllers\WorkoutsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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

Route::get('/register',[AuthController::class, 'register'])->name('register');
Route::post('/registerPost',[AuthController::class, 'registerPost'])->name('registerPost');

Route::get('/login',[AuthController::class, 'login'])->name('login');
 Route::post('/login',[AuthController::class, 'loginPost'])->name('loginPost');

Route::get('/logout',[AuthController::class, 'logout'])->name('logout');

Route::get('kullanici_bilgileri',[UserController::class, 'kullanici_bilgileri'])->name('kullanici_bilgileri');
Route::get('kullanici_bilgileri_duzenle/{id}',[UserController::class, 'kullanici_bilgileri_duzenle'])->name('kullanici_bilgileri_duzenle');

Route::post('kullanici_bilgileri_duzenle_post',[UserController::class,'kullanici_bilgileri_duzenle_post'])->name('kullanici_bilgileri_duzenle_post');

Route::get('my_workouts',[WorkoutsController::class,'my_workouts'])->name('my_workouts');
Route::get('add_my_workouts',[WorkoutsController::class,'add_my_workouts'])->name('add_my_workouts');
Route::get('add_post_my_workouts',[WorkoutsController::class,'add_post_my_workouts'])->name('add_post_my_workouts');
