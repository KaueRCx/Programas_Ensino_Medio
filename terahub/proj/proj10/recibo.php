<?php

include "../../classe.php";

$obj = new clsProd();

$codprod            = filter_input(INPUT_GET,"codprod",FILTER_VALIDATE_INT);
$desc               = filter_input(INPUT_GET,"desc",FILTER_SANITIZE_SPECIAL_CHARS);
$valor              = filter_input(INPUT_GET,"valor");
$vencimento         = filter_input(INPUT_GET,"vencimento", FILTER_VALIDATE_FLOAT);

$obj->setcodprod($codprod);
$obj->setdesc($desc);
$obj->setVenc($vencimento);
$obj->setVlr($valor);

if (isset($_GET["inserir"]))
{
    echo $obj->inserir();
}
else if (isset($_GET["apagar"]))
{
    echo $obj->apagar();
}

?>