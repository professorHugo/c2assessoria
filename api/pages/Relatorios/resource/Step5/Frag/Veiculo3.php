<?php
echo "Placa: " . $_POST['placa_veiculo3'];

if(isset($_POST['placa_veiculo3'])){
    $Query3VerificarPlaca = "SELECT * FROM tb_veiculos WHERE placa_veiculo = '$PlacaVeiculo3'";
    $ExeQr3VerificarPlaca = mysqli_query($connection, $Query3VerificarPlaca);
    $RowQr3VerificarPlaca = mysqli_num_rows($ExeQr3VerificarPlaca);
    if($RowQr3VerificarPlaca < 1){
        echo "<pre>";
        echo $QueryCadastrarVeiculo3 = "
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
                '$MarcaVeiculo3',
                '$ModeloVeiculo3',
                '$PlacaVeiculo3',
                '$SeguroVeiculo3'
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
        echo "Veículo de placa $PlacaVeiculo3 já cadastrado <br>";
    }
}
