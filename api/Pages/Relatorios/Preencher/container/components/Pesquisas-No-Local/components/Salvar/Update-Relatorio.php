<?php
  if( $SysMode == 1 ){
    echo "<br><pre>" .
    $QueryBuscarLocalEvento = "
      SELECT * FROM tb_local_evento
      WHERE protocolo_local_evento = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarLocalEvento = mysqli_query($connection, $QueryBuscarLocalEvento);
    while( $LocalEvento = mysqli_fetch_assoc($ExeQrBuscarLocalEvento) ){
      $IdLocalEvento = $LocalEvento['id_local_evento'];
    }
  
    echo "<br><pre>" . 
    $QueryUpdateRelatorio = "
      UPDATE tb_relatorios
      SET
        registro_local_evento = '$IdLocalEvento'
      WHERE
        protocolo_evento = '$Protocolo' && cpf_associado = '$CPFAssociado'
    ";
    echo "</pre>";
    if( $ExeQrUpdateRelatorio = mysqli_query($connection, $QueryUpdateRelatorio) ){
      echo "<br>Relatório atualizado com o local do evento";
    }else{
      echo "<br>Erro: " . mysqli_error($connection); 
    }
  }else{
     "<br><pre>" .
    $QueryBuscarLocalEvento = "
      SELECT * FROM tb_local_evento
      WHERE protocolo_local_evento = '$Protocolo'
    ";
     "</pre>";
    $ExeQrBuscarLocalEvento = mysqli_query($connection, $QueryBuscarLocalEvento);
    while( $LocalEvento = mysqli_fetch_assoc($ExeQrBuscarLocalEvento) ){
      $IdLocalEvento = $LocalEvento['id_local_evento'];
    }

     "<br><pre>" . 
    $QueryUpdateRelatorio = "
      UPDATE tb_relatorios
      SET
        registro_local_evento = '$IdLocalEvento'
      WHERE
        protocolo_evento = '$Protocolo' && cpf_associado = '$CPFAssociado'
    ";
     "</pre>";
    if( $ExeQrUpdateRelatorio = mysqli_query($connection, $QueryUpdateRelatorio) ){
       "<br>Relatório atualizado com o local do evento";
    }else{
      echo "<br>Erro: " . mysqli_error($connection); 
    }
  }
  