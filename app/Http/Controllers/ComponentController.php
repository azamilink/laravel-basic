<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


# 2 Component, Props and Passing Data
class ComponentController extends Controller
{
    public function index()
    {
        $fruits = ['Manggo', 'Orange', 'Banana', 'Apple', 'Pineapple'];
        return view('component', compact('fruits'));
    }
}
