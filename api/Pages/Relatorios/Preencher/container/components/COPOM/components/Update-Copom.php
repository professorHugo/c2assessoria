<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryUpdateCopom = "
      UPDATE tb_copom
      SET texto_divergencia = '$TextoDivergencia'
      WHERE protocolo_copom = '$Protocolo'
    ";
    echo "</pre>";
    if( $ExeQrUpdateCopom = mysqli_query($connection, $QueryUpdateCopom) ){
      echo "<br>Copom atualizado com o Texto de divergência";
    }
  }else{

    //PROD


    "<br><pre>" . 
    $QueryUpdateCopom = "
      UPDATE tb_copom
      SET texto_divergencia = '$TextoDivergencia'
      WHERE protocolo_copom = '$Protocolo'
    ";
    "</pre>";
    if( $ExeQrUpdateCopom = mysqli_query($connection, $QueryUpdateCopom) ){
      "<br>Copom atualizado com o Texto de divergência";
    }
  
  }