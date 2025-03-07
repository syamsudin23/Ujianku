<?php

namespace App\Controllers\siswa; // Sesuai dengan foldernya

use App\Controllers\BaseController;

class JadwalUjian extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Ujian | Jadwal Ujian',
            'active_page' => 'jadwal-ujian' // Tambahkan ini
        ];

        return view('siswa/jadwalujian', $data);
    }
}
