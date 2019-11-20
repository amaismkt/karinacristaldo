@extends('layouts.header')
@include('layouts.painel-sidebar')

    @section('content')

    <div class="has-sidebar">

        <section class="colorized">
            <div class="space64"></div>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h1 class="title-1-center">Publicar novo post</h1>
                    <hr>
                </div>
            </div>
        </section>

        <section class="full-height colorized">

            <form id="post" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-6 offset-md-2">

                        <div class="space32"></div>

                        <label for="titulo">Título:</label>
                        <input class="form-control" name="titulo" type="text" required>
                        <div class="space32"></div>
                        <label for="text">Seu post:</label>
                        <textarea class="form-control" id="texto" rows="0" name="texto" type="text" required></textarea>
                        <div class="space16"></div>
                            <div style="display:none;" id="sucesso" role="alert" class="alert alert-success">
                                Post publicado com sucesso!
                            </div>
                
                            <div style="display:none;" id="erro" role="alert" class="alert alert-danger">
                                Ocorreu um erro, tente novamente mais tarde.
                            </div>
                        <button type="submit" id="publicar" class="btn btn-primary">Publicar</button>

                    </div>

                    <div class="col-md-4">

                        <div class="space64"></div>
                        <h6>CATEGORIAS:</h6>
                        <div class="space16"></div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="customRadio" name="categoria" value="dicas">
                            <label class="custom-control-label" for="customRadio">Dicas e Novidades</label>
                        </div>
                        <br>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="customRadio2" name="categoria" value="procedimentos">
                            <label class="custom-control-label" for="customRadio2">Procedimentos</label>
                        </div>
                        <br>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="customRadio3" name="categoria" value="noticias">
                            <label class="custom-control-label" for="customRadio3">Notícias</label>
                        </div>
                        <br>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="customRadio4" name="categoria" value="outros" checked>
                            <label class="custom-control-label" for="customRadio4">Outros</label>
                        </div>

                        <div class="space64"></div>
                        <h6>IMAGEM:</h6>
                        <div class="space16"></div>

                        <input type="file" name="imagem" id="imagem">

                    </div>

                </div>
            </form>

        </section>

        @include('layouts.footer')
        
    </div>

    <script src="{{ asset('assets/js/blog.js') }}"></script>

    @endsection