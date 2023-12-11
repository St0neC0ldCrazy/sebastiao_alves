<?php 

function getTodosImprensa() {
    $resultado = selectSQL("SELECT * FROM imprensa ORDER BY id DESC");
    return $resultado;
}

function getTituloImprensa($id){
    $resultado = selectSQLUnico("SELECT titulo FROM imprensa WHERE id=$id");
    return $resultado["titulo"];
}

function getTextoImprensa($id) {
    $resultado = selectSQLUnico("SELECT texto FROM imprensa WHERE id=$id");
    $textoRawImprensa = $resultado["texto"];
    $textoFormatadoImprensa = nl2br($textoRawImprensa);
    return $textoFormatadoImprensa;
}

function getTextoAbreviadoImprensa($id){
    $texto = substr(getTextoImprensa($id), 0, 225) . "...";
    return $texto;
}

function getImagemImprensa($id){
    $resultado = selectSQLUnico("SELECT imagem FROM imprensa WHERE id=$id");
    return $resultado["imagem"];
}

function getDataPublicacaoImprensa($id){
    $resultado = selectSQLUnico("SELECT data_publicacao FROM imprensa WHERE id=$id");
    return $resultado["data_publicacao"];  
}

?>