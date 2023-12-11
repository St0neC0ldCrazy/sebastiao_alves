<?php 

function getTodosDestaques(){
    $resultado = selectSQL("SELECT * FROM destaques");
    return $resultado;
}

?>