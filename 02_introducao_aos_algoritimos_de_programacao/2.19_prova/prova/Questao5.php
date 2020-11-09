<?php

// Questão 5
// Dada uma sequência de inteiros como um array,
// determine se é possível obter uma sequência
// estritamente crescente removendo não mais do que um elemento do array.

//Exemplo

// Se $sequence = [1, 3, 2, 1], a saída deve ser false
// Não há nenhum elemento neste array que possa ser
// removido para obter uma sequência estritamente crescente.

// Se $sequence = [1, 3, 2], a saída deve ser true.
// Você pode remover 3 do vetor para obter a sequência
// estritamente crescente [1, 2]. 
// Como alternativa, você pode remover 2 para obter a
// sequência estritamente crescente [1, 3].

function almostIncreasingSequence($sequence) {
    $isSequence = false;
    $sequenceCount = count($sequence);
    $isSequenceCount = 0;
    
    for ($i=0;$i<$sequenceCount-1;$i++){
        if ($sequence[$i]>=$sequence[$i+1]){
            if ($i > 0 && 
                $sequenceCount > $i + 2 && 
                $sequence[$i-1]>=$sequence[$i+1] &&
                $sequence[$i]>=$sequence[$i+2] 
               ){
                return "false";
            } else
                $isSequenceCount++;
        }
        if($isSequenceCount >= 2)
            return "false";
    }
    return "true";
}

$sequence = [3, 5, 67, 98, 3];
echo almostIncreasingSequence($sequence);