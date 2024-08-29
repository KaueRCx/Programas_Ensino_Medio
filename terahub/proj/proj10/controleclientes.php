<?php

include "../../classe.php";

$obj = new cliente();

$cpf            = filter_input(INPUT_GET,"cpf",FILTER_VALIDATE_INT);
$nome           = filter_input(INPUT_GET,"nome");
$cep            = filter_input(INPUT_GET,"cep");
$tel            = filter_input(INPUT_GET,"tel");
$email          = filter_input(INPUT_GET,"email");
$nasc           = filter_input(INPUT_GET,"nasc");

$obj->setCpf($cpf);
$obj->setNome($nome);
$obj->setCep($cep);
$obj->setTel($tel);
$obj->setEmail($email);
$obj->setNasc($nasc);

if (isset($_GET["inserir"]))
{
    echo $obj->inserir();
}
else if (isset($_GET["apagar"]))
{
    echo $obj->apagar();
}
