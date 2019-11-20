@extends('layouts.header')
@include('layouts.painel-sidebar')

    @section('content')

    <div class="has-sidebar">

        <div class="space64"></div>
        <section>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h1 class="title-1-center">Publicar novo post</h1>
                    <hr>
                </div>
            </div>
        </section>

        <section>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                    </form>
                </div>
            </div>
        </section>
        
        <div class="space64"></div>

        <div class="fixed-footer">
            @include('layouts.footer')
        </div>
        
    </div>

    @endsection