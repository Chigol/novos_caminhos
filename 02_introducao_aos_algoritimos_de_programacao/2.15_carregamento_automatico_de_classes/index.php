<?php
declare(strict_types=1);

use source\address;
use source\company;
use source\user;

require __DIR__ . '/../framework/config.php';
PHPClassName('2.15 - Carregamento automático de classes');



PHPClassSession('Autoload com composer', __LINE__);

require_once __DIR__ . "/vendor/autoload.php";

$user = new user();
$company = new company();
$address = new address();

var_dump($user, $company, $address);