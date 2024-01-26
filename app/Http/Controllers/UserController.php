<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // 4. View
    public function index()
    {
        $name = 'Jenifer';
        $users = array(
            "name" => "Smith Jhon",
            "email" => "smjhon@gmail.com",
            "phone" => "12345678"
        );

        return view('user', compact('name', 'users'));
    }
}