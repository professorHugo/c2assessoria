<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarSistema = "
      SELECT * FROM tb_sistemas_anti_furto
      WHERE protocolo_sistema = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarSistema = mysqli_query($connection, $QueryBuscarSistema);
    $RowQrBuscarSistema = mysqli_num_rows($ExeQrBuscarSistema);
  
    if( $RowQrBuscarSistema < 1 ){
      //Cadastrar o Sistema
      echo "<br><pre>" . 
      $QueryCadastrarSistema = "
        INSERT INTO tb_sistemas_anti_furto(
          protocolo_sistema,
          tipo_sistema,
          texto_outros
        )VALUES(
          '$Protocolo',
          '$AntiFurto',
          '$OutrosSistemas'
        )
      ";
      echo "</pre>";
      $ExeQrCadastrarSistema = mysqli_query($connection, $QueryCadastrarSistema);
      if( $QueryCadastrarSistema ){
        echo "<br>Sistema Antifurto cadastrado";
      }
    }else{
      echo "<br>Sistema Já cadastrado";
    }
  }else{

    //PROD
    "<br><pre>" . 
    $QueryBuscarSistema = "
      SELECT * FROM tb_sistemas_anti_furto
      WHERE protocolo_sistema = '$Protocolo'
    ";
    "</pre>";
    $ExeQrBuscarSistema = mysqli_query($connection, $QueryBuscarSistema);
    $RowQrBuscarSistema = mysqli_num_rows($ExeQrBuscarSistema);
  
    if( $RowQrBuscarSistema < 1 ){
      //Cadastrar o Sistema
      "<br><pre>" . 
      $QueryCadastrarSistema = "
        INSERT INTO tb_sistemas_anti_furto(
          protocolo_sistema,
          tipo_sistema,
          texto_outros
        )VALUES(
          '$Protocolo',
          '$AntiFurto',
          '$OutrosSistemas'
        )
      ";
      "</pre>";
      $ExeQrCadastrarSistema = mysqli_query($connection, $QueryCadastrarSistema);
      if( $QueryCadastrarSistema ){
        "<br>Sistema Antifurto cadastrado";
      }
    }else{
      "<br>Sistema Já cadastrado";
    }
  }