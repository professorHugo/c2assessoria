<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarMotoristaAplicativo = "
      SELECT * FROM tb_motorista_aplicativo
      WHERE protocolo_motorista_aplicativo = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarMotoristaAplicativo = mysqli_query($connection, $QueryBuscarMotoristaAplicativo);
    $RowQrBuscarMotoristaAplicativo = mysqli_num_rows($ExeQrBuscarMotoristaAplicativo);
  
    if( $RowQrBuscarMotoristaAplicativo < 1 ){
      echo "<br><pre>" . 
      $QueryCadastrarMotoristaAplicativo = "
        INSERT INTO tb_motorista_aplicativo(
          protocolo_motorista_aplicativo,
          descricao_comprovante
        )VALUES(
          '$Protocolo',
          '$DescricaoComprovante'
        )
      ";
      echo "</pre>";
      $ExeQrCadastrarMotoristaAplicativo = mysqli_query($connection, $QueryCadastrarMotoristaAplicativo);
      if( $ExeQrCadastrarMotoristaAplicativo ){
        echo "<br>Motorista Aplicativo cadastrado";
      }
    }else{
      echo "<br>Motorista Aplicativo já cadastrado";
    }
  }else{

    //PROD

    "<br><pre>" . 
    $QueryBuscarMotoristaAplicativo = "
      SELECT * FROM tb_motorista_aplicativo
      WHERE protocolo_motorista_aplicativo = '$Protocolo'
    ";
    "</pre>";
    $ExeQrBuscarMotoristaAplicativo = mysqli_query($connection, $QueryBuscarMotoristaAplicativo);
    $RowQrBuscarMotoristaAplicativo = mysqli_num_rows($ExeQrBuscarMotoristaAplicativo);
  
    if( $RowQrBuscarMotoristaAplicativo < 1 ){
      "<br><pre>" . 
      $QueryCadastrarMotoristaAplicativo = "
        INSERT INTO tb_motorista_aplicativo(
          protocolo_motorista_aplicativo,
          descricao_comprovante
        )VALUES(
          '$Protocolo',
          '$DescricaoComprovante'
        )
      ";
      "</pre>";
      $ExeQrCadastrarMotoristaAplicativo = mysqli_query($connection, $QueryCadastrarMotoristaAplicativo);
      if( $ExeQrCadastrarMotoristaAplicativo ){
        "<br>Motorista Aplicativo cadastrado";
      }
    }else{
      "<br>Motorista Aplicativo já cadastrado";
    }
  }