<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class FluentController extends Controller
{
    # 7. fluent string
    public function index()
    {
        echo '<h1>Fluent String</h1>';

        $slice = Str::of('Welcome to my Youtube Channel')->after('Welcome to');
        echo $slice . '<br>';

        $slice2 = Str::of('App\Http\Controllers\Controller')->afterLast('\\');
        echo $slice2 . '<br>';

        $string = Str::of('Hello')->append('world');
        echo $string . '<br>';

        $result = Str::of('LARAVEL 8')->lower();
        echo $result . '<br>';

        $replace = Str::of('Laravel 7.0')->replace('7.0', '8.0');
        echo $replace . '<br>';

        $converted = Str::of('this is a title')->title();
        echo $converted . '<br>';

        $slug = Str::of('Laravel 8 Framework')->slug();
        echo $slug . '<br>';

        $sub = Str::of('Laravel New Version')->substr(8);
        echo $sub . '<br>';

        $sub2 = Str::of('Laravel New Version')->substr(8, 5);
        echo $sub2 . '<br>';

        $trim = Str::of('/laravel8/trim/')->trim('/');
        echo $trim . '<br>';

        $upper = Str::of('laravel8')->upper();
        echo $upper . '<br>';
    }
}
