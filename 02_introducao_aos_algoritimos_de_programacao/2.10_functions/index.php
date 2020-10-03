<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('2.10 - Functions');
require __DIR__ . '/functions.php';
 
/*
*
*/
PHPClassSession('Functions', __LINE__);

var_dump(functionName("IFTO", "NOVOS CAMINHOS", "PROGRAMADOR WEB"));
var_dump(functionName("GUILHERME", "MATEUS", "RESELAINE"));

var_dump(calcIMC(100, 2));

PHPClassSession('Global access', __LINE__);

$weight = 100;
$height = 2;

var_dump(calcIMC_Global(100, 2));

PHPClassSession('Static arguments', __LINE__);

$pay = payTotal(200);
$pay = payTotal(150);
$pay = payTotal(500);

var_dump($pay);

PHPClassSession('Dinamic arguments', __LINE__);

var_dump(myTeam());
var_dump(myTeam("Fernando"));
var_dump(myTeam("Yuri", "Daniel", "Mateus"));