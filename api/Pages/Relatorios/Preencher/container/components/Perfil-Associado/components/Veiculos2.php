<?php
  echo "<br>Veículo2: ";
  echo "<br>Placa: " . $Placa2 = $_POST['placa_veiculo2'];
  echo "<br>Marca: " . $Marca2 = $_POST['marca_veiculo2'];
  echo "<br>Modelo: " . $Modelo2 = $_POST['modelo_veiculo2'];
  echo "<br>Proteção: " . $Protecao2 = $_POST['protecao_veiculo2'];
  $Seguro2 = $_POST['seguro_veiculo2'];
  echo "<br>Seguro: ";
  if( $Seguro2 == 'check' ){
    echo $Seguro2 = "Sim";
  }else{
    echo $Seguro2 = "Não";
  }
  
  if( isset($_POST['placa_veiculo2']) ){
    echo "<br><pre>" . 
    $QueryVerificarPlaca2 = "
      SELECT * FROM tb_veiculos WHERE placa_veiculo = '$Placa2' && protocolo_evento = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrVerificarPlaca2 = mysqli_query($connection, $QueryVerificarPlaca2);
    $RowQrVerificarPlaca2 = mysqli_num_rows($ExeQrVerificarPlaca2);

    if( $RowQrVerificarPlaca2 < 1 ){
      echo "<br><pre>" . 
      $QueryCadastrarVeiculo2 = "
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
          '$Marca2',
          '$Modelo2',
          '$Placa2',
          '$Protecao2',
          '$Seguro2'
        )
      ";
      echo "</pre>";

      $ExeQrCadastrarVeiculo2 = mysqli_query($connection, $QueryCadastrarVeiculo2);
      if( $ExeQrCadastrarVeiculo2 ){
        echo "<br>Veículo 2 cadastrado";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }else{
      echo "<br>Veículo já cadastrado";
    }
  }