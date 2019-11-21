@if(auth()->user()->role === 'admin')
<div class="sidebar" id="sidebar">
    <div class="sidebar-header">Karina Cristaldo </div>
    <div class="items">
        <ul>
            <a href="/painel" class="sidebar-item"><li>Painel</li></a>
            <a href="/painel/blog" class="sidebar-item"><li>Blog</li></a>
            <a href="/painel/sobre" class="sidebar-item"><li>Sobre</li></a>
            <a href="/painel/contato" class="sidebar-item"><li>Contato</li></a>
            <a href="/painel/procedimentos" class="sidebar-item"><li>Procedimentos</li></a>
        </ul>
    </div>
</div>
@else
<div class="sidebar" id="sidebar">
    <div class="sidebar-header">Karina Cristaldo </div>
    <div class="items">
        <ul>
            <a href="/painel" class="sidebar-item"><li>Painel</li></a>
            <a href="/painel/meus-dados" class="sidebar-item"><li>Meus dados</li></a>
            <a href="/painel/configuracoes" class="sidebar-item"><li>Configurações</li></a>
            <a href="/painel/meus-comentarios" class="sidebar-item"><li>Meus comentários</li></a>
        </ul>
    </div>
</div>
@endif