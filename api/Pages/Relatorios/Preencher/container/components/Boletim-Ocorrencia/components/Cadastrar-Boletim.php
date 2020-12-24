<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarBoletim = "
      SELECT * FROM tb_boletim_ocorrencia
      WHERE protocolo_boletim = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarBoletim = mysqli_query($connection, $QueryBuscarBoletim);
    $RowQrBuscarBoletim = mysqli_num_rows($ExeQrBuscarBoletim);
  
    if( $RowQrBuscarBoletim < 1 ){
      //Cadastrar Boletim
      echo "<br><pre>" . 
      $QueryCadastrarBoletim = "
        INSERT INTO tb_boletim_ocorrencia(
          protocolo_boletim,
          autenticidade_boletim
        )VALUES(
          '$Protocolo',
          '$BoletimAutentico'
        )
      ";
      echo "</pre>";
      $ExeQrCadastrarBoletim = mysqli_query($connection, $QueryCadastrarBoletim);
      if( $ExeQrBuscarBoletim ){
        echo "<br>Boletim de Ocorrência cadastrado com sucesso";
      }
    }else{
      echo "<br>Boletim já cadastrado";
    }
  }else{

    //PROD
    "<br><pre>" . 
    $QueryBuscarBoletim = "
      SELECT * FROM tb_boletim_ocorrencia
      WHERE protocolo_boletim = '$Protocolo'
    ";
    "</pre>";
    $ExeQrBuscarBoletim = mysqli_query($connection, $QueryBuscarBoletim);
    $RowQrBuscarBoletim = mysqli_num_rows($ExeQrBuscarBoletim);
  
    if( $RowQrBuscarBoletim < 1 ){
      //Cadastrar Boletim
      "<br><pre>" . 
      $QueryCadastrarBoletim = "
        INSERT INTO tb_boletim_ocorrencia(
          protocolo_boletim,
          autenticidade_boletim
        )VALUES(
          '$Protocolo',
          '$BoletimAutentico'
        )
      ";
      "</pre>";
      $ExeQrCadastrarBoletim = mysqli_query($connection, $QueryCadastrarBoletim);
      if( $ExeQrBuscarBoletim ){
        "<br>Boletim de Ocorrência cadastrado com sucesso";
      }
    }else{
      "<br>Boletim já cadastrado";
    }
  }