@extends('layouts.header')
@include('layouts.painel-sidebar')

    @section('content')

    <div class="has-sidebar">

        <section class="colorized">
            <div class="space64"></div>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h1 class="title-1-center">Gerenciar posts</h1>
                    <hr>
                </div>
            </div>
        </section>

        <section class="full-height colorized">

            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="box" style="background-color:white;padding:2%;">
                        <table class="table table-striped" id="posts">
                            <thead>
                                <tr>
                                    <th>Título:</th>
                                    <th>Conteúdo:</th>
                                    <th>Categoría:</th>
                                    <th>Autor:</th>
                                    <th>Data:</th>
                                    <th>Editar:</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->titulo}}</td>
                                    <td>{{ substr($post->texto, 0, 50)."..." }}</td>
                                    <td>{{$post->categoria}}</td>
                                    <td>{{$post->autor}}</td>
                                    <td>{{$post->created_at}}</td>
                                    <td class="blog-edit"><span class="edit-button"><a href="/painel/blog/posts/{{$post->id}}"><i class="fa fa-edit"></i></a></span></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </section>

        @include('layouts.footer')
        
    </div>

    <script src="{{ asset('assets/js/blog.js') }}"></script>

    @endsection