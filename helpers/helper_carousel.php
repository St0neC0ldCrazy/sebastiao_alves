<?php 

function getTodosCarousel(){
    $resultado = selectSQL("SELECT * FROM carousel");
    return $resultado;
}

// function getObservacaoCarousel($id){
//     $resultado = selectSQLUnico("SELECT observacao FROM carousel WHERE id=$id");
//     return $resultado["observacao"];
// }

// function getTituloCarousel($id){
//     $resultado = selectSQLUnico("SELECT titulo FROM carousel WHERE id=$id");
//     return $resultado["titulo"];
// }

// function getTextoCarousel($id){
//     $resultado = selectSQLUnico("SELECT texto FROM carousel WHERE id=$id");
//     return $resultado["texto"];
// }

// function getTextoAbreviadoCarousel($id){
//     $texto = substr(getTextoCarousel($id), 0, 225) . "...";
//     return $texto;
// }

// function getImagemDesktopCarousel($id){
//     $resultado = selectSQLUnico("SELECT imagem_desktop FROM carousel WHERE id=$id");
//     return $resultado["imagem_desktop"];
// }

// function getImagemMobileCarousel($id){
//     $resultado = selectSQLUnico("SELECT imagem_mobile FROM carousel WHERE id=$id");
//     return $resultado["imagem_mobile"];
// }

// function getSaberMaisCarousel($id){
//     $resultado = selectSQLUnico("SELECT link_saber_mais FROM carousel WHERE id=$id");
//     return $resultado["link_saber_mais"];
// }

?>