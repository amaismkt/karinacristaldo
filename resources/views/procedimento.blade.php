@extends('layouts.header')

@section('content')

<div class="image-header-about">
    <h1 class="image-header-title">{{$procedimento->titulo}}</h1>
</div>

<section id="blog">
        <div class="space64"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-10 offset-md-1">
                    <div class="box">
                        <div class="space16"></div>
                        <img
                            @if($procedimento->imagem != "")
                                src="{{asset('assets/img/procedimentos')}}/{{$procedimento->imagem}}" 
                            @else
                                src="{{asset('assets/img/procedimentos/no-img-default.png')}}"
                            @endif
                        width="50%" height="100%" alt="procedimentos1">
                        <hr>
                        <h1 class="title-1-center">{{$procedimento->titulo}}</h1>
                        <div class="space16"></div>
                        <p>
                            {!!$procedimento->texto!!}
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="space32"></div>
</section>


<div class="space64"></div>

@include('layouts.footer')

@endsection