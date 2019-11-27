<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index()
    {
        $dados = Contato::all();

        return view('painel-contato', compact('dados'));
    }

    public function update(Request $request)
    {
        $contato = Contato::find('1');

        $contato->update($request->all());
        $contato->save();

        return json_encode ($request->all());
    }
}
