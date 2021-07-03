<?php
  if( $SysMode == 1 ){
    //DEV

    echo "<br>Nome: " . $NomeSindicante = $_POST['nome'];
    echo "<br>E-mail: " . $EmailSindicante = $_POST['email'];
    echo "<br>Senha: " . $Senha = "c2assessoria";
    echo "<br>SenhaMD5: " . $SenhaMD5 = md5($Senha);
    echo "<br>Permissão: " . $Permissao = 2;

    //Cadastrar Senha
    $QueryBuscarSenha = "
      SELECT * FROM 
        tb_senhas_auth 
      WHERE md5_senha = '$SenhaMD5' && cadastro = 'default'
    ";
    $ExeQrBuscarSenha = mysqli_query($connection, $QueryBuscarSenha);
    $RowQrBuscarSenha = mysqli_num_rows($ExeQrBuscarSenha);

    if( $RowQrBuscarSenha = 1 ){
      $QueryInsertSenha = "
        INSERT INTO tb_senhas_auth(
          md5_senha,
          cadastro
        )VALUES(
          '$SenhaMD5',
          'usuario'
        )
      ";
      $ExeQrInsertSenha = mysqli_query($connection, $QueryInsertSenha);
      if( $ExeQrBuscarSenha ){
        echo "<br>Senha $SenhaMD5 armazenada. Prosseguir cadastro";
        $QueryBuscarSenha = "SELECT * FROM tb_senhas_auth WHERE md5_senha = '$SenhaMD5' && cadastro = 'usuario'";

        $ExeQrBuscarSenha = mysqli_query($connection, $QueryBuscarSenha);
        $RowQrBuscarSenha = mysqli_num_rows($ExeQrBuscarSenha);
        while( $ReturSenha = mysqli_fetch_assoc($ExeQrBuscarSenha) ){
            $IdSenha = $ReturSenha['id_senha'];
        }
        if( $RowQrBuscarSenha >= 1 ){
            
        }
        echo "<br><pre>" . 
        $QueryCadastrarUsuario = "
          INSERT INTO tb_usuarios(
            email_usuario,
            nome_usuario,
            senha_usuario,
            permissao_usuario
          )VALUES(
            '$EmailSindicante',
            '$NomeSindicante',
            '$IdSenha',
            '$Permissao'
          )
        ";
        echo "</pre>";
        $ExeQrCadastrarUsuario = mysqli_query($connection, $QueryCadastrarUsuario);
        if( $ExeQrCadastrarUsuario ){
          echo "<br>Usuário cadastrado. Prosseguir para vincular como sindicante";

          echo "<br><pre>" . 
          $QueryBuscarUsuarios = "
            SELECT * FROM 
              tb_usuarios usuarios
            WHERE email_usuario = '$EmailSindicante'
          ";
          echo "</pre>";
          $ExeQrBuscarUsuarios = mysqli_query($connection, $QueryBuscarUsuarios);
          $RowQrBuscarUsuarios = mysqli_num_rows($ExeQrBuscarUsuarios);
          while( $ResUsuario = mysqli_fetch_assoc($ExeQrBuscarUsuarios) ){
            echo $IdUsuario = $ResUsuario['id_usuario'];
          }

          if( $RowQrBuscarUsuarios >= 1 ){
            echo "<br>Usuário cadastrado, prosseguir para cadastro do sindicante";

            //Inserir Cadastro de sindicante
            echo "<br><pre>" . 
            $QueryCadastrarSindicante = "
              INSERT INTO tb_sindicantes(
                id_usuario
              )VALUES(
                '$IdUsuario'
              )
            ";
            echo "<br>";
            $ExeQrCadastrarSindicante = mysqli_query($connection, $QueryCadastrarSindicante);
            if( $ExeQrCadastrarSindicante ){
              echo "<br>Cadastro efetuado como sindicante";
              echo "
                  <meta http-equiv='refresh' content='0;?Page=Sindicantes'>
              ";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
              
          }
        }else{
            echo "<br>Erro: " . mysqli_error($connection);
        }
      }
    }else{
        echo "<br>Senha padrão <b>$SenhaMD5</b> armazenada. Prosseguir cadastro";
    }

  }