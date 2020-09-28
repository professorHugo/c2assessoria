<?php
while( $ResFotoTelemetria = mysqli_fetch_assoc($ExeQrBuscarFotoTelemetria) ){
    $IdFoto = $ResFotoTelemetria['id_foto'];
}
//Update da telemetria
echo "<br><pre>" . 
$QueryUpdateTelemetria = "
    UPDATE 
        tb_registro_telemetria
    SET
        print_telemetria = '$IdFoto'
    WHERE 
        protocolo_telemetria = '$Protocolo'&&
        placa_telemetria = '$PlacaVeiculo'
";
echo "</pre>";

$ExeQrUpdateTelemetria = mysqli_query($connection, $QueryUpdateTelemetria);