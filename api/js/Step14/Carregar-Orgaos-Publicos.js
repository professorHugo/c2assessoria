function IniciarUploadMilitar(){
    var policia_militar = document.getElementById("policia_militar").value;
    var return_policia_militar = document.getElementById("return_policia_militar");

    var vrs_xhtml = new XMLHttpRequest();

    return_policia_militar.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

    vrs_xhtml.onreadystatechange = function(){
        if(vrs_xhtml.readyState == 4){
            if(vrs_xhtml.status == 200){
                return_policia_militar.innerHTML = vrs_xhtml.responseText;
            }
        }
    };
    vrs_xhtml.open("GET", "js/Step14/UploadMilitar.php?M=" + policia_militar, true);
    vrs_xhtml.send(null);
}

function IniciarUploadCivil(){
    var policia_civil = document.getElementById("policia_civil").value;
    var return_policia_civil = document.getElementById("return_policia_civil");

    var vrs_xhtml = new XMLHttpRequest();

    return_policia_civil.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

    vrs_xhtml.onreadystatechange = function(){
        if(vrs_xhtml.readyState == 4){
            if(vrs_xhtml.status == 200){
                return_policia_civil.innerHTML = vrs_xhtml.responseText;
            }
        }
    };
    vrs_xhtml.open("GET", "js/Step14/UploadCivil.php?C=" + policia_civil, true);
    vrs_xhtml.send(null);
}

function IniciarUploadOrgaosPublicos(){
    var localizacao_orgaos_publicos = document.getElementById("localizacao_orgaos_publicos").value;
    var return_localizacao_orgaos_publicos = document.getElementById("return_localizacao_orgaos_publicos");

    var vrs_xhtml = new XMLHttpRequest();

    return_localizacao_orgaos_publicos.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

    vrs_xhtml.onreadystatechange = function(){
        if(vrs_xhtml.readyState == 4){
            if(vrs_xhtml.status == 200){
                return_localizacao_orgaos_publicos.innerHTML = vrs_xhtml.responseText;
            }
        }
    };
    vrs_xhtml.open("GET", "js/Step14/UploadOrgaosPublicos.php?OP=" + localizacao_orgaos_publicos, true);
    vrs_xhtml.send(null);
}

function IniciarUploadBO(){
    var boletim_ocorrencia = document.getElementById("boletim_ocorrencia").value;
    var return_boletim_ocorrencia = document.getElementById("return_boletim_ocorrencia");

    var vrs_xhtml = new XMLHttpRequest();

    return_boletim_ocorrencia.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

    vrs_xhtml.onreadystatechange = function(){
        if(vrs_xhtml.readyState == 4){
            if(vrs_xhtml.status == 200){
                return_boletim_ocorrencia.innerHTML = vrs_xhtml.responseText;
            }
        }
    };
    vrs_xhtml.open("GET", "js/Step14/UploadBoletimOcorrencia.php?BO=" + boletim_ocorrencia, true);
    vrs_xhtml.send(null);
}

function IniciarUploadSinesp(){
    var registro_sinesp = document.getElementById("registro_sinesp").value;
    var return_registro_sinesp = document.getElementById("return_registro_sinesp");

    var vrs_xhtml = new XMLHttpRequest();

    return_registro_sinesp.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

    vrs_xhtml.onreadystatechange = function(){
        if(vrs_xhtml.readyState == 4){
            if(vrs_xhtml.status == 200){
                return_registro_sinesp.innerHTML = vrs_xhtml.responseText;
            }
        }
    };
    vrs_xhtml.open("GET", "js/Step14/UploadSINESP.php?SIN=" + registro_sinesp, true);
    vrs_xhtml.send(null);
}

function EscolherArquivoSINESP(){
    var arquivo_sinesp = document.getElementById("arquivo_sinesp").value;
    var return_arquivo_sinesp = document.getElementById("return_arquivo_sinesp");

    var vrs_xhtml = new XMLHttpRequest();

    return_arquivo_sinesp.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

    vrs_xhtml.onreadystatechange = function(){
        if(vrs_xhtml.readyState == 4){
            if(vrs_xhtml.status == 200){
                return_arquivo_sinesp.innerHTML = vrs_xhtml.responseText;
            }
        }
    };
    vrs_xhtml.open("GET", "js/Step14/UploadSINESPArquivo.php?A=" + arquivo_sinesp, true);
    vrs_xhtml.send(null);
}