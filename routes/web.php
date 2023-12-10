<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ResiController;
use App\Http\Controllers\ServiceController;
use Faker\Guesser\Name;
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
    return view('auth/login');
});

Route::get('/register_teknisi', [AuthController::class,'registerTeknisi'])->name('view.daftarteknisi');
Route::post('/register_teknisi/store',[AuthController::class,'storeTeknisi'])->name('teknisi.storedaftar');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [AuthController::class, 'redirectUser'])->name('dashboard');
});
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('admin.logout')->middleware('auth');

Route::group(['prefix' => 'user', 'middleware' => [
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
]], function () {
    Route::get('/home',  function () {
        return view('user.dashboard');
    })->name('user.home');
    Route::get('/promise', function () {
        return view('user.promise');
    })->name('promise');
    Route::get('/resi/{id}',[ResiController::class,'show'])->name('cekResi');
    Route::post('/store/promise', [ServiceController::class,'store'])->name('promise.store');
    Route::get('/tabelresi', [ResiController::class,'index'])->name('tabelresi.index');
    
});
Route::group(['prefix' => 'admin', 'middleware' => [
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
]], function () {
    Route::get('/index', function () {
        return view('admin.dashboard');
    })->name('admin_dashboard');
  
    
});

Route::group(['prefix' => 'teknisi', 'middleware' => [
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
]], function () {
    Route::get('/rumah', function () {
        return view('teknisi.home');
    })->name('home_teknisi');
  
    
});