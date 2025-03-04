<?php

namespace App\Controllers;

class c_Auth extends BaseController
{
    public function Login()
    {
        return view('Auth/v_login');
    }
}
