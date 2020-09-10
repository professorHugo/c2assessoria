<?php
while( $ResFinanceiro = mysqli_fetch_assoc($ExeQrBuscarFinanceiro) ){
    echo "<br>ID Financeiro: " . $IdFinanceiro = $ResFinanceiro['id_financeiro'];
}
echo "<br><pre>" . 
$QueryUpdateVeiculo = "
    UPDATE tb_veiculos
    SET
        financeiro_veiculo = '$IdFinanceiro'
    WHERE placa_veiculo = '$PlacaVeiculo' AND protocolo_evento = '$Protocolo'
";
echo "</pre>";
$ExeQrUpdateVeiculo = mysqli_query($connection, $QueryUpdateVeiculo);
if( $ExeQrUpdateVeiculo ){
    echo "<br>Veículo atualizado com o id financeiro $IdFinanceiro";
}