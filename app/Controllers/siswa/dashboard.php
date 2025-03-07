<?php

namespace App\Controllers\siswa; // Sesuai dengan foldernya

use App\Controllers\BaseController;

class dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Ujian | Dashboard',
            'active_page' => 'dashboard' // Tambahkan ini
        ];

        return view('siswa/dashboard', $data);
    }
}
