<?php 
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarRegistroMobilidade = "
      SELECT * FROM tb_registro_mobilidade
      WHERE protocolo_mobilidade = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarRegistroMobilidade = mysqli_query($connection, $QueryBuscarRegistroMobilidade);
    $RowQrBuscarRegistroMobilidade = mysqli_num_rows($ExeQrBuscarRegistroMobilidade);
  
    if( $RowQrBuscarRegistroMobilidade < 1 ){
      echo "<br><pre>" . 
      $QueryCadastraRegistroMobilidade = "
        INSERT INTO tb_registro_mobilidade(
          protocolo_mobilidade
        )VALUES(
          '$Protocolo'
        )
      ";
      echo "</pre>";
      if( $ExeQrCadastraRegistroMobilidade = mysqli_query($connection, $QueryCadastraRegistroMobilidade) ){
        echo "<br>Registro de mobilidade cadastrado com sucesso";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }else{
      echo "<br>Registro de mobilidade já cadastrado";
    }
  }else{
    
    //PROD


    "<br><pre>" . 
    $QueryBuscarRegistroMobilidade = "
      SELECT * FROM tb_registro_mobilidade
      WHERE protocolo_mobilidade = '$Protocolo'
    ";
    "</pre>";
    $ExeQrBuscarRegistroMobilidade = mysqli_query($connection, $QueryBuscarRegistroMobilidade);
    $RowQrBuscarRegistroMobilidade = mysqli_num_rows($ExeQrBuscarRegistroMobilidade);
  
    if( $RowQrBuscarRegistroMobilidade < 1 ){
      "<br><pre>" . 
      $QueryCadastraRegistroMobilidade = "
        INSERT INTO tb_registro_mobilidade(
          protocolo_mobilidade
        )VALUES(
          '$Protocolo'
        )
      ";
      "</pre>";
      if( $ExeQrCadastraRegistroMobilidade = mysqli_query($connection, $QueryCadastraRegistroMobilidade) ){
        "<br>Registro de mobilidade cadastrado com sucesso";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }else{
      "<br>Registro de mobilidade já cadastrado";
    }
  }