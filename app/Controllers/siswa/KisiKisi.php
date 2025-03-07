<?php

namespace App\Controllers\siswa; // Sesuai dengan foldernya

use App\Controllers\BaseController;

class KisiKisi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Ujian | Kisi-kisi',
            'active_page' => 'kisi-kisi' // Tambahkan ini
        ];

        return view('siswa/kisikisi', $data);
    }
}
