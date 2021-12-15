<?php
$numeros = [];
for($i = 0; $i < 20; $i++)
{
    $numeros[] = rand(1, 10);
}
$unicos = [];
for($i = 0; $i < count($numeros); $i++){
    if(eUnico($numeros[$i], $numeros)){
        $unicos[] = $numeros[$i];
    }
}
print "Array sorteado = ".implode($numeros, " ,").PHP_EOL;
print "Os números que não se repetem são: ".implode($unicos, " ,");

function eUnico($valor, $array){
    $repeticao = 0;
    for($i = 0;$i < count($array); $i++){
        if($array[$i] == $valor){
            $repeticao++;
        }
    }
    if($repeticao > 1){
        return false;
    }else{
        return true;
    }
}