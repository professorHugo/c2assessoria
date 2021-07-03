<?php
  if( $SysMode == 1 ){
    //DEV

    echo "<br>Nome: " . $NomeSindicante = $_POST['nome'];
    echo "<br>E-mail: " . $EmailSindicante = $_POST['email'];
    echo "<br>Senha: " . $Senha = "c2assessoria";
    echo "<br>SenhaMD5: " . $SenhaMD5 = md5($EmailSindicante."+".$Senha);
    echo "<br>Permissão: " . $Permissao = 2;

    //Cadastrar Senha
    echo "<br><pre>" .
    $QueryBuscarSenha = "
      SELECT * FROM 
        tb_senhas_auth 
      WHERE md5_senha = '$SenhaMD5' && cadastro = 'novo'
    ";
    echo "</pre>";

    $ExeQrBuscarSenha = mysqli_query($connection, $QueryBuscarSenha);
    $RowQrBuscarSenha = mysqli_num_rows($ExeQrBuscarSenha);

    if( $RowQrBuscarSenha < 1 ){
      echo "<br>Senha não cadastrada, inserir nova senha com email+senha";
      echo "<br>Senha MD5: " . $SenhaMD5 = md5($EmailSindicante."+".$Senha);
      echo "<br><pre>" . 
      $QueryCadastrarSenha = "
        INSERT INTO tb_senhas_auth(
          md5_senha,
          cadastro
        )VALUES(
          '$SenhaMD5',
          'novo'
        )
      ";
      echo "</pre>";
      $ExeQrCadastrarSenha = mysqli_query($connection, $QueryCadastrarSenha);
      if( $ExeQrCadastrarSenha ){
        echo "<br>Senha <b>$SenhaMD5</b> armazenada. Prosseguir cadastro para inserir usuário";

        echo "<br><pre>" . 
        $QueryBuscarUsuarioNovo = "
          SELECT * FROM tb_usuarios
          WHERE email_usuario = '$EmailSindicante'
        ";
        echo "</pre>";

        $ExeQrBuscarUsuarioNovo = mysqli_query($connection, $QueryBuscarUsuarioNovo);
        $RowQrBuscarUsuarioNovo = mysqli_num_rows($ExeQrBuscarUsuarioNovo);
        if( $RowQrBuscarUsuarioNovo < 1 ){
          echo "<br>Usuário ainda não tem o cadastro, cadastrar";

          echo "<br><pre>" . 
          $QueryBuscarSenhaUsuarioNovo = "
            SELECT * FROM
              tb_senhas_auth
            WHERE 
              md5_senha = '$SenhaMD5' &&
              cadastro = 'novo'
          ";
          echo "</pre>";

          $ExeQrBuscarSenhaUsuarioNovo = mysqli_query($connection, $QueryBuscarSenhaUsuarioNovo);
          $RowQrBuscarSenhaUsuarioNovo = mysqli_num_rows($ExeQrBuscarSenhaUsuarioNovo);

          while( $ReturnSenha = mysqli_fetch_assoc($ExeQrBuscarSenhaUsuarioNovo) ){
            echo $IdSenhaNova = $ReturnSenha['id_senha'];
          }

          echo "<br><pre>" . 
          $QueryCadastrarUsuarioNovo = "
            INSERT INTO tb_usuarios(
              email_usuario,
              nome_usuario,
              senha_usuario,
              permissao_usuario,
              usuario_ativo
            )VALUES(
              '$EmailSindicante',
              '$NomeSindicante',
              '$IdSenhaNova',
              '2',
              '0'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarUsuarioNovo = mysqli_query($connection, $QueryCadastrarUsuarioNovo);
          if( $ExeQrCadastrarUsuarioNovo ){
            echo "<br>Sindicante cadastrado como usuário, fazer o cadastro como sindicante";
            echo "<br><pre>" . 
            $QueryBuscarUsuarioSindicante = "
              SELECT * FROM tb_usuarios
              WHERE 
                email_usuario = '$EmailSindicante' &&
                nome_usuario = '$NomeSindicante'
            ";
            echo "</pre>";
            $ExeQrBuscarUsuarioSindicante = mysqli_query($connection, $QueryBuscarUsuarioSindicante);
            $RowQrBuscarUsuarioSindicante = mysqli_num_rows($ExeQrBuscarUsuarioSindicante);

            if( $RowQrBuscarUsuarioSindicante = 1 ){
              echo "<br>Usuário encontrado. Cadastrar como sindicante para atribuir relatórios";
              while( $ResultSindicante = mysqli_fetch_assoc($ExeQrBuscarUsuarioSindicante) ){
                $IdUsuario = $ResultSindicante['id_usuario'];
              }
              echo "<br><pre>". 
              $QueryCadastrarSindicante = "
                INSERT INTO tb_sindicantes(
                  id_usuario,
                  ativacao
                )VALUES(
                  '$IdUsuario',
                  '2'
                )
              ";
              echo "</pre>";
              $ExeQrCadastrarSindicante = mysqli_query($connection, $QueryCadastrarSindicante);
              if( $ExeQrCadastrarSindicante ){
                echo "<br>Sindicante Cadastrado com sucesso";
              }else{
                echo "<br>Erro ao cadastrar o sindicante: " . mysqli_error($connection);
              }
            }
          }
        }
      }
    }else{
      echo "<br>Essa senha já está cadastrada no sistema. Verificar";
    }
  }else{

    //PROD


    "<br>Nome: " . $NomeSindicante = $_POST['nome'];
    "<br>E-mail: " . $EmailSindicante = $_POST['email'];
    "<br>Senha: " . $Senha = "c2assessoria";
    "<br>SenhaMD5: " . $SenhaMD5 = md5($EmailSindicante."+".$Senha);
    "<br>Permissão: " . $Permissao = 2;

    //Cadastrar Senha
    "<br><pre>" .
    $QueryBuscarSenha = "
      SELECT * FROM 
        tb_senhas_auth 
      WHERE md5_senha = '$SenhaMD5' && cadastro = 'novo'
    ";
    "</pre>";

    $ExeQrBuscarSenha = mysqli_query($connection, $QueryBuscarSenha);
    $RowQrBuscarSenha = mysqli_num_rows($ExeQrBuscarSenha);

    if( $RowQrBuscarSenha < 1 ){
      "<br>Senha não cadastrada, inserir nova senha com email+senha";
      "<br>Senha MD5: " . $SenhaMD5 = md5($EmailSindicante."+".$Senha);
      "<br><pre>" . 
      $QueryCadastrarSenha = "
        INSERT INTO tb_senhas_auth(
          md5_senha,
          cadastro
        )VALUES(
          '$SenhaMD5',
          'novo'
        )
      ";
      "</pre>";
      $ExeQrCadastrarSenha = mysqli_query($connection, $QueryCadastrarSenha);
      if( $ExeQrCadastrarSenha ){
        "<br>Senha <b>$SenhaMD5</b> armazenada. Prosseguir cadastro para inserir usuário";

        "<br><pre>" . 
        $QueryBuscarUsuarioNovo = "
          SELECT * FROM tb_usuarios
          WHERE email_usuario = '$EmailSindicante'
        ";
        "</pre>";

        $ExeQrBuscarUsuarioNovo = mysqli_query($connection, $QueryBuscarUsuarioNovo);
        $RowQrBuscarUsuarioNovo = mysqli_num_rows($ExeQrBuscarUsuarioNovo);
        if( $RowQrBuscarUsuarioNovo < 1 ){
          "<br>Usuário ainda não tem o cadastro, cadastrar";

          "<br><pre>" . 
          $QueryBuscarSenhaUsuarioNovo = "
            SELECT * FROM
              tb_senhas_auth
            WHERE 
              md5_senha = '$SenhaMD5' &&
              cadastro = 'novo'
          ";
          "</pre>";

          $ExeQrBuscarSenhaUsuarioNovo = mysqli_query($connection, $QueryBuscarSenhaUsuarioNovo);
          $RowQrBuscarSenhaUsuarioNovo = mysqli_num_rows($ExeQrBuscarSenhaUsuarioNovo);

          while( $ReturnSenha = mysqli_fetch_assoc($ExeQrBuscarSenhaUsuarioNovo) ){
            $IdSenhaNova = $ReturnSenha['id_senha'];
          }

          "<br><pre>" . 
          $QueryCadastrarUsuarioNovo = "
            INSERT INTO tb_usuarios(
              email_usuario,
              nome_usuario,
              senha_usuario,
              permissao_usuario,
              usuario_ativo
            )VALUES(
              '$EmailSindicante',
              '$NomeSindicante',
              '$IdSenhaNova',
              '2',
              '0'
            )
          ";
          "</pre>";
          $ExeQrCadastrarUsuarioNovo = mysqli_query($connection, $QueryCadastrarUsuarioNovo);
          if( $ExeQrCadastrarUsuarioNovo ){
            "<br>Sindicante cadastrado como usuário, fazer o cadastro como sindicante";
            "<br><pre>" . 
            $QueryBuscarUsuarioSindicante = "
              SELECT * FROM tb_usuarios
              WHERE 
                email_usuario = '$EmailSindicante' &&
                nome_usuario = '$NomeSindicante'
            ";
            "</pre>";
            $ExeQrBuscarUsuarioSindicante = mysqli_query($connection, $QueryBuscarUsuarioSindicante);
            $RowQrBuscarUsuarioSindicante = mysqli_num_rows($ExeQrBuscarUsuarioSindicante);

            if( $RowQrBuscarUsuarioSindicante = 1 ){
              "<br>Usuário encontrado. Cadastrar como sindicante para atribuir relatórios";
              while( $ResultSindicante = mysqli_fetch_assoc($ExeQrBuscarUsuarioSindicante) ){
                $IdUsuario = $ResultSindicante['id_usuario'];
              }
              "<br><pre>". 
              $QueryCadastrarSindicante = "
                INSERT INTO tb_sindicantes(
                  id_usuario,
                  ativacao
                )VALUES(
                  '$IdUsuario',
                  '2'
                )
              ";
              "</pre>";
              $ExeQrCadastrarSindicante = mysqli_query($connection, $QueryCadastrarSindicante);
              if( $ExeQrCadastrarSindicante ){
                include 'Modal-Sindicante-Cadastrado.php';
              }else{
                echo "<br>Erro ao cadastrar o sindicante: " . mysqli_error($connection);
              }
            }
          }
        }
      }
    }else{
      "<br>Essa senha já está cadastrada no sistema. Verificar";
    }
  }