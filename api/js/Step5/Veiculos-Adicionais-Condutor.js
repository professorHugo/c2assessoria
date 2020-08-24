function acionarVeiculosProprios(){
    var veiculosProprios = document.getElementById("veiculo_proprio").value;
    var returnVeiculosProprios = document.getElementById("veiculo_condutor_return");

    var v_xhttp = new XMLHttpRequest();

    returnVeiculosProprios.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

    v_xhttp.onreadystatechange = function(){
        if(v_xhttp.readyState == 4){
            if(v_xhttp.status == 200){
                returnVeiculosProprios.innerHTML = v_xhttp.responseText;
            }else{
                "erro";
            }
        }
    };
    v_xhttp.open("GET", "./js/Step5/Veiculos-Adicionais-Condutor.php?Acionado=" + veiculosProprios , true);
    v_xhttp.send(null);
}

function quantidadeAdicionarCondutor(){
    var veiculosQuantidade = document.getElementById("veiculos_quantidade").value;

    var returnQuantidade = document.getElementById("veiculos_adicionais");

    vadd_xhttp = new XMLHttpRequest();

    returnQuantidade.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

    vadd_xhttp.onreadystatechange = function(){
        if(vadd_xhttp.readyState == 4){
            if(vadd_xhttp.status == 200){
                returnQuantidade.innerHTML = vadd_xhttp.responseText;
            }else{
                "erro";
            }
        }
    };
    vadd_xhttp.open("GET", "./js/Step5/Veiculos-Quantidade-Condutor.php?Quantidade=" + veiculosQuantidade , true);
    vadd_xhttp.send(null);
}