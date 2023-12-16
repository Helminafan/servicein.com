<?php

use App\Http\Controllers\AdminCotroller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ResiController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeknisiController;
use App\Http\Controllers\UserController;
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
Route::get('/sewa', function () {
    return view('user.transaksi');
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
    Route::get('/home', [ UserController::class,'index'])->name('user.home');
    Route::get('/promise/{id}', [ServiceController::class,'show'])->name('promise');
    Route::get('/tabelresi/{id}',[ResiController::class,'show'])->name('cekResi');
    Route::post('/store/promise', [ServiceController::class,'store'])->name('promise.store');
    Route::get('/tabelresi', [ResiController::class,'index'])->name('tabelresi.index');
    Route::get('/konfirmasi_penjemputan/{id}', [UserController::class,'konfirmasiPenjemputan'])->name('user.konfirmasi_penjemputan');
    Route::get('/pembayaran/{id}', [UserController::class,'pembayaran'])->name('user.pembayaran');
    Route::post('/pembayaran_store/{id}', [UserController::class,'storePembayaran'])->name('user.store_pembayaran');
});
Route::group(['prefix' => 'admin', 'middleware' => [
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
]], function () {
    Route::get('/index', function () {
        return view('admin.dashboard');
    })->name('admin_dashboard');
    Route::get('/service', [AdminCotroller::class,'service'])->name('admin.service');

    Route::get('/menu', [MenuController::class, 'index'])->name('menu.view');
    Route::get('/menu_add', [MenuController::class, 'create'])->name('menu.add');
    Route::post('/menu_store', [MenuController::class, 'store'])->name('menu.store');
    Route::get('/menu_edit/{id}', [MenuController::class, 'edit'])->name('menu.edit');
    Route::post('/menu_update/{id}', [MenuController::class, 'update'])->name('menu.update');
    Route::delete('/delete/{id}', [MenuController::class, 'destroy'])->name('menu.delete');

    Route::get('/teknisi', [AdminCotroller::class,'teknisi'])->name('admin.teknisi');
    Route::get('/customer', [AdminCotroller::class,'customer'])->name('admin.customer');
    Route::get('/view_ijazah/{id}', [UserController::class,'view_ijazah'])->name('admin.view_ijazah');
    Route::get('/view_sertifikat/{id}', [UserController::class,'view_sertifikat'])->name('admin.view_sertifikat');
    Route::get('/update_konfirmasi/{id}', [UserController::class,'updateKonfirmasi'])->name('admin.update_konfirmasi');
    Route::get('/atur_teknisi/{id}', [AdminCotroller::class,'aturTeknisi'])->name('admin.aturteknisi');
    Route::get('service/bukti_pembayaran/{id}', [AdminCotroller::class,'buktiPembayaran'])->name('admin.bukti_pembayaran');
    Route::post('/store/atur_teknisi', [AdminCotroller::class,'aturTeknisiStore'])->name('admin.aturteknisistore');
    Route::post('/konfirmasipembayaran/{id}',[AdminCotroller::class,'konfirmasiPembayaran'])->name('admin.konfirmasipembayaran');
});

Route::group(['prefix' => 'teknisi', 'middleware' => [
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
]], function () {
    Route::get('/rumah', [TeknisiController::class,'index'])->name('home_teknisi');
    Route::get('/terima/{id}', [TeknisiController::class,'terima'])->name('teknisi.terima');
    Route::get('/transaksi/{id}', [TeknisiController::class,'editPembayaran'])->name('teknisi.editPembayaran');
    Route::post('/transaksi_store/{id}', [TeknisiController::class,'tambahPembayaran'])->name('teknisi.tambahPembayaran');
  
});