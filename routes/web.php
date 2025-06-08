<?php
use App\Http\Controllers\Biodatacontroller;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return ('Halo guys, ini laravel pertamaku');
});
Route::get('/home', function () {
    return view('index');
});
Route::get('/belajar2/{a}/{b}', function ($a, $b) {
    return "isi parameter 1: $a , isi parameter 2: $b"; ;
});
Route::get('/mahasiswa', function () {
    $data['mahasiswa'] = ["Anto","Budi","Erni","Feri","Gani"];
    return view('mahasiswa',$data);
});

Route::get('/biodata', [Biodatacontroller::class, 'index']);
Route::post('/biodata', [Biodatacontroller::class, 'proses']);
Route::post('/mahasiswa', [Biodatacontroller::class, 'proses2']);
Route::get('/mahasiswa', [BiodataController::class, 'mahasiswa']);
//mvc = model view controller
