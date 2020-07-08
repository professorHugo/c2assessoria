<?php
if(isset($_POST['Logar'])){
     $usuario = $_POST['inputUser'];
     "<br>";
     $senha = md5($_POST['inputPassword']);
     "<br>";
    
     $QueryBuscarSenha = "SELECT * FROM tb_senhas_auth WHERE md5_senha = '$senha'";
     "<br>";
    $ExeQrBuscarSenha = mysqli_query($connection, $QueryBuscarSenha);
     $ResQrBuscarSenha = mysqli_num_rows($ExeQrBuscarSenha);
     "<br>";


    if($ResQrBuscarSenha >= 1){
            while($ResQrSenha = mysqli_fetch_assoc($ExeQrBuscarSenha)){
                 $senha_id = $ResQrSenha['id_senha'];
                 $QueryLogarUsuario = "SELECT * FROM tb_usuarios WHERE email_usuario = '$usuario' AND senha_usuario = '$senha_id'";

                $ExeQrLogarUsuario = mysqli_query($connection, $QueryLogarUsuario);
                $ResQrLogarUsuario = mysqli_num_rows($ExeQrLogarUsuario);

                if($ResQrLogarUsuario >= 1){
                    while($DadosUsuario = mysqli_fetch_assoc($ExeQrLogarUsuario)){
                        $_SESSION['Login'] = $DadosUsuario;
                        include_once "modals/modal-fixo-login.php";

                    }
                }
            }
    }else{
        include_once "modals/modal-fixo-senha-errada.php";
    }

    if(isset($_POST['manterUser'])){
         $manter = $_POST['manterUser'];
    }
     "<br>";
}
?>