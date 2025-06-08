<?php
use App\Http\Controllers\Biodatacontroller;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/biodata', [Biodatacontroller::class, 'index']);
Route::post('/biodata', [Biodatacontroller::class, 'proses']);
Route::post('/mahasiswa', [Biodatacontroller::class, 'proses2']);
Route::get('/mahasiswa', [BiodataController::class, 'mahasiswa']);
//mvc = model view controller
