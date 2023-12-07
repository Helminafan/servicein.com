<?php

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
Route::get('/log', function () {
    return view('auth/log');
});
Route::get('/test', function () {
    return view('user.tes');
});




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::group(['prefix' => 'user', 'middleware' => [
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
]], function () {
    Route::get('/promise', function () {
        return view('user.promise');
    })->name('promise');
    Route::get('/resi/{id}',[ResiController::class,'show'])->name('cekResi');
    Route::post('/store/promise', [ServiceController::class,'store'])->name('promise.store');
    Route::get('/tabelresi', [ResiController::class,'index'])->name('tabelresi.index');
    
});