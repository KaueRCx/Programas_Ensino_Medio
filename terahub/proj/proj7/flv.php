<!-- Formulario de listagem por vencimento -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
</head>
<body>
    <fieldset>
        <form action="controlelistagem.php" method="get">
            <input type="radio" name="l1" id="cod" value="cod">Codigo<br><br>

            <input type="radio" name="l1" id="desc" value="desc">Descrição<br><br>
            
            <input type="submit" value="listar2" name="listar" id="listar">
        </form>
    </fieldset>
</body>
</html>