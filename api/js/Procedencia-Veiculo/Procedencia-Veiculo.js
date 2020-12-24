function escolhaProcedente(){
  var procedente_veiculo = document.getElementById("procedente_veiculo").value,
      return_comprovante = document.getElementById("return_comprovante");

  var ajax_procedente = new XMLHttpRequest();

  return_comprovante.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';
  if( procedente_veiculo >= 5){
    return_foto_comprovante.setAttribute('style', 'display: none; margin-top: 10px');
  }
  ajax_procedente.onreadystatechange = function(){
    if( ajax_procedente.readyState == 4 && ajax_procedente.status == 200 ){
      return_comprovante.innerHTML = ajax_procedente.responseText;
    }
  };
  ajax_procedente.open(
    "GET",
    "js/Procedencia-Veiculo/Return-Comprovante.php?C=" + procedente_veiculo,
    true
  );
  ajax_procedente.send(null);
}

function changeComprovante(){
  var comprovante_procedente = document.getElementById("comprovante_procedente").value,
      return_foto_comprovante = document.getElementById("return_foto_comprovante");

  if( comprovante_procedente == 1 ){
    return_foto_comprovante.setAttribute('style', 'display: block; margin-top: 10px');
  }else{
    return_foto_comprovante.setAttribute('style', 'display: none; margin-top: 10px');
  }
}