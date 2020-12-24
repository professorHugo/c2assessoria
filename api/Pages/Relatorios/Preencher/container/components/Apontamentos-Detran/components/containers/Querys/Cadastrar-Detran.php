<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarRegistroDetran = "
      SELECT * FROM tb_registro_detran
      WHERE protocolo_registro_detran = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarRegistroDetran = mysqli_query($connection, $QueryBuscarRegistroDetran);
    $RowQrBuscarRegistroDetran = mysqli_num_rows($ExeQrBuscarRegistroDetran);
    if( $RowQrBuscarRegistroDetran < 1 ){
      echo "<br><pre>" . 
      $QueryCadastraRegistroDetran = "
        INSERT INTO tb_registro_detran(
          protocolo_registro_detran,
          estado_registro_detran,
          multa_registro_detran,
          restricoes_diversas
        )VALUES(
          '$Protocolo',
          '$EstadoDetran',
          '$MultasEvento',
          '$RestricoesDiversas'
        )
      ";
      echo "</pre>";
      $ExeQrCadastraRegistroDetran = mysqli_query($connection, $QueryCadastraRegistroDetran);
      if( $ExeQrCadastraRegistroDetran ){
        echo "<br>Registro do Detran Cadastrado";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }else{
      echo "<br>Registro já cadastrado, prosseguir para update dos dados";
    }
  }else{

    //PROD


    "<br><pre>" . 
    $QueryBuscarRegistroDetran = "
      SELECT * FROM tb_registro_detran
      WHERE protocolo_registro_detran = '$Protocolo'
    ";
    "</pre>";
    $ExeQrBuscarRegistroDetran = mysqli_query($connection, $QueryBuscarRegistroDetran);
    $RowQrBuscarRegistroDetran = mysqli_num_rows($ExeQrBuscarRegistroDetran);
    if( $RowQrBuscarRegistroDetran < 1 ){
      "<br><pre>" . 
      $QueryCadastraRegistroDetran = "
        INSERT INTO tb_registro_detran(
          protocolo_registro_detran,
          estado_registro_detran,
          multa_registro_detran,
          restricoes_diversas
        )VALUES(
          '$Protocolo',
          '$EstadoDetran',
          '$MultasEvento',
          '$RestricoesDiversas'
        )
      ";
      "</pre>";
      $ExeQrCadastraRegistroDetran = mysqli_query($connection, $QueryCadastraRegistroDetran);
      if( $ExeQrCadastraRegistroDetran ){
        "<br>Registro do Detran Cadastrado";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }else{
      "<br>Registro já cadastrado, prosseguir para update dos dados";
    }
  }