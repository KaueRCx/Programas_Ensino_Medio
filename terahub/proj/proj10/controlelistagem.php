<?php

include "../../classe.php";

$obj = new listagemP();

$l1          = filter_input(INPUT_GET,"l1");
$ld1         = filter_input(INPUT_GET,"ld1");
$ld2         = filter_input(INPUT_GET,"ld2");
$lista       = filter_input(INPUT_GET,"listar");

$obj->setDataI($ld1);
$obj->setDataF($ld2);
$obj->setListagemCD($l1);



if ($lista == "listar2")
{
    $dados = $obj->listagemCD();
    foreach($dados as $Dd)
    {
        echo '<fieldset>';
        echo "Codigo do produto: {$Dd['codprod']} <br>";
        echo "Descrição: {$Dd['descricao']} <br>";
        echo "Valor: {$Dd['valor']} <br>";
        echo "Vencimento: {$Dd['vencimento']} <br> <br>";
        echo '</fieldset>';
    }  
}
else if ($lista == "listar")
{
    $dados = $obj->listagemData();
    foreach($dados as $Dd)
    {
        echo '<fieldset>';
        echo "Codigo do produto: {$Dd['codprod']} <br>";
        echo "Descrição: {$Dd['descricao']} <br>";
        echo "Valor: {$Dd['valor']} <br>";
        echo "Vencimento: {$Dd['vencimento']} <br> <br>";
        echo '</fieldset>';
    }
}

?>