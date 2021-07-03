<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarPoliciaCivil = "
      SELECT * FROM tb_policia_civil
      WHERE protocolo_policia_civil = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarPoliciaCivil = mysqli_query($connection, $QueryBuscarPoliciaCivil);
    $RowQrBuscarPoliciaCivil = mysqli_num_rows($ExeQrBuscarPoliciaCivil);
  
    if( $RowQrBuscarPoliciaCivil < 1 ){
      echo "<br><pre>" . 
      $QueryCadastrarPoliciaCivil = "
        INSERT INTO tb_policia_civil(
          protocolo_policia_civil,
          irregularidades_policia_civil
        )VALUES(
          '$Protocolo',
          '$Irregularidade'
        )
      ";
      echo "</pre>";
      $ExeQrCadastrarPoliciaCivil = mysqli_query($connection, $QueryCadastrarPoliciaCivil);
      if( $ExeQrBuscarPoliciaCivil ){
        echo "<br>Policia Civil Cadastrada com sucesso";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }else{
      echo "<br>Policia civil já cadastrada";
    }
  }else{

    //PROD


    "<br><pre>" . 
    $QueryBuscarPoliciaCivil = "
      SELECT * FROM tb_policia_civil
      WHERE protocolo_policia_civil = '$Protocolo'
    ";
    "</pre>";
    $ExeQrBuscarPoliciaCivil = mysqli_query($connection, $QueryBuscarPoliciaCivil);
    $RowQrBuscarPoliciaCivil = mysqli_num_rows($ExeQrBuscarPoliciaCivil);
  
    if( $RowQrBuscarPoliciaCivil < 1 ){
      "<br><pre>" . 
      $QueryCadastrarPoliciaCivil = "
        INSERT INTO tb_policia_civil(
          protocolo_policia_civil,
          irregularidades_policia_civil
        )VALUES(
          '$Protocolo',
          '$Irregularidade'
        )
      ";
      "</pre>";
      $ExeQrCadastrarPoliciaCivil = mysqli_query($connection, $QueryCadastrarPoliciaCivil);
      if( $ExeQrBuscarPoliciaCivil ){
        "<br>Policia Civil Cadastrada com sucesso";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }else{
      "<br>Policia civil já cadastrada";
    }
  }
