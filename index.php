<?php require_once "api/config/Config.php"?>
<?php
session_start();
// session_destroy();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Agência N2Y - Sempre perto de você">

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link rel="stylesheet" href="css/style.css">
  
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center" id="container-login">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <?php
            
              if( isset($_SESSION['LoginUsuario']) ){
                include_once "containers/Logado.php";
              }else{
                if( isset($_GET['Login']) ){
                  include_once "containers/Login.php";
                }else{
                  include_once "containers/Container-Login.php";
                }
              }
              
            ?>
          </div>
        </div>

      </div>

    </div>

  </div>
  <!-- Modal -->
  <div class="modal fade" id="modalSenha" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog"
      style="margin-top:15%"
    >
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Resetar a Senha</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="?Reset-Senha" method="post" class="user">
            <div class="form-group">
              <input 
                type="email" 
                class="form-control form-control-user" 
                id="exampleInputEmail" 
                aria-describedby="emailHelp" 
                placeholder="Digite seu e-mail"
              >
            </div>
          </form>
          Ao clicar no botão "Solicitar", sua senha será resetada e enviada ao seu e-mail
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Calncelar</button>
          <button type="button" class="btn btn-primary">Solicitar</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
