<?php
if( $SysMode == 1 ){
  //DEV
  echo "<br><pre>" . 
  $QueryBuscarVistorias = "
    SELECT * FROM tb_vistorias_realizadas
    WHERE protocolo_vistoria = '$Protocolo'
  ";
  echo "</pre>";
  $ExeQrBuscarVistorias = mysqli_query($connection, $QueryBuscarVistorias);
  $RowQrBuscarVistorias = mysqli_num_rows($ExeQrBuscarVistorias);

  if( $RowQrBuscarVistorias < 1 ){
    echo "<br><pre>" . 
    $QueryCadastrarVistoria = "
      INSERT INTO tb_vistorias_realizadas(
        protocolo_vistoria
      )VALUES(
        '$Protocolo'
      )
    ";
    echo "</pre>";
    $ExeQrCadastrarVistoria = mysqli_query($connection, $QueryCadastrarVistoria);
    if( $ExeQrCadastrarVistoria ){
      echo "<br>Vistoria Cadastrada";
    }
  }else{
    echo "<br>Vistoria já cadastrada para esse protocolo";
  }
}else{
  //PROD

  "<br><pre>" . 
  $QueryBuscarVistorias = "
    SELECT * FROM tb_vistorias_realizadas
    WHERE protocolo_vistoria = '$Protocolo'
  ";
  "</pre>";
  $ExeQrBuscarVistorias = mysqli_query($connection, $QueryBuscarVistorias);
  $RowQrBuscarVistorias = mysqli_num_rows($ExeQrBuscarVistorias);

  if( $RowQrBuscarVistorias < 1 ){
    "<br><pre>" . 
    $QueryCadastrarVistoria = "
      INSERT INTO tb_vistorias_realizadas(
        protocolo_vistoria
      )VALUES(
        '$Protocolo'
      )
    ";
    "</pre>";
    $ExeQrCadastrarVistoria = mysqli_query($connection, $QueryCadastrarVistoria);
    if( $ExeQrCadastrarVistoria ){
      "<br>Vistoria Cadastrada";
    }
  }else{
    "<br>Vistoria já cadastrada para esse protocolo";
  }
}