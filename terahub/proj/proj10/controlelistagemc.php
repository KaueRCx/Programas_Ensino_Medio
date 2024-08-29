<?php

include "../../classe.php";

$obj = new listagemC();

$dados = $obj->listagemCli();
foreach($dados as $dd)
{
    echo '<fieldset>';
    echo "Cpf: {$dd['cpf']} <br>";
    echo "Nome: {$dd['nome']} <br>";
    echo "Cep: {$dd['cep']} <br>";
    echo "Telefone: {$dd['tel']} <br>";
    echo "Email: {$dd['email']} <br>";
    echo "Nasc: {$dd['nasc']} <br>";
    echo '</fieldset>';
}
?>