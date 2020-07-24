<?php
echo "Placa: " . $_POST['placa_veiculo2'];

if(isset($_POST['placa_veiculo2'])){
    $Query2VerificarPlaca = "SELECT * FROM tb_veiculos WHERE placa_veiculo = '$PlacaVeiculo2'";
    $ExeQr2VerificarPlaca = mysqli_query($connection, $Query2VerificarPlaca);
    $RowQr2VerificarPlaca = mysqli_num_rows($ExeQr2VerificarPlaca);
    if($RowQr2VerificarPlaca < 1){
        echo "<pre>";
        echo $QueryCadastrarVeiculo2 = "
            INSERT INTO tb_veiculos
            (
                segurado_veiculo,
                protocolo_evento,
                condutor_veiculo,
                marca_veiculo,
                modelo_veiculo,
                placa_veiculo,
                seguro_veiculo
            )
            VALUES(
                '$CPFAssociado',
                '$Protocolo',
                '$Condutor',
                '$MarcaVeiculo2',
                '$ModeloVeiculo2',
                '$PlacaVeiculo2',
                '$SeguroVeiculo2'
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
        echo "Veículo de placa $PlacaVeiculo2 já cadastrado <br>";
    }
}
