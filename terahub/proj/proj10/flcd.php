 <!-- Formulario de listagem por ordem ou descrição -->

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
            <input type="date" name="ld1" id="ld1">Data Inicial<br><br>

            <input type="date" name="ld2" id="ld2">Data Final<br><br>

            <input type="submit" value="listar" name="listar" id="listar">
        </form>
    </fieldset>
</body>
</html>