<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('2.9 - Requisição de arquivos');
 
/*
* Quando for fazer a inclusão do arquivo usar o __DIR__
* Ele vai fazer a inclusão do caminho absoluto do arquivo
*/
PHPClassSession('include, include once', __LINE__);

//include "file.php";
// o include, mesmo que encontre um erro, ele prosseguirá com a execução do script

//echo "<p>Continue</p>";
include "header.php";
include __DIR__ . "/header.php";



var_dump(include_once __DIR__ . "/header.php");
// o include once apenas vai incluir o arquivo uma única vez


$profile = new stdClass();
$profile->name = "Guilherme";
$profile->company = "IFTO";
$profile->email = "guilherme.meireles92003@gmail.com";
var_dump($profile);

include __DIR__ . "/profile.php";

PHPClassSession('require, require once', __LINE__);


//require "file.php";
// o require caso ocorra um erro, ele para a execução do script
// 
echo "<p>Continue</p>";