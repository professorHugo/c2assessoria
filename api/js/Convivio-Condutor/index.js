function selecionarEntrevistados(){
  var pessoas_sabedoras = document.getElementById('pessoas_sabedoras').value,
  return_pessoas_sabedoras = document.getElementById('return_pessoas_sabedoras');

  var xml_pessoas_sabedoras = new XMLHttpRequest();
  if( pessoas_sabedoras == 1 ){
    return_pessoas_sabedoras.setAttribute('style', 'min-height: 80px');

    return_pessoas_sabedoras.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

    xml_pessoas_sabedoras.onreadystatechange = function(){
      if( xml_pessoas_sabedoras.readyState == 4 && xml_pessoas_sabedoras.status == 200 ){
        return_pessoas_sabedoras.innerHTML = xml_pessoas_sabedoras.responseText;
      }
    };

    xml_pessoas_sabedoras.open(
      'GET',
      'js/Convivio-Associado/Add-Entrevistado.php?E=' + pessoas_sabedoras,
      true
    );
    xml_pessoas_sabedoras.send(null);

    
  }else{
    return_pessoas_sabedoras.setAttribute('style', 'min-height: 5px');
  }
}


function SalvarTestemunha(){
  var nome = document.getElementById("nome_testemunha").value,
      protocolo = document.getElementById("protocolo").value,
      tipo = document.getElementById("tipo_entrevistado").value,
      tipo_convivio = document.getElementById("tipo_convivio").value,
      cep = document.getElementById("cep_testemunha").value,
      end = document.getElementById("endereco_testemunha").value,
      num = document.getElementById("numero_testemunha").value,
      bairro = document.getElementById("bairro_testemunha").value,
      cidade = document.getElementById("cidade_testemunha").value,
      estado = document.getElementById("estado_testemunha").value,
      telefone = document.getElementById("telefone_testemunha").value,
      observacao = document.getElementById("observacao_testemunha").value,

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
      ,"js/Convivio-Condutor/Salvar-Testemunhas.php?protocolo="+protocolo+"&tipo_convivio="+tipo_convivio+"&nome="+nome+"&tipo="+tipo+"&cep="+cep+"&end="+end+"&num="+num+"&bairro="+bairro+"&cidade="+cidade+"&estado="+estado+"&telefone="+telefone+"&observacao="+observacao
      ,true
  );
  ajax.send(null);
}
