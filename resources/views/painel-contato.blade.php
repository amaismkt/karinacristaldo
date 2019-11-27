@extends('layouts.header')
@include('layouts.painel-sidebar')

    @section('content')

    <div class="has-sidebar">

        <section class="colorized">
            <div class="space64"></div>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h1 class="title-1-center">Contato</h1>
                    <hr>
                </div>
            </div>
        </section>

        <section class="full-height colorized">

            <form id="contato" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-6 offset-md-3">

                        <div class="space32"></div>

                        <meta name="csrf-token" content="{{ csrf_token() }}">

                        <label for="email">Email:</label>
                        <input class="form-control" name="email" value="{{$dados[0]->email}}" type="email" required>
                        <div class="space16"></div>

                        <label for="endereco">Endereço:</label>
                        <input class="form-control" name="endereco" value="{{$dados[0]->endereco}}" type="text" required>
                        <div class="space16"></div>

                        <label for="telefone">Telefone:</label>
                        <input class="form-control" name="telefone" value="{{$dados[0]->telefone}}" type="text" required>
                        <div class="space16"></div>

                        <label for="emailContato">Email para formulário de contato:</label>
                        <input class="form-control" name="emailContato" value="{{$dados[0]->emailContato}}" type="email" required>
                        <div class="space32"></div>

                            <div style="display:none;" id="sucesso" role="alert" class="alert alert-success">
                                Dados atualizados com sucesso!
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

    <script src="{{ asset('assets/js/contact.js') }}"></script>

    @endsection