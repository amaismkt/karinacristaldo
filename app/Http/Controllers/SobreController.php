<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sobre;

class SobreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sobre = Sobre::all();

        return view('painel-sobre')->with('sobre', $sobre);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $sobre = Sobre::find('1');

        $sobre->update($request->all());
        $sobre->save();

        return json_encode($sobre);
    }

    public function fileUpdate(Request $request)
    {
        $file = $request->file('file');
        $ext = $request->file('file')->extension();
        $path = public_path("assets/img");
        $newName = "foto-sobre-".$file->getClientOriginalName();
        $file->move($path, $newName);

        return 'success';
    }

    public function iconUpdate(Request $request)
    {
        $file = $request->file('file');
        $ext = $request->file('file')->extension();
        $path = public_path("assets/img");
        $newName = "icone-sobre-".$file->getClientOriginalName();
        $file->move($path, $newName);

        return 'success';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
