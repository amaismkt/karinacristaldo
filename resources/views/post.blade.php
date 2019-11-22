@extends('layouts.header')

@section('content')

<div class="image-header-about">
    <h1 class="image-header-title">{{$post->titulo}}</h1>
</div>

<section id="blog">
        <div class="space64"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-10 offset-md-1">
                    <div class="box">
                        <div class="space16"></div>
                        <img
                            @if($post->imagem != "")
                                src="{{asset('assets/img/blog')}}/{{$post->autor}}-{{$post->imagem}}" 
                            @else
                                src="{{asset('assets/img/blog/no-img-default.png')}}"
                            @endif
                        width="50%" height="100%" alt="blog1">
                        <hr>
                        <h1 class="title-1-center">{{$post->titulo}}</h1>
                        <div class="space16"></div>
                        <p>
                            {!!$post->texto!!}
                        </p>
                        <p class="data">
                            Publicado em: {{$post->created_at}}
                            <br>
                            Por: {{$post->autor}}
                            <br>
                            Categoria: {{categoria($post->categoria)}}
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