<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarMotoristaApp = "
      SELECT * FROM tb_motorista_aplicativo
      WHERE protocolo_motorista_aplicativo = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarMotoristaApp = mysqli_query($connection, $QueryBuscarMotoristaApp);
    
    while( $MotoristaApp = mysqli_fetch_assoc($ExeQrBuscarMotoristaApp) ){
      $IdMotoristaApp = $MotoristaApp['id_motorista_aplicativo'];
    }
  
    echo "<br><pre>".
    $QueryUpdateRelatorio = "
      UPDATE tb_relatorios
      SET
        registro_motorista_app = '$IdMotoristaApp'
      WHERE
        protocolo_evento = '$Protocolo' &&
        cpf_associado = '$CPFAssociado'
    ";
    echo "</pre>";
    $ExeQrUpdateRelatorio = mysqli_query($connection, $QueryUpdateRelatorio);
    if( $ExeQrUpdateRelatorio ){
      echo "<br>Registro do Motorista por App do Relatório atualizado com sucesso";
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }  
  }else{
    
    //PROD


    "<br><pre>" . 
    $QueryBuscarMotoristaApp = "
      SELECT * FROM tb_motorista_aplicativo
      WHERE protocolo_motorista_aplicativo = '$Protocolo'
    ";
    "</pre>";
    $ExeQrBuscarMotoristaApp = mysqli_query($connection, $QueryBuscarMotoristaApp);
    
    while( $MotoristaApp = mysqli_fetch_assoc($ExeQrBuscarMotoristaApp) ){
      $IdMotoristaApp = $MotoristaApp['id_motorista_aplicativo'];
    }
  
    "<br><pre>".
    $QueryUpdateRelatorio = "
      UPDATE tb_relatorios
      SET
        registro_motorista_app = '$IdMotoristaApp'
      WHERE
        protocolo_evento = '$Protocolo' &&
        cpf_associado = '$CPFAssociado'
    ";
    "</pre>";
    $ExeQrUpdateRelatorio = mysqli_query($connection, $QueryUpdateRelatorio);
    if( $ExeQrUpdateRelatorio ){
      "<br>Registro do Motorista por App do Relatório atualizado com sucesso";
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }  
  }