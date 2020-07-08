function acionarVeiculosAdicionais(){
    var veiculosAdicionais = document.getElementById("outro_veiculo").value;
    var returnVeiculosAdicionais = document.getElementById("quantidadeReturn");

    var v_xhttp = new XMLHttpRequest();

    returnVeiculosAdicionais.innerHTML = '<img src="../img/ajax-loader.gif" class="img-responsive">';

    v_xhttp.onreadystatechange = function(){
        if(v_xhttp.readyState == 4){
            if(v_xhttp.status == 200){
                returnVeiculosAdicionais.innerHTML = v_xhttp.responseText;
            }else{
                "erro";
            }
        }
    };
    v_xhttp.open("GET", "./js/Veiculos-Adicionais.php?Acionado=" + veiculosAdicionais , true);
    v_xhttp.send(null);
}


function quantidadeAdicionar(){
    var veiculosQuantidade = document.getElementById("veiculos_quantidade").value;

    var returnQuantidade = document.getElementById("veiculos_adicionais");

    vadd_xhttp = new XMLHttpRequest();

    returnQuantidade.innerHTML = '<img src="../img/ajax-loader.gif" class="img-responsive">';

    vadd_xhttp.onreadystatechange = function(){
        if(vadd_xhttp.readyState == 4){
            if(vadd_xhttp.status == 200){
                returnQuantidade.innerHTML = vadd_xhttp.responseText;
            }else{
                "erro";
            }
        }
    };
    vadd_xhttp.open("GET", "./js/Veiculos-Adicionais-Quantidade.php?Quantidade=" + veiculosQuantidade , true);
    vadd_xhttp.send(null);
}
