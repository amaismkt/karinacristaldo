@extends('layouts.header')
@include('layouts.painel-sidebar')

    @section('content')

    <div class="has-sidebar">

        <section class="colorized">
            <div class="space64"></div>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h1 class="title-1-center">Editar post</h1>
                    <hr>
                </div>
            </div>
        </section>

        <section class="full-height colorized">

            <form id="atualizar-post" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-6 offset-md-2">

                        <div class="space32"></div>

                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{{$post->id}}">
                        <label for="titulo">Título:</label>
                        <input class="form-control" value="{{$post->titulo}}" name="titulo" type="text" required>
                        <div class="space32"></div>
                        <label for="text">Seu post:</label>
                        <textarea class="form-control" id="texto" rows="0" name="texto" type="text" required>{{$post->texto}}</textarea>
                        <div class="space16"></div>
                            <div style="display:none;" id="sucesso" role="alert" class="alert alert-success">
                                Post atualizado com sucesso!
                            </div>
                
                            <div style="display:none;" id="erro" role="alert" class="alert alert-danger">
                                Ocorreu um erro, tente novamente mais tarde.
                            </div>
                        <button type="submit" id="atualizar" class="btn btn-primary">Atualizar</button>

                    </div>

                    <div class="col-md-4">

                        <div class="space64"></div>
                        <h6>CATEGORIAS:</h6>
                        <div class="space16"></div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="customRadio" name="categoria" value="dicas" {{$post->categoria == 'dicas' ? 'checked' : ''}}>
                            <label class="custom-control-label" for="customRadio">Dicas e Novidades</label>
                        </div>
                        <br>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="customRadio2" name="categoria" value="procedimentos" {{$post->categoria == 'procedimentos' ? 'checked' : ''}}>
                            <label class="custom-control-label" for="customRadio2">Procedimentos</label>
                        </div>
                        <br>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="customRadio3" name="categoria" value="noticias" {{$post->categoria == 'noticias' ? 'checked' : ''}}>
                            <label class="custom-control-label" for="customRadio3">Notícias</label>
                        </div>
                        <br>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="customRadio4" name="categoria" value="outros" {{$post->categoria == 'outros' ? 'checked' : ''}}>
                            <label class="custom-control-label" for="customRadio4">Outros</label>
                        </div>

                        <div class="space64"></div>
                        <h6>IMAGEM:</h6>
                        <div class="space16"></div>

                        <input type="file" name="imagem" id="imagem">
                        <div class="space16"></div>
                        <img id="imagem-preview" width="80%" class="image-edit-border" src="{{asset('assets/img/blog')."/".$post->autor."-".$post->imagem}}" alt="">

                    </div>

                </div>
            </form>

        </section>

        @include('layouts.footer')
        
    </div>

    <script src="{{ asset('assets/js/blog.js') }}"></script>

    @endsection