<?php
if( $SysMode == 1 ){
  //DEV

  if( isset($_GET['SavePassword']) ){
    //Se a senha foi salva atualizar a senha e a SESSION
    echo "<br>Senha antiga: " . $SenhaAntiga = $_SESSION['LoginUsuario']['senha_usuario'];
    echo "<br>Email Usuário: " . $EmailUsuario = $_SESSION['LoginUsuario']['email_usuario'];
    "<br>Id Usuário: " . $IdUsuario = $_SESSION['LoginUsuario']['id_usuario'];
    echo "<br>Senha nova: " . $SenhaNova = $_POST['nova_senha'];
    echo "<br>Senha Nova MD5: " . $SenhaMD5Nova = md5($EmailUsuario."+".$SenhaNova);
    echo "<br><pre>" . 
    $QueryUpdateSenhaUsuario = "
      UPDATE tb_senhas_auth
      SET
        md5_senha = '$SenhaMD5Nova',
        cadastro = 'cadastrado'
      WHERE
        id_senha = '$SenhaAntiga'
    ";
    echo "</pre>";
    $ExeQrUpdateSenhaUsuario = mysqli_query($connection, $QueryUpdateSenhaUsuario);
    if( $ExeQrUpdateSenhaUsuario ){
      echo "
        <br>Senha atualizada com sucesso. Atualizar o cadastro de ativação e a SESSION[LoginUsuario]['usuario_ativo']
      ";
      echo $_SESSION['LoginUsuario']['usuario_ativo'] = '1';
      echo $_SESSION['LoginUsuario']['usuario_status'] = '1';
      echo "<br><pre> " . 
      $QueryUpdateAtivacaoUsuario = "
        UPDATE tb_usuarios
        SET
          usuario_ativo = '1',
          usuario_status = '1'
        WHERE email_usuario = '$EmailUsuario'
      ";
      echo "</pre>";
      $ExeQrUpdateAtivacaoUsuario = mysqli_query($connection, $QueryUpdateAtivacaoUsuario);
      if( $ExeQrUpdateAtivacaoUsuario ){
        echo "<br><pre>" .
        $QueryUpdateSindicanteAtivo = "
          UPDATE tb_sindicantes
          SET
            ativacao = '1'
          WHERE
            id_sindicante = '$IdUsuario'
        ";
        echo "</pre>";
        $ExeQrUpdateSindicanteAtivo = mysqli_query($connection, $QueryUpdateSindicanteAtivo);
        if( $ExeQrUpdateSindicanteAtivo ){
          echo "<br>Usuário atualizado com senha e ativação";
          echo "
            <a href='?' class='btn btn-primary'>Voltar</a>
          ";
        }else{
          echo "<br>Erro: " . mysqli_error($connection);
        }
        
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }

    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }



  }else{
    include 'Modal-Trocar-Senha.php';
  }
}else{
  //PROD

  if( isset($_GET['SavePassword']) ){
    //Se a senha foi salva atualizar a senha e a SESSION
    "<br>Senha antiga: " . $SenhaAntiga = $_SESSION['LoginUsuario']['senha_usuario'];
    "<br>Email Usuário: " . $EmailUsuario = $_SESSION['LoginUsuario']['email_usuario'];
    "<br>Id Usuário: " . $IdUsuario = $_SESSION['LoginUsuario']['id_usuario'];
    "<br>Senha nova: " . $SenhaNova = $_POST['nova_senha'];
    "<br>Senha Nova MD5: " . $SenhaMD5Nova = md5($EmailUsuario."+".$SenhaNova);
    "<br><pre>" . 
    $QueryUpdateSenhaUsuario = "
      UPDATE tb_senhas_auth
      SET
        md5_senha = '$SenhaMD5Nova',
        cadastro = 'cadastrado'
      WHERE
        id_senha = '$SenhaAntiga'
    ";
    "</pre>";
    $ExeQrUpdateSenhaUsuario = mysqli_query($connection, $QueryUpdateSenhaUsuario);
    if( $ExeQrUpdateSenhaUsuario ){
      "
        <br>Senha atualizada com sucesso. Atualizar o cadastro de ativação e a SESSION[LoginUsuario]['usuario_ativo']
      ";
      $_SESSION['LoginUsuario']['usuario_ativo'] = '1';
      $_SESSION['LoginUsuario']['usuario_status'] = '1';
      "<br><pre> " . 
      $QueryUpdateAtivacaoUsuario = "
        UPDATE tb_usuarios
        SET
          usuario_ativo = '1',
          usuario_status = '1'
        WHERE email_usuario = '$EmailUsuario'
      ";
      "</pre>";
      $ExeQrUpdateAtivacaoUsuario = mysqli_query($connection, $QueryUpdateAtivacaoUsuario);
      if( $ExeQrUpdateAtivacaoUsuario ){
        "<br><pre>" .
        $QueryUpdateSindicanteAtivo = "
          UPDATE tb_sindicantes
          SET
            ativacao = '1'
          WHERE
            id_sindicante = '$IdUsuario'
        ";
        "</pre>";
        $ExeQrUpdateSindicanteAtivo = mysqli_query($connection, $QueryUpdateSindicanteAtivo);
        if( $ExeQrUpdateSindicanteAtivo ){
          include 'Modal-Cadastro-Ativado.php';
        }else{
          echo "<br>Erro: " . mysqli_error($connection);
        }
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }

    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }



  }else{
    include 'Modal-Trocar-Senha.php';
  }
}
