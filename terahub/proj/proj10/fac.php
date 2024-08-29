<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="js/clientes.js"></script>
    <title>Produtos</title>
</head>
<body>
    <fieldset>
        <form action="controlealteracaoc.php" method="get">
            <label for="cpf">CPF: </label>
            <input type="number" name="cpf" id="cpf"> <br><br>

            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome"> <br><br>

            <label for="cep">Cep: </label>
            <input type="decimal" name="cep" id="cep"> <br><br>

            <label for="tel">Telefone: </label>
            <input type="text" name="tel" id="tel"> <br><br>

            <label for="email">Email: </label>
            <input type="email" name="email" id="email"> <br><br>

            <label for="nasc">Nasc: </label>
            <input type="date" name="nasc" id="nasc"> <br><br>
        
            <input type="submit" value="alterar" name="alterar" id="alterar"> &nbsp
            
            <input type="reset" value="limpar" name="limpar" id="limpar">
        </form>
        <br>
        <div id="fac">
            Informe o CPF: &nbsp
            <input type="number" name="cpfp" id="cpfp"> <br><br>
            <input type="button" value="Pesquisar por Cpf" name="btnPesq" onclick="pesqc();">
        </div>
        <br>
        <div class="resposta">

        </div>
    </fieldset>
</body>
</html>