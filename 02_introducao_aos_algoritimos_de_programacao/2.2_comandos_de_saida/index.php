<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 02 - Comandos de saída');
 
/*
*
*/
PHPClassSession('echo', __LINE__);

echo "<p>Olá mundo!</p>";
echo "</p>" . 23 . "</p>";

$hello = "<p>Olá mundo!</p>";
echo "<p>$hello</p>";

PHPClassSession('print_r', __LINE__);

$array = [
    "company" => "IFTO",
    "course" => "Programador WEB",
    "class" => "Comandos de Saída"
];

echo "<pre>";
print_r($array);
echo "</pre>";

PHPClassSession('var_dump', __LINE__);

$company = "IFTO";
var_dump($array, $hello, $company);