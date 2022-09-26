<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('Home/index.php');
    }

    public function about()
    {
        echo "About";
    }
}
