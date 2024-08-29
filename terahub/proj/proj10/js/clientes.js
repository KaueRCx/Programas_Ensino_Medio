function CriaRequest() {
    try{
        request = new XMLHttpRequest();
    }catch (IEAtual){

        try{
            request = new ActiveXObject("Msxml2.XMLHTTP");
        }catch(IEAntigo){

            try{
                request = new ActiveXObject("Microsoft.XMLHTTP");
            }catch(falha){
                request = false;
            }
        }
    }

    if (!request)
        alert("Seu Navegador não suporta Ajax!");
    else
        return request;
}

function pesqc()
{
    var cpf   = document.getElementById("cpfp").value;
    var result = document.getElementById("resposta");
    var xmlreq = CriaRequest();

    result.innerHTML = '<img src="https://tenor.com/pt-BR/view/loading-cat-thinking-wait-what-gif-15922897"/>';

    xmlreq.open("GET", "../clientes.php?cpfp=" + cpf, true);

    xmlreq.onreadystatechange = function()
    {
        if (xmlreq.readyState == 4) 
        {
            if (xmlreq.status == 200) 
            {
                result.innerHTML = xmlreq.responseText;
            }
            else
            {
                result.innerHTML = "Erro: " + xmlreq.statusText;
            }
        }
    };
    xmlreq.send(null);
}
