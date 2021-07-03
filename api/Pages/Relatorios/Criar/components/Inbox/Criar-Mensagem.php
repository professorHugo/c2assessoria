<?php
  if( $SysMode == 1 ){
    //DEV
    if( $SysMessages == 1 ){
      //BuscarMensagem Antes de criar
      echo "<br><pre>" . 
      $QueryBuscarMensagemSindicante = "
        SELECT * FROM tb_mensagens
        WHERE protocolo_relatorio = '$ProtocoloSolicitante'
      ";
      echo "</pre>";
      $ExeQrBuscarMensagemSindicante = mysqli_query($connection, $QueryBuscarMensagemSindicante);
      $RowQrBuscarMensagemSindicante = mysqli_num_rows($ExeQrBuscarMensagemSindicante);
      if( $RowQrBuscarMensagemSindicante < 1 ){
        echo "<br>Data da Mensagem: " . $DataMensagem = date('Y-m-d H:i:s');
        echo "<br>Emissor: " . $Emissor = $_SESSION['LoginUsuario']['id_usuario'];
        echo "<br>Receptor: " . $Receptor = $Sindicante;
        echo "<br>Assunto: " . $Assunto = "Nova Sindicância";
        echo "<br>Conteúdo: " . $Conteudo = "
          Você recebeu uma nova sindicância, vá até Relatórios para visualizar os detalhes
        ";
        echo "<br><pre>" . 
        $QueryEnviarMensagemSindicante = "
          INSERT INTO tb_mensagens(
            protocolo_relatorio,
            data_mensagem,
            emissor_mensagem,
            receptor_mensagem,
            assunto_mensagem,
            conteudo_mensagem
          )VALUES(
            '$ProtocoloSolicitante',
            '$DataMensagem',
            '$Emissor',
            '$Receptor',
            '$Assunto',
            '$Conteudo'
          )
        ";
        echo "</pre>";
        $ExeQrEnviarMensagemSindicante = mysqli_query($connection, $QueryEnviarMensagemSindicante);
        if( $ExeQrEnviarMensagemSindicante ){
          echo "<br>Mensagem cadastrada para o sindicante";
        }else{
          echo "<br>Erro: " . mysqli_error($connection);
        }
      }
    }
  }else{
    //PROD
    if( $SysMessages == 1 ){
      //BuscarMensagem Antes de criar
      echo "<br><pre>" . 
      $QueryBuscarMensagemSindicante = "
        SELECT * FROM tb_mensagens
        WHERE protocolo_relatorio = '$ProtocoloSolicitante'
      ";
      echo "</pre>";
      $ExeQrBuscarMensagemSindicante = mysqli_query($connection, $QueryBuscarMensagemSindicante);
      $RowQrBuscarMensagemSindicante = mysqli_num_rows($ExeQrBuscarMensagemSindicante);
      if( $RowQrBuscarMensagemSindicante < 1 ){
        echo "<br>Data da Mensagem: " . $DataMensagem = date('Y-m-d H:i:s');
        echo "<br>Emissor: " . $Emissor = $_SESSION['LoginUsuario']['id_usuario'];
        echo "<br>Receptor: " . $Receptor = $Sindicante;
        echo "<br>Assunto: " . $Assunto = "Nova Sindicância";
        echo "<br>Conteúdo: " . $Conteudo = "
          Você recebeu uma nova sindicância, vá até Relatórios para visualizar os detalhes
        ";
        echo "<br><pre>" . 
        $QueryEnviarMensagemSindicante = "
          INSERT INTO tb_mensagens(
            protocolo_relatorio,
            data_mensagem,
            emissor_mensagem,
            receptor_mensagem,
            assunto_mensagem,
            conteudo_mensagem
          )VALUES(
            '$ProtocoloSolicitante',
            '$DataMensagem',
            '$Emissor',
            '$Receptor',
            '$Assunto',
            '$Conteudo'
          )
        ";
        echo "</pre>";
        $ExeQrEnviarMensagemSindicante = mysqli_query($connection, $QueryEnviarMensagemSindicante);
        if( $ExeQrEnviarMensagemSindicante ){
          echo "<br>Mensagem cadastrada para o sindicante";
        }else{
          echo "<br>Erro: " . mysqli_error($connection);
        }
      }
    }
  }