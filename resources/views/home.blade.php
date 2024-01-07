@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Stmik Mardira</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ URL('mahasiswa') }}">Mahasiswa <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL('dosen') }}">Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL('matkul') }}">Matakuliah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL('prodi') }}">Prodi</a>
                </li>
            </ul>
        </div>
    </nav>
@endsection
