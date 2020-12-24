<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarBoletim = "
      SELECT * FROM tb_boletim_ocorrencia
      WHERE protocolo_boletim = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarBoletim = mysqli_query($connection, $QueryBuscarBoletim);
    while( $Boletim = mysqli_fetch_assoc($ExeQrBuscarBoletim) ){
      $IdBoletim = $Boletim['id_boletim'];
    }
  
    echo "<br><pre>" . 
    $QueryUpdateRelatorio = "
      UPDATE tb_relatorios
      SET
        boletim_ocorrencia = '$IdBoletim'
      WHERE 
        protocolo_evento = '$Protocolo' &&
        cpf_associado = '$CPFAssociado'
    ";
    echo "</pre>";
    $ExeQrUpdateRelatorio = mysqli_query($connection, $QueryUpdateRelatorio);
    if( $ExeQrUpdateRelatorio ){
      echo "<br>Relatorio Atualizado com o boletim";
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }
  }else{

    //PROD


    "<br><pre>" . 
    $QueryBuscarBoletim = "
      SELECT * FROM tb_boletim_ocorrencia
      WHERE protocolo_boletim = '$Protocolo'
    ";
    "</pre>";
    $ExeQrBuscarBoletim = mysqli_query($connection, $QueryBuscarBoletim);
    while( $Boletim = mysqli_fetch_assoc($ExeQrBuscarBoletim) ){
      $IdBoletim = $Boletim['id_boletim'];
    }
  
    "<br><pre>" . 
    $QueryUpdateRelatorio = "
      UPDATE tb_relatorios
      SET
        boletim_ocorrencia = '$IdBoletim'
      WHERE 
        protocolo_evento = '$Protocolo' &&
        cpf_associado = '$CPFAssociado'
    ";
    "</pre>";
    $ExeQrUpdateRelatorio = mysqli_query($connection, $QueryUpdateRelatorio);
    if( $ExeQrUpdateRelatorio ){
      "<br>Relatorio Atualizado com o boletim";
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }
  }