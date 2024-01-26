<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function getAllPost()
    {
        $res = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $res->json();
    }

    public function getPostById($id)
    {
        $post = Http::get('https://jsonplaceholder.typicode.com/posts/' . $id);
        return $post->json();
    }

    public function addPost()
    {
        $post = Http::post('https://jsonplaceholder.typicode.com/posts', [
            'userId' => 1,
            'title' => 'New Post Title',
            'body' => 'New Post description'
        ]);
        return $post->json();
    }

    public function updatePost()
    {
        $res = Http::put('https://jsonplaceholder.typicode.com/posts/1', [
            'title' => 'Updated Title',
            'body' => 'Updated description'
        ]);
        return $res->json();

    }
    public function deletePost($id)
    {
        $res = Http::delete('https://jsonplaceholder.typicode.com/posts/' . $id);
        return $res->json();
    }
}
