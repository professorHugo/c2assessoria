function selecionarTestemunhas(){
  var testemunhas_local = document.getElementById('testemunhas_local').value,
  return_testemunhas_local = document.getElementById('return_testemunhas_local');

  var xml_testemunhas_local = new XMLHttpRequest();
  if( testemunhas_local == 1 ){
    return_testemunhas_local.setAttribute('style', 'min-height: 80px');
  }

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
}
