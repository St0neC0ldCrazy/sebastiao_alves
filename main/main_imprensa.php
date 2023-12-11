<?php

$imprensa = getTodosImprensa();

$pagina_actual = isset($_GET['page']) ? intval($_GET['page']) : 1;

// Máximo de publicações por página
$items_pagina = 2;

// Calcular o offset para a página actual
$offset = ($pagina_actual - 1) * $items_pagina;

// Subconjunto de publicações para a página actual
$subconjunto_imprensa = array_slice($imprensa, $offset, $items_pagina);

?>

<main id="conteudo">
    <div class="container-fluid">
        <!-- 1ª CAIXA TEXTO-->
        <div id="caixa-topo" class="row offset-md-1 pt-1 pl-4">
            <div class="col titulo-autor mt-5 ml-2 ml-md-5">Imprensa</div>
            <div class="w-100"></div>
            <div class="col subtitulo-autor destaques-titulo mt-2 ml-2 ml-md-5 mb-3">Últimas Notícias</div>
        </div>
    </div>

    <div class="container" style="margin-top: 65px;">
        <!-- CONTEUDO IMPRENSA (automatizar)-->
        <div class="container">
            <div class="col-10 mx-auto">
                <?php foreach ($subconjunto_imprensa as $i): ?>
                    <div class="row t1" style="padding-left: 12px;"><?= getTituloImprensa($i["id"]); ?></div>
                    <div class="row linha-imprensa"></div>
                    <div class="row data-publicacao d-flex justify-content-end" style="margin-bottom: 40px;"><?= getDataPublicacaoImprensa($i["id"]); ?></div>
                    <div class="row d-flex justify-content-center">
                        <img class="mb-5" src="<?= getImagemImprensa($i["id"]); ?>" style="width: 100%; height: 100%;" alt="Imagem Publicação <?php echo $i['id']; ?>">
                    </div>
                    <div class="texto-imprensa d-block" style="width:100%;"><?= getTextoImprensa($i["id"]); ?></div>
                    <?php if ($i === end($subconjunto_imprensa)): ?>
                        <!-- This is the last publication, do not include the separator -->
                    <?php else: ?>
                        <!-- SEPARADOR NOTICIAS FULL WIDTH 1280px -->
                        <div class="linha-noticias"></div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- NAV BAR PAGINAÇÃO -->
    <nav id="nav-paginacao">
        <ul class="paginacao">
            <li class="page-item">
                <a class="seta-esquerda" href="?page=<?= max($pagina_actual - 1, 1); ?>">
                    <button class="esquerda-seta"></button>
                </a>
            </li>
            <?php for ($i = 1; $i <= ceil(count($imprensa) / $items_pagina); $i++): ?>
                <li class="page-item<?= $i === $pagina_actual ? ' active' : ''; ?>">
                    <a class="page-link numero" href="?page=<?= $i; ?>"><?= $i; ?></a>
                </li>
            <?php endfor; ?>
            <li class="page-item">
                <a class="seta-direita" href="?page=<?= min($pagina_actual + 1, ceil(count($imprensa) / $items_pagina)); ?>">
                    <button class="direita-seta"></button>
                </a>
            </li>
        </ul>
    </nav>
</main>