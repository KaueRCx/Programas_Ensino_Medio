<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/css.css">
    <title>Document</title>
</head>
<body>
    <form action="php.php" method="get" class="field1">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome"><br>

        <label for="nasc">Nasc</label>
        <input type="date" name="nasc" id="nasc"><br>

        <label for="gen">Genero</label><br>
        <input type="radio" name="gen" id="M" value="M">masculino
        <input type="radio" name="gen" id="F" value="F">feminino<br>

        <label for="peso">Peso</label>
        <input type="number" name="peso" id="peso" step="0.001"><br>

        <label for="altura">Altura</label>
        <input type="number" name="altura" id="altura" step="0.01"><br>

        <input type="submit" value="enviar">
        <input type="reset" value="reset">
    </form>
</body>
</html>