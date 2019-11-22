@extends('layouts.header')

@section('content')

<div class="image-header-about">
    <h1 class="image-header-title">Blog</h1>
</div>

<section id="blog">
        <div class="space64"></div>
        <div class="container">
            <div class="row">

                @foreach($posts as $post)
                <div class="col-md-4">
                    <div class="product-box">
                        <h3 class="title-1-center"><i class="fa fa-comment"></i> {{$post->titulo}}</h3>

                        <img
                            @if($post->imagem != "")
                                src="{{asset('assets/img/blog')}}/{{$post->autor}}-{{$post->imagem}}" 
                            @else
                                src="{{asset('assets/img/blog/no-img-default.png')}}"
                            @endif
                        width="60%" height="100%" alt="blog1">

                        <div class="space32"></div>

                        <div style="padding:2%;word-break: break-all;">
                            {{ substr($post->texto, 0, 180)."..." }}
                        </div>

                        <div class="space16"></div>

                        <p class="data">
                            Postado em: {{$post->created_at}} 
                            <br> 
                            Por: {{$post->autor}}
                            <br>
                            Categoria: {{categoria($post->categoria)}}
                        </p>

                        <div class="space16"></div>

                        <a href="/blog/post/{{$post->id}}" class="botao-procedimento">Saiba Mais</a>

                        <div class="space32"></div>

                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="space32"></div>
</section>


<div class="space64"></div>

@include('layouts.footer')

@endsection