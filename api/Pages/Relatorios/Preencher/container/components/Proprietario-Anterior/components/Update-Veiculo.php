<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarProprietarioAnterior = "
      SELECT * FROM tb_proprietario_anterior
      WHERE protocolo_proprietario = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarProprietarioAnterior = mysqli_query($connection, $QueryBuscarProprietarioAnterior);
    $RowQrBuscarProprietarioAnterior = mysqli_num_rows($ExeQrBuscarProprietarioAnterior);
  
    if( $RowQrBuscarProprietarioAnterior = 1 ){
      while( $Proprietario = mysqli_fetch_assoc($ExeQrBuscarProprietarioAnterior) ){
        $IdProprietarioAnterior = $Proprietario['id_proprietario'];
      }
      //Update do veículo
      echo "<br><pre>" . 
      $QueryUpdateVeiculo = "
        UPDATE tb_veiculos
        SET
          proprietario_anterior_veiculo = '$IdProprietarioAnterior'
        WHERE
          protocolo_evento = '$Protocolo' &&
          placa_veiculo = '$PlacaVeiculo'
      ";
      echo "</pre>";
      $ExeQrUpdateVeiculo = mysqli_query($connection, $QueryUpdateVeiculo);
      if( $ExeQrUpdateVeiculo ){
        echo "<br>Veículo atualizado com o proprietario anterio de ID $IdProprietarioAnterior";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }
  }else{
    //PROD
    "<br><pre>" . 
    $QueryBuscarProprietarioAnterior = "
      SELECT * FROM tb_proprietario_anterior
      WHERE protocolo_proprietario = '$Protocolo'
    ";
    "</pre>";
    $ExeQrBuscarProprietarioAnterior = mysqli_query($connection, $QueryBuscarProprietarioAnterior);
    $RowQrBuscarProprietarioAnterior = mysqli_num_rows($ExeQrBuscarProprietarioAnterior);
  
    if( $RowQrBuscarProprietarioAnterior = 1 ){
      while( $Proprietario = mysqli_fetch_assoc($ExeQrBuscarProprietarioAnterior) ){
        $IdProprietarioAnterior = $Proprietario['id_proprietario'];
      }
      //Update do veículo
      "<br><pre>" . 
      $QueryUpdateVeiculo = "
        UPDATE tb_veiculos
        SET
          proprietario_anterior_veiculo = '$IdProprietarioAnterior'
        WHERE
          protocolo_evento = '$Protocolo' &&
          placa_veiculo = '$PlacaVeiculo'
      ";
      "</pre>";
      $ExeQrUpdateVeiculo = mysqli_query($connection, $QueryUpdateVeiculo);
      if( $ExeQrUpdateVeiculo ){
        "<br>Veículo atualizado com o proprietario anterio de ID $IdProprietarioAnterior";
      }else{
        "<br>Erro: " . mysqli_error($connection);
      }
    }
  }