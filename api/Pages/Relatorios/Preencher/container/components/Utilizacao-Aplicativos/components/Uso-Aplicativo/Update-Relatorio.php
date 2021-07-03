<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarMobilidade = "
      SELECT * FROM tb_registro_mobilidade
      WHERE protocolo_mobilidade = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarMobilidade = mysqli_query($connection, $QueryBuscarMobilidade);
    
    while( $Mobilidade = mysqli_fetch_assoc($ExeQrBuscarMobilidade) ){
      $IdMobilidade = $Mobilidade['id_mobilidade'];
    }
  
    echo "<br><pre>".
    $QueryUpdateRelatorio = "
      UPDATE tb_relatorios
      SET
        registro_mobilidade = '$IdMobilidade'
      WHERE
        protocolo_evento = '$Protocolo' &&
        cpf_associado = '$CPFAssociado'
    ";
    echo "</pre>";
    $ExeQrUpdateRelatorio = mysqli_query($connection, $QueryUpdateRelatorio);
    if( $ExeQrUpdateRelatorio ){
      echo "<br>Registro da Mobilidade do Relatório atualizado com sucesso";
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }
  }else{

    //PROD


    "<br><pre>" . 
    $QueryBuscarMobilidade = "
      SELECT * FROM tb_registro_mobilidade
      WHERE protocolo_mobilidade = '$Protocolo'
    ";
    "</pre>";
    $ExeQrBuscarMobilidade = mysqli_query($connection, $QueryBuscarMobilidade);
    
    while( $Mobilidade = mysqli_fetch_assoc($ExeQrBuscarMobilidade) ){
      $IdMobilidade = $Mobilidade['id_mobilidade'];
    }
  
    "<br><pre>".
    $QueryUpdateRelatorio = "
      UPDATE tb_relatorios
      SET
        registro_mobilidade = '$IdMobilidade'
      WHERE
        protocolo_evento = '$Protocolo' &&
        cpf_associado = '$CPFAssociado'
    ";
    "</pre>";
    $ExeQrUpdateRelatorio = mysqli_query($connection, $QueryUpdateRelatorio);
    if( $ExeQrUpdateRelatorio ){
      "<br>Registro da Mobilidade do Relatório atualizado com sucesso";
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }
  
  }