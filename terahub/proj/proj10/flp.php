<!-- Formulario de listagem por pagamento -->

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
        <form action="controlelistagemv.php" method="get">
            <input type="radio" name="l1" id="vista" value="vista">Pagamento a Vista<br><br>

            <input type="radio" name="l1" id="prazo" value="prazo">Pagamento a Prazo<br><br>

            <input type="submit" value="listar" name="listar" id="listar">
        </form>
    </fieldset>
</body>
</html>