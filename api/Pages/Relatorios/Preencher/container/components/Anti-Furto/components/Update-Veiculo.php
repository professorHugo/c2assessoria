<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarAntifurto = "
      SELECT * FROM tb_sistemas_anti_furto
      WHERE protocolo_sistema = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarAntifurto = mysqli_query($connection, $QueryBuscarAntifurto);
    $RowQrBuscarAntifurto = mysqli_num_rows($ExeQrBuscarAntifurto);

    if( $RowQrBuscarAntifurto = 1 ){
      while( $Antifurto = mysqli_fetch_assoc($ExeQrBuscarAntifurto) ){
        $IdAntifurto = $Antifurto['id_sistema'];
      }

      echo "<br><pre>" . 
      $QueryUpdateVeiculo = "
        UPDATE tb_veiculos
        SET
          sistema_anti_furto = '$IdAntifurto'
        WHERE 
          protocolo_evento = '$Protocolo' &&
          placa_veiculo = '$PlacaVeiculo'
      ";
      echo "</pre>";

      if( $ExeQrUpdateVeiculo = mysqli_query($connection, $QueryUpdateVeiculo) ){
        echo "<br>Veículo atualizado com o antifurto cadastrado";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }
  }else{

    //PROD


    "<br><pre>" . 
    $QueryBuscarAntifurto = "
      SELECT * FROM tb_sistemas_anti_furto
      WHERE protocolo_sistema = '$Protocolo'
    ";
    "</pre>";
    $ExeQrBuscarAntifurto = mysqli_query($connection, $QueryBuscarAntifurto);
    $RowQrBuscarAntifurto = mysqli_num_rows($ExeQrBuscarAntifurto);

    if( $RowQrBuscarAntifurto = 1 ){
      while( $Antifurto = mysqli_fetch_assoc($ExeQrBuscarAntifurto) ){
        $IdAntifurto = $Antifurto['id_sistema'];
      }

      "<br><pre>" . 
      $QueryUpdateVeiculo = "
        UPDATE tb_veiculos
        SET
          sistema_anti_furto = '$IdAntifurto'
        WHERE 
          protocolo_evento = '$Protocolo' &&
          placa_veiculo = '$PlacaVeiculo'
      ";
      "</pre>";

      if( $ExeQrUpdateVeiculo = mysqli_query($connection, $QueryUpdateVeiculo) ){
        "<br>Veículo atualizado com o antifurto cadastrado";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }
  }