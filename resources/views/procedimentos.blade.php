@extends('layouts.header')
@include('layouts.painel-sidebar')

    @section('content')

    <div class="has-sidebar">

        <section class="colorized">
            <div class="space64"></div>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h1 class="title-1-center">Gerenciar procedimentos</h1>
                    <hr>
                </div>
            </div>
        </section>

        <section class="full-height colorized">

            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="box" style="background-color:white;padding:2%;">
                        <table class="table table-striped" id="procedimentos">
                            <thead>
                                <tr>
                                    <th>Título:</th>
                                    <th>Conteúdo:</th>
                                    <th>Editar:</th>
                                    <th>Deletar:</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($procedimentos as $procedimento)
                                <tr id="linha-{{$procedimento->id}}">
                                    <td>{{$procedimento->titulo}}</td>
                                    <td>{{ substr($procedimento->texto, 0, 50)."..." }}</td>
                                    <td class="procedimento-edit"><span class="edit-button"><a href="/painel/procedimento/edit/{{$procedimento->id}}"><i class="fa fa-edit"></i></a></span></td>
                                    <td class="procedimento-delete"><span class="delete-button"><a id="{{$procedimento->id}}" onclick="deletarProcedimento(this);" href="#"><i class="fa fa-trash"></i></a></span></td>
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

    <script src="{{ asset('assets/js/procedimentos.js') }}"></script>

    @endsection