<?php
require_once "config/configuration.php";
date_default_timezone_set('America/Sao_Paulo');
session_start();

if(isset($_GET['Logout'])){
  include_once "parts/modals/modal-logoff.php";
}

if(!isset($_SESSION['Login'])){
  ?>
  <meta http-equiv="refresh" content="0;../">
  <?php
}

?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="apple-touch-icon" sizes="57x57" href="../img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/favicon-16x16.png">
    <link rel="manifest" href="../img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title><?php echo SITENAME?></title>

    <?php include_once "parts/plugins/index.php"?>

    <!-- Bootstrap core CSS-->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">
    
    <script>
    $(function(){
      if(window.innerWidth < 660){
        $("#sidebar").hide();
        $("#sidebarToggle").click(function(){
          $("#sidebar").slideToggle(2000);
        });
      }else{
        $("#sidebar").show();
        $("#sidebarToggle").click(function(){
          $("#sidebar").slideToggle(2000);
        });
      }
      
    })
    </script>

  </head>

  <body id="page-top">

    <?php include_once "parts/navigation-top.php"?>

    <div id="wrapper">

      <?php include_once "parts/side-menu.php" ?>

      <div id="content-wrapper">

        <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
          <li class="breadcrumb-item">
              <a href="#">Painel de Controle</a>
          </li>
          <li class="breadcrumb-item active"><?php if(isset($_GET['url'])){echo $_GET['url'];}else{echo 'Inicio';}?></li>
          </ol>

        <?php
          if(isset($_GET['url'])){
            $url = $_GET['url'];
            switch($url){
              case $url: include "pages/".$url.".php";break;
              default: include "pages/home.php";break;
            }
          }else{
            include_once "pages/home.php";
          }
        ?>

        </div>
        <!-- /.container-fluid -->
        <?php include_once "parts/footer.php"?>
      </div>
      <!-- /.content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <?php include_once "parts/modals/logoff.php"?>
  </body>

</html>
