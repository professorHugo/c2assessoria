function carregarMulta(){
    var evento_multa_veiculo = document.getElementById("evento_multa_veiculo").value;
    var return_evento_multa_veiculo = document.getElementById("return_evento_multa_veiculo");

    var ev_xhtml = new XMLHttpRequest();

    return_evento_multa_veiculo.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

    ev_xhtml.onreadystatechange = function(){
        if(ev_xhtml.readyState == 4){
            if(ev_xhtml.status == 200){
                return_evento_multa_veiculo.innerHTML = ev_xhtml.responseText;
            }else{
                document.write("erro");
            }
        }
    };
    ev_xhtml.open("GET", "js/Step7/CarregarMulta.php?E=" + evento_multa_veiculo, true);
    ev_xhtml.send(null);
}

function carregarRestricao(){
    var restricoes_diversas = document.getElementById("restricoes_diversas").value;
    var return_restricoes_diversas = document.getElementById("return_restricoes_diversas");

    var rd_xhtml = new XMLHttpRequest();

    return_restricoes_diversas.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

    rd_xhtml.onreadystatechange = function(){
        if(rd_xhtml.readyState == 4){
            if(rd_xhtml.status == 200){
                return_restricoes_diversas.innerHTML = rd_xhtml.responseText;
            }else{
                document.write("erro");
            }
        }
    };
    rd_xhtml.open("GET", "js/Step7/CarregarRestricao.php?R=" + restricoes_diversas, true);
    rd_xhtml.send(null);
}

function carregarRestricoesF(){
    var restricoes_financeiras = document.getElementById("restricoes_financeiras").value;
    var return_restricoes_financeiras = document.getElementById("return_restricoes_financeiras");

    var rf_xhtml = new XMLHttpRequest();

    return_restricoes_financeiras.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

    rf_xhtml.onreadystatechange = function(){
        if(rf_xhtml.readyState == 4){
            if(rf_xhtml.status == 200){
                return_restricoes_financeiras.innerHTML = rf_xhtml.responseText;
            }else{
                document.write("erro");
            }
        }
    };
    rf_xhtml.open("GET", "js/Step7/CarregarRestricaoFinanceira.php?F=" + restricoes_financeiras, true);
    rf_xhtml.send(null);
}

function carregarQueixa(){
    var queixa_veiculo = document.getElementById("queixa_veiculo").value;
    var return_queixa_veiculo = document.getElementById("return_queixa_veiculo");

    var rf_xhtml = new XMLHttpRequest();

    return_queixa_veiculo.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

    rf_xhtml.onreadystatechange = function(){
        if(rf_xhtml.readyState == 4){
            if(rf_xhtml.status == 200){
                return_queixa_veiculo.innerHTML = rf_xhtml.responseText;
            }else{
                document.write("erro");
            }
        }
    };
    rf_xhtml.open("GET", "js/Step7/CarregarQueixa.php?Q=" + queixa_veiculo, true);
    rf_xhtml.send(null);
}