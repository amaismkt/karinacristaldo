@extends('layouts.header')

@section('content')

<section>

    <div class="image-header-contact">
        <h1 class="image-header-title">Contato</h1>
    </div>

    <div class="contact">
        <div class="container">

            <div class="space32"></div>
            <div class="row">

                <div class="col-md-6">
                    <form id="contact-form">
                        @csrf
                        <h1 class="title-1-center"><b>Quero fazer</b> uma plástica</h1>
                        <p style="text-align:center;">Um dos consultores da Master Health entrará em contato com você.</p>
                        <div class="space16"></div>
                        <label for="nome">Nome:</label>
                        <input class="form-control" type="text" name="nome" placeholder="Nome completo">
                        <div class="space16"></div>
                        <label for="email">Email:</label>
                        <input class="form-control" type="email" name="email" placeholder="seu@email.com">
                        <div class="space16"></div>
                        <label for="telefone">Telefone:</label>
                        <input class="form-control" type="text" name="telefone" placeholder="(99) 99999-9999">
                        <div class="space16"></div>
                        <label for="cirurgia">Cirurgia:</label>
                        <select name="cirurgia" class="form-control">
                            <option value="">Selecione</option>
                            <option value="Protese de silicone">Prótese de silicone</option>
                            <option value="Reducao de Mama">Redução de Mama</option>
                            <option value="Mastopexia">Mastopexia</option>
                            <option value="Abdominoplastia">Abdominoplastia</option>
                            <option value="Lipoaspiracao">Lipoaspiração</option>
                            <option value="Rejuvenescimento Facial">Rejuvenescimento Facial</option>
                            <option value="Gluteoplastia">Gluteoplastia</option>
                            <option value="Blefaroplastia">Blefaroplastia</option>
                            <option value="Rinoplastia">Rinoplastia</option>
                            <option value="Otoplastia">Otoplastia</option>
                            <option value="Transplante Capilar">Transplante Capilar</option>
                            <option value="Outras">Outras</option>
                        </select>
                        <div class="space32"></div>
                        
                            <div id="loading" style="text-align: center; display:none;">
                                <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                                <span class="sr-only">Loading...</span>
                            </div>

                            <div class="space16"></div>
                            
                            <div style="display:none;" id="sucesso" role="alert" class="alert alert-success">
                                Mensagem enviada com sucesso!
                            </div>
                
                            <div style="display:none;" id="erro" role="alert" class="alert alert-danger">
                                Ocorreu um erro, tente novamente mais tarde.
                            </div>
                        <button type="submit" class="botao-email">VOU FAZER MINHA CIRURGIA PLÁSTICA <br><span class="clique-aqui">CLIQUE AQUI</span></button>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="space128"></div>
                    <h3 class="title-1-nunito"><i class="main-color fa fa-map-marker"></i>  {{$contato->endereco}}</h3>
                    <div class="space32"></div>
                    <hr>
                    <div class="space32"></div>
                    <h3 class="title-1-nunito"><i class="main-color fa fa-envelope"></i> {{$contato->email}}</h3>
                    <div class="space32"></div>
                    <hr>
                    <div class="space32"></div>
                    <h3 class="title-1-nunito"><i class="main-color fa fa-phone"></i> {{$contato->telefone}}</h3>
                </div>

            </div>
            <div class="space128"></div>
        </div>

    </div>

</section>

<section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3457.3941866396235!2d-51.16942598478835!3d-29.93933833335653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95197062e4662df5%3A0x478cd77e4c56061a!2sR.%20Farroupilha%2C%202044%20-%20Niter%C3%B3i%2C%20Canoas%20-%20RS%2C%2092110-256!5e0!3m2!1spt-BR!2sbr!4v1573238818634!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</section>

@include('layouts.footer')
<script src="{{asset('assets/js/contact.js')}}"></script>

@endsection