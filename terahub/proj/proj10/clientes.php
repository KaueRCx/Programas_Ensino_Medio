<?php
if (isset($_GET["cpfp"])) {
    $cpfp = $_GET["cpfp"];

    $server     = "localhost";
    $user       = "root";
    $senha      = "";
    $base       = "terahub";
    $conexao    = mysql_connect($server, $user, $senha) or die("Erro na conexão!");
    mysql_select_db($base);

    if (empty($cpfp)) 
    {
        $sql = "SELECT * FROM clientes";
    } 
    else 
    {
        $cpfp .= "%";
        $sql = "SELECT * FROM clientes WHERE cpf like '$cpfp'";
    }
    sleep(1);
    $result = mysql_query($sql);
    $cont = mysql_affected_rows($conexao);
    
    if ($cont > 0) {
        $tabela = "<table border='1'>
                    <thead>
                        <tr>
                            <th>cpf</th>
                            <th>nome</th>
                            <th>cep</th>
                            <th>tel</th>
                            <th>email</th>
                            <th>nasc</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>";
        $return = "$tabela";
        
        while ($linha = mysql_fetch_array($result)) {
            $return.= "<td>" . utf8_encode($linha["cpf"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["nome"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["cep"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["tel"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["email"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["nasc"]) . "</td>";
            $return.= "</tr>";
        }
        echo $return.="</tbody></table>";
    } else {
        echo "Não foram encontrados registros!";
    }
}
?>