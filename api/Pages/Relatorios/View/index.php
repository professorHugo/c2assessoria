<?php
  if( $SysMode == 1 ){
    //DEV
    //Armazenar a permissão:
    $permissao = $_SESSION['LoginUsuario']['permissao_usuario'];
    $IdUsuario = $_SESSION['LoginUsuario']['id_usuario'];
    //Caso o usuário seja Master/Admin
    if( $permissao == 1 || $permissao == 3 ){
      echo "<br>Permissão: " . $permissao;
      echo "<br>Id do Usuário: " . $IdUsuario;
      echo "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
      echo "<br><b>Buscar o Relatório pelo protocolo.......:</b>";
      echo "<br><pre>" . 
      $QueryBuscarRelatorio = "
        SELECT * FROM 
          tb_relatorios
        WHERE 
          protocolo_evento = '$Protocolo' &&
          status_relatorio != 'Criado'
      ";
      echo "</pre>";
    }else{
      echo "<br>Permissão: " . $permissao;
      echo "<br>Id do Usuário: " . $IdUsuario;
      echo "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
      echo "<br><b>Buscar o Relatório pelo protocolo.......:</b>";
      echo "<br><pre>" . 
      $QueryBuscarRelatorio = "
        SELECT * FROM 
          tb_relatorios
        WHERE 
          protocolo_evento = '$Protocolo' &&
          sindicante_evento = '$IdUsuario' &&
          status_relatorio != 'Criado'

      ";
      echo "</pre>";
    }

    include "View-Relatorio.php";

    
  }else{

    //PROD



    $permissao = $_SESSION['LoginUsuario']['permissao_usuario'];
    $IdUsuario = $_SESSION['LoginUsuario']['id_usuario'];
    //Caso o usuário seja Master/Admin
    if( $permissao == 1 || $permissao == 3 ){
      "<br>Permissão: " . $permissao;
      "<br>Id do Usuário: " . $IdUsuario;
      "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
      "<br><b>Buscar o Relatório pelo protocolo.......:</b>";
      "<br><pre>" . 
      $QueryBuscarRelatorio = "
        SELECT * FROM 
          tb_relatorios
        WHERE 
          protocolo_evento = '$Protocolo' &&
          status_relatorio != 'Criado'
      ";
      "</pre>";
    }else{
      "<br>Permissão: " . $permissao;
      "<br>Id do Usuário: " . $IdUsuario;
      "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
      "<br><b>Buscar o Relatório pelo protocolo.......:</b>";
      "<br><pre>" . 
      $QueryBuscarRelatorio = "
        SELECT * FROM 
          tb_relatorios
        WHERE 
          protocolo_evento = '$Protocolo' &&
          sindicante_evento = '$IdUsuario' &&
          status_relatorio != 'Criado'

      ";
      "</pre>";
    }

    include "View-Relatorio.php";
  }