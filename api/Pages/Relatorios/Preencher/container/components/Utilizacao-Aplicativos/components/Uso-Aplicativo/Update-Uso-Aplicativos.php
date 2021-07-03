<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryUpdateRegistroMobilidade = "
      UPDATE 
        tb_registro_mobilidade
      SET
        data_mobilidade = '$DataConfirmada',
        hora_mobilidade = '$HoraConfirmada',
        trajeto_mobilidade = '$TrajetoConfirmada'
      WHERE
        protocolo_mobilidade = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrUpdateRegistroMobilidade = mysqli_query($connection, $QueryUpdateRegistroMobilidade);
    if( $ExeQrUpdateRegistroMobilidade ){
      echo "<br>Status do Registro de mobilidade atualizado para o protocolo '$Protocolo'";
    }else{
      echo "<br>Erro ao atualizar o status do registro de mobilidade: " . mysqli_error($connection);
    }
  }else{

    //PROD
    "<br><pre>" . 
    $QueryUpdateRegistroMobilidade = "
      UPDATE 
        tb_registro_mobilidade
      SET
        data_mobilidade = '$DataConfirmada',
        hora_mobilidade = '$HoraConfirmada',
        trajeto_mobilidade = '$TrajetoConfirmada'
      WHERE
        protocolo_mobilidade = '$Protocolo'
    ";
    "</pre>";
    $ExeQrUpdateRegistroMobilidade = mysqli_query($connection, $QueryUpdateRegistroMobilidade);
    if( $ExeQrUpdateRegistroMobilidade ){
      "<br>Status do Registro de mobilidade atualizado para o protocolo '$Protocolo'";
    }else{
      echo "<br>Erro ao atualizar o status do registro de mobilidade: " . mysqli_error($connection);
    }
  }