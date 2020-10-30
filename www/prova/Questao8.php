<?php

// Questão 8

// Os números dos ingressos geralmente consistem
// em um número par de dígitos.
// Considere para essa questão que um número
// de bilhete é considerado de sorte
// se a soma da primeira metade dos dígitos
// for igual à soma da segunda metade.

// Dado um número de bilhete n, determine se é sorte ou não.

// Exemplo

// Para $n = 1230, o retorno deve ser  true;
// Para $n = 239017, o retorno deve ser false;

function isLucky($n){
    $tam = strlen($n);
    
    $metade = $tam / 2;

    $array_metade = str_split($n, $metade);

    $metade_1 = str_split($array_metade[0], 1);

    $soma_metade_1 = 0;    

    foreach($metade_1 as $value){
        $soma_metade_1 += $value;
    }

    $metade_2 = str_split($array_metade[1], 1);
    
    $soma_metade_2 = 0;    

    foreach($metade_2 as $valor){
        $soma_metade_2 += $valor;
    }
    if($soma_metade_1 == $soma_metade_2){
        return "true";
    }else{
        return "false";
    }
}

$n = 261534;
echo isLucky($n);