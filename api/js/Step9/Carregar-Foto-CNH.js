function carregarCNHCondutor(){
    var cnh_condutor = document.getElementById("cnh_condutor").value;
    var return_cnh_condutor = document.getElementById("return_cnh_condutor");

    var vrs_xhtml = new XMLHttpRequest();

    return_cnh_condutor.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

    vrs_xhtml.onreadystatechange = function(){
        if(vrs_xhtml.readyState == 4){
            if(vrs_xhtml.status == 200){
                return_cnh_condutor.innerHTML = vrs_xhtml.responseText;
            }else{
                document.write("erro");
            }
        }
    };
    vrs_xhtml.open("GET", "js/Step9/CNH-Condutor.php?F=" + cnh_condutor, true);
    vrs_xhtml.send(null);
}

function carregarCNHCondutor2(){
    var cnh_condutor = document.getElementById("cnh_condutor").value;
    var return_cnh_condutor2 = document.getElementById("return_cnh_condutor2");

    var vrs_xhtml = new XMLHttpRequest();

    return_cnh_condutor2.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

    vrs_xhtml.onreadystatechange = function(){
        if(vrs_xhtml.readyState == 4){
            if(vrs_xhtml.status == 200){
                return_cnh_condutor2.innerHTML = vrs_xhtml.responseText;
            }else{
                document.write("erro");
            }
        }
    };
    vrs_xhtml.open("GET", "js/Step9/CNH-Condutor2.php?F2=" + cnh_condutor, true);
    vrs_xhtml.send(null);
}

function carregarCNHAssociado(){
    var cnh_associado = document.getElementById("cnh_associado").value;
    var return_cnh_associado = document.getElementById("return_cnh_associado");

    var vrs_xhtml = new XMLHttpRequest();

    return_cnh_associado.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

    vrs_xhtml.onreadystatechange = function(){
        if(vrs_xhtml.readyState == 4){
            if(vrs_xhtml.status == 200){
                return_cnh_associado.innerHTML = vrs_xhtml.responseText;
            }else{
                document.write("erro");
            }
        }
    };
    vrs_xhtml.open("GET", "js/Step9/CNH-Associado.php?A=" + cnh_associado, true);
    vrs_xhtml.send(null);
}

function carregarCNHAssociado2(){
    var cnh_associado2 = document.getElementById("cnh_associado").value;
    var return_cnh_associado2 = document.getElementById("return_cnh_associado2");

    var vrs_xhtml = new XMLHttpRequest();

    return_cnh_associado2.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

    vrs_xhtml.onreadystatechange = function(){
        if(vrs_xhtml.readyState == 4){
            if(vrs_xhtml.status == 200){
                return_cnh_associado2.innerHTML = vrs_xhtml.responseText;
            }else{
                document.write("erro");
            }
        }
    };
    vrs_xhtml.open("GET", "js/Step9/CNH-Associado2.php?A2=" + cnh_associado2, true);
    vrs_xhtml.send(null);
}