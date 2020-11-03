<?php
  echo "<br>Veículo3: ";
  echo "<br>Placa: " . $Placa3 = $_POST['placa_veiculo3'];
  echo "<br>Marca: " . $Marca3 = $_POST['marca_veiculo3'];
  echo "<br>Modelo: " . $Modelo3 = $_POST['modelo_veiculo3'];
  echo "<br>Proteção: " . $Protecao3 = $_POST['protecao_veiculo3'];
  $Seguro3 = $_POST['seguro_veiculo3'];
  echo "<br>Seguro: ";
  if( $Seguro3 == 'check' ){
    echo $Seguro3 = "Sim";
  }else{
    echo $Seguro3 = "Não";
  }
  
  if( isset($_POST['placa_veiculo3']) ){
    echo "<br><pre>" . 
    $QueryVerificarPlaca3 = "
      SELECT * FROM tb_veiculos WHERE placa_veiculo = '$Placa3' && protocolo_evento = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrVerificarPlaca3 = mysqli_query($connection, $QueryVerificarPlaca3);
    $RowQrVerificarPlaca3 = mysqli_num_rows($ExeQrVerificarPlaca3);

    if( $RowQrVerificarPlaca3 < 1 ){
      echo "<br><pre>" . 
      $QueryCadastrarVeiculo3 = "
        INSERT INTO tb_veiculos(
          proprietario_veiculo,
          segurado_veiculo,
          protocolo_evento,
          marca_veiculo,
          modelo_veiculo,
          placa_veiculo,
          protecao_veiculo,
          seguro_veiculo
        )VALUES(
          '$Proprietario',
          '$CPFAssociado',
          '$Protocolo',
          '$Marca3',
          '$Modelo3',
          '$Placa3',
          '$Protecao3',
          '$Seguro3'
        )
      ";
      echo "</pre>";

      $ExeQrCadastrarVeiculo3 = mysqli_query($connection, $QueryCadastrarVeiculo3);
      if( $ExeQrCadastrarVeiculo3 ){
        echo "<br>Veículo 3 cadastrado";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }else{
      echo "<br>Veículo já cadastrado";
    }
  }