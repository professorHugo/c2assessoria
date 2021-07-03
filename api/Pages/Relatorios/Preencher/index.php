<?php
if( $SysMode == 1 ){
  echo "<br>DEV";
  echo "<br>Permissão: " . $permissao = $_SESSION['LoginUsuario']['permissao_usuario'];
  echo "<br>Id Usuário: " . $IdUsuario = $_SESSION['LoginUsuario']['id_usuario'];
  echo "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];

  include 'components/QueryBuscarRelatorioAssociado.php';

  $ExeQrBuscarRelatorios = mysqli_query($connection, $QueryBuscarRelatorios);
  $RowQrByscarRelatorios = mysqli_num_rows($ExeQrBuscarRelatorios);

  while( $Endereco = mysqli_fetch_assoc($ExeQrBuscarRelatorios) ){
    $Endereco1 = $Endereco['endereco_associado'];
    $Bairro1 = $Endereco['bairro_associado'];
    $Cidade1 = $Endereco['cidade_associado'];
    $Estado1 = $Endereco['estado_associado'];
    $Cep1 = $Endereco['cep_associado'];

    $CondutorEvento = $Endereco['condutor_veiculo'];

    if( $CondutorEvento == 2 ){
      //Buscar relatorio com Condutor Veículo diferente do associado
      include 'components/QueryBuscarRelatorioCondutor.php';

      

      $ExeQrBuscarEndereco2 = mysqli_query($connection, $QueryBuscarRelatoriosCondutor);
      $RowQrBuscarEndereco2 = mysqli_num_rows($ExeQrBuscarEndereco2);

      while( $EnderecoCondutor = mysqli_fetch_assoc($ExeQrBuscarEndereco2) ){
        $Endereco2 = $EnderecoCondutor['endereco_condutor'];
        $Bairro2 = $EnderecoCondutor['bairro_condutor'];
        $Cidade2 = $EnderecoCondutor['cidade_condutor'];
        $Estado2 = $EnderecoCondutor['estado_condutor'];
        $Cep2 = $EnderecoCondutor['cep_condutor'];
      }

      
    }

    

    $CEPEvento = $Endereco['cep_evento'];
    $EnderecoEvento = $Endereco['endereco_evento'];
    $NumeroEvento = $Endereco['numero_evento'];
    $BairroEvento = $Endereco['bairro_evento'];
    $CidadeEvento = $Endereco['cidade_evento'];
    $EstadoEvento = $Endereco['uf_evento'];

  }
  include "container/Dados-Relatorio.php";

  if( $SysMode == 1 ){
    //DEV
    //MarcarMensagem como Lida e atualizar o assunto para continuar preenchendo o relatório
    if( isset( $_GET['Abrir-Relatorio-Mensagem'] ) ){
      echo "<br>Mensagem aberta";
      echo "<br><pre>" . 
      $QueryUpdateMensagem = "
        UPDATE tb_mensagens
        SET
          status_mensagem = '1',
          assunto_mensagem = 'Continuar preenchendo'
        WHERE 
          protocolo_relatorio = '$Protocolo'
      ";
      echo "</pre>";
      $ExeQrUpdateMensagem = mysqli_query($connection, $QueryUpdateMensagem);
      if( $ExeQrUpdateMensagem ){
        echo "<br>Mensagem marcada como lida e atualizado o assunto";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }

      $QueryUpdateRelatorio = "
        UPDATE tb_relatorios
        SET
          status_relatorio = 'Preenchendo'
        WHERE protocolo_evento = '$Protocolo'
      ";
      $ExeQrUpdateRelatorio = mysqli_query($connection, $QueryUpdateRelatorio);
      if( $ExeQrUpdateRelatorio ){
        echo "<br>Relatório começou a ser preenchido...";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }
  }
  
}else{
  //Prod
  "<br>Permissão: " . $permissao = $_SESSION['LoginUsuario']['permissao_usuario'];
  "<br>Id Usuário: " . $IdUsuario = $_SESSION['LoginUsuario']['id_usuario'];
  "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
  include 'components/QueryBuscarRelatorioAssociado.php';

  $ExeQrBuscarRelatorios = mysqli_query($connection, $QueryBuscarRelatorios);
  $RowQrByscarRelatorios = mysqli_num_rows($ExeQrBuscarRelatorios);

  while( $Endereco = mysqli_fetch_assoc($ExeQrBuscarRelatorios) ){
    $Endereco1 = $Endereco['endereco_associado'];
    $Bairro1 = $Endereco['bairro_associado'];
    $Cidade1 = $Endereco['cidade_associado'];
    $Estado1 = $Endereco['estado_associado'];
    $Cep1 = $Endereco['cep_associado'];

    $CondutorEvento = $Endereco['condutor_veiculo'];

    if( $CondutorEvento == 2 ){
      //Buscar relatorio com Condutor Veículo diferente do associado
      include 'components/QueryBuscarRelatorioCondutor.php';

      

      $ExeQrBuscarEndereco2 = mysqli_query($connection, $QueryBuscarRelatoriosCondutor);
      $RowQrBuscarEndereco2 = mysqli_num_rows($ExeQrBuscarEndereco2);

      while( $EnderecoCondutor = mysqli_fetch_assoc($ExeQrBuscarEndereco2) ){
        $Endereco2 = $EnderecoCondutor['endereco_condutor'];
        $Bairro2 = $EnderecoCondutor['bairro_condutor'];
        $Cidade2 = $EnderecoCondutor['cidade_condutor'];
        $Estado2 = $EnderecoCondutor['estado_condutor'];
        $Cep2 = $EnderecoCondutor['cep_condutor'];
      }

      
    }

    

    $CEPEvento = $Endereco['cep_evento'];
    $EnderecoEvento = $Endereco['endereco_evento'];
    $NumeroEvento = $Endereco['numero_evento'];
    $BairroEvento = $Endereco['bairro_evento'];
    $CidadeEvento = $Endereco['cidade_evento'];
    $EstadoEvento = $Endereco['uf_evento'];

  }
  include "container/Dados-Relatorio.php";

  if( $SysMode == 1 ){
    //DEV
    //MarcarMensagem como Lida e atualizar o assunto para continuar preenchendo o relatório
    if( isset( $_GET['Abrir-Relatorio-Mensagem'] ) ){
      echo "<br>Mensagem aberta";
      echo "<br><pre>" . 
      $QueryUpdateMensagem = "
        UPDATE tb_mensagens
        SET
          status_mensagem = '1',
          assunto_mensagem = 'Continuar preenchendo'
        WHERE 
          protocolo_relatorio = '$Protocolo'
      ";
      echo "</pre>";
      $ExeQrUpdateMensagem = mysqli_query($connection, $QueryUpdateMensagem);
      if( $ExeQrUpdateMensagem ){
        echo "<br>Mensagem marcada como lida e atualizado o assunto";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }

      $QueryUpdateRelatorio = "
        UPDATE tb_relatorios
        SET
          status_relatorio = 'Preenchendo'
        WHERE protocolo_evento = '$Protocolo'
      ";
      $ExeQrUpdateRelatorio = mysqli_query($connection, $QueryUpdateRelatorio);
      if( $ExeQrUpdateRelatorio ){
        echo "<br>Relatório começou a ser preenchido...";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }
  }
}