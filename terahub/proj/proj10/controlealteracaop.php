<?php

include "../../classe.php";

$obj = new clsProd();

$codprod            = filter_input(INPUT_GET,"codprod",FILTER_VALIDATE_INT);
$desc               = filter_input(INPUT_GET,"desc",FILTER_SANITIZE_SPECIAL_CHARS);
$valor              = filter_input(INPUT_GET,"valor", FILTER_VALIDATE_FLOAT);
$vencimento         = filter_input(INPUT_GET,"vencimento");

$obj->setcodprod($codprod);
$obj->setdesc($desc);
$obj->setVenc($vencimento);
$obj->setVlr($valor);

echo $obj->alteracao();

?>