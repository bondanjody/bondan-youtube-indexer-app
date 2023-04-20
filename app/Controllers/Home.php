<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'BYI : Home'
        ];
        return view('y-index/index', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'BYI : Tambah Data'
        ];
        return view('y-index/tambah', $data);
    }
}
