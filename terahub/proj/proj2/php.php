<?php
    $nome    = $_GET["paciente"];
    $crm     = $_GET["crm"];
    $medico  = $_GET["medico"];
    $espec   = $_GET["espec"];
    $vacinaC = isset($_GET["covid"]);
    $vacinaH = isset($_GET["hep"]);
    $vacinaT = isset($_GET["tetano"]);
    $data    = Date('d/M/Y');

    
    if($vacinaC == 'covid')
    {
        $vactomadaC = "covid ";
    }
    else
    {
        $vactomadaC = "";
    }
    

    if($vacinaH == 'hep')
    {
        $vactomadaH = "hepatite ";
    }
    else
    {
        $vactomadaH = "";
    }   


    if($vacinaT == 'tetano')
    {
        $vactomadaT = "tétano ";
    }
    else
    {
        $vactomadaT = "";
    }

    echo"Atestado " . '<br>'; 
    echo" O paciente " . $nome . " passou pelo médico " . $medico . " CRM: " 
    . $crm . " com especialização " . $espec . " fazendo uso da medicação " 
    . $vactomadaC . $vactomadaH .  $vactomadaT . '<br>' . $data;

?>