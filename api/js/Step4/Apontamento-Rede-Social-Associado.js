function acionarUpload(){
    var Apontamento = document.getElementById("midias_sociais_associado").value;
    var returnCampoUpload = document.getElementById("apontamento_midias_sociais");

    var vrs_xhtml = new XMLHttpRequest();

    returnCampoUpload.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid"> Carregando campo';

    vrs_xhtml.onreadystatechange = function(){
        if(vrs_xhtml.readyState == 4){
            if(vrs_xhtml.status == 200){
                returnCampoUpload.innerHTML = vrs_xhtml.responseText;
            }
        }
    };
    vrs_xhtml.open("GET", "js/Step4/Apontamento-Rede-Social-Associado.php?A=" + Apontamento, true);
    vrs_xhtml.send(null);
}