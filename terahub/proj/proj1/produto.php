<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PROJ1</title>
</head>
<body>

    <form id="produto" action="php.php" method="get">
        <label for="codigo">Código</label>
        <input type="number" id="codigo" name="codigo" min=1 max=9999><br><br>

        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" id="descricao" size=30 maxlength="50" placeholder="nome produto" required><br><br>

        <label for="qtde">Quantidade</label>
        <input type="number" name="qtde" id="qtde" min=1 max=99><br><br>

        <label for="valor">Valor R$</label>
        <input type="number" name="valor" id="valor" min=1 max=999 step="0.01"><br><br>

        <label for="venc">Vencimento</label>
        <input type="date" name="venc" id="venc"><br><br>

        <label for="pagamento">Forma de Pagamento</label>
        <input type="radio" name="pagamento" id="pag_vista" value="V">Á vista
        <input type="radio" name="pagamento" id="pag_prazo" value="P">Á prazo <br> <br>

        <input type="submit" value="Enviar" name="botao" id="enviar">
        <input type="reset" value="Limpar" name="botao" id="limpar">


    </form> 

</body>
</html>