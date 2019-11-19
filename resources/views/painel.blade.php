@extends('layouts.header')
@include('layouts.painel-sidebar')

    @section('content')

    <div class="has-sidebar">

        <section>
            <h1>Painel de administração</h1>
        </section>
        
        <div class="space64"></div>

        @include('layouts.footer')
        
    </div>

    @endsection