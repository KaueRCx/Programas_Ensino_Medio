<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/css.css">
    <script src="js/cadastro.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
    <fieldset>
        <form id="cadastro" name="cadastro" action="" method="get">
            <label for="nome">Nome do Pet: </label>
            <input type="text" name="nome" id="nome" placeholder="Nome do Pet" max="50"> <br><br>

            <label for="nasc">Nascimento: </label>
            <input type="date" name="nasc" id="nasc"> <br><br>

            <label for="prop">Proprietário: </label>
            <input type="text" name="prop" id="prop" placeholder="Nome do Proprietário" max="50"> <br><br>

            <input type="button" value="include" name="includee" id="includee" onclick="include()"> &nbsp
            <input type="button" value="consulta" name="consultaa" id="consultaa" onclick="consulta()"> &nbsp
            <input type="reset" value="limpar" name="limpar" id="limpar">
        </form>
        <br><br>
            <div class="resposta">
                
            </div>
    </fieldset>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>