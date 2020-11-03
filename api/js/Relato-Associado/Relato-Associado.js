function escolhaDeclaracaoApresentada(){
  var declaracao_apresentada = document.getElementById('declaracao_apresentada').value,
  declaracao_associado = document.getElementById('declaracao_associado');

  if( declaracao_apresentada == 1 ){
    declaracao_associado.setAttribute('style', 'display:block; min-height: 220px');
  }else{
    declaracao_associado.setAttribute('style', 'display:none');
  }
}