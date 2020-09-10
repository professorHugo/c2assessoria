<?php
echo "<br><pre>" . 
$QueryCadastrarFinanceiro = "
    INSERT INTO tb_financeiro_veiculo(
        protocolo_financeiro,
        instituicao_financeiro,
        total_parcelas_financeiro,
        valor_parcela_financeiro,
        parcelas_pagas_financeiro,
        situacao_financeiro
    )VALUES(
        '$Protocolo',
        '$InstituicaoFinanceira',
        '$TotalParcelas',
        '$ValorParcela',
        '$QuantidadePagas',
        '$SituacaoFinanciamento'
    )
";
echo "</pre>";
$ExeQrCadastraFinanceiro = mysqli_query($connection, $QueryCadastrarFinanceiro);