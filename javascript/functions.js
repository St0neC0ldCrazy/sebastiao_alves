function botaoHamburguer() {
    const toggleButton = document.querySelector('.navbar-toggler');
    const menuTopo = document.getElementById('menu-topo');
    const botaoMenuImagem = document.getElementById('botao-menu-imagem');

    toggleButton.classList.toggle('collapsed');
    menuTopo.classList.toggle('active');
    const isActive = menuTopo.classList.contains('active');
    
    botaoMenuImagem.src = isActive ? 'images/desktop/menu-burger/fechar.svg' : 'images/desktop/menu-burger/menu.svg';
}

function redireccionarParaLivros() {
    window.location.href = '#livros-link-header';
    setTimeout(() => {
        $('#livros-link-header').dropdown('toggle');
    }, 250); 
}

function voltarAtras(event) {
    event.preventDefault();
    setTimeout(function () {
        window.history.back();
    }, 250);
}

