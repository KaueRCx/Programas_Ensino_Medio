<?php
$nome   = filter_input(INPUT_GET, "nome");
$nasc   = filter_input(INPUT_GET, "nasc");
$peso   = filter_input(INPUT_GET, "peso");
$altura = filter_input(INPUT_GET, "altura");
$genero = filter_input(INPUT_GET, "gen");
$imc    = imc($peso,$altura);
function imc($pesofunc,$alturafunc){
    $imc = $pesofunc/($alturafunc*$alturafunc);
    round($imc,2);
    return $imc;
}
function faixa($imcfunc){
    if($imcfunc <= 18.4){
    $faixa="baixo";
    
    }
    elseif($imcfunc <= 24.9){
        $faixa="normal";
    }
    else{
        $faixa="alto";
    }
    return $faixa;
}


echo '<fieldset class="field1">' . $nome . ", seu imc é " . imc($peso,$altura) . '<br>' . " sua faixa é " . faixa($imc) . "</fieldset>";