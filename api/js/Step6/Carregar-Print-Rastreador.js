function carregarPrintRastreador(){
    var sistema_anti_furto = document.getElementById("sistema_anti_furto").value;


    var return_sistema_anti_furto = document.getElementById("return_sistema_anti_furto");
    var af_xhtml = new XMLHttpRequest();
    return_sistema_anti_furto.innerHTML = '<img src="../img/ajax-loader.gif" class="img-responsive">';

    af_xhtml.onreadystatechange = function(){
        if(af_xhtml.readyState == 4){
            if(af_xhtml.status == 200){
                return_sistema_anti_furto.innerHTML = af_xhtml.responseText;
            }
        }
    };
    af_xhtml.open("GET", "js/Step6/Carregar-Sistema-Anti-Furto.php?T=" + sistema_anti_furto, true);
    af_xhtml.send(null);
}