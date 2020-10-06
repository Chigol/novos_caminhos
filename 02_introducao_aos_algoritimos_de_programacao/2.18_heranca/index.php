<?php
declare(strict_types=1);


use classes\address;
use classes\event;
use classes\eventLive;
use classes\eventOnline;

require_once __DIR__ . '/../framework/config.php';
require_once __DIR__ . '/../vendor/autoload.php';
PHPClassName('2.18 - Herança');

/*
*
*/
PHPClassSession('Classe pai', __LINE__);

$eventPai = new event("LIVE TIRA DÚVIDAS",
new DateTime("2020-09-21 20:00"),
5000,
"4"
);

var_dump($eventPai);

$eventPai->register("Yuri Gomes", "yuri.oliveiraifto.edu.com.br");
$eventPai->register("José Roberto", "jose.roberto.edu.com.br");
$eventPai->register("Fernando Arantes", "fernando.arantes.edu.com.br");
$eventPai->register("Daniel Canoli", "daniel.canoli.edu.com.br");
$eventPai->register("Luciano Ribeiro", "luciano.ribeiro.edu.com.br");

PHPClassSession('Classe filha', __LINE__);

$address = new address("Rua das Pitombeiras", 20, "Próximo a UFT");

$eventFilho = new eventLive("LIVE TIRA DÚVIDAS",
new DateTime("2020-09-21 20:00"),
5000,
"4",
$address
);

var_dump($eventFilho);

$eventFilho->register("Yuri Gomes", "yuri.oliveiraifto.edu.com.br");
$eventFilho->register("José Roberto", "jose.roberto.edu.com.br");
$eventFilho->register("Fernando Arantes", "fernando.arantes.edu.com.br");
$eventFilho->register("Daniel Canoli", "daniel.canoli.edu.com.br");
$eventFilho->register("Luciano Ribeiro", "luciano.ribeiro.edu.com.br");

PHPClassSession('Polimorfismo', __LINE__);

$eventOnline = new eventOnline(
    "LIVE TIRA DÚVIDAS",
    new DateTime("2020-09-21 20:00"),
    5000,
    "https://google.classrom.com"
);

$eventOnline->register("Yuri Gomes", "yuri.oliveiraifto.edu.com.br");
$eventOnline->register("José Roberto", "jose.roberto.edu.com.br");
$eventOnline->register("Fernando Arantes", "fernando.arantes.edu.com.br");
$eventOnline->register("Daniel Canoli", "daniel.canoli.edu.com.br");
$eventOnline->register("Luciano Ribeiro", "luciano.ribeiro.edu.com.br");

var_dump($eventOnline);