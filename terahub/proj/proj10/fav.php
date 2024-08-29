<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vendas</title>
</head>
<body>
    <fieldset>
        <form action="controlealteracaov.php" method="get">
            <label for="codv">Código da venda: </label>
            <input type="number" name="codv" id="codv"> <br><br>

            <label for="qtd">Quantidade: </label>
            <input type="number" name="qtd" id="qtd"> <br><br>

            <label for="date">Data: </label>
            <input type="date" name="date" id="date" > <br><br>

            <label for="pgt">Forma de pagamento: </label> <br>
            <input type="radio" name="pgt" id="vista" value="v">A vista &nbsp
            <input type="radio" name="pgt" id="prazo" value="p">A prazo
            <br><br>

            <input type="button" value="Pesquisar por codigo" name="pesqv" id="pesqv" onclick="pesqv()">  &nbsp
            <input type="submit" value="alterar" name="alterar" id="alterar"> &nbsp

            <input type="reset" value="limpar" name="limpar" id="limpar">
        </form>

        <div class="resposta">

        </div>
    </fieldset>
</body>
</html>