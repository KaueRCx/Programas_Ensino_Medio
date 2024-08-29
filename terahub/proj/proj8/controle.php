<?php

include_once "classe.php";

$Cad = new Pet();

$prop       = $_POST["prop"];
$nome       = $_POST["nome"];
$nasc       = $_POST["nasc"];

$Cad->setNome($nome);
$Cad->setProp($prop);
$Cad->setNasc($nasc);

if (isset($_GET["includee"])){
    echo $Cad->include();
}

if (isset($_GET["consultaa"])){
    $dados = $Cad->consulta();
    foreach($dados as $dd)
    {
        echo "Nome do pet: {$dd['nome']} <br>";
        echo "Nascimento: {$dd['nasc']} <br>";
        echo "Proprietario: {$dd['prop']} <br>";
    }
    }
?>