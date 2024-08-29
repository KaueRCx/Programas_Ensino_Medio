<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/css.css">
    <title>PROJ6</title>
</head>
<body>
<fieldset class="field1">
    <form action="controle.php" method="get">
        <label for="matricula">Matricula: </label>
        <input type="text" name="matricula" id="matricula"><br><br>

        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome"><br><br>

        <label for="nota">Nota:</label><br>
        <label for="n1">1</label>
        <input type="number" name="n1" id="n1"> <br>
        <label for="n2">2</label>
        <input type="number" name="n2" id="n2"><br>
        <label for="n3">3</label>
        <input type="number" name="n3" id="n3"> <br> <br>
        <input type="submit" value="Enviar">
    </form>
</fieldset>
</body>
</html>