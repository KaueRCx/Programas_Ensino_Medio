<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/css.css">
    <title>Comanda</title>
</head>
<body>
    <form action="php.php" method="get">
        <fieldset class="field1">
        <h1>Comanda</h1>
            <label for="nrc">NR Comanda</label>
            <input type="number" name="nrc" id="nrc"><br><br>

            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome"><br><br>

            <label for="nasc">Nasc</label>
            <input type="date" name="nasc" id="nasc"><br><br>

            <label for="genero">Genero</label>
            <input type="radio" name="genero" id="generoM" value="M">Masc
            &nbsp 
            <input type="radio" name="genero" id="generoF" value="F">Fem <br>
        </fieldset>

        <fieldset class="field1">
            <h1>Consumido</h1>
            <input type="checkbox" name="salgado" id="salgado"> Salgado &nbsp <input type="number" name="qtdeS" id="qtdeS" ><br>
            <input type="checkbox" name="bebida" id="bebida"> Bebidas &nbsp <input type="number" name="qtdeB" id="qtdeB" ><br>
            <input type="checkbox" name="outros" id="outros"> Outros &nbsp <input type="number" name="qtdeO" id="qtdeO" ><br><br>

            <input type="submit" value="recibo">
        </fieldset>
    </form>
</body>