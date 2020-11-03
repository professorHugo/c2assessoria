function financiamentoAtrelado(){
  var financiamento_atrelado = document.getElementById('financiamento_atrelado').value,
      return_financiamento_atrelado = document.getElementById('return_financiamento_atrelado');

  if( financiamento_atrelado == 2 ){
    document.getElementById('fotos_parcelas').setAttribute('style', 'display: none');
  }

  return_financiamento_atrelado.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

  var xml_financiamento = new XMLHttpRequest();

  xml_financiamento.onreadystatechange = function(){
    if( xml_financiamento.readyState == 4 && xml_financiamento.status == 200 ){
      return_financiamento_atrelado.innerHTML = xml_financiamento.responseText;
    }
  };

  xml_financiamento.open(
    'GET',
    'js/Financiamento-Atrelado/Financiamento.php?Financiamento=' + financiamento_atrelado,
    true
  );
  xml_financiamento.send(null);

}

function statusPagamentos(){
  var status_pagamentos = document.getElementById('status_pagamentos').value,
      fotos_parcelas = document.getElementById('fotos_parcelas'),
      return_status_pagamentos = document.getElementById('return_status_pagamentos');

  if( status_pagamentos == 1 ){
    fotos_parcelas.setAttribute('style', 'display: none');
  }else{
    fotos_parcelas.setAttribute(
      'style', 
      'display: block; min-height: 290px'
    );
  }
}

function statusPagamentos2(){
  var status_pagamentos2 = document.getElementById('status_pagamentos').value,
      return_status_pagamentos = document.getElementById('return_status_pagamentos');

  if( status_pagamentos2 == 1 ){
    return_status_pagamentos.setAttribute('style', 'display: none');
  }else{
    return_status_pagamentos.setAttribute('style', 'display: block;width: 100%;');
  }
}