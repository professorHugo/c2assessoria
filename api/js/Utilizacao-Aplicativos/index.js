function EscolherUsoApp(){
  // Coletar Dados de uso do Aplicativo de mobilidade urbana
  var utilizacao_app_mobilidade = document.getElementById('utilizacao_app_mobilidade').value,
  return_utilizacao_app_mobilidade = document.getElementById('return_utilizacao_app_mobilidade');

  XMLutilizacao_app_mobilidade = new XMLHttpRequest();

  return_utilizacao_app_mobilidade.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

  XMLutilizacao_app_mobilidade.onreadystatechange = function(){
    if( XMLutilizacao_app_mobilidade.readyState == 4 && XMLutilizacao_app_mobilidade.status == 200 ){
      return_utilizacao_app_mobilidade.innerHTML = XMLutilizacao_app_mobilidade.responseText;
    }
  };

  XMLutilizacao_app_mobilidade.open(
    'GET',
    'Pages/Relatorios/Preencher/container/components/Utilizacao-Aplicativos/components/containers/Utilizacao-App-Mobilidade?UAPP=' + utilizacao_app_mobilidade,
    true
  );
  XMLutilizacao_app_mobilidade.send(null);
};


//Função para comprovante apresentado incluir status do comprovante
function comprovanteApresentado(){
  var comprovante_apresentado = document.getElementById('comprovante_apresentado').value,
  return_comprovante_apresentado = document.getElementById('return_comprovante_apresentado');

  XMLcomprovante_apresentado = new XMLHttpRequest();
  return_comprovante_apresentado.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

  XMLcomprovante_apresentado.onreadystatechange = function(){
    if( XMLcomprovante_apresentado.readyState == 4 && XMLcomprovante_apresentado.status == 200 ){
      return_comprovante_apresentado.innerHTML = XMLcomprovante_apresentado.responseText;
    }
  };

  XMLcomprovante_apresentado.open(
    'GET',
    'Pages/Relatorios/Preencher/container/components/Utilizacao-Aplicativos/components/containers/Status-Mobilidade-Urbana.php?Status=' + comprovante_apresentado,
    true
  );
  XMLcomprovante_apresentado.send(null);
};


//Função para comprovante apresentado incluir imagens
function comprovanteApresentadoImg(){
  var comprovante_apresentado = document.getElementById("comprovante_apresentado").value,
      return_comprovante_apresentado = document.getElementById("return_comprovante_apresentado"),

      return_img_app = document.getElementById("return_img_app");

  if( comprovante_apresentado != 1) {
    return_comprovante_apresentado.setAttribute('style', 'display:none; margin-top:10px');
    return_img_app.setAttribute('style', 'display:none; margin-top:10px');
  }else{
    return_comprovante_apresentado.setAttribute(
      'style', 
      'display:block; margin-top:10px;min-height: 80px'
      );
    return_img_app.setAttribute(
      'style', 
      'display:block; margin-top:10px; min-height: 280px'
    );
  }
}
