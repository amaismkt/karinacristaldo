<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;

class EmailController extends Controller
{
    public function index()
    {
        //
    }

    public function send()
    {
        Mail::to('lucasdelimamonteiro@gmail.com')->send(new Email);
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
