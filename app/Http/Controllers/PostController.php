<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getAllPost()
    {
        $posts = DB::table('posts')->get();
        return view('posts.all', compact('posts'));
    }

    public function addPost()
    {
        return view('posts.create');
    }

    public function postSubmit(Request $request)
    {
        DB::table('posts')->insert([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return back()->with('post_created', 'Post has been created successfully');
    }

    public function getPostById($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        return view('posts.show', compact('post'));
    }

    public function deletePost($id)
    {
        DB::table('posts')->where('id', $id)->delete();
        return back()->with('post_deleted', 'Post has been deleted successfully');
    }

    public function editPost($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        return view('posts.edit', compact('post'));
    }

    public function updatePost(Request $req)
    {
        DB::table('posts')->where('id', $req->id)->update([
            'title' => $req->title,
            'body' => $req->body
        ]);
        return back()->with('post_updated', 'Post has been upadted succcessfully.');
    }

    public function innerJoinClause()
    {
        $req = DB::table('users')
            ->join('posts', 'users.id', '=', 'posts.user_id')
            ->select('users.name', 'posts.title', 'posts.body')
            ->get();
        return $req;
    }

    public function leftJoinClause()
    {
        $res = DB::table('users')
            ->leftJoin('posts', 'users.id', '=', 'posts.user_id')
            ->get();
        return $res;
    }

    public function rightJoinClause()
    {
        $res = DB::table('users')
            ->rightJoin('posts', 'users.id', '=', 'posts.user_id')
            ->get();
        return $res;
    }
}
