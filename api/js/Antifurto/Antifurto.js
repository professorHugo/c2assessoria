function escolhaSistemaAntifurto(){
  var sistema_antifurto = document.getElementById('sistema_antifurto').value,
  comprovante_instalacao_return = document.getElementById('comprovante_instalacao_return'),
  telemetria_rastreador = document.getElementById('telemetria_rastreador'),
  img_comprovantes = document.getElementById('img_comprovantes');

  if( sistema_antifurto == 1 ){
    telemetria_rastreador.setAttribute('style', 'display:block; min-height: 260px; margin-top: 55px');
  }else{
    telemetria_rastreador.setAttribute('style', 'display:none');
    img_comprovantes.setAttribute('style', 'display:none');
  }

  var xml_antifurto = new XMLHttpRequest();

  xml_antifurto.onreadystatechange = function(){
    if( xml_antifurto.readyState == 4 && xml_antifurto.status == 200 ){
      comprovante_instalacao_return.innerHTML = xml_antifurto.responseText;
    }
  };

  xml_antifurto.open(
    'GET',
    'js/Antifurto/Return-Comprovante.php?Comprovante=' + sistema_antifurto,
    true
  );
  xml_antifurto.send(null);
}

function selectComprovanteRastreador(){
  var sistema_antifurto = document.getElementById('comprovante_instalacao').value,
  img_comprovantes = document.getElementById('img_comprovantes');

  if( sistema_antifurto == 1 ){
    img_comprovantes.setAttribute('style', 'display:block; min-height: 180px; margin-bottom: 15px');
  }else{
    img_comprovantes.setAttribute('style', 'display:none');
  }
}