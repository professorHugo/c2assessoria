<?php
echo "Placa: " . $_POST['placa_veiculo1'];
echo "<br> Condutor: " . $Condutor = $_SESSION['CondutorVeiculo'];
if(isset($_POST['placa_veiculo1'])){
    $Query1VerificarPlaca = "SELECT * FROM tb_veiculos WHERE placa_veiculo = '$PlacaVeiculo1'";
    $ExeQr1VerificarPlaca = mysqli_query($connection, $Query1VerificarPlaca);
    $RowQr1VerificarPlaca = mysqli_num_rows($ExeQr1VerificarPlaca);
    if($RowQr1VerificarPlaca < 1){
        echo "<pre>";
        echo $QueryCadastrarVeiculo1 = "
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
                '$MarcaVeiculo1',
                '$ModeloVeiculo1',
                '$PlacaVeiculo1',
                '$SeguroVeiculo1'
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
        echo "Veículo de placa $PlacaVeiculo1 já cadastrado <br>";
    }
}
