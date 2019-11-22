@extends('layouts.header')

@section('content')

<div class="image-header-about">
    <h1 class="image-header-title">Sobre</h1>
</div>

<section>
    <div class="container">

        <div class="row">

            <div class="space64"></div>

            <div class="col-md-6">
            <img class="about-picture" src="{{asset('assets/img')}}/foto-sobre-{{$sobre[0]->foto}}" width="100%" alt="sobre">
            </div>
            <div class="col-md-6">
                <h1 class="title-1-center">{{$sobre[0]->titulo}}</h1>
                <hr>
                <p style="text-align:justify;">
                    {{$sobre[0]->texto}}
                </p>
                <div class="space32"></div>
                <div class="row">
                    <div class="col-md-9">
                        <h4 class="title-1-center"><b>{{$sobre[0]->subtitulo}}</b></h4>
                        <hr>
                        <p style="text-align:justify">
                            {{$sobre[0]->subtexto}}
                        </p>
                    </div>
                    <div class="col-md-3">
                        <img style="margin-top:46px;" src="{{asset('assets/img')}}/icone-sobre-{{$sobre[0]->icone}}" height="100px" alt="missão">
                    </div>
                </div>
            </div>

            <div class="space64"></div>
            
        </div>

    </div>
</section>

<div class="space32"></div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="title-1-center">Nossos <b>Médicos</b></h1>
            </div>
            <div class="space32"></div>
            <div class="col-md-4">
                <div class="product-box">
                    <h3 class="title-1-center"><i class="fa fa-plus"></i> Dr. Fulano da Silva</h3>
                    <img src="{{asset('assets/img/dr1.png')}}" width="80%" height="280px" alt="1">
                    <div class="space32"></div>
                    <p style="padding:2%;">Lorem ipsum dolor sit amet, lorem ipsum dolor sit amet.</p>
                    <div class="space16"></div>
                    <h5 class="main-color">ESPECIALISTA EM APÊNDICE</h5>
                    <div class="space32"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-box">
                    <h3 class="title-1-center"><i class="fa fa-plus"></i> Dra. Ciclana Afonso</h3>
                    <img src="{{asset('assets/img/dr2.png')}}" width="70%" height="280px" alt="2">
                    <div class="space32"></div>
                    <p style="padding:2%;">Lorem ipsum dolor sit amet, lorem ipsum dolor sit amet.</p>
                    <div class="space16"></div>
                    <h5 class="main-color">ESPECIALISTA EM UMBIGO</h5>
                    <div class="space32"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-box">
                    <h3 class="title-1-center"><i class="fa fa-plus"></i> Dr. Erik Vraulius</h3>
                    <img src="{{asset('assets/img/dr3.png')}}" width="70%" height="280px" alt="3">
                    <div class="space32"></div>
                    <p style="padding:2%;">Lorem ipsum dolor sit amet, lorem ipsum dolor sit amet.</p>
                    <div class="space16"></div>
                    <h5 class="main-color">ESPECIALISTA EM CÓCCIX</h5>
                    <div class="space32"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="space64"></div>

@include('layouts.footer')

@endsection