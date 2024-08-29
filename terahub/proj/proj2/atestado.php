<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>Clinica medica</title>
</head>
<body>
    <fieldset class="field1">
        <form action="php.php" method="get">
            <label for="paciente">Paciente</label>
            <input type="text" name="paciente" id="paciente"><br><br>

            <label for="crm">CRM</label>
            <input type="number" name="crm" id="crm"> &nbsp

            <label for="medico">Médico</label>
            <input type="text" name="medico" id="medico"><br><br>

            <label for="espec">Especialidade</label>
            <select name="espec" id="espec">
                <option value="cardiologista">cardiologista</option>
                <option value="podologo">podologo</option>
                <option value="ginecologista">ginecologista</option>
            </select><br><br>

            <label for="vacinacao">Vacinação</label><br>
            <input type="checkbox" name="covid" id="covid">Covid <br>
            <input type="checkbox" name="hep" id="hep">Hepatite <br>
            <input type="checkbox" name="tetano" id="tetano"> Tétano <br><br>

            <input type="submit" value="Atestado"> &nbsp <input type="reset" value="Limpar">
        </form>
    </fieldset>
</body>
</html>