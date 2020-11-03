function desativarVeiculosAdicionais(){
  var veiculos_Adicionais = document.getElementById("outro_veiculo").value,
      veiculos_adicionais = document.getElementById("veiculos_adicionais");

  var Veiculos0 = new XMLHttpRequest();

  if( veiculos_Adicionais == 2 ){
      veiculos_adicionais.innerHTML = '';
      Veiculos0.onreadystatechange = function(){
          if( Veiculos0.readyState == 4 && Veiculos0.status == 200 ){
              veiculos_adicionais.innerHTML = '';
          }
      }
  }
}

function acionarVeiculosAdicionais(){
  var veiculosAdicionais = document.getElementById("outro_veiculo").value,
      returnVeiculosAdicionais = document.getElementById("quantidadeReturn");

  var v_xhttp = new XMLHttpRequest();

  returnVeiculosAdicionais.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid"> Carregando Campo';

  v_xhttp.onreadystatechange = function(){
      if(v_xhttp.readyState == 4){
          if(v_xhttp.status == 200){
              returnVeiculosAdicionais.innerHTML = v_xhttp.responseText;
          }
      }
  };
  v_xhttp.open("GET", "./js/Perfil-Associado/Veiculos-Adicionais.php?Acionado=" + veiculosAdicionais , true);
  v_xhttp.send(null);
}

function quantidadeAdicionar(){
  var veiculosQuantidade = document.getElementById("veiculos_quantidade").value;

  var returnQuantidade = document.getElementById("veiculos_adicionais");

  vadd_xhttp = new XMLHttpRequest();

  returnQuantidade.innerHTML = '<img src="img/ajax-loader.gif" class="img-responsive">';

  vadd_xhttp.onreadystatechange = function(){
      if(vadd_xhttp.readyState == 4){
          if(vadd_xhttp.status == 200){
              returnQuantidade.innerHTML = vadd_xhttp.responseText;
          }else{
              "erro";
          }
      }
  };
  vadd_xhttp.open("GET", "./js/Perfil-Associado/Veiculos-Adicionais-Quantidade.php?Quantidade=" + veiculosQuantidade , true);
  vadd_xhttp.send(null);
}

function registroCNH(){
    var registro_cnh = document.getElementById("registro_cnh").value,
        return_prontuario = document.getElementById("return_prontuario");

    if( registro_cnh == 1 ){
        return_prontuario.setAttribute('style', 'display:block');
    }else{
        return_prontuario.setAttribute('style', 'display:none');
    }
}