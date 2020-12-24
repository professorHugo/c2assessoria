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
    
    while( $PoliciaMilitar = mysqli_fetch_assoc($ExeQrBuscarPoliciaMilitar) ){
      $IdPoliciaMilitar = $PoliciaMilitar['id_policia_militar'];
    }
  
    echo "<br><pre>".
    $QueryUpdateRelatorio = "
      UPDATE tb_relatorios
      SET
        policia_militar = '$IdPoliciaMilitar'
      WHERE
        protocolo_evento = '$Protocolo' &&
        cpf_associado = '$CPFAssociado'
    ";
    echo "</pre>";
    $ExeQrUpdateRelatorio = mysqli_query($connection, $QueryUpdateRelatorio);
    if( $ExeQrUpdateRelatorio ){
      echo "<br>Polícia Militar do Relatório atualizado com sucesso";
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
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
    
    while( $PoliciaMilitar = mysqli_fetch_assoc($ExeQrBuscarPoliciaMilitar) ){
      $IdPoliciaMilitar = $PoliciaMilitar['id_policia_militar'];
    }
  
    "<br><pre>".
    $QueryUpdateRelatorio = "
      UPDATE tb_relatorios
      SET
        policia_militar = '$IdPoliciaMilitar'
      WHERE
        protocolo_evento = '$Protocolo' &&
        cpf_associado = '$CPFAssociado'
    ";
    "</pre>";
    $ExeQrUpdateRelatorio = mysqli_query($connection, $QueryUpdateRelatorio);
    if( $ExeQrUpdateRelatorio ){
      "<br>Polícia Militar do Relatório atualizado com sucesso";
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }
  
  }