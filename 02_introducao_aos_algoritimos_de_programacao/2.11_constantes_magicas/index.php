<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('2.11 - Constantes mágicas no PHP');
 
/*
*
*/
PHPClassSession('constantes', __LINE__);

var_dump(__LINE__);

define("COURSE", "PROGRAMADOR WEB"); // é interpretado durante a execução do script

const AUTHOR = "GOVERNO FEDERAL"; // é interpretado antes da execução

$formation = true;

if ($formation) {
    define("COURSE_TYPE", "FORMAÇÃO");
} else {
    define("COURSE_TYPE", "CURSO");
}

echo "<p>".COURSE_TYPE. " ".COURSE." do ".AUTHOR."</p>";

class Config{
    const USER = "root";
    const HOST = "localhost";
}

var_dump(get_defined_constants());
var_dump(get_defined_constants()['user']);
var_dump(get_defined_functions());
var_dump(get_defined_vars());


var_dump(
    __DIR__,
    __FILE__,
    __LINE__,
    __CLASS__
);