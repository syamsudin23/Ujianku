<?php

namespace App\Controllers\siswa; // Sesuai dengan foldernya

use App\Controllers\BaseController;

class dashboard extends BaseController
{
    public function index()
    {
        return view('siswa/dashboard');
    }
}
