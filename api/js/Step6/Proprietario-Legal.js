function proprietarioChange(){
    var proprietario_legal = document.getElementById("proprietario_legal").value;


    var return_vinculo = document.getElementById("return_vinculo");
    var vrs_xhtml = new XMLHttpRequest();
    return_vinculo.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

    vrs_xhtml.onreadystatechange = function(){
        if(vrs_xhtml.readyState == 4){
            if(vrs_xhtml.status == 200){
                return_vinculo.innerHTML = vrs_xhtml.responseText;
            }
        }
    };
    vrs_xhtml.open("GET", "js/Step6/Vinculo.php?V=" + proprietario_legal, true);
    vrs_xhtml.send(null);
}