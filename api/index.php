<?php
require_once "config/Config.php";
session_start();
// session_destroy();
date_default_timezone_set('America/Sao_Paulo');
if( isset($_GET['Logout']) ){
    
  include "containers/Fazer-Logoff.php";

}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Agência N2Y - Sempre ao seu lado">

  <title>
  Advisory <?php echo VERSION ?> - 
  <?php 
    if(isset($_GET['Page'])) {
      if( isset($_GET['Cadastrar']) ){
        $Title = $_GET['Page'] . ": Cadastrar";
      }else{
        $Title = $_GET['Page'];
      }

      if( isset($_GET['Relatorios']) ){
        $Title = $_GET['Page'] . ": Relatórios";
      }
      
    }else{
      $Title =  "Home";
    }
    echo $Title;
  ?>
  </title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <script src="https://use.fontawesome.com/c42a50f139.js"></script>
  <link rel="stylesheet" href="css/styles.css">
  <!-- Core jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.form.js"></script>

  <?php include "../containers/Favicon.php"?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include_once "containers/sidebar.php"?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include_once "containers/Top-Menu-Bar.php";?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

          <?php 
          //Topo com botões de resumos
          if( isset($_GET['Page']) ){
              if ( 
                $_GET['Page'] != "Relatorios" && 
                $_GET['Page'] != "Sindicantes" &&
                $_GET['Page'] != "Clientes" &&
                $_GET['Page'] != "Settings"
              ){
                include_once "containers/Container-Top.php";
              }
            }else{
              include_once "containers/Container-Top.php";
            }
          
            //Navegação do conteúdo
            if(isset($_GET['Page'])){
              $Pagina = $_GET['Page'];

              switch( $Pagina ) {
                case $Pagina : include_once "Pages/" . $Pagina . "/index.php";break;
                default: include_once "Pages/Home/index.php";
              }
            }else{
              include_once "Pages/Home/index.php";
            }
          ?>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include_once "containers/Footer.php"?>
      <?php include "containers/Modal-Cadastro-Sindicante.php";?>
      <?php include "containers/Modal-Cadastro-Clientes.php";?>
      <?php include "containers/Modal-Cadastro-Naturezas.php";?>
      <?php include "containers/Modal-Cadastro-Civil.php";?>
      <?php include "containers/Modal-Cadastro-Procedente.php";?>
      <?php include "containers/Modal-Cadastro-Chaves.php";?>
      <?php include "containers/Modal-Cadastro-AntiFurto.php";?>
      <?php include "containers/Modal-Cadastro-Detran.php";?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Complementos da página principal -->
  <?php include_once "containers/To-Up-Button.php"?>
  <?php include_once "containers/Logout-Modal.php"?>
  <!-- Plugins -->
  <?php include_once "containers/Plugins-End.php"?>
  <script>
    // Close any open menu accordions when window is resized below 768px
    $(function() {
      if ($(window).width() < 768) {
        $('.sidebar .collapse').collapse('hide');
      };
      
      // Toggle the side navigation when window is resized below 480px
      if ($(window).width() < 768 && !$(".sidebar").hasClass("toggled")) {
        $("body").addClass("sidebar-toggled");
        $(".sidebar").addClass("toggled");
        $('.sidebar .collapse').collapse('hide');
      };
    });
  </script>

</body>

</html>
