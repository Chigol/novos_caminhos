<?php

// Questão 6
// Dada uma matriz de strings, 
// retorna outra matriz contendo
// todas as suas strings mais longas.

//Exemplo

// Se inputArray = ["aba", "aa", "ad", "vcd", "aba"], 
// o valor de retorno ["aba", "vcd", "aba"].

function allLongestStrings($inputArray){
    $maiores_elementos = [];
    $valor_maior_elemento = 0;

    foreach($inputArray as $value){
        $valor_maior_elemento = max($valor_maior_elemento, strlen($value));
    }
    

    foreach($inputArray as $value2){
        if(strlen($value2) == $valor_maior_elemento){
            $maiores_elementos[] = $value2;
        }
    }

    return $maiores_elementos;
}

$inputArray = ["a", "abc", "cbd", "zzzzzz", "a", "abcdef", "asasa", "aaaaaa"];
print_r(allLongestStrings($inputArray));