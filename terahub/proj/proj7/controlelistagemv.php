<?php

include "../../classe.php";

$obj = new listagemV();

$l          = filter_input(INPUT_GET,"l1");

$obj->setListagem($l);

$dados = $obj->listagemVe();
foreach($dados as $dd)
{
    echo "Codigo da venda: {$dd['codv']} <br>";
    echo "Quantidade: {$dd['qtd']} <br>";
    echo "Data: {$dd['dat']} <br>";
    echo "Tipo de pagamento: {$dd['pagto']} <br>";
}
?>