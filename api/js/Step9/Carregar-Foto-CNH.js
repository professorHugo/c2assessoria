function carregarCNHCondutor(){
    var cnh_condutor = document.getElementById("cnh_condutor").value;
    var return_cnh_condutor = document.getElementById("return_cnh_condutor");

    var vrs_xhtml = new XMLHttpRequest();

    return_cnh_condutor.innerHTML = '<img src="../img/ajax-loader.gif" class="img-fluid">';

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

function carregarCNHAssociado(){
    var cnh_condutor = document.getElementById("cnh_condutor").value;
    var return_cnh_condutor = document.getElementById("return_cnh_condutor");

    var vrs_xhtml = new XMLHttpRequest();

    return_cnh_condutor.innerHTML = '<img src="../img/ajax-loader.gif" class="img-fluid">';

    vrs_xhtml.onreadystatechange = function(){
        if(vrs_xhtml.readyState == 4){
            if(vrs_xhtml.status == 200){
                return_cnh_condutor.innerHTML = vrs_xhtml.responseText;
            }else{
                document.write("erro");
            }
        }
    };
    vrs_xhtml.open("GET", "js/Step9/CNH-Associado.php?A=" + cnh_condutor, true);
    vrs_xhtml.send(null);
}