<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryUpdateRegistroMobilidade = "
      UPDATE tb_registro_mobilidade
      SET
        data_mobilidade = '$DataConfirmada',
        hora_mobilidade = '$HoraConfirmada',
        trajeto_mobilidade = '$TrajetoConfirmado'
      WHERE protocolo_mobilidade = '$Protocolo'
    ";
    echo "</pre>";
  
    if( $ExeQrUpdateRegistroMobilidade = mysqli_query($connection, $QueryUpdateRegistroMobilidade) ){
      echo "<br>Registro de mobilidade atualizado";
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }
  }else{

    //PROD


    "<br><pre>" . 
    $QueryUpdateRegistroMobilidade = "
      UPDATE tb_registro_mobilidade
      SET
        data_mobilidade = '$DataConfirmada',
        hora_mobilidade = '$HoraConfirmada',
        trajeto_mobilidade = '$TrajetoConfirmado'
      WHERE protocolo_mobilidade = '$Protocolo'
    ";
    "</pre>";
  
    if( $ExeQrUpdateRegistroMobilidade = mysqli_query($connection, $QueryUpdateRegistroMobilidade) ){
      "<br>Registro de mobilidade atualizado";
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }
  }