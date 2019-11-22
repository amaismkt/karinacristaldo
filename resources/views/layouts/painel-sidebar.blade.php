@if(auth()->user()->role === 'admin')
<div class="sidebar" id="sidebar">
    <div class="sidebar-header">Karina Cristaldo </div>
    <div class="items">
        <ul>
            <a href="/painel"><li class="sidebar-item">Painel</li></a>
            <a href="#"><li id="blog-item" class="sidebar-item">Blog</li></a>
            <div style="display:none;" id="blog-subitem">
                <a href="/painel/blog"><li class="sidebar-subitem"><i class="fa fa-arrow-right"></i> Publicar novo post</li></a>
                <a href="/painel/blog/posts"><li class="sidebar-subitem"><i class="fa fa-arrow-right"></i> Gerenciar posts</li></a>
            </div>
            <a href="/painel/sobre"><li class="sidebar-item">Sobre</li></a>
            <a href="/painel/contato"><li class="sidebar-item">Contato</li></a>
            <a href="/painel/procedimentos"><li class="sidebar-item">Procedimentos</li></a>
        </ul>
    </div>
</div>
@else
<div class="sidebar" id="sidebar">
    <div class="sidebar-header">Karina Cristaldo </div>
    <div class="items">
        <ul>
            <a href="/painel"><li class="sidebar-item">Painel</li></a>
            <a href="/painel/meus-dados"><li class="sidebar-item">Meus dados</li></a>
            <a href="/painel/configuracoes"><li class="sidebar-item">Configurações</li></a>
            <a href="/painel/meus-comentarios"><li class="sidebar-item">Meus comentários</li></a>
        </ul>
    </div>
</div>
@endif