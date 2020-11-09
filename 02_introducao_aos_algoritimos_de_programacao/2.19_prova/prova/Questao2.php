<?php

// Questão 2
// Considere a function incompleta abaixo e escreva um código que
// resolva o seguinte problema

//Dada uma váriavel $inputString, verifique se é um palíndromo .

//Exemplo

//Para inputString = "aabaa", o valor de retorno deve ser true;

//Para inputString = "abac", o valor de retorno deve ser false;

//Resultado booleano
// true se inputString é um palíndromo,
// false se caso contrário.

function tirarAcentosEspacos($number){
    return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"), str_replace(" ", "", $number));
}


function Palindrome($number){   
    
    /**
     * Retirando acentos, espaços e letras maúsculas
     */
    $strFormat = tirarAcentosEspacos($number);
    $strFormat = strtolower($strFormat);

    $reverso = strrev(trim($strFormat));

    if($strFormat == $reverso){
        return true;
    }else{
        return false;
    }
}

$retorno = Palindrome("zzzazzazz");

if($retorno){
    echo "Palíndromo";
}else{
    echo "Não palíndromo";
}