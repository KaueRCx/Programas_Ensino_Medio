<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estacionamento</title>
</head>
<body>
    <h2>Estacionamento</h2>
    <br>
    <fieldset class="field1">
        <form action="php.php" method="get">
            <label for="placa">Placa</label> &nbsp
            <input type="text" name="placa" id="placa"> <br> <br>

            <label for="marca">Marca</label> &nbsp
            <select name="marca" id="marca">
                <option value="ford">Ford</option>
                <option value="chevrolet">Chevrolet</option>
                <option value="lamborghini">Lamborghini </option>
            </select> <br> <br>

            <label for="modelo">Modelo</label>
            <select name="modelo" id="modelo">
                <option value="ka">KA</option>
                <option value="camaro">Camaro</option>
                <option value="urus"> Urus</option>
            </select> <br> <br>

            <label for="entrada">Entrada</label> &nbsp
            <input type="time" name="entrada" id="entrada" required> <br> <br>
            <label for="saida">Saida</label>
            <input type="time" name="saida" id="saida" required> <br> <br>

            <label for="desc">Desconto</label> <br>
            <input type="radio" name="desc" id="sim" value="S"> Sim &nbsp
            <input type="radio" name="desc" id="nao" value="N"> Não
            <br> <br>

            <input type="submit" value="Registrar"> &nbsp <input type="reset" value="Limpar"> <br>
            
        </form>
    </fieldset>
</body>
</html>