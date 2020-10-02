<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 2.5 - Arrays e pilhas');
 
/*
*
*/
PHPClassSession('Index array', __LINE__);

$arrA = array(1,2,3);
var_dump($arrA);

$arrB = [0,1,2,3];
var_dump($arrB);

$arrayIndex = [
    "Yuri",
    "Daniel",
    "Luciano"
];
$arrayIndex[] = "Fernando";
$arrayIndex[] = "José";
var_dump($arrayIndex);

PHPClassSession('Associative array', __LINE__);

$arrayAssot = [
    "docente" => "Yuri Gomes",
    "tutor1" => "Fernando",
    "tutor2" => "Daniel",
    "tutor3" => "Luciano",
];
$arrayAssot["Supervisor"] = "José Roberto";
$arrayAssot["Class"] = "Programador WEB Novos Caminhos";
var_dump($arrayAssot);

PHPClassSession('Multidimensional array', __LINE__);

$coordenacao = [
    "Coordenação" => [
        "Coodernação Administrativa" => "Pedrinha",
        "Coodernação de Extensão" => "Jade",
    ]
];
var_dump($coordenacao);

$team = [
    $coordenacao,
    $arrayAssot,
];

var_dump($coordenacao, $team);

PHPClassSession('Array access', __LINE__);

$team = [
    "docente" => "Yuri Gomes",
    "tutor1" => "Fernando",
    "tutor2" => "Daniel",
    "tutor3" => "Luciano",
    "supervisor" => "José Roberto",
];

echo "Equipe Programador WEB" . PHP_EOL;

foreach($team as $item){
    echo "<p>$item</p>";
}

echo "Equipe Programador WEB" . PHP_EOL;

foreach($team as $key => $value){
    echo "<p>$value é o $key do time</p>";
}