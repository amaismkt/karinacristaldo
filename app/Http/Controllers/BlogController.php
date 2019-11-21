<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Blog;

class BlogController extends Controller
{
    public function index()
    {
        return view('painel-blog');
    }

    public function create(Request $request)
    {
        $data = $request->input();
        $data['autor'] = auth()->user()->name;
        
        Blog::create($data);

        return json_encode($data);
    }

    public function fileUpload(Request $request)
    {
        $file = $request->file('file');
        $ext = $request->file('file')->extension();
        $path = public_path("assets/img/blog");
        $newName = auth()->user()->name."-".$file->getClientOriginalName();
        $file->move($path, $newName);

        return 'success';
    }
}
