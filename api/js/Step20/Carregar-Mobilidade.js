function CarregarMobilidade(){
    var comprovante_mobilidade = document.getElementById("comprovante_mobilidade").value,
        return_comprovante_mobilidade = document.getElementById("return_comprovante_mobilidade1");
    
    var ajax = new XMLHttpRequest();
    return_comprovante_mobilidade.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

    ajax.onreadystatechange = function(){
        if( ajax.readyState == 4 && ajax.status == 200 ){
            return_comprovante_mobilidade.innerHTML = ajax.responseText;
        }
    };
    ajax.open(
        "GET"
        ,"js/Step20/Comprovante-Mobilidade.php?comprovante="+comprovante_mobilidade
        ,true
    );
    ajax.send(null);
}

function CarregarNome(){
    var instalado_em = document.getElementById("instalado_em").value,
        return_comprovante_mobilidade2 = document.getElementById("return_comprovante_mobilidade2");

    var ajax2 = new XMLHttpRequest();
    return_comprovante_mobilidade2.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

    ajax2.onreadystatechange = function(){
        if( ajax2.readyState == 4 && ajax2.status == 200){
            return_comprovante_mobilidade2.innerHTML = ajax2.responseText;
        }
    };
    ajax2.open("GET", "js/Step20/Nome-Usuario-App.php?nome=" + instalado_em, true);
    ajax2.send(null);
}

function CarregarMobilidade2(){
    var comprovante_mobilidade2 = document.getElementById('comprovante_mobilidade').value,
        return_end_mobilidade = document.getElementById('return_end_mobilidade');

    var ajax3 = new XMLHttpRequest();
    return_end_mobilidade.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

    ajax3.onreadystatechange = function(){
        if( ajax3.readyState == 4 && ajax3.status == 200 ){
            return_end_mobilidade.innerHTML = ajax3.responseText;
        }
    };

    ajax3.open("GET", "js/Step20/End-Mobilidade.php?M=" + comprovante_mobilidade2, true);
    ajax3.send(null);
}