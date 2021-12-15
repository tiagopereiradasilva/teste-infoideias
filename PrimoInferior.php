<?php
$inicial = $argv[1];
$final = $argv[2];

$primos = [];
for ($contador =$inicial+1; $contador < $final; $contador++){
   if(ePrimo($contador) && $contador > 1){
       $primos[] = $contador;
   }
}

print "Encontramos ".count($primos)." números primos, são eles: ".implode($primos, " ,");

function ePrimo($valor)
{
    $divisores = 0;
    for($i = 2; $i<$valor; $i++){
        if($valor % $i == 0){
            $divisores++;
        }
    }
    if($divisores){
        return false;
    }else{
        return true;
    }
}