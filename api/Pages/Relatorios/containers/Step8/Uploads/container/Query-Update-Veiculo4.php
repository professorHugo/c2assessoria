<?php
while($ReturnResQueixa = mysqli_fetch_assoc($ExeQrBuscarFotoQueixa)){
    echo "<br>ID: " . $IdFotoResQueixa = $ReturnResQueixa['id_foto'];
}

echo "<br><pre>" . 
$QueryUpdateVeiculoQueixa = "
    UPDATE tb_veiculos
    SET
        queixa_evento_veiculo = '$IdFotoResQueixa' 
    WHERE placa_veiculo = '$PlacaVeiculo'
";
echo "</pre>";
$ExeQrUpdateVeiculoQueixa = mysqli_query($connection, $QueryUpdateVeiculoQueixa);
if( $ExeQrUpdateVeiculoQueixa ){
    echo "
    <br>Veículo de placa <b>$PlacaVeiculo</b> 
    atualizado com a foto <b>$IdFotoResQueixa</b>
    ";
}else{
    echo "<br>Erro ao atualizar: ".mysqli_error($connection);
}