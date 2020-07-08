<?php
require_once 'api/config/configuration.php';

ob_start();
session_start();
// session_destroy();

if(isset($_GET['Fazer-Login'])){
    include_once "modals/fazer-login.php";
}

if(isset($_SESSION['Login'])){
    include_once "modals/modal-fixo-login-retorno.php";
}

?>
<html lang="pt-br">
    <head>
        <?php include_once 'parts/head.php'?>
        <title><?php echo SITENAME ?></title>
    </head>

    <body class="bg-dark">
        <form action="?Fazer-Login" method="post">
        <div class="container centered">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header text-center">
                    <img src="img/logo.png" alt="Logotipo" width="100%">
                </div>
                <div class="card-body">
                    <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="inputUser" name="inputUser" class="form-control" placeholder="Email address" required="required">
                        <label for="inputUser">Usuário</label>
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="form-label-group">
                        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required="required">
                        <label for="inputPassword">Senha</label>
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="checkbox">
                        <label>
                        <input type="checkbox" name="manterUser" value="remember-me">
                        Ficar logado
                        </label>
                    </div>
                    </div>
                    <button class="btn btn-primary btn-block" name="Logar">Login</button>
                <div class="text-center">
                    <a class="d-block small" href="forgot-password.php">Esqueceu a senha?</a>
                    <a class="d-block small" href="#" data-toggle="modal" data-target="#modalLoggedIn">Modal</a>
                </div>
                </div>
            </div>
        </div>
        </form>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    </body>
</html>

<?php ob_end_flush();?>