<?php
  echo "<br>Veículo1: ";
  echo "<br>Placa: " . $Placa1 = $_POST['placa_veiculo1'];
  echo "<br>Marca: " . $Marca1 = $_POST['marca_veiculo1'];
  echo "<br>Modelo: " . $Modelo1 = $_POST['modelo_veiculo1'];
  echo "<br>Proteção: " . $Protecao1 = $_POST['protecao_veiculo1'];
  $Seguro1 = $_POST['seguro_veiculo1'];
  echo "<br>Seguro: ";
  if( $Seguro1 == 'check' ){
    echo $Seguro1 = "Sim";
  }else{
    echo $Seguro1 = "Não";
  }
  
  if( isset($_POST['placa_veiculo1']) ){
    echo "<br><pre>" . 
    $QueryVerificarPlaca1 = "
      SELECT * FROM tb_veiculos WHERE placa_veiculo = '$Placa1' && protocolo_evento = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrVerificarPlaca1 = mysqli_query($connection, $QueryVerificarPlaca1);
    $RowQrVerificarPlaca1 = mysqli_num_rows($ExeQrVerificarPlaca1);

    if( $RowQrVerificarPlaca1 < 1 ){
      echo "<br><pre>" . 
      $QueryCadastrarVeiculo1 = "
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
          '$Marca1',
          '$Modelo1',
          '$Placa1',
          '$Protecao1',
          '$Seguro1'
        )
      ";
      echo "</pre>";

      $ExeQrCadastrarVeiculo1 = mysqli_query($connection, $QueryCadastrarVeiculo1);
      if( $ExeQrCadastrarVeiculo1 ){
        echo "<br>Veículo 1 cadastrado";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }else{
      echo "<br>Veículo já cadastrado";
    }
  }