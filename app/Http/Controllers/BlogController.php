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

    public function fileUpdate(Request $request)
    {
        $file = $request->file('file');
        $ext = $request->file('file')->extension();
        $path = public_path("assets/img/blog");
        $newName = auth()->user()->name."-".$file->getClientOriginalName();
        $file->move($path, $newName);

        return 'success';
    }

    public function posts()
    {
        $posts = Blog::all();
        
        return view('posts')->with('posts', $posts);
    }

    public function editPost($id)
    {
        $post = Blog::find($id);

        return view('edit-post')->with('post', $post);
    }

    public function update(Request $request)
    {
        $post = Blog::find($request->id);

        $post->update($request->all());
        $post->save();

        return json_encode($post);
    }
}
