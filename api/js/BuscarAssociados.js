function buscarAssociado(){
    var campoCPF = document.getElementById("cpf_associado").value;

    var nomeAssociado = document.getElementById("nome_associado_return");
    var xhttp = new XMLHttpRequest();

    nomeAssociado.innerHTML = '<input type="hidden" name="nome_associado" id="nome_associado_return" class="sr-only"><input type="text" id="nome_associado_return" disabled class="form-control form-control-lg" placeholder="Aguardando CPF...">';

    xhttp.onreadystatechange = function(){
        if(xhttp.readyState  == 4){
            if(xhttp.status == 200){
                nomeAssociado.innerHTML = xhttp.responseText;
            }else{
                "erro";
            }
        }
    };
    xhttp.open("GET","./js/BuscarUsuario.php?CPF=" + campoCPF , true);
    xhttp.send(null);
}