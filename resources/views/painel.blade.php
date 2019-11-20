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
                </div>
            </div>
        </section>

        <div class="fixed-footer">
            @include('layouts.footer')
        </div>
        
    </div>

    @endsection