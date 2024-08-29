<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/clientes.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Clientes</title>
</head>
<body>
    <fieldset>
        <form action="controleclientes.php" method="get">

            <label for="cpf">CPF: </label>
            <input type="number" name="cpf" id="cpf"> <br><br>

            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome"> <br><br>

            <label for="cep">Cep: </label>
            <input type="decimal" name="cep" id="cep"> <br><br>

            <label for="tel">Telefone: </label>
            <input type="number" name="tel" id="tel"> <br><br>

            <label for="email">Email: </label>
            <input type="email" name="email" id="email"> <br><br>

            <label for="nasc">Nasc: </label>
            <input type="date" name="nasc" id="nasc"> <br><br>
        
            <input type="submit" value="inserir" name="inserir" id="inserir"> &nbsp
            <input type="submit" value="apagar" name="apagar" id="apagar"> &nbsp

            <input type="reset" value="limpar" name="limpar" id="limpar">
        </form>
        <br><br>
    </fieldset>
</body>
</html>