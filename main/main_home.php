<?php
$destaques = getTodosDestaques();
?>

<main id="conteudo">
    <!-- 1ª BOX BEM VINDO AO SITE  -->
    <div class="container-fluid">
        <div id="caixa-topo" class="row offset-md-1">
            <div id="bemvindo-caixa-imagem" class="col-auto text-center">
                <img id="bemvindo-imagem" src="<?= getImagemHome(); ?>" alt="Imagem Bem-vindo">
            </div>
            <div id="bemvindo-conteudo" class="col-10 col-md pr-md-5">
                <div id="bemvindo-titulo" class="t1">Bem-vindo ao Meu Website</div>
                <div id="bemvindo-texto" class="p pr-md-5">
                    <p> <?= getTextoAbreviadoAutor(); ?> </p>
                </div>
                <div class="botao-sabermais-bemvindo-1 mb-5 d-flex justify-content-center justify-content-md-end">
                    <a href="autor.php#caixa-topo">
                        <button class="botao-sabermais-bemvindo-2 botao-sabermais-banner"></button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- 2ª BOX ULTIMOS LIVROS + DESTAQUES DE LIVROS -->
    <div class="container livros-mainbox">
        <!-- ULTIMOS LIVROS TITULO + TEXTO -->
        <div id="ultimos-livros" class="row">
            <div class="caixa-ultimos-livros col-10 col-md">
                <div class="t1">Últimos Livros</div>
                <div class="p ultimos-livros-texto">
                    <?= getTextoUltimosLivrosHome(); ?>
                </div>
            </div>
        </div>
        <!-- DESTAQUES DE LIVROS -->
        <div id="caixa-destaques-livros" class="row">
            <!-- destaques -->
            <?php foreach($destaques as $d): ?>
                <div class="destaques-livro pb-4">
                    <img class="destaques-capa-livro" src="<?= getImagemLivro($d["id_livro"]); ?>" alt="">
                    <div class="destaques-livro-conteudo">
                        <div class="destaques-titulo destaques-titulo-margem">
                            <?= getTituloLivro($d["id_livro"]); ?>
                        </div>
                        <div class="destaques-tags destaques-tags-margem">
                            <?= $d["observacao"]; ?>
                        </div>
                        <div class="destaques-texto destaques-texto-margem p">
                            <?= getTextoAbreviadoLivro($d["id_livro"]); ?>
                        </div>
                        <form action="livros.php">
                            <button class="botao-sabermais-banner botao-destaques" name="id" value="<?= $d["id_livro"]; ?>"></button>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>