<?php 

function functionName($arg3,$arg2,$arg1){
     $body = [$arg3,$arg2,$arg1];
     return $body;
}

function calcIMC($weight, $height){
    return $weight / ($height ** 2);
}

function calcIMC_Global(){
    global $weight;
    global $height;
    return $weight / ($height ** 2);
}

function payTotal($price){
    static $total;
    $total  += $price;
    return "<>O total a pagar é ". number_format($total, "2", "," , ".") . "</p>";
}

function myTeam(){
    $teamName = func_get_args();
    $teamCount = func_num_args();

    return ["members" => $teamName, "count" => $teamCount];
}