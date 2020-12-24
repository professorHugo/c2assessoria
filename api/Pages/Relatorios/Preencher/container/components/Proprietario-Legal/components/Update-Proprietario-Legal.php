<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" .
    $QueryBuscarProprietario = "
      SELECT * FROM tb_proprietario_legal
      WHERE protocolo_proprietario = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarProprietario = mysqli_query($connection, $QueryBuscarProprietario);
    $RowQrBuscarProprietario = mysqli_num_rows($ExeQrBuscarProprietario);

    if( $RowQrBuscarProprietario = 1 ){
      while($Proprietario = mysqli_fetch_assoc($ExeQrBuscarProprietario)){
        $IdProprietario = $Proprietario['id_proprietario'];
      }
      echo "<br><pre>" . 
      $QueryUpdateVeiculo = "
        UPDATE tb_veiculos
        SET
          proprietario_veiculo = '$IdProprietario'
        WHERE
          protocolo_evento = '$Protocolo' &&
          placa_veiculo = '$PlacaVeiculo'
      ";
      echo "</pre>";
      if( $ExeQrUpdateVeiculo = mysqli_query($connection, $QueryUpdateVeiculo) ){
        echo "<br>Proprietário legal do Veículo atualizado ";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }
  }else{
    //PROD

    "<br><pre>" .
    $QueryBuscarProprietario = "
      SELECT * FROM tb_proprietario_legal
      WHERE protocolo_proprietario = '$Protocolo'
    ";
    "</pre>";
    $ExeQrBuscarProprietario = mysqli_query($connection, $QueryBuscarProprietario);
    $RowQrBuscarProprietario = mysqli_num_rows($ExeQrBuscarProprietario);

    if( $RowQrBuscarProprietario = 1 ){
      while($Proprietario = mysqli_fetch_assoc($ExeQrBuscarProprietario)){
        $IdProprietario = $Proprietario['id_proprietario'];
      }
      "<br><pre>" . 
      $QueryUpdateVeiculo = "
        UPDATE tb_veiculos
        SET
          proprietario_veiculo = '$IdProprietario'
        WHERE
          protocolo_evento = '$Protocolo' &&
          placa_veiculo = '$PlacaVeiculo'
      ";
      "</pre>";
      if( $ExeQrUpdateVeiculo = mysqli_query($connection, $QueryUpdateVeiculo) ){
        "<br>Proprietário legal do Veículo atualizado ";
      }else{
        "<br>Erro: " . mysqli_error($connection);
      }
    }
  }