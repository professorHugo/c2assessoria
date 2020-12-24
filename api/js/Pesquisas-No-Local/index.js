function selecionarTestemunhas(){
  var testemunhas_local = document.getElementById('testemunhas_local').value,
  return_testemunhas_local = document.getElementById('return_testemunhas_local');

  var xml_testemunhas_local = new XMLHttpRequest();
  if( testemunhas_local == 1 ){
    return_testemunhas_local.setAttribute('style', 'min-height: 80px');

    return_testemunhas_local.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

    xml_testemunhas_local.onreadystatechange = function(){
      if( xml_testemunhas_local.readyState == 4 && xml_testemunhas_local.status == 200 ){
        return_testemunhas_local.innerHTML = xml_testemunhas_local.responseText;
      }
    };

    xml_testemunhas_local.open(
      'GET',
      'js/Pesquisas-No-Local/Add-Testemunha.php?T=' + testemunhas_local,
      true
    );
    xml_testemunhas_local.send(null);

    
  }else{
    return_testemunhas_local.setAttribute('style', 'min-height: 5px');
  }
  
}

function selectFotosLocal(){
  var select_img_local = document.getElementById('select_img_local').value,
  return_imagens_evento = document.getElementById('return_imagens_evento');

  if( select_img_local == 1 ){
    return_imagens_evento.setAttribute('style', 'display:block');
  }else{
    return_imagens_evento.setAttribute('style', 'display:none');
  }
}

function SalvarTestemunha(){
  var nome = document.getElementById("nome_testemunha").value,
      protocolo = document.getElementById("protocolo").value,
      tipo = document.getElementById("tipo_entrevistado").value,
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
      ,"js/Pesquisas-No-Local/Salvar-Testemunhas.php?protocolo="+protocolo+"&nome="+nome+"&tipo="+tipo+"&cep="+cep+"&end="+end+"&num="+num+"&bairro="+bairro+"&cidade="+cidade+"&estado="+estado+"&telefone="+telefone+"&observacao="+observacao
      ,true
  );
  ajax.send(null);
}
