<?php
echo "<br><b>Veículo 2:</b> ";
echo "<br><b>Placa: " . $_POST['placa_veiculo2'] . "</b>";
if(isset($_POST['placa_veiculo2'])){
    echo "<br><pre>" . 
    $Query2VerificarPlaca = "
        SELECT * FROM tb_veiculos WHERE placa_veiculo = '$placa_veiculo2'
    ";
    echo "</pre>";
    $ExeQr2VerificarPlaca = mysqli_query($connection, $Query2VerificarPlaca);
    $RowQr2VerificarPlaca = mysqli_num_rows($ExeQr2VerificarPlaca);
    if($RowQr2VerificarPlaca < 1){
        echo "<pre>";
        echo $QueryCadastrarVeiculo2 = "
            INSERT INTO tb_veiculos
            (
                proprietario_veiculo,
                segurado_veiculo,
                protocolo_evento,
                condutor_veiculo,
                marca_veiculo,
                modelo_veiculo,
                placa_veiculo,
                seguro_veiculo
            )
            VALUES(
                1,
                '$CPFAssociado',
                '$Protocolo',
                '$Condutor',
                '$marca_veiculo2',
                '$modelo_veiculo2',
                '$placa_veiculo2',
                '$seguro_veiculo2'
            )
        ";
        echo "</pre>";

        $ExeQrCadastrarVeiculo2 = mysqli_query($connection, $QueryCadastrarVeiculo2);
        if($ExeQrCadastrarVeiculo2){
            echo "Veículo Adicionado ao banco de dados <br>";
        }else{
            echo "Erro: ".mysqli_error($connection);
        }
    }else{
        echo "Veículo de placa <b>$placa_veiculo2</b> já cadastrado <br>";
    }
}
