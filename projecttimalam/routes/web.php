<?php
use App\Http\Controllers\Biodatacontroller;

use App\Models\Prodi;
use App\Models\Matakuliah;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/biodata', [Biodatacontroller::class, 'index']);
Route::post('/biodata', [Biodatacontroller::class, 'proses']);
Route::post('/mahasiswa', [Biodatacontroller::class, 'proses2']);
Route::get('/mahasiswa', [BiodataController::class, 'mahasiswa']);
Route::get('/matakuliah/create/{x}/{y}', function ($nama,$sks) {
    Matakuliah::create([
        'nama' => $nama,
        'sks' => $sks
    ]);
    return "Berhasil menambah data!";
});

Route::get('matakuliah/lihat', function () {
    $matakuliah = Matakuliah::all();
    foreach ($matakuliah as $data) {
        echo $data->id." : ";
        echo $data->nama." ";
        echo $data->sks;
        echo "<hr>";
    }
});

Route::get('prodi/create/{x}', function ($nama) {
    Prodi::create([
        'nama' => $nama
    ]);
    return "Berhasil menambah data!";
});

Route::get('prodi/lihat', function () {
    $prodi = Prodi::all();
    foreach ($prodi as $data) {
        echo $data->id." : ";
        echo $data->nama." ";
        echo "<hr>";
    }
});

//mvc = model view controller
