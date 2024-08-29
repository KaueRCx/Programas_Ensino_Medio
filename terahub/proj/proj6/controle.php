<?php

include "../../classe.php"; // .. volta um diretorio no php

$OBJmedia = new clsMedia(); // cria o objeto

$matricula = filter_input(INPUT_GET, "matricula");
$nome = filter_input(INPUT_GET, "nome");

$nota1 = $OBJmedia->setn1(filter_input(INPUT_GET, "n1"));
$nota2 = $OBJmedia->setn2(filter_input(INPUT_GET, "n2"));
$nota3 = $OBJmedia->setn3(filter_input(INPUT_GET, "n3"));

echo "Aluno: " . $nome . '<br><br>';
echo "Matricula: " . $matricula . '<br><br>';
echo "Media: " . $OBJmedia->media() . '<br>';
?>