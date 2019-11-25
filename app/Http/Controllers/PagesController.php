<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Blog;
use App\Sobre;
use App\Procedimentos;

class PagesController extends Controller
{
    public function index()
    {
        $posts = Blog::all();
        $procedimentos = Procedimentos::all();

        return view('index', compact('posts', 'procedimentos'));
    }

    public function sobre()
    {
        $sobre = Sobre::all();
        $procedimentos = Procedimentos::all();

        return view('sobre', compact('sobre', 'procedimentos'));
    }

    public function contato()
    {
        $procedimentos = Procedimentos::all();

        return view('contato', compact('procedimentos'));
    }

    public function blog()
    {
        $posts = Blog::all();
        $procedimentos = Procedimentos::all();

        return view('blog', compact('posts', 'procedimentos'));
    }

    public function eventos()
    {
        $procedimentos = Procedimentos::all();

        return view('eventos', compact('procedimentos'));
    }

    public function post($id)
    {
        if($post = Blog::find($id)){
            $procedimentos = Procedimentos::all();

            return view('post', compact('post', 'procedimentos'));
        }
        return "Post não encontrado!";
    }

    public function procedimento($id)
    {
        if($procedimento = Procedimentos::find($id)){
            $procedimentos = Procedimentos::all();

            return view('procedimento', compact('procedimento', 'procedimentos'));
        }
        return "Procedimento não encontrado!";
    }
}
