<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Variáveis e tipos de dados');
 
/*
*
*/
PHPClassSession('Variáveis', __LINE__);

$firstName = "Guilherme";
$lastName = "Meireles";

echo "<h3>$firstName $lastName</h3>";

$userEmail = "<p>guilherme.meireles92003@gmail.com</p>";
echo $userEmail;

PHPClassSession("Boleano", __LINE__);

$true = true;
$false = false;

var_dump($true, $false);

$userAge = 23;
$bestAge = ($userAge > 50);
var_dump($bestAge);

$a = 0;
$b = 0.0;
$c = "";
$d = [];
$e = null;

var_dump($a, $b, $c, $d, $e);

if($a || $b || $c || $d || $e){
    var_dump(true);
}else{
    var_dump(false);
}


PHPClassSession("Callbacks", __LINE__);

$code = "<article><h1>Call Back</h1></article>";

$codeClear = call_user_func("strip_tags", $code);
var_dump($code, $codeClear);

PHPClassSession("Outros tipos", __LINE__);

$string = "string";
$array = [$string];
$null = null;
$int = 12345;
$float = 2.2;

var_dump($string, $array, $null, $int, $float);