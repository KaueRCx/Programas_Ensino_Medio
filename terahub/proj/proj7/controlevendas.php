<?php

include "../../classe.php";

$obj = new clsVendas();

$codv           = filter_input(INPUT_GET,"codv",FILTER_VALIDATE_INT);
$qtd            = filter_input(INPUT_GET,"qtd");
$date           = filter_input(INPUT_GET,"date");
$pgt            = filter_input(INPUT_GET,"pgt");

$obj->setCodv($codv);
$obj->setQtd($qtd);
$obj->setDate($date);
$obj->setPgt($pgt);

if (isset($_GET["inserir"]))
{
    echo $obj->inserir();
}
else if (isset($_GET["apagar"]))
{
    echo $obj->apagar();
}

?>