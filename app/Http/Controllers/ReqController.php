<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ReqController extends Controller
{
    public function index(Request $request)
    {
        $req = [
            'method' => $request->method(),
            'path' => $request->path(),
            'url' => $request->url(),
            'fullUrl' => $request->fullUrl(),
        ];

        return $req;
    }

    public function login()
    {
        return view('login');
    }

    public function submitLogin(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:12',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        return "Email : $email" . '<br>' . "Password : $password";
    }
}