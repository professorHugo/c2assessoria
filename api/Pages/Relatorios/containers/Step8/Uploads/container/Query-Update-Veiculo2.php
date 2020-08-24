<?php
while($ReturnResDiversas = mysqli_fetch_assoc($ExeQrBuscarFotoRestricaoDiv)){
    $IdFotoRestricaoDiv = $ReturnResDiversas['id_foto'];
}

echo "<br><pre>" . 
$QueryUpdateVeiculoResDiv = "
    UPDATE tb_veiculos
    SET
        restricoes1_veiculo = '$IdFotoRestricaoDiv' 
    WHERE placa_veiculo = '$PlacaVeiculo'
";
echo "</pre>";
$ExeQrUpdateVeiculoResDiv = mysqli_query($connection, $QueryUpdateVeiculoResDiv);
if( $ExeQrUpdateVeiculoResDiv ){
    echo "
    <br>Veículo de placa <b>$PlacaVeiculo</b> 
    atualizado com a foto <b>$IdFotoRestricaoDiv</b>
    ";
}else{
    echo "<br>Erro ao atualizar: ".mysqli_error($connection);
}