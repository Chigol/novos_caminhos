<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 2.4 - Operadores');
 
/*
*
*/
PHPClassSession('Atribuição', __LINE__);

$operadorA = 5;
$operators = [
    "a += 5" => ($operadorA += 5),
    "a -= 5" => ($operadorA -= 5),
    "a *= 5" => ($operadorA *= 5),
    "a /= 5" => ($operadorA /= 5),
];
var_dump($operators, $operadorA);

PHPClassSession('Comparação', __LINE__);

$incrementA = 5;
$incrementB = 5;
$increment = [
    "pós-incremento" => $incrementA++,
    "res-incremento" => $incrementA,
    "pré-incremento" => ++$incrementA,
    "pós-decremento" => $incrementB++,
    "res-decremento" => $incrementB,
    "pré-decremento" => ++$incrementB,
];

var_dump($incrementA, $incrementB, $increment);

PHPClassSession('Lógicos', __LINE__);

/*
AND
TRUE AND TRUE = true
TRUE AND FALSE =  false


OR
TRUE OR TRUE = true
TRUE OR FALSE = true
FALSE OR FALSE = FALSE

!
!TRUE = false
!FALSE = true

AND => &&
OR => ||
*/

$logicA = true;
$logicB = false;

$logic = [
    "a && b" => ($logicA && $logicB),
    "a || b" => ($logicA || $logicB),
    "!a" => (!$logicA),
    "!b" => (!$logicB),
];

var_dump($logic);

PHPClassSession('Aritméticos', __LINE__);

$calcA = 5;
$calcB = 10;

$calc = [
    "a + b" => ($calcA + $calcB),
    "a - b" => ($calcA - $calcB),
    "a * b" => ($calcA * $calcB),
    "a / b" => ($calcA / $calcB),
    "a % b" => ($calcA % $calcB),
];

var_dump($calc);