<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Procedimentos;

class ProcedimentosController extends Controller
{
    public function index()
    {
        return view('painel-procedimentos');
    }

    public function administrar()
    {
        $procedimentos = Procedimentos::all();
        return view('procedimentos', compact('procedimentos'));
    }

    public function store(Request $request)
    {
        $data = $request->input();
        
        Procedimentos::create($data);

        return json_encode($data);
    }

    public function fileUpload(Request $request)
    {
        $file = $request->file('file');
        $ext = $request->file('file')->extension();
        $path = public_path("assets/img/procedimentos");
        $newName = $file->getClientOriginalName();
        $file->move($path, $newName);

        return 'success';
    }

    public function fileUpdate(Request $request)
    {
        $file = $request->file('file');
        $ext = $request->file('file')->extension();
        $path = public_path("assets/img/procedimentos");
        $newName = $file->getClientOriginalName();
        $file->move($path, $newName);

        return 'success';
    }

    public function editProcedimento($id)
    {
        $procedimento = Procedimentos::find($id);

        return view('edit-procedimento', compact('procedimento'));
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request)
    {
        $post = Procedimentos::find($request->id);

        $post->update($request->all());
        $post->save();

        return json_encode($post);
    }

    public function destroy($id)
    {
        $procedimento = Procedimentos::find($id);

        $procedimento->delete();

        return json_encode($id);
    }
}
