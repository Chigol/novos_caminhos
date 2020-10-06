<?php

declare(strict_types=1);

require __DIR__ . '/../framework/config.php';
PHPClassName('2.13 - Classes, propriedades e objetos');
 
/*
*
*/
PHPClassSession('Classes e objetos', __LINE__);

require_once __DIR__ . "/classes/user.php";

$user = new User();
var_dump($user);

PHPClassSession('Propriedades', __LINE__);

$user->setFirstName("Guilherme");
$user->lastName = "Meireles";

var_dump($user, $user->getFirstName());

PHPClassSession('Métodos', __LINE__);

if(!$user->setEmail("guilherme.meireles92003@gmail.com")){
    echo "<p class='trigger error'>O email {$user->getEmail()} não é válido!</p>";
}

var_dump($user);