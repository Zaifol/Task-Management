<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    public function home()
    {
        return view('layout/header')
        .view('home')
        .view('layout/footer');
    }

    public function login()
    {
        return view('layout/header')
        .view('login')
        .view('layout/footer');
    }
    public function register()
    {
        return view('layout/header')
        .view('sign')
        .view('layout/footer');
    }
    public function profile()
    {
        $data = array();

        $data['nama'] = "MUHAMMAD ZAIFOL BIN ALI AZAHAR";
        $data['username'] = "Zack";
        $data['email'] = "muhdzaifol@gmail.com";
        $data['password'] = "123456";

        return view('layout/header')
        .view('profile', $data)
        .view('layout/footer');
    }

}
