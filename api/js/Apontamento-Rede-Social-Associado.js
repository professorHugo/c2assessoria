function acionarUpload(){
    var Apontamento = document.getElementById("midias_sociais_associado").value;
    var returnCampoUpload = document.getElementById("apontamento_midias_sociais");

    var vrs_xhtml = new XMLHttpRequest();

    returnCampoUpload.innerHTML = '<img src="../img/ajax-loader.gif" class="img-responsive">';

    vrs_xhtml.onreadystatechange = function(){
        if(vrs_xhtml.readyState == 4){
            if(vrs_xhtml.status == 200){
                returnCampoUpload.innerHTML = vrs_xhtml.responseText;
            }else{
                document.write("erro");
            }
        }
    };
    vrs_xhtml.open("GET", "js/Apontamento-Rede-Social.php?A=" + Apontamento, true);
    vrs_xhtml.send(null);
}