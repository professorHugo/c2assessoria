function SituacaoFinanceira(){
    var situacao_financeira = document.getElementById("situacao_financeira").value;
    var return_situacao_financeira = document.getElementById("return_situacao_financeira");

    var vrs_xhtml = new XMLHttpRequest();

    return_situacao_financeira.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

    vrs_xhtml.onreadystatechange = function(){
        if(vrs_xhtml.readyState == 4){
            if(vrs_xhtml.status == 200){
                return_situacao_financeira.innerHTML = vrs_xhtml.responseText;
            }else{
                document.write("erro");
            }
        }
    };
    vrs_xhtml.open("GET", "js/Step10/Situacao-Financeira.php?S=" + situacao_financeira, true);
    vrs_xhtml.send(null);
}
