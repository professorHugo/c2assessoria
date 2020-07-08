<?php
echo "Placa: " . $_POST['placa_veiculo2_condutor'];

if(isset($_POST['placa_veiculo2_condutor'])){
    $Query2VerificarPlaca = "SELECT * FROM tb_veiculos WHERE placa_veiculo = '$PlacaVeiculo2_condutor'";
    $ExeQr2VerificarPlaca = mysqli_query($connection, $Query2VerificarPlaca);
    $RowQr2VerificarPlaca = mysqli_num_rows($ExeQr2VerificarPlaca);
    if($RowQr2VerificarPlaca < 1){
        echo "<pre>";
        echo $QueryCadastrarVeiculo2_condutor = "
            INSERT INTO tb_veiculos
            (
                segurado_veiculo,
                marca_veiculo,
                modelo_veiculo,
                placa_veiculo,
                seguro_veiculo
            )
            VALUES(
                '$CPFAssociado','$MarcaVeiculo2_condutor','$ModeloVeiculo2_condutor','$PlacaVeiculo2_condutor','$SeguroVeiculo2_condutor'
            )
        ";
        echo "</pre>";

        $ExeQrCadastrarVeiculo2_condutor = mysqli_query($connection, $QueryCadastrarVeiculo2_condutor);
        if($ExeQrCadastrarVeiculo2_condutor){
            echo "Veículo Adicionado ao banco de dados <br>";
        }else{
            echo "Erro: ".mysqli_error($connection);
        }
    }else{
        echo "Veículo de placa $PlacaVeiculo2_condutor já cadastrado <br>";
    }
}
