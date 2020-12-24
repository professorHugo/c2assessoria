<?php
  if( $SysMode == 1 ){
    //DEV
    $DataUpdate = date('Y-m-d H:m:i');
    echo "<br>Update na data de atualização do Relatório";
    echo "<br><pre>" . 
    $QueryUpdateDataRelatorio = "
      UPDATE tb_relatorios
      SET
        horario_update = '$DataUpdate'
      WHERE protocolo_evento = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrUpdateDataRelatorio = mysqli_query($connection, $QueryUpdateDataRelatorio);
    if( $ExeQrUpdateDataRelatorio ){
      echo "<br>Data de update do relatorio atualizada";
    }else{
      echo "<br>Erro: ".mysqli_error($connection);
    }
  }else{

    //PROD


    $DataUpdate = date('Y-m-d H:m:i');
    "<br>Update na data de atualização do Relatório";
    "<br><pre>" . 
    $QueryUpdateDataRelatorio = "
      UPDATE tb_relatorios
      SET
        horario_update = '$DataUpdate'
      WHERE protocolo_evento = '$Protocolo'
    ";
    "</pre>";
    $ExeQrUpdateDataRelatorio = mysqli_query($connection, $QueryUpdateDataRelatorio);
    if( $ExeQrUpdateDataRelatorio ){
      "<br>Data de update do relatorio atualizada";
    }else{
      echo "<br>Erro: ".mysqli_error($connection);
    }
  }