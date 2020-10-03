<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('2.7 - Estruturas de repetição');
 
/*
* Estruturas de repetição
*/
PHPClassSession('While, do while', __LINE__);

$looping = 1;
$while = [];

while ($looping <= 10) {
    $while[] = $looping;
    $looping++;
}

var_dump($while);

$looping = 10;
$while = [];

do {
    $while[] = $looping;
    $looping--;
} while($looping >= 1);

var_dump($while);

PHPClassSession('For', __LINE__);

for ($i = 0; $i < 10; $i++) {
    echo "<p>$i</p>";
}

PHPClassSession('Breack, continue', __LINE__);

$payment = "credit_card";

for ($c = 0; $c < 10; $c++) {
    if($c % 2 == 1){
        continue;
    }elseif($c >= 10){
    break;
    }

    echo "<p>Pulou + 2 :: $c</p>";
}

PHPClassSession('Foreach', __LINE__);

$array = [];

for ($i = 10; $i < 20; $i++) {
    $array[] = $i;
}

foreach ($array as $key => $value) {
    var_dump("$key = $value");
}

var_dump($array);