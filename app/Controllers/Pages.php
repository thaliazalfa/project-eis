<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function index()
    {
        //echo "Hello World Pages!";
        
        //echo view('layout/header', $data);
        return view('pages/home');
        //echo view('layout/footer');
    }


}
