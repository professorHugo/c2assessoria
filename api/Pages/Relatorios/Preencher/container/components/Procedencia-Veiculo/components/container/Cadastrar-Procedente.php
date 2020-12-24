<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarProcedente = "
      SELECT * FROM tb_procedentes
      WHERE protocolo_procedente = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarProcedente = mysqli_query($connection, $QueryBuscarProcedente);
    if( mysqli_num_rows($ExeQrBuscarProcedente) < 1 ){
      echo "<br><pre>";
      echo $QueryCadastrarProcedente = "
        INSERT INTO tb_procedentes(
          protocolo_procedente,
          confirma_procedente
        )VALUES(
          '$Protocolo',
          '$ConfirmaProcedente'
        )
      ";
      echo "</pre>";
      $ExeQrCadastrarProcedente = mysqli_query($connection, $QueryCadastrarProcedente);

      if( $ExeQrCadastrarProcedente ){
        echo "<br>Procedente cadastrado";
      }
    }else{
      echo "<br>Procedente já cadastrado";
    }
  }else{
    //PROD

    "<br><pre>" . 
    $QueryBuscarProcedente = "
      SELECT * FROM tb_procedentes
      WHERE protocolo_procedente = '$Protocolo'
    ";
    "</pre>";
    $ExeQrBuscarProcedente = mysqli_query($connection, $QueryBuscarProcedente);
    if( mysqli_num_rows($ExeQrBuscarProcedente) < 1 ){
      "<br><pre>";
      $QueryCadastrarProcedente = "
        INSERT INTO tb_procedentes(
          protocolo_procedente,
          confirma_procedente
        )VALUES(
          '$Protocolo',
          '$ConfirmaProcedente'
        )
      ";
      "</pre>";
      $ExeQrCadastrarProcedente = mysqli_query($connection, $QueryCadastrarProcedente);

      if( $ExeQrCadastrarProcedente ){
        "<br>Procedente cadastrado";
      }
    }else{
      "<br>Procedente já cadastrado";
    }
  }  