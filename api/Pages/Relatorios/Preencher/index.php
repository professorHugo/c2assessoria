<?php
if( $SysMode == 1 ){
  echo "<br>DEV";
  echo "<br>Permissão: " . $permissao = $_SESSION['LoginUsuario']['permissao_usuario'];
  echo "<br>Id Usuário: " . $IdUsuario = $_SESSION['LoginUsuario']['id_usuario'];
  echo "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
  if( $permissao == 1 || $permissao == 3 ){
    echo "<br><pre>".
    $QueryBuscarRelatorios = "
      SELECT * FROM 
        tb_relatorios relatorio
      INNER JOIN tb_associados associado
        ON relatorio.cpf_associado = associado.cpf_associado
      
      WHERE protocolo_evento = '$Protocolo'
    ";
    echo "</pre>";
  }else{
    echo "<br><pre>".
    $QueryBuscarRelatorios = "
      SELECT * FROM 
        tb_relatorios relatorio
      INNER JOIN tb_associados associado
        ON relatorio.cpf_associado = associado.cpf_associado
      WHERE sindicante_evento = '$IdUsuario' && protocolo_evento = '$Protocolo'
    ";
    echo "</pre>";
  }

  include "container/Dados-Relatorio.php";
  
}else{

   "<br>Prod";
   "<br>Permissão: " . $permissao = $_SESSION['LoginUsuario']['permissao_usuario'];
   "<br>Id Usuário: " . $IdUsuario = $_SESSION['LoginUsuario']['id_usuario'];
   "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
  if( $permissao == 1 || $permissao == 3 ){
     "<br><pre>".
    $QueryBuscarRelatorios = "
      SELECT * FROM 
        tb_relatorios relatorio
      INNER JOIN tb_associados associado
        ON relatorio.cpf_associado = associado.cpf_associado
      
      WHERE protocolo_evento = '$Protocolo'
    ";
     "</pre>";
  }else{
     "<br><pre>".
    $QueryBuscarRelatorios = "
      SELECT * FROM 
        tb_relatorios relatorio
      INNER JOIN tb_associados associado
        ON relatorio.cpf_associado = associado.cpf_associado
      WHERE sindicante_evento = '$IdUsuario' && protocolo_evento = '$Protocolo'
    ";
     "</pre>";
  }

  include "container/Dados-Relatorio.php";
}