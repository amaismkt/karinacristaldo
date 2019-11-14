@extends('layouts.header')

@section('content')

<div class="image-header-about">
    <h1 class="image-header-title">Eventos</h1>
</div>

<section>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div id="slider">
                <a href="javascript:void(0)" class="control_next">></a>
                <a href="javascript:void(0)" class="control_prev"><</a>
                <ul>
                    <li style="background: url('{{asset("assets/img/slider/1.jpg")}}');"></li>
                    <li style="background: url('{{asset("assets/img/slider/2.jpg")}}');"></li>
                    <li style="background: url('{{asset("assets/img/slider/3.jpg")}}');"></li>
                </ul>  
            </div>
        </div>
    </div>
</section>

<div class="space64"></div>

<section>
    <div class="container">

        <div class="row">
            <div class="col-md-8 offset-md-2" style="border-bottom:1px solid #d1d1d1; padding-bottom:20px;">
                <h5 class="main-color">Lorem ipsum dolor sit amet</h5>
                <div class="row">
                    <div class="col-md-6">
                        <img width="90%" src="{{asset('assets/img/slider/1.jpg')}}" alt="1">
                    </div>
                    <div class="col-md-6">
                        <p style="text-align:justify;">Lorem ipsum dolor it amet, consectetur adipiscing elit. Proin malesuada augue ut pretium tempor. Fusce rhoncus pharetra sem a commodo. Vivamus malesuada faucibus mauris sit amet consequat.</p>
                        <br><a href="#" class="botao-procedimento">Saiba Mais</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="space32"></div>

        <div class="row">
            <div class="col-md-8 offset-md-2" style="border-bottom:1px solid #d1d1d1; padding-bottom:20px;">
                <h5 class="main-color">Lorem ipsum dolor sit amet</h5>
                <div class="row">
                    <div class="col-md-6">
                        <img width="90%" src="{{asset('assets/img/slider/2.jpg')}}" alt="1">
                    </div>
                    <div class="col-md-6">
                        <p style="text-align:justify;">Lorem ipsum dolor it amet, consectetur adipiscing elit. Proin malesuada augue ut pretium tempor. Fusce rhoncus pharetra sem a commodo. Vivamus malesuada faucibus mauris sit amet consequat.</p>
                        <br><a href="#" class="botao-procedimento">Saiba Mais</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="space32"></div>

        <div class="row">
            <div class="col-md-8 offset-md-2" style="border-bottom:1px solid #d1d1d1; padding-bottom:20px;">
                <h5 class="main-color">Lorem ipsum dolor sit amet</h5>
                <div class="row">
                    <div class="col-md-6">
                        <img width="90%" src="{{asset('assets/img/slider/3.jpg')}}" alt="1">
                    </div>
                    <div class="col-md-6">
                        <p style="text-align:justify;">Lorem ipsum dolor it amet, consectetur adipiscing elit. Proin malesuada augue ut pretium tempor. Fusce rhoncus pharetra sem a commodo. Vivamus malesuada faucibus mauris sit amet consequat.</p>
                        <br><a href="#" class="botao-procedimento">Saiba Mais</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<div class="space64"></div>

@include('layouts.footer')
<script src="{{asset('assets/js/slider.js')}}"></script>

@endsection