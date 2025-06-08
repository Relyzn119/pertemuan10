<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Biodatacontroller extends Controller
{
    //model untuk database dan perintah lainnya
    //view untuk tampilan
    //controller untuk mengatur perintah

    public function index()
    {
        return view('biodata');
    }
    public function proses(Request $request)
    {
        //untuk debugging
        // dd($request->all());
        $request->validate(
            [
                'nama' => 'required',
                'gender' => 'required',
                'email' => 'required|email:dns',
                'ponsel' => 'required'
            ],
            [
                'nama.required' => 'Nama harus diisi',
                'gender.required' => 'Jenis Kelamin harus diisi',
                'email.email' => 'Email harus diisi',
                'ponsel.required' => 'No HP harus diisi'
            ]
        );
        echo "Nama : $request->nama";
        echo "<br>";
        echo "Jenis Kelamin : $request->gender";
        echo "<br>";
        echo "Email : $request->email";
        echo "<br>";
        echo "No HP : $request->ponsel";
    }
    public function proses2(Request $request)
    {
        echo "Nama : $request->nama <br>";
        echo "Jenis Kelamin : $request->gender <br>";
        echo "Email : $request->email <br>";
        echo "Nomor Ponsel : $request->ponsel <br>";
    }
    public function mahasiswa()
    {
        return view('mahasiswa');
    }
}
