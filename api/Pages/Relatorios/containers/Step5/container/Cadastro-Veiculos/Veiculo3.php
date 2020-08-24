<?php
echo "<br><b>Veículo 3:</b> ";
echo "<br><b>Placa: " . $_POST['placa_veiculo3'] . "</b>";
if(isset($_POST['placa_veiculo3'])){
    echo "<br><pre>" . 
    $Query3VerificarPlaca = "
        SELECT * FROM tb_veiculos WHERE placa_veiculo = '$placa_veiculo3'
    ";
    echo "</pre>";
    $ExeQr3VerificarPlaca = mysqli_query($connection, $Query3VerificarPlaca);
    $RowQr3VerificarPlaca = mysqli_num_rows($ExeQr3VerificarPlaca);
    if($RowQr3VerificarPlaca < 1){
        echo "<pre>";
        echo $QueryCadastrarVeiculo3 = "
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
                '$marca_veiculo3',
                '$modelo_veiculo3',
                '$placa_veiculo3',
                '$seguro_veiculo3'
            )
        ";
        echo "</pre>";

        $ExeQrCadastrarVeiculo3 = mysqli_query($connection, $QueryCadastrarVeiculo3);
        if($ExeQrCadastrarVeiculo3){
            echo "Veículo Adicionado ao banco de dados <br>";
        }else{
            echo "Erro: ".mysqli_error($connection);
        }
    }else{
        echo "Veículo de placa <b>$placa_veiculo3</b> já cadastrado <br>";
    }
}
