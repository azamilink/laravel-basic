<?php

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Routing
Route::get('/users/{name}', function ($name = null) {
    return 'hi ' . $name;
})->where('name', '[a-zA-Z]+');

Route::get('/products/{id}', function ($id = null) {
    return 'The product id is ' . $id;
})->where('id', '[0-9]+');

Route::match(['get', 'post'], '/students', function (Request $req) {
    return 'Request method is ' . $req->method();
});

Route::any('/posts', function (Request $req) {
    return 'Request method is ' . $req->method();
});
