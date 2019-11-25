@extends('layouts.header')

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('assets/img/main1.png')}}" alt="mulher">
                </div>
                <div class="col-md-6">
                    @include('layouts.contact1')
                </div>
            </div>
        </div>
    </section>

    <section class="grid" id="promocoes">

        <div class="row">
            <div class="space64"></div>
            <h1 class="title-1-center">Qual cirurgia você <b>quer fazer ?</b></h1>
            <div class="space32"></div>
        </div>
        
        <div class="row">
            <div class="col-md-3">
                <div class="product-box">
                    <img height="180px" src="{{asset('assets/img/abdominoplastia.png')}}" alt="abdome">
                    <div class="space16"></div>
                    <a href="#" class="botao-procedimento">PLÁSTICA ABDÔMEN</a>
                    <div class="space16"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-box">
                    <img height="180px" src="{{asset('assets/img/lipo.png')}}" alt="abdome">
                    <div class="space16"></div>
                    <a href="#" class="botao-procedimento">LIPOASPIRAÇÃO</a>
                    <div class="space16"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-box">
                    <img height="180px" src="{{asset('assets/img/mamoplastia.png')}}" alt="abdome">
                    <div class="space16"></div>
                    <a href="#" class="botao-procedimento">MAMOPLASTIA</a>
                    <div class="space16"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-box">
                    <img height="180px" src="{{asset('assets/img/protese.png')}}" alt="abdome">
                    <div class="space16"></div>
                    <a href="#" class="botao-procedimento">PRÓTESE DE SILICONE</a>
                    <div class="space16"></div>
                </div>
            </div>
        </div>
        <div class="space64"></div>
        <div class="row">
            <div class="col-md-3">
                <div class="product-box">
                    <img height="180px" src="{{asset('assets/img/facial.png')}}" alt="abdome">
                    <div class="space16"></div>
                    <a href="#" class="botao-procedimento">REJUVENECIMENTO FACIAL</a>
                    <div class="space16"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-box">
                    <img height="180px" src="{{asset('assets/img/plastica.png')}}" alt="abdome">
                    <div class="space16"></div>
                    <a href="#" class="botao-procedimento">PLÁSTICA DE NARIZ</a>
                    <div class="space16"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-box">
                    <img height="180px" src="{{asset('assets/img/gluteos.png')}}" alt="abdome">
                    <div class="space16"></div>
                    <a href="#" class="botao-procedimento">PROTESE DE GLÚTEOS</a>
                    <div class="space16"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-box">
                    <img height="180px" src="{{asset('assets/img/palpebras.png')}}" alt="abdome">
                    <div class="space16"></div>
                    <a href="#" class="botao-procedimento">PLÁSTICA DE PÁLPEBRAS</a>
                    <div class="space16"></div>
                </div>
            </div>
        </div>
        <div class="space64"></div>

    </section>

    <section id="mais-procedimentos">
        <div class="container">

            <div class="space16"></div>
            <h3 class="title-1-center">Ver mais procedimentos</h3>
            <div class="space16"></div>

            <div class="row">
                <div class="col-md-6">
                    <div class="box">
                        <h2 class="title-1-center">Cirurgias do <b>Corpo</b></h2>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="mais-procedimentos">
                                    <li><a href="//masterhealth.com.br/saiba-mais/cirurgia-plastica-de-abdomen" target="_blank">Abdominoplastia</a></li>
                                    <li><a href="//masterhealth.com.br/braquioplastia" target="_blank">Braquioplastia</a></li>
                                    <li><a href="//masterhealth.com.br/cicatrizes" target="_blank">Cicatrizes</a></li>
                                    <li><a href="//masterhealth.com.br/cirurgia-dermatologica" target="_blank">Cirurgia Dermatológica</a></li>
                                    <li><a href="//masterhealth.com.br/cirurgia-plastica-intima" target="_blank">Cirurgia Plástica Íntima</a></li>
                                    <li><a href="//masterhealth.com.br/cirurgia-plastica-sem-cortes" target="_blank">Cirurgia Plástica sem Cortes</a></li>
                                    <li><a href="//masterhealth.com.br/dermolipectomia" target="_blank">Dermolipectomia</a></li>
                                    <li><a href="//masterhealth.com.br/ginecomastia" target="_blank">Ginecomastia</a></li>
                                    <li><a href="//masterhealth.com.br/gluteoplastia" target="_blank">Gluteoplastia</a></li>
                                    <li><a href="//masterhealth.com.br/lifting-de-gluteos" target="_blank">Lifting de Glúteos</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="mais-procedimentos"><li><a href="//masterhealth.com.br/lipoaspiracao" target="_blank">Lipoaspiração</a></li>
                                    <li><a href="//masterhealth.com.br/lipoaspiracao/lipoescultura-master-health" target="_blank">Lipoescultura</a></li>
                                    <li><a href="//masterhealth.com.br/mamoplastia/protese-de-silicone" target="_blank">Mamoplastia de Aumento</a></li>
                                    <li><a href="//masterhealth.com.br/mamoplastia/mamoplastia-redutora" target="_blank">Mamoplastia Redutora</a></li>
                                    <li><a href="//masterhealth.com.br/mamoplastia/mamoplastia-de-elevacao" target="_blank">Mastopexia</a></li>
                                    <li><a href="//masterhealth.com.br/onfaloplastia" target="_blank">Onfaloplastia</a></li>
                                    <li><a href="//masterhealth.com.br/protese-de-gluteo" target="_blank">Prótese de Glúteo</a></li>
                                    <li><a href="//masterhealth.com.br/protese-de-torax" target="_blank">Prótese de Tórax</a></li>
                                    <li><a href="//masterhealth.com.br/rejuvenescimento-das-maos" target="_blank">Rejuvenescimento das Mãos</a></li>
                                    <li><a href="//masterhealth.com.br/transplante-capilar" target="_blank">Transplante Capilar</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box">
                        <h2 class="title-1-center">Cirurgias da <b>Face</b></h2>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="mais-procedimentos"><li><a href="//masterhealth.com.br/blefaroplastia" target="_blank">Blefaroplastia</a></li>
                                    <li><a href="//masterhealth.com.br/bichectomia" target="_blank">Bichectomia</a></li>
                                    <li><a href="//masterhealth.com.br/cirurgia-do-ronco" target="_blank">Cirurgia do Ronco</a></li>
                                    <li><a href="//masterhealth.com.br/lifting-facial" target="_blank">Lifting Facial</a></li>
                                    <li><a href="//masterhealth.com.br/mentoplastia" target="_blank">Mentoplastia</a></li>
                                    <li><a href="//masterhealth.com.br/ocidentalizacao-dos-olhos" target="_blank">Ocidentalização dos olhos</a></li>
                                    <li><a href="//masterhealth.com.br/otoplastia" target="_blank">Otoplastia</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="mais-procedimentos"><li><a href="//masterhealth.com.br/perfiloplastia" target="_blank">Perfiloplastia</a></li>
                                    <li><a href="//masterhealth.com.br/rinoplastia" target="_blank">Plástica de Nariz</a></li>
                                    <li><a href="//masterhealth.com.br/queiloplastia" target="_blank">Queiloplastia</a></li>
                                    <li><a href="//masterhealth.com.br/reducao-de-orelha" target="_blank">Redução de orelha</a></li>
                                    <li><a href="//masterhealth.com.br/ritidoplastia" target="_blank">Rejuvenescimento Facial</a></li>
                                    <li><a href="//masterhealth.com.br/rinoplastia" target="_blank">Rinoplastia</a></li>
                                    <li><a href="//masterhealth.com.br/ritidoplastia" target="_blank">Ritidoplastia</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="space64"></div>

    <section class="main-background">

        <div class="home-banner container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{asset('assets/img/medico-home')}}.png" alt="medico">
                </div>
                <div class="col-md-8">
                    <div class="space64"></div>
                    <h2 class="title-1-center-light">Por que <b>Karina Cristaldo é mais?</b></h2>
                    <div class="caixa-icone">
                        <span class="icone">1</span>
                        <div class="texto">
                            <p>Mais de 20 anos de experiência</p>
                        </div>
                    </div>
                    <div class="caixa-icone">
                        <span class="icone">2</span>
                        <div class="texto">
                            <p>Mais de 120.000 cirurgias realizadas</p>
                        </div>
                    </div>
                    <div class="caixa-icone">
                        <span class="icone">3</span>
                        <div class="texto">
                            <p>Mais segurança para você: cirurgias realizadas em hospital</p>
                        </div>
                    </div>
                    <div class="caixa-icone">
                        <span class="icone">4</span>
                        <div class="texto">
                            <p>Mais confiança: médicos membros da SBCP</p>
                        </div>
                    </div>
                    <div class="caixa-icone">
                        <span class="icone">5</span>
                        <div class="texto">
                            <p>Mais garantia, somos referência no ramo de cirurgia plástica</p>
                        </div>
                    </div>
                    <h2 style="font-family: Damion">Você é mais com Karina Cristaldo!</h2>
                </div>
            </div>
        </div>

    </section>

    <div class="space64"></div>

    <section>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="title-1-center"><b>Eventos </b>Karina Cristaldo</h1>
                <div id="slider">
                    <a href="javascript:void(0)" class="control_next">></a>
                    <a href="javascript:void(0)" class="control_prev"><</a>
                    <ul>
                        <li style="background: url('{{asset('assets/img/slider/1.jpg')}}');"></li>
                        <li style="background: url('{{asset('assets/img/slider/2.jpg')}}');"></li>
                        <li style="background: url('{{asset('assets/img/slider/3.jpg')}}');"></li>
                    </ul>  
                </div>
            </div>
        </div>
    </section>

    <div class="space64"></div>

    <section>
        <div class="row contact-form-section">
            <div class="col-md-6 offset-md-3">
                <form id="contact-form">
                    @csrf
                    <h1 class="title-1-center-light"><b>Quero fazer</b> uma plástica</h1>
                    <p style="color:white;text-align:center;">Um dos consultores da Master Health entrará em contato com você.</p>
                    <div class="space16"></div>
                    <input class="form-control" type="text" name="nome" placeholder="Nome completo">
                    <div class="space16"></div>
                    <input class="form-control" type="email" name="email" placeholder="seu@email.com">
                    <div class="space16"></div>
                    <input class="form-control" type="text" name="telefone" placeholder="(99) 99999-9999">
                    <div class="space16"></div>
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
                    <button type="submit" class="botao-email">VOU FAZER MINHA CIRURGIA PLÁSTICA <br><span class="clique-aqui">CLIQUE AQUI</span></button>
                </form>
            </div>
            <div class="space64"></div>
        </div>
    </section>

    <section id="blog">
        <div class="space32"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title-1-center">
                        Dicas e Novidades
                    </h1>
                </div>

                @php
                    $contador = 0;
                @endphp
                @foreach($posts->reverse() as $post)
                @if($contador < 3)
                <div class="col-md-4">
                    <div class="product-box">
                        <h4 class="title-1-center"><i class="fa fa-comment"></i> {{$post->titulo}}</h4>

                        <img
                            @if($post->imagem != "")
                                src="{{asset('assets/img/blog')}}/{{$post->autor}}-{{$post->imagem}}" 
                            @else
                                src="{{asset('assets/img/blog/no-img-default.png')}}"
                            @endif
                        width="50%" height="100%" alt="blog1">

                        <div class="space32"></div>

                        <div style="padding:2%;word-break: break-all;">
                            {{ substr($post->texto, 0, 180)."..." }}
                        </div>

                        <div class="space16"></div>

                        <p class="data">Postado em: {{$post->created_at}} <br> Por: {{$post->autor}}</p>

                        <div class="space16"></div>

                        <a href="/blog/post/{{$post->id}}" class="botao-procedimento">Saiba Mais</a>

                        <div class="space32"></div>
                    </div>
                </div>
                @php 
                    $contador++;
                @endphp
                @endif
                @endforeach
                
            </div>
        </div>
        <div class="space32"></div>
        <div class="row">
            <div class="col-md-4 offset-md-4" style="text-align:center;">
                <div class="botao-ver-mais" style="width:100%">
                   <a href="/blog">Ver Todos</a>
                </div>
            </div>
        </div>
    </section>

    <div class="space64"></div>

    @include('layouts.footer')
    <script src="{{asset('assets/js/slider.js')}}"></script>
    <script src="{{asset('assets/js/contact.js')}}"></script>

@endsection