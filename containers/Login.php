<?php
"<br>E-mail: " . $email = $_POST['email'];
"<br>Senha: " . $senha = md5( $_POST['senha'] );

$QueryBuscarSenha = "SELECT * FROM tb_senhas_auth  WHERE md5_senha = '$senha'";
"</pre>";
$ExeQrBuscarSenha = mysqli_query($connection, $QueryBuscarSenha);

if( mysqli_num_rows($ExeQrBuscarSenha) >= 1){
    while($ResQrSenha = mysqli_fetch_assoc($ExeQrBuscarSenha) ){
        $IdSenha = $ResQrSenha['id_senha'];
        $QueryLogarUsuario = "
            SELECT * FROM tb_usuarios WHERE email_usuario = '$email' AND senha_usuario = '$IdSenha'
        ";
        $ExeQrLogarUsuario = mysqli_query($connection, $QueryLogarUsuario);
        if( mysqli_num_rows($ExeQrLogarUsuario) > 0 ){
            while( $DadosUsuario = mysqli_fetch_assoc($ExeQrLogarUsuario) ){
                $_SESSION['LoginUsuario'] = $DadosUsuario;
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
                <meta http-equiv="refresh" content="1;api">
                <?php
            }
        }else{
            include_once "containers/Container-Usuario-Errado.php";
        }
    }
}else{
    include_once "containers/Container-Senha-Errada.php";
}


?>