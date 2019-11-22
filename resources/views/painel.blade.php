@extends('layouts.header')
@include('layouts.painel-sidebar')

    @section('content')

    <div class="has-sidebar">

        <section class="full-height colorized">
            <div class="space128"></div>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h1 class="title-1-center">Seja bem-vindo {{auth()->user()->name}}</h1>
                    <hr>
                    <div class="space128"></div>
                    @php date_default_timezone_set('America/Sao_Paulo') @endphp
                    <h1 style="text-align:center;font-family:'Nunito';font-size:60px;">{{date("d/m/y")." - ".date('H:i')}}</h1>
                </div>
            </div>
        </section>

        <div class="fixed-footer">
            @include('layouts.footer')
        </div>
        
    </div>

    @endsection