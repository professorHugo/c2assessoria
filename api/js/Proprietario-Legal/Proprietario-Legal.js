function proprietarioLegalSelect(){
  var proprietario_legal = document.getElementById("proprietario_legal").value,
      return_proprietario_legal = document.getElementById("return_proprietario_legal"),
      return_proprietario_legal2 = document.getElementById("return_proprietario_legal2"),
      fotos_documento = document.getElementById("fotos_documento");

  if( proprietario_legal == 1 ){
    return_proprietario_legal.innerHTML = '';
    return_proprietario_legal2.innerHTML = '';
    fotos_documento.innerHTML = '';
  }else{
    var xml_proprietario = new XMLHttpRequest();

    xml_proprietario.onreadystatechange = function(){
      if( xml_proprietario.readyState == 4 && xml_proprietario.status == 200 ){
        return_proprietario_legal.innerHTML = xml_proprietario.responseText;
      }
    };

    xml_proprietario.open(
      "GET",
      "js/Proprietario-Legal/Proprietario.php?Proprietario=" + proprietario_legal,
      true
    );
    xml_proprietario.send(null);
  }
}

function proprietarioAnterior(){
  var proprietario_legal = document.getElementById("proprietario_legal").value,
      return_proprietario_legal2 = document.getElementById("return_proprietario_legal2");

  if( proprietario_legal == 1 ){
    return_proprietario_legal2.innerHTML = '';
  }else{
    var xml_proprietario2 = new XMLHttpRequest();

    xml_proprietario2.onreadystatechange = function(){
      if( xml_proprietario2.readyState == 4 && xml_proprietario2.status == 200 ){
        return_proprietario_legal2.innerHTML = xml_proprietario2.responseText;
      }
    };
    xml_proprietario2.open(
      "GET",
      "js/Proprietario-Legal/Proprietario2.php?Proprietario-Anterior=" + proprietario_legal,
      true
    );
    xml_proprietario2.send(null);
  }
}

function CRV_DUT_Change(){
  var documento_veiculo = document.getElementById("documento_veiculo").value,
      fotos_documento = document.getElementById("fotos_documento");

  if( documento_veiculo == 1) {
    fotos_documento.setAttribute('style', 'display:none; margin-top:10px');
  }else{
    fotos_documento.setAttribute('style', 'display:block; margin-top:10px');
  }
}


function proprietarioLegalSelect2(){
  var proprietario_legal3 = document.getElementById('proprietario_legal').value,
      texto_proprietario_legal = document.getElementById('texto_proprietario_legal'),
      declaracao_proprietario_terceiro = document.getElementById('declaracao_proprietario_terceiro'),
      foto_cnh_proprietario = document.getElementById('foto_cnh_proprietario'),
      endereco_proprietario = document.getElementById('endereco_proprietario');

  if( proprietario_legal3 == 2 ){
    texto_proprietario_legal.setAttribute('style', 'display: block');
    declaracao_proprietario_terceiro.setAttribute('style', 'display: block');
    foto_cnh_proprietario.setAttribute('style', 'display: block');
    endereco_proprietario.setAttribute('style', 'display: block; margin-top:3rem');
  }else{
    texto_proprietario_legal.setAttribute('style', 'display: none');
    declaracao_proprietario_terceiro.setAttribute('style', 'display: none');
    foto_cnh_proprietario.setAttribute('style', 'display: none');
    endereco_proprietario.setAttribute('style', 'display: none');
  }
}