function include()
{
    var dados = $('#cadastro').serialize();

    $.ajax({
        method: 'POST',
        url: 'controle.php?includee',
        data: dados,
        
        beforeSend: function (){
            $('#resposta').html("Processamento em andamento... Aguarde");
        }
    })
    .done(function(retornophp){
        $('#resposta').html(retornophp);
    })
    .fail(function(){
        alert("Falha na inclusão");
    })
    return false;
}

function consulta()
{
    var dados = $('#cadastro').serialize();

    $.ajax({
        method: 'POST',
        url: 'controle.php?consultaa',
        data: dados,
        
        beforeSend: function (){
            $('#resposta').html("Processamento em andamento... Aguarde");
        }
    })
    .done(function(retornophp){
        var pet = JSON.parse(retornophp);

        var bloco = '';
        bloco += "nome: " + pet.nome + "<br>";
        bloco += "nasc: " + pet.nasc + "<br>";
        bloco += "Proprietario: " + pet.prop + "<br>";
        bloco += "<hr>";

        $('#resposta').html(bloco);
    })

    .fail(function(){
        alert("Falha na consulta...");
    })
    return false;
}