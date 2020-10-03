<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 2.6 - Estruturas de Controle');
 
/*
*
*/
PHPClassSession('If, Elseif, Else', __LINE__);

$test = true;

if($test){
    var_dump(true);
}else{
    var_dump(false);
}

$age = 51;

if($age < 20){
    var_dump("IFTO");
}elseif($age > 20 && $age < 50){
    var_dump("PROGRAMADOR WEB");
}else{
    var_dump("NOVOS CAMINHOS");
}

PHPClassSession('Isset, Empty, !', __LINE__);

$time = "Seleção Brasileira";
if(isset($time)){
    var_dump("TODO VASCAINO É SOFREDOR");
}else{
    var_dump("O PALMEIRAS NÃO TEM MUNDIAL");    
}

if(!empty($time)) {
    var_dump("PROGRAMADOR WEB");
} else {
    var_dump("NOVOS CAMINHOS");
}

PHPClassSession('Switch', __LINE__);

$payment = "credit_card";

switch ($payment) {
    case "billet_printed":
        var_dump("Boleto Impresso");
        break;
    case "canceled":
        var_dump("Pagamento cancelado");
        break;
    case "approved":
    case "completed":
        var_dump("Pagamento aprovado");
        break;
    default:
        var_dump("Erro ao processar o pagamento");
        break;
}