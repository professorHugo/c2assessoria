function EscolherUsoApp(){
  var utilizacao_app_mobilidade = document.getElementById('utilizacao_app_mobilidade').value,
  return_utilizacao_app_mobilidade = document.getElementById('return_utilizacao_app_mobilidade');

  if( utilizacao_app_mobilidade == 1 ){
    return_utilizacao_app_mobilidade.setAttribute(
      'style', 
      'display:block; margin-top:10px;min-height: 80px'
    )
  }else{

  }
}

function comprovanteApresentado(){
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
      'display:block; margin-top:10px;min-height: 280px'
    );
  }
}