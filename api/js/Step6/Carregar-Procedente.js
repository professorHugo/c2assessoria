function carregarProcedente(){
    var procedente_veiculo = document.getElementById("procedente_veiculo").value;
    var return_procedente_veiculo = document.getElementById("return_procedente");

    var vrs_xhtml = new XMLHttpRequest();

    return_procedente_veiculo.innerHTML = '<img src="../img/ajax-loader.gif" class="img-responsive">';

    vrs_xhtml.onreadystatechange = function(){
        if(vrs_xhtml.readyState == 4){
            if(vrs_xhtml.status == 200){
                return_procedente_veiculo.innerHTML = vrs_xhtml.responseText;
            }else{
                document.write("erro");
            }
        }
    };
    vrs_xhtml.open("GET", "js/Step6/Carregar-Procedente.php?P=" + procedente_veiculo, true);
    vrs_xhtml.send(null);
}