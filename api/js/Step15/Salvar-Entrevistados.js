function SalvarEntrevistado(){
    var nome = document.getElementById("nome_entrevistado").value,
        protocolo = document.getElementById("protocolo").value,
        sexo = document.getElementById("sexo_entrevistado").value,
        tipo = document.getElementById("tipo_entrevistado").value,
        cep = document.getElementById("cep_entrevistado").value,
        end = document.getElementById("endereco_entrevistado").value,
        num = document.getElementById("numero_entrevistado").value,
        bairro = document.getElementById("bairro_entrevistado").value,
        cidade = document.getElementById("cidade_entrevistado").value,
        estado = document.getElementById("estado_entrevistado").value,
        nacionalidade = document.getElementById("nacionalidade_entrevistado").value,
        telefone = document.getElementById("telefone_entrevistado").value,
        return_entrevistado = document.getElementById("return_entrevistado");
    
    var ajax = new XMLHttpRequest();
    return_entrevistado.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

    ajax.onreadystatechange = function(){
        if( ajax.readyState == 4 && ajax.status == 200 ){
            return_entrevistado.innerHTML = ajax.responseText;
            $("#form input").val("");
        }
    };
    ajax.open(
        "GET"
        ,"js/Step15/Salvar-Entrevistado.php?protocolo="+protocolo+"&nome="+nome+"&sexo="+sexo+"&tipo="+tipo+"&cep="+cep+"&end="+end+"&num="+num+"&bairro="+bairro+"&cidade="+cidade+"&estado="+estado+"&nacionalidade="+nacionalidade+"&telefone="+telefone
        ,true
    );
    ajax.send(null);
}