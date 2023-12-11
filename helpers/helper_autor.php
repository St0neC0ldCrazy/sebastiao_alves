<?php 

function getImagemAutor(){
    $resultado = selectSQLUnico("SELECT imagem FROM autor WHERE id=1");
    return $resultado["imagem"];
}

function getTextoAutor(){
    $resultado = selectSQLUnico("SELECT texto FROM autor WHERE id=1");
    $textoRawAutor = $resultado["texto"];
    $textoAutorFormatado = nl2br($textoRawAutor);
    return $textoAutorFormatado;
}

function getTextoAbreviadoAutor(){
    $resultado = substr(getTextoAutor(),0 , 750). " (...)";
    return $resultado;
}

// usar na pagina autor
function getTextoAbreviadoPaginaAutor(){
    $resultado = substr(getTextoAutor(),0 , 450). " (...)";
    return $resultado;
}

?>