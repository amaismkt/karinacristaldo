<nav class="navbar topbar navbar-expand-lg navbar-light bg-light">
    <div class="col-md-10">
        <span class="topbar-item"><b><i class="fa fa-map-marker"></i></b> Av. Paulista, 491 Conj. 73/74 - 7º andar, Cerqueira César</span>
        <span class="topbar-item"><b><i class="fa fa-clock-o"></i></b> Seg. à Sex. das 10h às 20h</span>
        <span class="topbar-item"><b><i class="fa fa-phone"></i></b> (011) 3373-1900</span>
        <span class="topbar-item"><a href="#" class="button"><b>ESPECIALIDADES MAIS PROCURADAS</b></a></span>
    </div>
    <div class="col-md-2 social-icons">
        <a href="#"><i class="social-icon fa fa-facebook"></i></a>
        <a href="#"><i class="social-icon fa fa-instagram"></i></a>
        <a href="#"><i class="social-icon fa fa-twitter"></i></a>
    </div>
</nav>

<nav class="navbar bottombar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand logo" href="#">
        <img src="{{asset('assets/img/logo.png')}}" width="200px" alt="Karina Cristaldo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto main-menu">
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }} {{ Request::is('home') ? 'active' : '' }}">
                <a class="nav-link menu-item" href="home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ Request::is('sobre') ? 'active' : '' }}">
                <a class="nav-link menu-item" href="sobre">Sobre</a>
            </li>
            <li class="nav-item {{ Request::is('procedimentos') ? 'active' : '' }}">
                <a class="nav-link menu-item" href="#">Procedimentos</a>
            </li>
            <li class="nav-item {{ Request::is('blog') ? 'active' : '' }}">
                <a class="nav-link menu-item" href="blog">Blog</a>
            </li>
            <li class="nav-item {{ Request::is('eventos') ? 'active' : '' }}">
                <a class="nav-link menu-item" href="eventos">Eventos</a>
            </li>
            <li class="nav-item  {{ Request::is('contato') ? 'active' : '' }}">
                <a class="nav-link menu-item" href="contato">Contato</a>
            </li>
        </ul>
    </div>
</nav>