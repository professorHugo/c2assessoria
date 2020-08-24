<?php
//Atualizar dados extras do veículo
echo "<br>Cadastrar dados extras<pre>" . 
$QueryUpdateExtras = "
    UPDATE tb_veiculos
    SET
        dut_veiculo = '$DocumentoVeiculos',
        proprietario_anterior_veiculo = '$ProprietarioAnterior'
    WHERE placa_veiculo = '$PlacaVeiculo' AND protocolo_evento = '$Protocolo'
";
echo "</pre>";
$ExeQrUpdateExtras = mysqli_query($connection, $QueryUpdateExtras);
if( $ExeQrUpdateExtras ){
    echo "<br>Extras atualizados para o protocolo <b>$Protocolo</b>";
}else{
    echo "<br>Erro ao atualizar: " . mysqli_error($connection);
}