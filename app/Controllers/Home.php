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
}
