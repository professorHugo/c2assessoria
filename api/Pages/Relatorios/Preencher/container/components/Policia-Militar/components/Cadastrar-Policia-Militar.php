<?php
  if( $SysMode == 1 ){
    //DEV

    echo "<br><pre>" . 
    $QueryBuscarPoliciaMilitar = "
      SELECT * FROM tb_policia_militar
      WHERE protocolo_policia_militar = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarPoliciaMilitar = mysqli_query($connection, $QueryBuscarPoliciaMilitar);
    $RowQrBuscarPoliciaMilitar = mysqli_num_rows($ExeQrBuscarPoliciaMilitar);
  
    if( $RowQrBuscarPoliciaMilitar < 1 ){
      echo "<br><pre>" . 
      $QueryCadastrarPoliciaMilitar = "
        INSERT INTO tb_policia_militar(
          protocolo_policia_militar,
          irregularidades_policia_militar
        )VALUES(
          '$Protocolo',
          '$Irregularidade'
        )
      ";
      echo "</pre>";
      $ExeQrCadastrarPoliciaMilitar = mysqli_query($connection, $QueryCadastrarPoliciaMilitar);
      if( $ExeQrBuscarPoliciaMilitar ){
        echo "<br>Policia Militar Cadastrada com sucesso";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }else{
      echo "<br>Policia Militar já cadastrada";
    }
  }else{

    //PROD


    "<br><pre>" . 
    $QueryBuscarPoliciaMilitar = "
      SELECT * FROM tb_policia_militar
      WHERE protocolo_policia_militar = '$Protocolo'
    ";
    "</pre>";
    $ExeQrBuscarPoliciaMilitar = mysqli_query($connection, $QueryBuscarPoliciaMilitar);
    $RowQrBuscarPoliciaMilitar = mysqli_num_rows($ExeQrBuscarPoliciaMilitar);
  
    if( $RowQrBuscarPoliciaMilitar < 1 ){
      "<br><pre>" . 
      $QueryCadastrarPoliciaMilitar = "
        INSERT INTO tb_policia_militar(
          protocolo_policia_militar,
          irregularidades_policia_militar
        )VALUES(
          '$Protocolo',
          '$Irregularidade'
        )
      ";
      "</pre>";
      $ExeQrCadastrarPoliciaMilitar = mysqli_query($connection, $QueryCadastrarPoliciaMilitar);
      if( $ExeQrBuscarPoliciaMilitar ){
        "<br>Policia Militar Cadastrada com sucesso";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }else{
      "<br>Policia Militar já cadastrada";
    }
  }