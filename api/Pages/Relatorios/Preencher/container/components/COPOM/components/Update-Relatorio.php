<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarCopom = "
      SELECT * FROM tb_copom
      WHERE protocolo_copom = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarCopom = mysqli_query($connection, $QueryBuscarCopom);
    
    while( $Copom = mysqli_fetch_assoc($ExeQrBuscarCopom) ){
      $IdCopom = $Copom['id_copom'];
    }
  
    echo "<br><pre>".
    $QueryUpdateRelatorio = "
      UPDATE tb_relatorios
      SET
        registro_copom = '$IdCopom'
      WHERE
        protocolo_evento = '$Protocolo' &&
        cpf_associado = '$CPFAssociado'
    ";
    echo "</pre>";
    $ExeQrUpdateRelatorio = mysqli_query($connection, $QueryUpdateRelatorio);
    if( $ExeQrUpdateRelatorio ){
      echo "<br>Registro do COPOM do Relatório atualizado com sucesso";
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }
  }else{

    //PROD


    "<br><pre>" . 
    $QueryBuscarCopom = "
      SELECT * FROM tb_copom
      WHERE protocolo_copom = '$Protocolo'
    ";
    "</pre>";
    $ExeQrBuscarCopom = mysqli_query($connection, $QueryBuscarCopom);
    
    while( $Copom = mysqli_fetch_assoc($ExeQrBuscarCopom) ){
      $IdCopom = $Copom['id_copom'];
    }
  
    "<br><pre>".
    $QueryUpdateRelatorio = "
      UPDATE tb_relatorios
      SET
        registro_copom = '$IdCopom'
      WHERE
        protocolo_evento = '$Protocolo' &&
        cpf_associado = '$CPFAssociado'
    ";
    "</pre>";
    $ExeQrUpdateRelatorio = mysqli_query($connection, $QueryUpdateRelatorio);
    if( $ExeQrUpdateRelatorio ){
      "<br>Registro do COPOM do Relatório atualizado com sucesso";
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }
  
  }