<?php
$placa          = filter_input(INPUT_GET, "placa");
$marca          = filter_input(INPUT_GET, "marca");
$modelo         = filter_input(INPUT_GET, "modelo");
$entrada        = filter_input(INPUT_GET, "entrada");
$saida          = filter_input(INPUT_GET, "saida");
$desc           = filter_input(INPUT_GET, "desc");
$desconto       = 0;
$valorinicial   = 0;
$valor          = 0;
$tempo          = tempo($saida,$entrada);
$valor          = calculo($valorinicial,$tempo);
$desconto       = desc($valor,$desconto,$desc);
$VF             = $valor - $desconto;
$hoje           = date('d/m/y');

echo "<fieldset>";
echo "**** Recibo ****<p> " . "A placa é: " . "<b>" . $placa . "</b><p>";
echo "A marca do carro é: <b>" . $marca . "</b><p>";
echo "O modelo do carro é: <b>" . $modelo . "</b><p>";
echo "O horário que entrou: <b>" . $entrada . "</b><p>";
echo "O horário que saiu: <b>" . $saida . "</b><p>";
echo "O cliente ficou: <b>" . $tempo . " horas</b><p>";
echo "Valor R$: <b>" . $valor . "</b><p>";
echo "Desconto de R$: <b>" . $desconto . "</b><p>";
echo "Valor total R$: <b>" . $VF . "</b><p>";
echo "Data do sistema: <b>" . $hoje . "</b><p>";
echo "</fieldset>";



function desc($valor,$desconto,$desc){
    if($desc == "S"){
        $desconto = ($valor*0.075);
    }
    return $desconto;
}

function tempo($saidafunc,$entradafunc){
    $saidafunc = new dateTime($saidafunc);
    $entradafunc = new dateTime($entradafunc);
    $tempo = $saidafunc->diff($entradafunc);
    return $tempo ->format('%H:%I');
}

 function calculo($valorinicial,$tempo){
    if($tempo <= ('01:00')){
        $valorinicial =  10;
    }
    else{
        if($tempo <= ('03:00')){
             $valorinicial = 15;
        }
        else{
            if($tempo <= ('05:00')){
                $valorinicial = 20;
            }
            else{
                $valorinicial = 25;
             }
            }
        }
        return $valorinicial;
    }


?>