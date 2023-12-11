<main id="conteudo">
    <div class="container-fluid">
        <!-- 1ª CAIXA TEXTO-->
        <div id="caixa-topo" class="row offset-md-1 pt-1 pl-4">
            <div class="col titulo-autor mt-5 ml-2 ml-md-5">Autor</div>
            <div class="w-100"></div>
            <div class="col subtitulo-autor destaques-titulo mt-2 ml-2 ml-md-5 mb-3">Sobre mim</div>
        </div>
        <!-- 2ª CAIXA IMAGEM + TEXTO-->
        <div class="container" style="margin-top: 50px; padding-left: 15px; padding-right: 25px;">
            <div id="autor-texto" class="col-11 p mx-auto" style="margin: auto;">
                <p><img style="text-align: center; display: block; margin-left: auto; margin-right: auto; margin-bottom: 40px;" src="<?= getImagemAutor(); ?>" alt="" width="300" height="221"></p>
                <div class="d-none d-md-block">
                    <p> <?= getTextoAutor(); ?> </p>
                </div>
                <div class="d-md-none">
                    <p> <?= getTextoAbreviadoPaginaAutor(); ?> </p>
                </div>
            </div>
            <div class="d-md-none" style="margin-top: -20px;"></div>
            <div class="col-11 mx-auto text-md-left voltar-atras d-none d-md-block" style="margin-top: 70px; margin-bottom: -31px;">
                <button class="botao-voltar-atras" onclick="voltarAtras(event)"></button>
            </div>
            <div class="col-11 mx-auto text-md-left ver-mais d-md-none" style="margin-top: 70px; margin-bottom: -31px;">
                <button class="botao-ver-mais"></button>
            </div>
        </div>
    </div>
</main>
