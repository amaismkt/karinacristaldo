<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Blog;
use App\Sobre;

class PagesController extends Controller
{
    public function index()
    {
        $posts = Blog::all();

        return view('index')->with('posts', $posts);
    }

    public function sobre()
    {
        $sobre = Sobre::all();

        return view('sobre')->with('sobre', $sobre);
    }

    public function contato()
    {
        return view('contato');
    }

    public function blog()
    {
        $posts = Blog::all();

        return view('blog')->with('posts', $posts);
    }

    public function eventos()
    {
        return view('eventos');
    }

    public function post($id)
    {
        if($post = Blog::find($id)){
            return view('post')->with('post', $post);
        }
        return "Post não encontrado!";
    }
}
