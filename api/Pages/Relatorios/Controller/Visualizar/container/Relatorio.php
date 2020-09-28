<?php
echo "<br> Protocolo: " . $Protocolo                = $Relatorio['protocolo_evento'];
echo "<br> Solicitante: " . $Solicitante            = $Relatorio['nome_cliente'];
echo "<br> Natureza: " . $NaturezaEvento            = $Relatorio['descricao_natureza'];
echo "<br> Horário Criação: " . $HorarioCriacao     = $Relatorio['horario_criacao'];
echo "<br> Horário Update: " . $HorarioUpdate       = $Relatorio['horario_update'];
echo "<br> Sindicante: " . $Sindicante              = $Relatorio['sindicante_evento'];
echo "<br> Condutor: " . $CondutorVeiculo           = $Relatorio['condutor_veiculo'];
echo "<br> Condutor no evento: " . $CondutorEvento  = $Relatorio['condutor_evento'];
echo "<br> Placa: " . $PlacaVeiculo                 = $Relatorio['placa_veiculo_evento'];
echo "<br> Data do Sinistro: " . $DataEvento        = $Relatorio['data_evento'];
echo "<br> Data do Sinistro: " . $HoraEvento        = $Relatorio['horario_evento'];
echo "<br> CEP do sinistro: " . $CEPEvento          = $Relatorio['cep_evento'];
echo "<br> CEP do sinistro: " . $EnderecoEvento     = $Relatorio['endereco_evento'];
echo "<br> CEP do sinistro: " . $NumeroEvento       = $Relatorio['numero_evento'];
echo "<br> CEP do sinistro: " . $BairroEvento       = $Relatorio['bairro_evento'];
echo "<br> Status Relatório: " . $StatusRelatorio   = $Relatorio['status_relatorio'];
echo "<br> Contexto Geral: " . $ContextoGeral       = $Relatorio['contexto_geral_relatorio'];
echo "<br> Print Associado: " . $PrintAssociado     = $Relatorio['print_associado'];
echo "<br> Print Condutor: " . $PrintCondutor       = $Relatorio['print_condutor'];

//Dados Associado
echo "<br> ID Associado: " . $IdAssociado           = $Relatorio['id_associado'];
echo "<br> CPF Associado: " . $CPFAssociado         = $Relatorio['cpf_associado'];
echo "<br> Nome Associado: " . $NomeAssociado       = $Relatorio['nome_associado'];
echo "<br> Estado civil: " . $EstadoCivilAssociado  = $Relatorio['civil_associado'];
echo "<br> Profissão Assoc: " . $ProfissaoAssoc     = $Relatorio['profissao_associado'];
echo "<br> CNH Associado: " . $CNHAssociado         = $Relatorio['registro_cnh'];
echo "<br> CNH Associado: " . $StatusCNHAss         = $Relatorio['status_cnh'];
echo "<br> RG Associado: " . $RGAssociado           = $Relatorio['rg_cnh'];
echo "<br> CEP Associado: " . $CEPAssociado         = $Relatorio['cep_associado'];
echo "<br> Endereço Associado: " . $EndAssociado    = $Relatorio['endereco_associado'];
echo "<br> Endereço Associado: " . $BairroAssoc     = $Relatorio['bairro_associado'];
echo "<br>Veículo Add 2: " . $Veiculo2              = $Relatorio['veiculo2_associado'];
echo "<br>Veículo Add 3: " . $Veiculo3              = $Relatorio['veiculo3_associado'];
echo "<br>Veículo Add 4: " . $Veiculo4              = $Relatorio['veiculo4_associado'];

//Dados Condutor
echo "<br>Nome Condutor: " . $NomeCondutor          = $Relatorio['nome_condutor'];
echo "<br>Civil condutor: " . $EstadoCivilCondutor  = $Relatorio['civil_condutor'];
echo "<br>Profissão Condutor: " . $ProfissaoCond    = $Relatorio['profissao_condutor'];
echo "<br>Veiculo 1 cond: " . $Veiculo1Condutor     = $Relatorio['veiculo1_condutor'];
echo "<br>Veiculo 2 cond: " . $Veiculo2Condutor     = $Relatorio['veiculo2_condutor'];
echo "<br>Veiculo 3 cond: " . $Veiculo3Condutor     = $Relatorio['veiculo3_condutor'];
echo "<br>Vínculo associado: " . $VinculoAssociado  = $Relatorio['vinculo_associado'];
echo "<br>CNH Condutor: " . $CNHCondutor            = $Relatorio['cnh_condutor'];

//Dados Veículo
echo "<br>Marca: " . $MarcaVeiculo                  = $Relatorio['marca_veiculo'];
echo "<br>Modelo: " . $ModeloVeiculo                = $Relatorio['modelo_veiculo'];
echo "<br>DUT: " . $DutVeiculo                      = $Relatorio['dut_veiculo'];
echo "<br>Procedente: " . $PrecedenteVeiculo        = $Relatorio['procedente_veiculo'];
echo "<br>Proprietario Anterior". $ProprietarioAnt  = $Relatorio['proprietario_anterior_veiculo'];
echo "<br>Chaves Apresentadas: " . $ChavesApres     = $Relatorio['chaves_apresentadas_veiculo'];
echo "<br>Sistema Antifurto: " . $SistemaAntiFurto  = $Relatorio['sistema_anti_furto'];
echo "<br>Multa: " . $MultaVeiculo                  = $Relatorio['evento_multa_veiculo'];
echo "<br>Restriçoes 1: " . $Restricoes1            = $Relatorio['restricoes1_veiculo'];
echo "<br>Restriçoes 2: " . $Restricoes2            = $Relatorio['restricoes2_veiculo'];
echo "<br>Restriçoes 3: " . $Restricoes3            = $Relatorio['restricoes3_veiculo'];
echo "<br>Queixa: " . $QueixaEvento                 = $Relatorio['queixa_evento_veiculo'];
echo "<br>Vistoria Realizada: ". $VistoriaRealizada = $Relatorio['vistoria_realizada'];
echo "<br>Financeiro: " . $FinanceiroVeiculo        = $Relatorio['financeiro_veiculo'];
echo "<br>Nota Fiscal: ". $NotaFiscal               = $Relatorio['foto_nota_fiscal_veiculo'];

?>
<div class="row" id="Relatorio">
    <h2 class="text-center col-12">Relatório de Sindicância</h2>
    <div class="col-12" style="margin-top: 2rem"></div>

    <div class="col-12">
        <?php include "components/Cabecalho-Sindicancia.php"?>
    </div>

    <div class="col-12" style="margin-top: 2rem"></div>

    <div class="row col-12">
        <?php include_once "components/Topo-Solicitacao.php"?>
    </div>

    <div class="col-12" style="margin-top: 3rem"></div>

    <div class="row col-12">
        <?php

            include "components/Perfil-Associado.php";
        

            if( $CondutorVeiculo == 2 ){
                include_once "components/Perfil-Condutor.php";
            }
        ?>
        
    </div>
</div>