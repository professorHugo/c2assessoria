<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Buscar Cadastro do documento<pre>" . 
    $QueryBuscarDocumento = "
      SELECT * FROM
        tb_documento_veiculo
      WHERE 
        protocolo_documento = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarDocumento = mysqli_query($connection, $QueryBuscarDocumento);
    $RowQrBuscarDocumento = mysqli_num_rows($ExeQrBuscarDocumento);
  
    if( $RowQrBuscarDocumento < 1 ){
      echo "<br>Cadastrar Documento<pre>" . 
      $QueryCadastrarDocumento = "
        INSERT INTO tb_documento_veiculo(
          protocolo_documento
        )VALUES(
          '$Protocolo'
        )
      ";
      echo "</pre>";
      $ExeQrCadastrarDocumento = mysqli_query($connection, $QueryCadastrarDocumento);
  
      if( $ExeQrCadastrarDocumento ){
        echo "<br>Documento cadastrado para o protocolo $Protocolo";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }else{
      echo "<br>Documento do veículo já cadastrado";
    }
  }else{
    //PROD
     "<br>Buscar Cadastro do documento<pre>" . 
    $QueryBuscarDocumento = "
      SELECT * FROM
        tb_documento_veiculo
      WHERE 
        protocolo_documento = '$Protocolo'
    ";
     "</pre>";
    $ExeQrBuscarDocumento = mysqli_query($connection, $QueryBuscarDocumento);
    $RowQrBuscarDocumento = mysqli_num_rows($ExeQrBuscarDocumento);
  
    if( $RowQrBuscarDocumento < 1 ){
       "<br>Cadastrar Documento<pre>" . 
      $QueryCadastrarDocumento = "
        INSERT INTO tb_documento_veiculo(
          protocolo_documento
        )VALUES(
          '$Protocolo'
        )
      ";
       "</pre>";
      $ExeQrCadastrarDocumento = mysqli_query($connection, $QueryCadastrarDocumento);
  
      if( $ExeQrCadastrarDocumento ){
         "<br>Documento cadastrado para o protocolo $Protocolo";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }else{
      "<br>Documento do veículo já cadastrado";
    }
  }