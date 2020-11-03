function escolhaDeclaracaoApresentada(){
  var declaracao_apresentada = document.getElementById('declaracao_apresentada').value,
  declaracao_condutor = document.getElementById('declaracao_condutor');

  if( declaracao_apresentada == 1 ){
    declaracao_condutor.setAttribute('style', 'display:block; min-height: 220px');
  }else{
    declaracao_condutor.setAttribute('style', 'display:none');
  }
}