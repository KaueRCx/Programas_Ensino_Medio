<?php

include "../../classe.php";

$obj = new cliente();

$cpf                = filter_input(INPUT_GET,"cpf",FILTER_VALIDATE_INT);
$nome               = filter_input(INPUT_GET,"nome",FILTER_SANITIZE_SPECIAL_CHARS);
$cep                = filter_input(INPUT_GET,"cep");
$tel                = filter_input(INPUT_GET,"tel");
$email              = filter_input(INPUT_GET,"email");
$nasc               = filter_input(INPUT_GET,"nasc");

$obj->setCpf($cpf);
$obj->setNome($nome);
$obj->setCep($cep);
$obj->setTel($tel);
$obj->setEmail($email);
$obj->setNasc($nasc);

echo $obj->alteracao();

?>