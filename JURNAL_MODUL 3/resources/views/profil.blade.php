@extends('layouts.app')

@section('title', 'Profil Mahasiswa')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Profil Mahasiswa</h3>
    </div>
    <div class="card-body">
        <!-- Foto Profil -->
        <div class="mb-4 text-center">
            <img src="{{ asset('images/foto.jpeg') }}" 
                alt="Foto Profil" 
                style="width:200px; height:200px; object-fit: cover; border-radius:50%;"
                class="img-thumbnail shadow">
        </div>


        <!-- Tabel Data Mahasiswa -->
        <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <td>{{ $nama }}</td>
            </tr>
            <tr>
                <th>NIM</th>
                <td>{{ $nim }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $email }}</td>
            </tr>
            <tr>
                <th>Jurusan</th>
                <td>{{ $jurusan }}</td>
            </tr>
            <tr>
                <th>Fakultas</th>
                <td>{{ $fakultas }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection
