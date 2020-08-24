function carregarFotoChave(){
    var chaves_apresentadas = document.getElementById("chaves_apresentadas").value;


    var return_chaves_apresentadas = document.getElementById("return_chaves_apresentadas");
    var ac_xhtml = new XMLHttpRequest();
    return_chaves_apresentadas.innerHTML = '<img src="img/ajax-loader.gif">';

    ac_xhtml.onreadystatechange = function(){
        if(ac_xhtml.readyState == 4){
            if(ac_xhtml.status == 200){
                return_chaves_apresentadas.innerHTML = ac_xhtml.responseText;
            }
        }
    };
    ac_xhtml.open("GET", "js/Step6/Carregar-Foto-Chaves.php?C=" + chaves_apresentadas, true);
    ac_xhtml.send(null);
}