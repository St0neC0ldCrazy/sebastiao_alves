<?php
$livroId = isset($_GET['id']) ? intval($_GET['id']) : null;
?>
<main id="conteudo">
    <div class="container-fluid">
        <!-- 1ª CAIXA TEXTO-->
        <div id="caixa-topo" class="row offset-md-1 pt-1 pl-4">
            <div class="col titulo-autor mt-5 ml-2 ml-md-5">Livros</div>
            <div class="w-100"></div>
            <!-- linkar titulo bd -->
            <div class="col subtitulo-autor destaques-titulo mt-2 ml-2 ml-md-5 mb-3"><?= getTituloLivro($livroId); ?></div>
        </div>
        <!-- 2ª CAIXA IMAGEM + TEXTO LATERAL-->
        <div class="container" style="margin-top: 65px;">
    <div class="col-11 col-md-12 col-lg-10 p mx-auto conteudo-margem">
        <div class="row img-texto">
            <div id="conteudo-caixa-livro" class="col-auto">
                <!-- linkar imagem bd -->
                <img id="conteudo-capa" class="row capa-livro" src="<?= getImagemLivro($livroId); ?>" alt="Livro <?= $livroId; ?>">
            </div>
            <div id="conteudo-caixa-texto" class="col d-flex flex-column">
                <!-- linkar texto bd -->
                <div id="conteudo-texto" class="row flex-grow-1">
                    <p><?= getTextoLivro($livroId); ?></p>
                </div>
                <div class="conteudo-voltar-atras d-flex justify-content-md-end">
                    <button class="botao-voltar-atras" onclick="voltarAtras(event)"></button>
                </div>
            </div>
        </div>        
    </div>
</main>

