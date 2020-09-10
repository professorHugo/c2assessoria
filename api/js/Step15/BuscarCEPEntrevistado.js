$(function () {

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#endereco_entrevistado").val("");
        $("#endereco_entrevistado_v").val("");
        $("#bairro_entrevistado").val("");
        $("#bairro_entrevistado_v").val("");
        $("#cidade_entrevistado").val("");
        $("#cidade_entrevistado_v").val("");
        $("#estado_entrevistado").val("");
        $("#estado_entrevistado_v").val("");
        $("#ibge").val("");
        
    }

    //Quando o campo cep perde o foco.
    $("#cep_entrevistado").blur(function () {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if (validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#endereco_entrevistado").val("...");
                $("#endereco_entrevistado_v").val("...");
                $("#bairro_entrevistado").val("...");
                $("#bairro_entrevistado_v").val("...");
                $("#cidade_entrevistado").val("...");
                $("#cidade_entrevistado_v").val("...");
                $("#estado_entrevistado").val("...");
                $("#estado_entrevistado_v").val("...");
                $("#ibge").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("//viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#endereco_entrevistado").val(dados.logradouro);
                        $("#endereco_entrevistado_v").val(dados.logradouro);
                        $("#bairro_entrevistado").val(dados.bairro);
                        $("#bairro_entrevistado_v").val(dados.bairro);
                        $("#cidade_entrevistado").val(dados.localidade);
                        $("#cidade_entrevistado_v").val(dados.localidade);
                        $("#estado_entrevistado").val(dados.uf);
                        $("#estado_entrevistado_v").val(dados.uf);
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
