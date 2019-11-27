<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;
use App\Contato;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        $dados = $request->input();
        $a = Contato::find('1');
        $email = $a['emailContato'];

        Mail::to($email)->send(new Email($dados));
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
