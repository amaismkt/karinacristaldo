<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{ asset('plugins/jqte/jquery-te-1.4.0.min.js') }}"></script>

@if(!Request::is('painel') && !Request::is('painel/*'))
<div class="widget-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4"><img src="{{asset('assets/img/logo.png')}}" alt="Karina Cristaldo" width="200px;"></div>
            <div class="col-md-4">
                <h5 class="main-color">Para mais informações telefone: </h5>
                <p><i class="fa fa-phone"></i> (011) 3373-1900</p>
                <p>De segunda à sexta, das 10h às 20h</p>
            </div>
            <div class="col-md-4">
                <h5 class="main-color">Ouvidoria:</h5>
                <p>Para dúvidas, sugestões e reclamações acesse nossa ouvidoria.</p>
            </div>
        </div>
    </div>
</div>
<footer class="bottom-footer">
    <p>Copyright © 2019 Karina Cristaldo. Todos os direitos reservados. Desenvolvido por <a href="http://amaismkt.com.br/">A+</a>.</p>
</footer>
@else
<footer class="bottom-footer">
    <p>Copyright © 2019 Karina Cristaldo. Todos os direitos reservados. Desenvolvido por <a href="http://amaismkt.com.br/">A+</a>.</p>
</footer>
@endif