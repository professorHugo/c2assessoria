<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarSabedoresLocal = "
      SELECT * FROM tb_local_evento
      WHERE protocolo_local_evento = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarSabedoresLocal = mysqli_query($connection, $QueryBuscarSabedoresLocal);
    $RowQrBuscarSabedoresLocal = mysqli_num_rows($ExeQrBuscarSabedoresLocal);

    if( $RowQrBuscarSabedoresLocal < 1 ){
      echo "<br><pre>" . 
      $QueryCadastrarSabedoresLocal = "
        INSERT INTO tb_local_evento(
          protocolo_local_evento,
          testemunha_entrevistado
        )VALUES(
          '$Protocolo',
          '0'
        )
      ";
      echo "</pre>";
      if( $ExeQrCadastrarSabedoresLocal = mysqli_query($connection, $QueryCadastrarSabedoresLocal) ){
        echo "<br>Sabedores cadastrado para o protocolo $Protocolo";
        echo "<br><br><br>Atualizar quantidade de entrevistados no local";
        echo "<br><pre>" . 
        $QueryBuscarSabedoresLocal = "
          SELECT * FROM tb_local_evento
          WHERE protocolo_local_evento = '$Protocolo'
        ";
        echo "</pre>";
        $ExeQrBuscarSabedoresLocal = mysqli_query($connection, $QueryBuscarSabedoresLocal);
        while( $QuantidadeEntrevistados = mysqli_fetch_assoc($ExeQrBuscarSabedoresLocal) ){
          $Quantidade = $QuantidadeEntrevistados['quantidade_entrevistados'];
        }
        $QtdNova = $Quantidade+1;
        echo "<br><pre>" . 
        $QueryUpdateQtdEntrevistados = "
          UPDATE tb_local_evento
          SET
            quantidade_entrevistados = '$QtdNova'
          WHERE protocolo_local_evento = '$Protocolo' && testemunha_entrevistado = '0'
        ";
        echo "<br></pre>";
        if( $ExeQrUpdateQtdEntrevistados = mysqli_query($connection, $QueryUpdateQtdEntrevistados) ){
          echo "<br><br>Quantidade de entrevistados no local atualizado com sucesso!";
        }else{
          echo "<br>Erro: " . mysqli_error($connection);
        }


      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }else{
      echo "<br><br><br>Atualizar quantidade de entrevistados no local";
      echo "<br><pre>" . 
      $QueryBuscarSabedoresLocal = "
        SELECT * FROM tb_local_evento
        WHERE protocolo_local_evento = '$Protocolo'
      ";
      echo "</pre>";
      $ExeQrBuscarSabedoresLocal = mysqli_query($connection, $QueryBuscarSabedoresLocal);
      while( $QuantidadeEntrevistados = mysqli_fetch_assoc($ExeQrBuscarSabedoresLocal) ){
        $Quantidade = $QuantidadeEntrevistados['quantidade_entrevistados'];
      }
      $QtdNova = $Quantidade+1;
      echo "<br><pre>" . 
      $QueryUpdateQtdEntrevistados = "
        UPDATE tb_local_evento
        SET
          quantidade_entrevistados = '$QtdNova'
        WHERE protocolo_local_evento = '$Protocolo' && testemunha_entrevistado = '0'
      ";
      echo "<br></pre>";
      if( $ExeQrUpdateQtdEntrevistados = mysqli_query($connection, $QueryUpdateQtdEntrevistados) ){
        echo "<br><br>Quantidade de entrevistados no local atualizado com sucesso!";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }
  }else{

    //PROD


    "<br><pre>" . 
    $QueryBuscarSabedoresLocal = "
      SELECT * FROM tb_local_evento
      WHERE protocolo_local_evento = '$Protocolo'
    ";
    "</pre>";
    $ExeQrBuscarSabedoresLocal = mysqli_query($connection, $QueryBuscarSabedoresLocal);
    $RowQrBuscarSabedoresLocal = mysqli_num_rows($ExeQrBuscarSabedoresLocal);

    if( $RowQrBuscarSabedoresLocal < 1 ){
      "<br><pre>" . 
      $QueryCadastrarSabedoresLocal = "
        INSERT INTO tb_local_evento(
          protocolo_local_evento,
          testemunha_entrevistado
        )VALUES(
          '$Protocolo',
          '0'
        )
      ";
      "</pre>";
      if( $ExeQrCadastrarSabedoresLocal = mysqli_query($connection, $QueryCadastrarSabedoresLocal) ){
        "<br>Sabedores cadastrado para o protocolo $Protocolo";
        "<br><br><br>Atualizar quantidade de entrevistados no local";
        "<br><pre>" . 
        $QueryBuscarSabedoresLocal = "
          SELECT * FROM tb_local_evento
          WHERE protocolo_local_evento = '$Protocolo'
        ";
        "</pre>";
        $ExeQrBuscarSabedoresLocal = mysqli_query($connection, $QueryBuscarSabedoresLocal);
        while( $QuantidadeEntrevistados = mysqli_fetch_assoc($ExeQrBuscarSabedoresLocal) ){
          $Quantidade = $QuantidadeEntrevistados['quantidade_entrevistados'];
        }
        $QtdNova = $Quantidade+1;
        "<br><pre>" . 
        $QueryUpdateQtdEntrevistados = "
          UPDATE tb_local_evento
          SET
            quantidade_entrevistados = '$QtdNova'
          WHERE protocolo_local_evento = '$Protocolo' && testemunha_entrevistado = '0'
        ";
        "<br></pre>";
        if( $ExeQrUpdateQtdEntrevistados = mysqli_query($connection, $QueryUpdateQtdEntrevistados) ){
          "<br><br>Quantidade de entrevistados no local atualizado com sucesso!";
        }else{
          echo "<br>Erro: " . mysqli_error($connection);
        }

      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }else{
      "<br><br><br>Atualizar quantidade de entrevistados no local";
      "<br><pre>" . 
      $QueryBuscarSabedoresLocal = "
        SELECT * FROM tb_local_evento
        WHERE protocolo_local_evento = '$Protocolo'
      ";
      "</pre>";
      $ExeQrBuscarSabedoresLocal = mysqli_query($connection, $QueryBuscarSabedoresLocal);
      while( $QuantidadeEntrevistados = mysqli_fetch_assoc($ExeQrBuscarSabedoresLocal) ){
        $Quantidade = $QuantidadeEntrevistados['quantidade_entrevistados'];
      }
      $QtdNova = $Quantidade+1;
      "<br><pre>" . 
      $QueryUpdateQtdEntrevistados = "
        UPDATE tb_local_evento
        SET
          quantidade_entrevistados = '$QtdNova'
        WHERE protocolo_local_evento = '$Protocolo' && testemunha_entrevistado = '0'
      ";
      "<br></pre>";
      if( $ExeQrUpdateQtdEntrevistados = mysqli_query($connection, $QueryUpdateQtdEntrevistados) ){
        "<br><br>Quantidade de entrevistados no local atualizado com sucesso!";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }
  }