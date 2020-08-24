function carregarVistoria(){
    var vistoria_realizada = document.getElementById("vistoria_realizada").value;
    var return_vistoria_realizada = document.getElementById("return_vistoria_realizada");

    var vrs_xhtml = new XMLHttpRequest();

    return_vistoria_realizada.innerHTML = '<div class="col-12"><img src="img/ajax-loader.gif" class="img-fluid"></div>';

    vrs_xhtml.onreadystatechange = function(){
        if(vrs_xhtml.readyState == 4){
            if(vrs_xhtml.status == 200){
                return_vistoria_realizada.innerHTML = vrs_xhtml.responseText;
            }else{
                document.write("erro");
            }
        }
    };
    vrs_xhtml.open("GET", "js/Step8/Vistoria-Cautelar.php?A=" + vistoria_realizada, true);
    vrs_xhtml.send(null);
}