@extends('layout.template')
@section('judul', 'Halaman Biodata')
@section('isi')
    <h2>Form Biodata</h2>
    <form action="biodata" method="POST">
        @csrf
        Nama Lengkap : <br>
        <input type="text" name="nama" value="{{ @old('nama') }}">
        @error('nama')
            <br><label style="color:red">{{ $message }}</label>
        @enderror
        <br>
        Jenis Kelamin : <br>
        <select name="gender">
            <option value="">--Pilih--</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        @error('gender')
            <br><label style="color:red">{{ $message }}</label>
        @enderror
        <br>
        Email : <br>
        <input type="text" name="email" value="{{ @old('email') }}">
        @error('email')
            <br><label style="color:red">{{ $message }}</label>
        @enderror
        <br>
        Nomor Ponsel : <br>
        <input type="text" name="ponsel" value="{{ @old('ponsel') }}">
        @error('ponsel')
            <br><label style="color:red">{{ $message }}</label>
        @enderror
        <br>
        <br>
        <button type="submit">Kirim</button>
    </form>
    <a href="/mahasiswa">>>Mahasiswa</a>
@endsection
