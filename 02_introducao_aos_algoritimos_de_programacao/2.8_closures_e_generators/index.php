<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('2.8 - Clousers e generators');
 
/*
*
*/
PHPClassSession('Clousers', __LINE__);

$myAge = function ($year){
    $age = Date('Y') - $year;
    return "<h5>Você tem $age anos</h5>";
};

echo $myAge(2003);

$priceBRL = function ($price){
    return number_format($price, 2, ",", ".");
};

echo "<p>Os futuros projetos dos alunos dos novos caminhos custarão R$: {$priceBRL(3600)}</p>";

$myCart = [];
$myCart['totalPrice'] = 0;

$cardADD = function($item, $qtd, $price) use (&$myCart){
    $myCart[$item] = $qtd * $price;
    $myCart['totalPrice'] += $myCart[$item];

};

$cardADD("INFRAESTRUTURA DO DESENVOLVIMENTO",1,600);
$cardADD("ALGORITMOS DE PROGRAMAÇÃO",2,600);

var_dump($myCart);

PHPClassSession('Generators', __LINE__);

$iterator = 100;

function showDates($days)
{
    $saveDate = [];
    for ($day = 0; $day < $days; $day++) {
        $saveDate[] = Date("d/m/Y", strtotime("+{$day}days"));
    }

    return $saveDate;
}

echo "<div>";
foreach(showDates($iterator) as $date){
    echo "<small class='tag'>$date</small>" . PHP_EOL;
}
echo "</div>";

function generatorDates($days)
{
    for ($day = 0; $day < $days; $day++) {
        yield Date("d/m/Y", strtotime("+{$day}days"));
    }
}

echo "<div style='text-align: center;'>";
foreach(generatorDates($iterator) as $date){
    echo "<small class='tag'>$date</small>" . PHP_EOL;
}
echo "</div>";