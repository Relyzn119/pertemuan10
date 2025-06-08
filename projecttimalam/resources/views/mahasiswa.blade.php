{{-- <div>
    @foreach ($mahasiswa as $data)
    {{$data}}

    @endforeach
</div> --}}

@extends('layout.template')
@section('judul', 'Halaman Mahasiswa')
@section('isi')
    <h3>Ini halaman view mahasiswa</h3>
    <a href="/biodata">Biodata</a>
@endsection
