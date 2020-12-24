<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarProprietarioAnterior = "
      SELECT * FROM 
        tb_proprietario_anterior
      WHERE
        protocolo_proprietario = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarProprietarioAnterior = mysqli_query($connection, $QueryBuscarProprietarioAnterior);
    $RowQrBuscarProprietarioAnterior = mysqli_num_rows($ExeQrBuscarProprietarioAnterior);
  
    if( $RowQrBuscarProprietarioAnterior < 1 ){
      //Cadastrar Proprietario Anterior
      echo "<br><pre>" . 
      $QueryCadastrarProprietarioAnterior = "
        INSERT INTO tb_proprietario_anterior(
          protocolo_proprietario,
          nome_proprietario,
          vinculo_proprietario,
          observacoes_proprietario
        )VALUES(
          '$Protocolo',
          '$NomeProprietarioAnterior',
          '$VinculoProprietarioAnterior',
          '$ObservacoesProprietarioAnterior'
        )
      ";
      echo "</pre>";
      $ExeQrCadastrarProprietarioAnterior = mysqli_query($connection, $QueryCadastrarProprietarioAnterior);
      if( $ExeQrCadastrarProprietarioAnterior ){
        echo "<br>Proprietário anterior cadastrado";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }else{
      echo "<br>Proprietario anterior <b>$NomeProprietarioAnterior</b> já cadastrado" ; 
    }
  }else{
    //PROD
    "<br><pre>" . 
    $QueryBuscarProprietarioAnterior = "
      SELECT * FROM 
        tb_proprietario_anterior
      WHERE
        protocolo_proprietario = '$Protocolo'
    ";
    "</pre>";
    $ExeQrBuscarProprietarioAnterior = mysqli_query($connection, $QueryBuscarProprietarioAnterior);
    $RowQrBuscarProprietarioAnterior = mysqli_num_rows($ExeQrBuscarProprietarioAnterior);
  
    if( $RowQrBuscarProprietarioAnterior < 1 ){
      //Cadastrar Proprietario Anterior
      "<br><pre>" . 
      $QueryCadastrarProprietarioAnterior = "
        INSERT INTO tb_proprietario_anterior(
          protocolo_proprietario,
          nome_proprietario,
          vinculo_proprietario,
          observacoes_proprietario
        )VALUES(
          '$Protocolo',
          '$NomeProprietarioAnterior',
          '$VinculoProprietarioAnterior',
          '$ObservacoesProprietarioAnterior'
        )
      ";
      "</pre>";
      $ExeQrCadastrarProprietarioAnterior = mysqli_query($connection, $QueryCadastrarProprietarioAnterior);
      if( $ExeQrCadastrarProprietarioAnterior ){
        "<br>Proprietário anterior cadastrado";
      }else{
        "<br>Erro: " . mysqli_error($connection);
      }
    }else{
      "<br>Proprietario anterior <b>$NomeProprietarioAnterior</b> já cadastrado" ; 
    }
  }