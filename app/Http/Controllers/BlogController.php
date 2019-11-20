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
        dd($request);
        die();
        $data = $request->input();
        $data['autor'] = auth()->user()->name;
        
        Blog::create($data);

        return json_encode($data);
    }
}
