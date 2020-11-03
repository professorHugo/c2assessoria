function eventoMultasDetran(){
  //exibir fotos de multas do DETRAN
  var multas_evento = document.getElementById("multas_evento").value,
      prints_multas_evento = document.getElementById("prints_multas_evento");

  if( multas_evento == 2 ){
    prints_multas_evento.setAttribute('style', 'display:none');
  }else{
    prints_multas_evento.setAttribute('style', 'display:block');
  }
}

function restricoesDiversas(){
  // inserir recursos de restricoesDiversas
  var restricoes_diversas = document.getElementById('restricoes_diversas').value,
      return_restricoes_diversas = document.getElementById('return_restricoes_diversas');

  var xml_restricoes = new XMLHttpRequest();
  
  xml_restricoes.onreadystatechange = function(){
    if( xml_restricoes.readyState == 4 && xml_restricoes.status == 200 ){
      return_restricoes_diversas.innerHTML = xml_restricoes.responseText;
    }
  };
  xml_restricoes.open(
    'GET',
    'js/Apontamentos-Detran/Restricoes.php?Restricoes=' + restricoes_diversas,
    true
  );
  xml_restricoes.send(null);
}

function vistoriaCautelar(){
  //Ativar a visibilidade das fotos das vistorias
  var vistoria_cautelar = document.getElementById('vistoria_cautelar').value,
      return_vistoria_realizada = document.getElementById('return_vistoria_realizada');

  var xml_vistoria = new XMLHttpRequest();

  xml_vistoria.onreadystatechange = function(){
    if( xml_vistoria.readyState == 4 && xml_vistoria.status == 200 ){
      return_vistoria_realizada.innerHTML = xml_vistoria.responseText;
    }
  };

  xml_vistoria.open(
    'GET',
    'js/Apontamentos-Detran/Vistoria.php?Vistoria=' + vistoria_cautelar,
    true
  );
  xml_vistoria.send(null);
}

function vistoriaCautelarImg(){
  var img_vistoria = document.getElementById('img_vistoria').value,
      fotos_vistoria = document.getElementById('fotos_vistoria');

  if( img_vistoria == 2 ){
    fotos_vistoria.setAttribute('style', 'display: none');
  }else{
    fotos_vistoria.setAttribute('style', 'display:block; margin-top:10px');
  }

}