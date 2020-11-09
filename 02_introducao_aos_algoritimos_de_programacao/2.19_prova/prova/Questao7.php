<?php

// Questão 7
// Dadas duas strings, encontre o
// número de caracteres comuns entre elas.

//Exemplo

//Para $s1 = "aabcc"e $s2 = "adcaa", o retorno deve ser 3.
//As strings têm 3 caracteres comuns 2 "a" e 1"c".

function commonCharacterCount(string $s1,string $s2){
    
    $array_1 = str_split($s1);
    $array_2 = str_split($s2);
    $result = 0;

    foreach($array_1 as $value){
        if(in_array($value, $array_2)){
            $result++;

            foreach($array_2 as $chave => $valor){
                if($valor == $value){
                    unset($array_2[$chave]);
                break;
                }
            }
        }
    }
    return $result;
}

$s1 = "zzzz";
$s2 = "zzzzzzz";

echo commonCharacterCount($s1, $s2);