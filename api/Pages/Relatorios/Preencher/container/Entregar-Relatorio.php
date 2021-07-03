<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Contexto Geral: " . $ContextoGeral = $_POST['contexto-geral'];
    echo "<br><pre>" . 
    $QueryUpdateEntregaRelatorio = "
      UPDATE tb_relatorios
      SET
        contexto_geral_relatorio = '$ContextoGeral',
        status_relatorio = 'Entregue'
      WHERE protocolo_evento = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrUpdateEntregaRelatorio = mysqli_query($connection, $QueryUpdateEntregaRelatorio);
    if( $ExeQrUpdateEntregaRelatorio ){
      echo "<br>Relatório Salvo e entregue";
      echo "<br>Atualizar mensagens....";
      echo "<br><pre>" . 
      $QueryUpdateMensagens = "
        UPDATE tb_mensagens
        SET
          status_mensagem = '2',
          resposta_mensagem = 'Relatorio Entregue',
          assunto_mensagem = 'Finalizado'
        WHERE 
          protocolo_relatorio = '$Protocolo'
      ";
      echo "</pre>";
      $ExeQrUpdateMensagens = mysqli_query($connection, $QueryUpdateMensagens);
      if( $ExeQrUpdateMensagens ){
        echo "<br>Mensagem atualizada, relatório Entregue";
      }
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }

  }else{

    //PROD
    "<br>Contexto Geral: " . $ContextoGeral = $_POST['contexto-geral'];
    "<br><pre>" . 
    $QueryUpdateEntregaRelatorio = "
      UPDATE tb_relatorios
      SET
        contexto_geral_relatorio = '$ContextoGeral',
        status_relatorio = 'Entregue'
      WHERE protocolo_evento = '$Protocolo'
    ";
    "</pre>";
    $ExeQrUpdateEntregaRelatorio = mysqli_query($connection, $QueryUpdateEntregaRelatorio);
    if( $ExeQrUpdateEntregaRelatorio ){
      "<br>Relatório Salvo e entregue";
      "<br>Atualizar mensagens....";
      "<br><pre>" . 
      $QueryUpdateMensagens = "
        UPDATE tb_mensagens
        SET
          status_mensagem = '2',
          resposta_mensagem = 'Relatorio Entregue',
          assunto_mensagem = 'Finalizado'
        WHERE 
          protocolo_relatorio = '$Protocolo'
      ";
      "</pre>";
      $ExeQrUpdateMensagens = mysqli_query($connection, $QueryUpdateMensagens);
      if( $ExeQrUpdateMensagens ){
        include 'Modal-Relatorio-Entregue.php';
      }
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }
  }

?>