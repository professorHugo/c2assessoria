<?php
while($ResMulta = mysqli_fetch_assoc($ExeQrBuscarFotoMulta)){
    $IdFotoMulta = $ResMulta['id_foto'];
}
echo "<br><pre>" . 
$QueryUpdateVeiculo = "
    UPDATE tb_veiculos
    SET
        evento_multa_veiculo = '$IdFotoMulta'
    WHERE placa_veiculo = '$PlacaVeiculo'
";
echo "</pre>";
$ExeQrUpdateVeiculo = mysqli_query($connection, $QueryUpdateVeiculo);
if( $ExeQrUpdateVeiculo ){
    echo "<br>Veículo de placa <b>$PlacaVeiculo</b> atualizado com a foto <b>$IdFotoMulta</b>";
}else{
    echo "<br>Erro ao atualizar: ".mysqli_error($connection);
}