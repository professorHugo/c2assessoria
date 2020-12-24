$(function () {

  function limpa_formulário_cep() {
      // Limpa valores do formulário de cep.
      $("#endereco_local_evento").val("");
      $("#endereco_local_evento_exibir").val("");
      $("#bairro_local_evento").val("");
      $("#bairro_local_evento_exibir").val("");
      $("#cidade_local_evento").val("");
      $("#cidade_local_evento_exibir").val("");
      $("#estado_local_evento").val("");
      $("#estado_local_evento_exibir").val("");
      $("#ibge").val("");
      
  }

  //Quando o campo cep perde o foco.
  $("#cep_local_evento").blur(function () {

      //Nova variável "cep" somente com dígitos.
      var cep = $(this).val().replace(/\D/g, '');

      //Verifica se campo cep possui valor informado.
      if (cep != "") {

          //Expressão regular para validar o CEP.
          var validacep = /^[0-9]{8}$/;

          //Valida o formato do CEP.
          if (validacep.test(cep)) {

              //Preenche os campos com "..." enquanto consulta webservice.
              $("#endereco_local_evento").val("...");
              $("#endereco_local_evento_exibir").val("...");
              $("#bairro_local_evento").val("...");
              $("#bairro_local_evento_exibir").val("...");
              $("#cidade_local_evento").val("...");
              $("#cidade_local_evento_exibir").val("...");
              $("#estado_local_evento").val("...");
              $("#estado_local_evento_exibir").val("...");
              $("#ibge").val("...");

              //Consulta o webservice viacep.com.br/
              $.getJSON("//viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                  if (!("erro" in dados)) {
                      //Atualiza os campos com os valores da consulta.
                      $("#endereco_local_evento").val(dados.logradouro);
                      $("#endereco_local_evento_exibir").val(dados.logradouro);
                      $("#bairro_local_evento").val(dados.bairro);
                      $("#bairro_local_evento_exibir").val(dados.bairro);
                      $("#cidade_local_evento").val(dados.localidade);
                      $("#cidade_local_evento_exibir").val(dados.localidade);
                      $("#estado_local_evento").val(dados.uf);
                      $("#estado_local_evento_exibir").val(dados.uf);
                      $("#ibge").val(dados.ibge);

                  } //end if.
                  else {
                      //CEP pesquisado não foi encontrado.
                      limpa_formulário_cep();
                      alert("CEP não encontrado.");
                  }
              });
          } //end if.
          else {
              //cep é inválido.
              limpa_formulário_cep();
              alert("Formato de CEP inválido.");
          }
      } //end if.
      else {
          //cep sem valor, limpa formulário.
          limpa_formulário_cep();
      }
  });
});
