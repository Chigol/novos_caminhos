<?php

// Questão 1
// Considere a function incompleta abaixo e escreva um código que
// resolva o seguinte problema

// Dado um ano, retorne o século em que ele se encontra.
// O primeiro século se estende do ano 1 até e incluindo o ano 100,
// o segundo segundo século do ano 101 até e incluindo o ano 200,
// e assim sucessivamente.

//Exemplo

//Para $ano = 1905, a saída deve ser
//centuryFromYear(year) = 20;
//Pois year = 1700, a saída deve ser
//centuryFromYear(year) = 17.

//Retorno inteiro
//O número do século em que se encontra o ano.


function centuryFromYear($year){

    if(strlen($year) <= 3 && strlen($year) > 2){
        $yearSplit = str_split($year);

        // resolvendo quando o ano for com 3 algarismos
        if($yearSplit[1] == 0 && $yearSplit[2] == 0){
            return $yearSplit[0];
        }else{
            return $yearSplit[0] + 1;
        }
    }elseif(strlen($year) > 3 && strlen($year) < 5){
        $yearSplit = str_split($year, 2);

        if($yearSplit[1] == 00){
            return $yearSplit[0];
        }else{
            return $yearSplit[0] + 1;
        }
    }elseif(strlen($year) < 3 && strlen($year) > 1){
        $yearSplit = str_split($year);

        if($yearSplit[0] == 0 && $yearSplit[1] == 0){
            return $yearSplit[0] + 1;
        }else{
            return 1;
        }
    }
}

echo centuryFromYear(374);