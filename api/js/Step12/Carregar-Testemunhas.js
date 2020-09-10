function selecionarTestemunhas(){
    var testemunhas_local = document.getElementById("testemunhas_local").value;
    var return_testemunhas_local = document.getElementById("return_testemunhas_local");

    var vrs_xhtml = new XMLHttpRequest();

    return_testemunhas_local.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

    vrs_xhtml.onreadystatechange = function(){
        if(vrs_xhtml.readyState == 4){
            if(vrs_xhtml.status == 200){
                return_testemunhas_local.innerHTML = vrs_xhtml.responseText;
            }else{
                document.write("erro");
            }
        }
    };
    vrs_xhtml.open("GET", "js/Step12/Testemunhas-Local.php?T=" + testemunhas_local, true);
    vrs_xhtml.send(null);
}



function SalvarTestemunha(){
    var nome = document.getElementById("nome_testemunha").value,
        protocolo = document.getElementById("protocolo").value,
        sexo = document.getElementById("sexo_testemunha").value,
        tipo = document.getElementById("tipo_entrevistado").value,
        cep = document.getElementById("cep_testemunha").value,
        end = document.getElementById("endereco_testemunha").value,
        num = document.getElementById("numero_testemunha").value,
        bairro = document.getElementById("bairro_testemunha").value,
        cidade = document.getElementById("cidade_testemunha").value,
        estado = document.getElementById("estado_testemunha").value,
        nacionalidade = document.getElementById("nacionalidade_testemunha").value,
        telefone = document.getElementById("telefone_testemunha").value,
        return_testemunha = document.getElementById("return_testemunha");
    
    var ajax = new XMLHttpRequest();
    return_testemunha.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

    ajax.onreadystatechange = function(){
        if( ajax.readyState == 4 && ajax.status == 200 ){
            return_testemunha.innerHTML = ajax.responseText;
            $("#form input").val("");
        }
    };
    ajax.open(
        "GET"
        ,"js/Step12/Salvar-Testemunhas.php?protocolo="+protocolo+"&nome="+nome+"&sexo="+sexo+"&tipo="+tipo+"&cep="+cep+"&end="+end+"&num="+num+"&bairro="+bairro+"&cidade="+cidade+"&estado="+estado+"&nacionalidade="+nacionalidade+"&telefone="+telefone
        ,true
    );
    ajax.send(null);
}



