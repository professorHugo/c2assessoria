<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><br>Buscar Registro de Fotos antes de cadastrar<br>";
    echo "<br><pre>" . 
    $QueryBuscarRegistroFotos = "
      SELECT * FROM 
        tb_orgaos_publicos_fotos
      WHERE 
        orgaos_publicos_fotos_protocolo = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarRegistroFotos = mysqli_query($connection, $QueryBuscarRegistroFotos);
    $RowQrBuscarRegistroFotos = mysqli_num_rows($ExeQrBuscarRegistroFotos);

    if( $RowQrBuscarRegistroFotos < 1 ){
      //Cadastrar Registro de Fotos
      echo "<br><pre>" . 
      $QueryCadastrarRegistroFotos = "
        INSERT INTO tb_orgaos_publicos_fotos(
          orgaos_publicos_fotos_protocolo
        )VALUES(
          '$Protocolo'
        )
      ";
      echo "</pre>";
      $ExeQrCadastrarRegistroFotos = mysqli_query($connection, $QueryCadastrarRegistroFotos);
      if( $ExeQrCadastrarRegistroFotos ){
        echo "<br>Registro de fotos cadastrado<br>";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }else{
      echo "<br>Registro de fotos já cadastrado<br>";
    }
  }else{

    //PROD
    "<br><br>Buscar Registro de Fotos antes de cadastrar<br>";
    "<br><pre>" . 
    $QueryBuscarRegistroFotos = "
      SELECT * FROM 
        tb_orgaos_publicos_fotos
      WHERE 
        orgaos_publicos_fotos_protocolo = '$Protocolo'
    ";
    "</pre>";
    $ExeQrBuscarRegistroFotos = mysqli_query($connection, $QueryBuscarRegistroFotos);
    $RowQrBuscarRegistroFotos = mysqli_num_rows($ExeQrBuscarRegistroFotos);

    if( $RowQrBuscarRegistroFotos < 1 ){
      //Cadastrar Registro de Fotos
      "<br><pre>" . 
      $QueryCadastrarRegistroFotos = "
        INSERT INTO tb_orgaos_publicos_fotos(
          orgaos_publicos_fotos_protocolo
        )VALUES(
          '$Protocolo'
        )
      ";
      "</pre>";
      $ExeQrCadastrarRegistroFotos = mysqli_query($connection, $QueryCadastrarRegistroFotos);
      if( $ExeQrCadastrarRegistroFotos ){
        "<br>Registro de fotos cadastrado<br>";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }else{
      "<br>Registro de fotos já cadastrado<br>";
    }
  }