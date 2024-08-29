<?php

$codigo    = $_GET["codigo"];
$descricao = $_GET["descricao"];
$qtde      = $_GET["qtde"];
$valor     = $_GET["valor"];
$venc      = $_GET["venc"];
$pag_vista = $_GET["pagamento"];

$valor_total = $valor * $qtde;

if ($pag_vista == "V")
{
    $valorfinal = $valor_total - ($valor_total * 0.05);
}
else {
    $valorfinal = $valor_total + ($valor_total * 0.075);
}

echo 'produto Nr.: '    . $codigo       . '<br>';
echo 'descrição: '       . $descricao    . '<br>';
echo 'valor da venda: '   . $valor_total  . '<br>';
echo 'valor final: '      . $valorfinal   . '<br>';






