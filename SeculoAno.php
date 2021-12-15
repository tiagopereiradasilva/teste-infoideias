<?php

$ano = $argv[1];
$resto = fmod($ano, 100);
if($resto){
    print intval(($ano/100)+1);
}else{
    print ($ano/100);
}