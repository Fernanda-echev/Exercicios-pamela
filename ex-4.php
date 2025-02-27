<?php

function calcular_area($larg, $comp){

    echo 'Largura: ',$larg;
    echo '<br>';
    echo 'Comprimento: ',$comp;
    echo '<br>';
    echo 'Área calculada: ';

    $area = $larg * $comp;

    return $area;
}



$f=calcular_area(9, 6);
echo $f;
?>