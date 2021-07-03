<?php
  if( $_SESSION['LoginUsuario']['usuario_ativo'] == 0 ){
    include 'Ativar-Usuario.php';

    if( $_SESSION['LoginUsuario']['usuario_status'] == 2 ){
      include 'Sessao-Expirada.php';
    }
  }

  if( $_SESSION['LoginUsuario']['usuario_status'] == 2 || !isset($_SESSION['LoginUsuario']) ){
    include 'Expirar-Sessao.php';

    include 'Modal-Usuario-Deslogado.php';
  }