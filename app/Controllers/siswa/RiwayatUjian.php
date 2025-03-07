<?php

namespace App\Controllers\siswa; // Sesuai dengan foldernya

use App\Controllers\BaseController;

class RiwayatUjian extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Ujian | Riwayat-Ujian',
            'active_page' => 'riwayat-ujian' // Tambahkan ini
        ];

        return view('siswa/riwayatujian', $data);
    }
}
