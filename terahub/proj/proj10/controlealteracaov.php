<?php

include "../../classe.php";

$obj = new clsVendas();

$codv               = filter_input(INPUT_GET,"codv",FILTER_VALIDATE_INT);
$qtd                = filter_input(INPUT_GET,"qtd");
$pgt                = filter_input(INPUT_GET,"pgt");
$date               = filter_input(INPUT_GET,"date");

$obj->setCodv($codv);
$obj->setDate($date);
$obj->setPgt($pgt);
$obj->setQtd($qtd);

echo $obj->alteracao();

?>