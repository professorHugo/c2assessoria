function selectCondutor(){
  var condutor_veiculo = document.getElementById('condutor_veiculo').value,
  return_condutor = document.getElementById('return_condutor'),
  endereco_condutor = document.getElementById('block_endereco_condutor');

  if( condutor_veiculo == 2 ){
    endereco_condutor.setAttribute('style', 'display:block;width:100%');
  }else{
    endereco_condutor.setAttribute('style', 'display:none');
  }
}

function tipoCondutor(){
  var condutor_veiculo = document.getElementById('condutor_veiculo').value,
  return_condutor = document.getElementById('return_condutor');
  
  xml_condutor = new XMLHttpRequest();

  return_condutor.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

  
  xml_condutor.onreadystatechange = function(){
    if( xml_condutor.readyState == 4 ){
      if( xml_condutor.status == 200 ){
        return_condutor.innerHTML = xml_condutor.responseText;
      }
    }
  };

  xml_condutor.open(
    'GET',
    'js/Criar-Relatorio/Set-Nome-Condutor.php?Condutor=' + condutor_veiculo,
    true
  );
  xml_condutor.send(null);


}