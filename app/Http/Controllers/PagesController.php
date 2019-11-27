<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Blog;
use App\Sobre;
use App\Procedimentos;
use App\Contato;

class PagesController extends Controller
{
    public function index()
    {
        $posts = Blog::all();
        $procedimentos = Procedimentos::all();
        $contato = Contato::find('1');

        return view('index', compact('posts', 'procedimentos', 'contato'));
    }

    public function sobre()
    {
        $sobre = Sobre::all();
        $procedimentos = Procedimentos::all();
        $contato = Contato::find('1');

        return view('sobre', compact('sobre', 'procedimentos', 'contato'));
    }

    public function contato()
    {
        $procedimentos = Procedimentos::all();
        $contato = Contato::find('1');

        return view('contato', compact('procedimentos', 'contato'));
    }

    public function blog()
    {
        $posts = Blog::all();
        $procedimentos = Procedimentos::all();
        $contato = Contato::find('1');

        return view('blog', compact('posts', 'procedimentos', 'contato'));
    }

    public function eventos()
    {
        $procedimentos = Procedimentos::all();
        $contato = Contato::find('1');

        return view('eventos', compact('procedimentos', 'contato'));
    }

    public function post($id)
    {
        if($post = Blog::find($id)){
            $procedimentos = Procedimentos::all();
            $contato = Contato::find('1');

            return view('post', compact('post', 'procedimentos', 'contato'));
        }
        return "Post não encontrado!";
    }

    public function procedimento($id)
    {
        if($procedimento = Procedimentos::find($id)){
            $procedimentos = Procedimentos::all();
            $contato = Contato::find('1');

            return view('procedimento', compact('procedimento', 'procedimentos', 'contato'));
        }
        return "Procedimento não encontrado!";
    }
}
