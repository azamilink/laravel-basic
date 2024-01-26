<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// 3. Controller
class HomeController extends Controller
{
    public function index($name = null)
    {
        return 'Hi from HomeController, name : ' . $name;
    }
}