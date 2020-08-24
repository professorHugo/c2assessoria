<?php
echo "<br><pre>" . 
$QueryBuscarVistoria = "
    SELECT * FROM 
        tb_vistorias_realizadas 
    WHERE protocolo_vistoria = '$Protocolo'
";
echo "</pre>";
$ExeQrBuscarVistoria = mysqli_query($connection, $QueryBuscarVistoria);
$RowQrBuscarVistoria = mysqli_num_rows($ExeQrBuscarVistoria);
if( $RowQrBuscarVistoria >= 1 ){
    while($ReturnVistoria = mysqli_fetch_assoc($ExeQrBuscarVistoria)){
        $IdVistoria = $ReturnVistoria['id_vistoria'];
    }

    echo "<br><pre>" . 
    $QueryUpdateVistoriaVeiculo = "
        UPDATE tb_veiculos
        SET 
            vistoria_veiculo = '$IdVistoria'
        WHERE placa_veiculo = '$PlacaVeiculo' AND protocolo_evento = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrUpdateVistoriaVeiculo = mysqli_query($connection, $QueryUpdateVistoriaVeiculo);
    if( $ExeQrUpdateVistoriaVeiculo ){
        echo "<br>Vistoria do veículo de placa <b>$PlacaVeiculo</b> atualizado";
    }else{
        echo "<br>Erro ao atualizar a vistoria do veículo de placa $PlacaVeiculo: " . 
        mysqli_error($connection);
    }
}