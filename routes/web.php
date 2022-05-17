<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PpidController;
use App\Http\Controllers\ProdukLayananController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RegulasiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::post('/home/store', [HomeController::class, 'store'])->name('home.store');
Route::get('/profile/profile', [ProfilController::class, 'profil'])->name('front.profil');
Route::get('/profile/visimisi', [ProfilController::class, 'visimisi'])->name('front.visimisi');
Route::get('/profile/tupoksi', [ProfilController::class, 'tupoksi'])->name('front.tupoksi');
Route::get('/profile/struktur', [ProfilController::class, 'struktur'])->name('front.struktur');

Route::get('/produk/headlayanan', [ProdukLayananController::class, 'head_pl'])->name('produk.head');
Route::get('/produk/detaillayanan/{id}', [ProdukLayananController::class, 'detail'])->name('produk.detail');

Route::get('/regulasi', [RegulasiController::class, 'index'])->name('front.regulasi');
Route::get('/regulasi/view_detail/{id}', [RegulasiController::class, 'detail'])->name('front.view_detailregulasi');
Route::get('/regulasi/datatable', [RegulasiController::class, 'datatable'])->name('front.datatables');
Route::get('/regulasi/downloadreg/{id}', [RegulasiController::class, 'getDownload'])->name('front.downloadreg');


Route::get('/berita', [BeritaController::class, 'index'])->name('front.berita');
Route::get('/berita/view_detail/{id}', [BeritaController::class, 'detail'])->name('front.view_detailberita');



Route::get('/galeri', [GaleriController::class, 'index'])->name('front.galeri');

Route::get('/ppid', [PpidController::class, 'index'])->name('front.ppid');
Route::get('/ppid/view_detail/{id}', [PpidController::class, 'detail'])->name('front.view_detaildokumen');
Route::get('/ppid/datatable', [PpidController::class, 'datatable'])->name('front.datatablesppid');
Route::get('/ppid/downloadreg/{id}', [PpidController::class, 'getDownload'])->name('front.downloadppid');
