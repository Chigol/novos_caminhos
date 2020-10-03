<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('2.12 - Manipulando vetores');
 
/*
*
*/
PHPClassSession('Manipulação', __LINE__);

$index = [
    "FRONT END DEVELOPER",
    "BACK END DEVELOPER",
    "FULLSTACK DEVELOPER",
];

$assoc = [
    "dev1" => "FRONT END DEVELOPER",
    "dev2" => "BACK END DEVELOPER",
    "dev3" => "FULLSTACK DEVELOPER",
];

array_unshift($index, "", "FULL CYCLE DEVELOPER");
$assoc = ["dev4" => "FULL CYCLE DEVELOPER"] + $assoc;

array_push($index, "DEVOPS");
$assoc = $assoc + ["dev5" => "DEVOPS"];
/*
array_shift($index);
array_shift($assoc);

array_pop($index);
array_pop($assoc);
*/
//var_dump($index, $assoc);

PHPClassSession('Ordenação', __LINE__);

$index = array_reverse($index);
$index = array_reverse($assoc);
// inverte os valores do array

asort($index);
asort($assoc);
//faz a ordenação de acordo com o alfabeto de acordo com os valores

ksort($index);
ksort($assoc);
// faz a ordenação de acordo mas seguindo o índice ou chave

sort($index);


var_dump($index, $assoc);

PHPClassSession('Verificação', __LINE__);

var_dump([
    [
        array_keys($assoc),
        // extrai as chaves e as transforma em valores
        array_values($assoc),
        // extrai os valores
    ]
]);

if (in_array("FRONT END DEVELOPER", $assoc)) {
    echo "<p>Existe um developer</p>";
}

$arrToString = implode(", ", $assoc);
// transformamos um array em uma string, separamos cada valor do array
echo "<p>Eu sou $arrToString</p>";
echo "<p>$arrToString</p>";

var_dump(explode(", ", $arrToString));
// transforma uma string em array

PHPClassSession('Exemplo prático', __LINE__);

$profile = [
    "name" => "Yuri",
    "company" => "IFTO",
    "email" => "blabla@gmail.com",
];

$template = <<<TPL
<article>
    <h1>{{name}}</h1>
    <p>{{company}}</p><br>
    <a href="mailto{{mail}}">Enviar email</a>
</article>
TPL;

echo $template;

echo str_replace(
    array_keys($profile),
    array_values($profile),
    $template,
);

$replaces = "{{" . implode("}}&{{", array_keys($profile)) . "}}";

var_dump(explode("&", $replaces));

echo str_replace(
    explode("&", $replaces),
    array_values($profile),
    $template,
);