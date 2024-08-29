<?php
$nome       = $_GET["nome"];
$nasc       = $_GET["nasc"];
$nrc        = $_GET["nrc"];
$salgado    = isset($_GET["salgado"]);
$bebida     = isset($_GET["bebida"]);
$outros     = isset($_GET["outros"]);
$qtdeS      = $_GET["qtdeS"];
$qtdeB      = $_GET["qtdeB"];
$qtdeO      = $_GET["qtdeO"];
$genero     = $_GET["genero"];
$value      = 0;

if($salgado == 'salgado')
{
    $value = $value + ($qtdeS * 10);
}

if($bebida == 'bebida')
{
    $value = $value + ($qtdeB * 15);
}

if($outros == 'outros')
{
    $value = $value + ($qtdeO * 25);
}

if($genero == 'F')
{
    $desc  = $value * 0.1;
    $value = $value - $desc;
}
else
{
    $desc = 0;
}

echo '<fieldset class="field1">' . " Recibo " . $nrc . '<br>' . '<br>' . '<br>' . "Nome: " 
. $nome . '<br>' . '<br>' . '<br>' . "Consumido:" . '<br>' . '<br>' . "Salgado: " . $qtdeS . '<br>' 
. "Bebida: " . $qtdeB . '<br>' . "Outros: " . $qtdeO . '<br>' . '<br>' 
. "Desconto: " . $desc . '<br>' . "Valor á Pagar: " . "R$" . $value 
. '</fieldset>';

?>