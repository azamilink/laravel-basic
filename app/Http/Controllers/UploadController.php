<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadForm()
    {
        return view('upload');
    }

    function uploadFile(Request $request)
    {
        $request->file->store('public');
        return "file has been upload successfuly";
    }
}