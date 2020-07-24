<?php
echo "Placa3: " . $_POST['placa_veiculo3_condutor'];

if(isset($_POST['placa_veiculo3_condutor'])){
    $Query3VerificarPlaca = "SELECT * FROM tb_veiculos WHERE placa_veiculo = '$PlacaVeiculo3_condutor'";
    $ExeQr3VerificarPlaca = mysqli_query($connection, $Query3VerificarPlaca);
    $RowQr3VerificarPlaca = mysqli_num_rows($ExeQr3VerificarPlaca);
    if($RowQr3VerificarPlaca < 1){
        echo "<pre>";
        echo $QueryCadastrarVeiculo3_condutor = "
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
                '$MarcaVeiculo3_condutor',
                '$ModeloVeiculo3_condutor',
                '$PlacaVeiculo3_condutor',
                '$SeguroVeiculo3_condutor'
            )
        ";
        echo "</pre>";

        $ExeQrCadastrarVeiculo3_condutor = mysqli_query($connection, $QueryCadastrarVeiculo3_condutor);
        if($ExeQrCadastrarVeiculo3_condutor){
            echo "Veículo Adicionado ao banco de dados <br>";
        }else{
            echo "Erro: ".mysqli_error($connection);
        }
    }else{
        echo "Veículo de placa $PlacaVeiculo3_condutor já cadastrado <br>";
    }
}
