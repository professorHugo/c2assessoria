<?php
while($ReturnResFin = mysqli_fetch_assoc($ExeQrBuscarFotoRestricaoFin)){
    echo "<br>ID: " . $IdFotoResFin = $ReturnResFin['id_foto'];
}

echo "<br><pre>" . 
$QueryUpdateVeiculoResDiv = "
    UPDATE tb_veiculos
    SET
        restricoes2_veiculo = '$IdFotoResFin' 
    WHERE placa_veiculo = '$PlacaVeiculo'
";
echo "</pre>";
$ExeQrUpdateVeiculoResDiv = mysqli_query($connection, $QueryUpdateVeiculoResDiv);
if( $ExeQrUpdateVeiculoResDiv ){
    echo "
    <br>Veículo de placa <b>$PlacaVeiculo</b> 
    atualizado com a foto <b>$IdFotoResFin</b>
    ";
}else{
    echo "<br>Erro ao atualizar: ".mysqli_error($connection);
}