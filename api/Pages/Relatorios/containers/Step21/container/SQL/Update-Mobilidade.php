<?php
while( $ResFotoMobilidade = mysqli_fetch_assoc($ExeQrBuscarFotoMobilidade) ){
    $IdFoto = $ResFotoMobilidade['id_foto'];
}
//Update da mobilidade
echo "<br><pre>" . 
$QueryUpdateMobilidade = "
    UPDATE 
        tb_registro_mobilidade
    SET
        print_mobilidade = '$IdFoto'
    WHERE 
        protocolo_mobilidade = '$Protocolo'&&
        placa_mobilidade = '$PlacaVeiculo'
";
echo "</pre>";

$ExeQrUpdateMobilidade = mysqli_query($connection, $QueryUpdateMobilidade);