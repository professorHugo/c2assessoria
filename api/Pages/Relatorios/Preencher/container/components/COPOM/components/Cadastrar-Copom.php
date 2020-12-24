<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarCopom = "
      SELECT * FROM tb_copom
      WHERE protocolo_copom = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarCopom = mysqli_query($connection, $QueryBuscarCopom);
    $RowQrBuscarCopom = mysqli_num_rows($ExeQrBuscarCopom);
  
    if( $RowQrBuscarCopom < 1 ){
      echo "<br><pre>" . 
      $QueryCadastrarCopom = "
        INSERT INTO tb_copom(
          protocolo_copom,
          comunicado_copom
        )VALUES(
          '$Protocolo',
          '$ComunicadoCopom'
        )
      ";
      echo "</pre>";
      $ExeQrCadastrarCopom = mysqli_query($connection, $QueryCadastrarCopom);
      if( $ExeQrCadastrarCopom ){
        echo "<br>Copom cadastrado";
      }
    }else{
      echo "<br>Copom já cadastrado";
    }
  }else{
    
    //PROD


    "<br><pre>" . 
    $QueryBuscarCopom = "
      SELECT * FROM tb_copom
      WHERE protocolo_copom = '$Protocolo'
    ";
    "</pre>";
    $ExeQrBuscarCopom = mysqli_query($connection, $QueryBuscarCopom);
    $RowQrBuscarCopom = mysqli_num_rows($ExeQrBuscarCopom);
  
    if( $RowQrBuscarCopom < 1 ){
      "<br><pre>" . 
      $QueryCadastrarCopom = "
        INSERT INTO tb_copom(
          protocolo_copom,
          comunicado_copom
        )VALUES(
          '$Protocolo',
          '$ComunicadoCopom'
        )
      ";
      "</pre>";
      $ExeQrCadastrarCopom = mysqli_query($connection, $QueryCadastrarCopom);
      if( $ExeQrCadastrarCopom ){
        "<br>Copom cadastrado";
      }
    }else{
      "<br>Copom já cadastrado";
    }
  }