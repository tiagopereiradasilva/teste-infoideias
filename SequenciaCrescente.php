<?php
$array = [3, 6, 5, 8, 10, 20, 15];

var_dump(eValido($array));

function eValido($array){
    for($i = 0; $i < count($array); $i++){
        $arrayAux = $array;
        $arrayAux = remover($i, $arrayAux);
        if(eCrescente($arrayAux)){
            return true;
        }
    }
    return false;
}

function remover($index, $array){
    unset($array[$index]);
    return $array;
}

function eCrescente($array){
    $arrayOrdenado = $array;
    $arrayOrdenado = ajustarArray($arrayOrdenado);
    sort($arrayOrdenado, SORT_NUMERIC);

    $array = ajustarArray($array);

    for($i = 0; $i < count($array); $i++){
        if($array[$i] !== $arrayOrdenado[$i]){
            return false;
        }
    }
    return true;
}

function ajustarArray($array){
    return explode(",", implode($array, ","));
}
