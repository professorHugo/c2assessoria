<?php
while( $RegMobilidade = mysqli_fetch_assoc($ExeQrBuscaRegistroMobilidade) ){
    $idRegistroMobilidade = $RegMobilidade['id_mobilidade'];
}
echo "<br><pre>" . 
$UpdateMobilidade = "
    UPDATE tb_mobilidade
    SET 
        registro_mobilidade = '$idRegistroMobilidade'
    WHERE 
        protocolo_mobilidade = '$Protocolo'&&
        placa_mobilidade = '$PlacaVeiculo'
";
echo "</pre>";
$ExeQrUpdateMobilidade = mysqli_query($connection, $UpdateMobilidade);

if( $ExeQrUpdateMobilidade ){
    echo "<br>Mobilidade atualizada com o registro <b>$idRegistroMobilidade</b>";
}