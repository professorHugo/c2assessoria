<?php
echo "<br><b>Veículo 1:</b> ";
echo "<br><b>Placa: " . $_POST['placa_veiculo1'] . "</b>";
if(isset($_POST['placa_veiculo1'])){
    echo "<br><pre>" . 
    $Query1VerificarPlaca = "
        SELECT * FROM tb_veiculos WHERE placa_veiculo = '$placa_veiculo1'
    ";
    echo "</pre>";
    $ExeQr1VerificarPlaca = mysqli_query($connection, $Query1VerificarPlaca);
    $RowQr1VerificarPlaca = mysqli_num_rows($ExeQr1VerificarPlaca);
    if($RowQr1VerificarPlaca < 1){
        echo "<pre>";
        echo $QueryCadastrarVeiculo1 = "
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
                '$marca_veiculo1',
                '$modelo_veiculo1',
                '$placa_veiculo1',
                '$seguro_veiculo1'
            )
        ";
        echo "</pre>";

        $ExeQrCadastrarVeiculo1 = mysqli_query($connection, $QueryCadastrarVeiculo1);
        if($ExeQrCadastrarVeiculo1){
            echo "Veículo Adicionado ao banco de dados <br>";
        }else{
            echo "Erro: ".mysqli_error($connection);
        }
    }else{
        echo "Veículo de placa <b>$placa_veiculo1</b> já cadastrado <br>";
    }
}
