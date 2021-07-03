<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarRegistroMobilidade = "
      SELECT * FROM tb_registro_mobilidade
      WHERE protocolo_mobilidade = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarRegistroMobilidade = mysqli_query($connection, $QueryBuscarRegistroMobilidade);
    $RowQrBuscarRegistroMobilidade = mysqli_num_rows($ExeQrBuscarRegistroMobilidade);

    if( $RowQrBuscarRegistroMobilidade < 1 ){
      echo "<br><pre>" . 
      $QueryCadastrarRegistroMobilidade = "
        INSERT INTO tb_registro_mobilidade(
          protocolo_mobilidade
        )VALUES(
          '$Protocolo'
        )
      ";
      echo "</pre>";

      $ExeQrCadastrarRegistroMobilidade = mysqli_query($connection, $QueryCadastrarRegistroMobilidade);
      if( $ExeQrCadastrarRegistroMobilidade ){
        echo "<br>Registro de mobilidade cadastrado com sucesso";
      }else{
        echo "<br>Erro ao cadastrar o registro de mobilidade: " . mysqli_error($connection);
      }
    }else{
      //Já existe o registro.
      echo "<br>Registro de mobilidade para o protocolo '$Protocolo' já existe, prosseguir atualizando os dados";
    }
  }else{
    //DEV
     "<br><pre>" . 
    $QueryBuscarRegistroMobilidade = "
      SELECT * FROM tb_registro_mobilidade
      WHERE protocolo_mobilidade = '$Protocolo'
    ";
     "</pre>";
    $ExeQrBuscarRegistroMobilidade = mysqli_query($connection, $QueryBuscarRegistroMobilidade);
    $RowQrBuscarRegistroMobilidade = mysqli_num_rows($ExeQrBuscarRegistroMobilidade);

    if( $RowQrBuscarRegistroMobilidade < 1 ){
       "<br><pre>" . 
      $QueryCadastrarRegistroMobilidade = "
        INSERT INTO tb_registro_mobilidade(
          protocolo_mobilidade
        )VALUES(
          '$Protocolo'
        )
      ";
       "</pre>";

      $ExeQrCadastrarRegistroMobilidade = mysqli_query($connection, $QueryCadastrarRegistroMobilidade);
      if( $ExeQrCadastrarRegistroMobilidade ){
         "<br>Registro de mobilidade cadastrado com sucesso";
      }else{
        echo "<br>Erro ao cadastrar o registro de mobilidade: " . mysqli_error($connection);
      }
    }else{
      //Já existe o registro.
      "<br>Registro de mobilidade para o protocolo '$Protocolo' já existe, prosseguir atualizando os dados";
    }
  }