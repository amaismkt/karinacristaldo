<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function sobre()
    {
        return view('sobre');
    }

    public function contato()
    {
        return view('contato');
    }

    public function blog()
    {
        return view('blog');
    }

    public function eventos()
    {
        return view('eventos');
    }
}
