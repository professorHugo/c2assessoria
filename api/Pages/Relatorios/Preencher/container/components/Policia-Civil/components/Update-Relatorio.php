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
    
    while( $PoliciaCivil = mysqli_fetch_assoc($ExeQrBuscarPoliciaCivil) ){
      $IdPoliciaCivil = $PoliciaCivil['id_policia_civil'];
    }
  
    echo "<br><pre>".
    $QueryUpdateRelatorio = "
      UPDATE tb_relatorios
      SET
        policia_civil = '$IdPoliciaCivil'
      WHERE
        protocolo_evento = '$Protocolo' &&
        cpf_associado = '$CPFAssociado'
    ";
    echo "</pre>";
    $ExeQrUpdateRelatorio = mysqli_query($connection, $QueryUpdateRelatorio);
    if( $ExeQrUpdateRelatorio ){
      echo "<br>Polícia Civil do Relatório atualizado com sucesso";
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
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
    
    while( $PoliciaCivil = mysqli_fetch_assoc($ExeQrBuscarPoliciaCivil) ){
      $IdPoliciaCivil = $PoliciaCivil['id_policia_civil'];
    }
  
    "<br><pre>".
    $QueryUpdateRelatorio = "
      UPDATE tb_relatorios
      SET
        policia_civil = '$IdPoliciaCivil'
      WHERE
        protocolo_evento = '$Protocolo' &&
        cpf_associado = '$CPFAssociado'
    ";
    "</pre>";
    $ExeQrUpdateRelatorio = mysqli_query($connection, $QueryUpdateRelatorio);
    if( $ExeQrUpdateRelatorio ){
      "<br>Polícia Civil do Relatório atualizado com sucesso";
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }
  
  }