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
        <form action="controlealteracaop.php" method="get">
            <label for="codprod">Código do produto: </label>
            <input type="number" name="codprod" id="codprod"> <br><br>

            <label for="desc">Descrição: </label>
            <input type="text" name="desc" id="desc"> <br><br>

            <label for="valor">Valor R$: </label>
            <input type="decimal" name="valor" id="valor"> <br><br>

            <label for="vencimento">Vencimento: </label>
            <input type="date" name="vencimento" id="vencimento"> <br><br>

        
            <input type="button" value="Pesquisar por codigo" name="pesq" id="pesq" onclick="pesq()">  &nbsp
            <input type="submit" value="alterar" name="alterar" id="alterar"> &nbsp
            
            <input type="reset" value="limpar" name="limpar" id="limpar">
        </form>

        <div class="resposta">

        </div>
    </fieldset>
</body>
</html>