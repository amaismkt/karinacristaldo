@extends('layouts.header')
@include('layouts.painel-sidebar')

    @section('content')

    <div class="has-sidebar">

        <section class="colorized">
            <div class="space64"></div>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h1 class="title-1-center">Sobre</h1>
                    <hr>
                </div>
            </div>
        </section>

        <section class="full-height colorized">

            <form id="atualizar-sobre" enctype="multipart/form-data">
                @csrf
                <div class="row" style="padding:5%;">

                    <div class="col-md-6">

                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <label for="titulo">Título:</label>
                        <input value="{{$sobre[0]->titulo}}" class="form-control" name="titulo" type="text" required>
                        <div class="space32"></div>
                        <label for="text">Texto:</label>
                        <textarea class="form-control" rows="0" name="texto" type="text" required>{{$sobre[0]->texto}}</textarea>
                        <div class="space16"></div>

                    </div>

                    <div class="col-md-6">

                        <label for="titulo">Subítulo:</label>
                        <input class="form-control" value="{{$sobre[0]->subtitulo}}" name="subtitulo" type="text" required>
                        <div class="space32"></div>
                        <label for="text">Subtexto:</label>
                        <textarea class="form-control" rows="0" name="subtexto" type="text" required>{{$sobre[0]->subtexto}}</textarea>
                        <div class="space16"></div>

                    </div>

                    <div class="col-md-6">
                        <label for="foto">Foto:</label><br>
                        <input type="file" name="foto" id="foto">
                        <div class="space16"></div>
                        <img id="imagem-preview" height="200px" class="image-edit-border" src="{{asset('assets/img')}}/{{"foto-sobre-".$sobre[0]->foto}}" alt="">
                    </div>

                    <div class="col-md-6">
                        <label for="icone">Ícone:</label><br>
                        <input type="file" name="icone" id="icone">
                        <div class="space16"></div>
                        <img id="icone-preview" height="200px" class="image-edit-border" src="{{asset('assets/img')}}/{{"icone-sobre-".$sobre[0]->icone}}" alt="">
                    </div>

                    <div class="space64"></div>

                    <div class="col-md-12">
                        <div style="display:none;" id="sucesso" role="alert" class="alert alert-success">
                            Conteúdo atualizado com sucesso!
                        </div>
            
                        <div style="display:none;" id="erro" role="alert" class="alert alert-danger">
                            Ocorreu um erro, tente novamente mais tarde.
                        </div>

                        <button type="submit" id="publicar" class="btn btn-primary">Publicar</button>
                    </div>

                </div>
            </form>

        </section>

        @include('layouts.footer')
        
    </div>

    <script src="{{ asset('assets/js/sobre.js') }}"></script>

    @endsection