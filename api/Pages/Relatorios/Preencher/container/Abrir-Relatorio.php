<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><p>Relatório Aberto, atualizar assunto da  mensagem para 
    <b>\"Preenchendo\"</b> para o protocolo <b>$Protocolo</b></p>";

    echo "<br><pre>" . 
    $QueryUpdateMensagem = "
      UPDATE tb_mensagens
      SET
        assunto_mensagem = 'Relatorio $Protocolo',
        status_mensagem = '1',
        resposta_mensagem = 'Mensagem Lida'
      WHERE
        protocolo_relatorio = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrUpdateMensagem = mysqli_query($connection, $QueryUpdateMensagem);
    if( $ExeQrUpdateMensagem ){
      echo "<br><p>Mensagem marcada como <b>lida</b> e assundo mudado para <b>\"Mensagem Lida\"</b></p>";
    }


  }else{
    //PROD
    "<br><p>Relatório Aberto, atualizar assunto da  mensagem para 
    <b>\"Preenchendo\"</b> para o protocolo <b>$Protocolo</b></p>";

    "<br><pre>" . 
    $QueryUpdateMensagem = "
      UPDATE tb_mensagens
      SET
        assunto_mensagem = 'Relatorio $Protocolo',
        status_mensagem = '1',
        resposta_mensagem = 'Relatorio Aberto'
      WHERE
        protocolo_relatorio = '$Protocolo'
    ";
    "</pre>";
    $ExeQrUpdateMensagem = mysqli_query($connection, $QueryUpdateMensagem);
    if( $ExeQrUpdateMensagem ){
      "<br><p>Mensagem marcada como <b>lida</b> e assundo mudado para <b>\"Mensagem Lida\"</b></p>";
    }

  }