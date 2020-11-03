$(function () {

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#endereco_proprietario").val("");
        $("#endereco_proprietario_exibir").val("");
        $("#bairro_proprietario").val("");
        $("#bairro_proprietario_exibir").val("");
        $("#cidade_proprietario").val("");
        $("#cidade_proprietario_exibir").val("");
        $("#estado_proprietario").val("");
        $("#estado_proprietario_exibir").val("");
        $("#ibge").val("");
        
    }

    //Quando o campo cep perde o foco.
    $("#cep_proprietario").blur(function () {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if (validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#endereco_proprietario").val("...");
                $("#endereco_proprietario_exibir").val("...");
                $("#bairro_proprietario").val("...");
                $("#bairro_proprietario_exibir").val("...");
                $("#cidade_proprietario").val("...");
                $("#cidade_proprietario_exibir").val("...");
                $("#estado_proprietario").val("...");
                $("#estado_proprietario_exibir").val("...");
                $("#ibge").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("//viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#endereco_proprietario").val(dados.logradouro);
                        $("#endereco_proprietario_exibir").val(dados.logradouro);
                        $("#bairro_proprietario").val(dados.bairro);
                        $("#bairro_proprietario_exibir").val(dados.bairro);
                        $("#cidade_proprietario").val(dados.localidade);
                        $("#cidade_proprietario_exibir").val(dados.localidade);
                        $("#estado_proprietario").val(dados.uf);
                        $("#estado_proprietario_exibir").val(dados.uf);
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
