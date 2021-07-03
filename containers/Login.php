<?php
if( $SysMode == 1 ){
  //Dev
  echo "<br>E-mail: " . $email = mysqli_real_escape_string($connection, $_POST['email']);
  echo "<br>Senha: " . $senha = mysqli_real_escape_string($connection, $_POST['senha']);
  echo "<br>Teste: $email + $senha em MD5: " . md5("$email"."+"."$senha");

  echo "<br><pre>" . 
  $QueryBuscarUsuario = "
    SELECT * FROM tb_usuarios
    WHERE email_usuario = '$email'
  ";
  echo "</pre>";

  $ExeQrBuscarUsuario = mysqli_query($connection, $QueryBuscarUsuario);
  $RowQrBuscarUsuario = mysqli_num_rows($ExeQrBuscarUsuario);

  if( $RowQrBuscarUsuario == 1 ){
    echo "<br>Usuário <b>$email</b> encontrado";
    echo "<br>Senha: " . $senha = mysqli_real_escape_string($connection, $_POST['senha']);

    echo "<br>MD5: " . $autPass = md5($email."+".$senha);

    echo "<br><pre>" . 
    $QueryBuscarSenha = "
      SELECT * FROM tb_senhas_auth
      WHERE md5_senha = '$autPass'
    ";
    echo "</pre>";

    $ExeQrBuscarSenha = mysqli_query($connection, $QueryBuscarSenha);
    $RowQrBuscarSenha = mysqli_num_rows($ExeQrBuscarSenha);

    if( $RowQrBuscarSenha > 0 ){
      echo "<br>Senha <b>$autPass</b> encontrada";
      while( $ReturnSenha = mysqli_fetch_assoc($ExeQrBuscarSenha) ){
          echo "<br>Id Senha: " . $IdSenha = $ReturnSenha['id_senha'];
      }

      echo "<br><pre>" . 
      $QueryLogarUsuario = "
        SELECT * FROM tb_usuarios
        WHERE email_usuario = '$email' && senha_usuario = '$IdSenha'
      ";
      echo "</pre>";

      $ExeQrLogarUsuario = mysqli_query($connection, $QueryLogarUsuario);
      $RowQrLogarUsuario = mysqli_num_rows($ExeQrLogarUsuario);

      if( $RowQrLogarUsuario > 0 ){
        echo "<br>Usuário <b>$email</b> logado, armazenar sessão e fazer o login";
        while( $DadosUsuario = mysqli_fetch_assoc($ExeQrLogarUsuario) ){
          // session_start();
          $_SESSION['LoginUsuario'] = $DadosUsuario;
          $_SESSION['LoginUsuario']['usuario_status'] = 1;
          $IdUsuario = $_SESSION['LoginUsuario']['id_usuario'];
          $QueryUpdateStatusLogado = "
            UPDATE tb_usuarios
            SET
              usuario_status = 1
            WHERE 
              id_usuario = '$IdUsuario'
          ";
          $ExeQrUpdateStatusLogado = mysqli_query($connection, $QueryUpdateStatusLogado);

          ?>
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image">
                <img 
                  src="img/logo.png" 
                  alt="C2 Assessoria" 
                  title="C2 Assessoria" 
                  class="img-fluid img-adjust"
                  style="max-height:30%;margin-top:30%"
                >
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">
                      <?php echo $_SESSION['LoginUsuario']['nome_usuario']?>
                    </h1>

                    <img src="img/logo.png" alt="C2 Assessoria" title="C2 Assessoria" class="img-fluid"style="max-height:30%;">
                    <img src="img/Loading.gif" alt="Loading" title="Loading" class="img-fluid" id="img-loading"><br>
                    <h2 class="h4 text-black-900 mb4">Aguarde, você será redirecionado</h2>
                  </div>                    
                </div>
              </div>
            </div>
            <meta http-equiv="refresh" content="2;api">
          <?php
        }
      }else{
          include_once "containers/Container-Senha-Errada.php";
      }

    }else{
        include_once "containers/Container-Senha-Errada.php";
    }
  }else{
      include_once "containers/Container-Usuario-Errado.php";
  }
    
}else{
  // Prod
  

  "<br>E-mail: " . $email = mysqli_real_escape_string($connection, $_POST['email']);
  "<br>Senha: " . $senha = mysqli_real_escape_string($connection, $_POST['senha']);
  "<br>Teste: $email + $senha em MD5: " . md5("$email"."+"."$senha");

  "<br><pre>" . 
  $QueryBuscarUsuario = "
    SELECT * FROM tb_usuarios
    WHERE email_usuario = '$email'
  ";
  "</pre>";

  $ExeQrBuscarUsuario = mysqli_query($connection, $QueryBuscarUsuario);
  $RowQrBuscarUsuario = mysqli_num_rows($ExeQrBuscarUsuario);

  if( $RowQrBuscarUsuario == 1 ){
    "<br>Usuário <b>$email</b> encontrado";
    "<br>Senha: " . $senha = mysqli_real_escape_string($connection, $_POST['senha']);

    "<br>MD5: " . $autPass = md5($email."+".$senha);

    "<br><pre>" . 
    $QueryBuscarSenha = "
      SELECT * FROM tb_senhas_auth
      WHERE md5_senha = '$autPass'
    ";
    "</pre>";

    $ExeQrBuscarSenha = mysqli_query($connection, $QueryBuscarSenha);
    $RowQrBuscarSenha = mysqli_num_rows($ExeQrBuscarSenha);

    if( $RowQrBuscarSenha > 0 ){
      "<br>Senha <b>$autPass</b> encontrada";
      while( $ReturnSenha = mysqli_fetch_assoc($ExeQrBuscarSenha) ){
          "<br>Id Senha: " . $IdSenha = $ReturnSenha['id_senha'];
      }

      "<br><pre>" . 
      $QueryLogarUsuario = "
        SELECT * FROM tb_usuarios
        WHERE email_usuario = '$email' && senha_usuario = '$IdSenha'
      ";
      "</pre>";

      $ExeQrLogarUsuario = mysqli_query($connection, $QueryLogarUsuario);
      $RowQrLogarUsuario = mysqli_num_rows($ExeQrLogarUsuario);

      if( $RowQrLogarUsuario > 0 ){
        "<br>Usuário <b>$email</b> logado, armazenar sessão e fazer o login";
        while( $DadosUsuario = mysqli_fetch_assoc($ExeQrLogarUsuario) ){
          // session_start();
          $_SESSION['LoginUsuario'] = $DadosUsuario;
          $_SESSION['LoginUsuario']['usuario_status'] = 1;
          $IdUsuario = $_SESSION['LoginUsuario']['id_usuario'];
          $QueryUpdateStatusLogado = "
            UPDATE tb_usuarios
            SET
              usuario_status = 1
            WHERE 
              id_usuario = '$IdUsuario'
          ";
          $ExeQrUpdateStatusLogado = mysqli_query($connection, $QueryUpdateStatusLogado);

          ?>
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image">
                <img 
                  src="img/logo.png" 
                  alt="C2 Assessoria" 
                  title="C2 Assessoria" 
                  class="img-fluid img-adjust"
                  style="max-height:30%;margin-top:30%"
                >
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">
                      <?php echo $_SESSION['LoginUsuario']['nome_usuario']?>
                    </h1>

                    <img src="img/logo.png" alt="C2 Assessoria" title="C2 Assessoria" class="img-fluid"style="max-height:30%;">
                    <img src="img/Loading.gif" alt="Loading" title="Loading" class="img-fluid" id="img-loading"><br>
                    <h2 class="h4 text-black-900 mb4">Aguarde, você será redirecionado</h2>
                  </div>                    
                </div>
              </div>
            </div>
            <meta http-equiv="refresh" content="2;api">
          <?php
        }
      }else{
          include_once "containers/Container-Senha-Errada.php";
      }

    }else{
        include_once "containers/Container-Senha-Errada.php";
    }
  }else{
      include_once "containers/Container-Usuario-Errado.php";
  }
}