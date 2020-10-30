<?php

// Questão 3
// Dado um vetor de inteiros, encontre o par de elementos
// adjacentes que possui o maior produto
// e depois retorne o valor desse produto.

//Exemplo

//Pois inputArray = [3, 6, -2, -5, 7, 3], 
// o valor de retorno deve ser 21.
// pois 7 e 3 produz o maior produto.

// Retorno o maior produto
//O maior produto de elementos adjacentes.


function adjacentElementsProduct($inputArray){
    for($x = 0; $x < count($inputArray); $x++){

        $tam_array = count($inputArray);
        
            $produtoAdjacente = $inputArray[$x] * $inputArray[$x + 1];
            $valorAdjacentes1 = $inputArray[$x];
            $valorAdjacentes2 = $inputArray[$x + 1];
            echo "A produto de {$valorAdjacentes1} e {$valorAdjacentes2} é {$produtoAdjacente} <br>";
        
    }
}

$inputArray = [5, 6, -4, 2, 3, 2, -23];
adjacentElementsProduct($inputArray);