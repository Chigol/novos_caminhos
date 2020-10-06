<?php
declare(strict_types=1);

use App\Template;

require __DIR__ . '/../framework/config.php';
PHPClassName('2.14 - Namespace e encapsulamento');
 
/*
*
*/
PHPClassSession('Namespace', __LINE__);

require_once __DIR__ . "/classes/app/template.php";
require_once __DIR__ . "/classes/web/template.php";

$appTemplate = new App\Template();

$webTemplate = new Web\Template();

/**
 * O namespace serve para poder diferenciar duas classes com o mesmo nome
 * exemplo:
 * tenho dois arquivos chamados tempate
 * ambos tem o nome da classe template
 * mas o namespace de um é web e o outro é app
 * quando vou sinalizar qual das duas vou usar
 * eu uso o nome da namespace e coloco \ e o nome da classe
 */

var_dump($appTemplate, $webTemplate);