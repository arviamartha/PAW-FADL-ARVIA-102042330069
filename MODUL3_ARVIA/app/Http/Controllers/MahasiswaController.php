<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        // - Kirim object tersebut ke view 'profil'
        $mahasiswa = [
        $nama = "Arvia",
        $nim = 102042330069,
        $email = "arviamarthina@gmail.com",
        $jurusan = "Sistem Informasi",
        $fakultas = "Falkultas Rekayasa Industri",
        ];

        return view('profil', compact('nama', 'nim', 'email', 'jurusan', 'fakultas'));
    }
}
