<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JasaController;
use App\Http\Controllers\KursusController;


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

Route::get('/', function () {
    return view('website/homepage');
});

Route::get('/pusat-pelatihan-digital-marketing', function () {
    return view('website/pusat');
});

Route::get('/form-pusat-pelatihan-digital-marketing', function () {
    return view('website/formkursus');
});

Route::get('/digital-marketing-agency', function () {
    return view('website/digital');
});

Route::get('/form-digital-marketing-agency', function () {
    return view('website/formdigital');
});


Route::get('/jasa' , [JasaController::class , 'index']);
Route::get ('/create-jasa' , [JasaController::class , 'create'] );
Route::post('save-jasa', [JasaController::class, 'store'])->name('simpan');
Route::delete('/delete-jasa/{id}', [JasaController::class, 'destroy']);


Route::get('/kursus', [KursusController::class , 'index']);
Route::get('/create-kursus', [KursusController::class , 'create']);
Route::post('/save-kursus', [KursusController::class , 'store'])->name('simpan-kursus');
Route::delete('/delete-kursus/{id}', [KursusController::class, 'destroy']);
