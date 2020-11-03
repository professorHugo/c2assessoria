<h2>Relatórios cadastrados</h2>
<div class="col-12" style="border-top: 2px solid #bbb; margin-bottom: 1rem;float: left;height:1px"></div>


<?php
if( $SysMode == 1 ){
  echo "<br>DEV";
  echo "<br>Permissão: " . $permissao = $_SESSION['LoginUsuario']['permissao_usuario'];
  echo "<br>Id Usuário: " . $IdUsuario = $_SESSION['LoginUsuario']['id_usuario'];
  if( $permissao == 1 || $permissao == 3 ){
    echo "<br><pre>".
    $QueryBuscarRelatorios = "
      SELECT * FROM 
        tb_relatorios relatorio
      INNER JOIN tb_associados associado
        ON relatorio.cpf_associado = associado.cpf_associado
    ";
    echo "</pre>";
  }else{
    echo "<br><pre>".
    $QueryBuscarRelatorios = "
      SELECT * FROM 
        tb_relatorios relatorio
      INNER JOIN tb_associados associado
        ON relatorio.cpf_associado = associado.cpf_associado
      WHERE sindicante_evento = '$IdUsuario'
    ";
    echo "</pre>";
  }

  include "container/Exibir-Relatorios.php";
  
}else{

   "<br>DEV";
   "<br>Permissão: " . $permissao = $_SESSION['LoginUsuario']['permissao_usuario'];
   "<br>Id Usuário: " . $IdUsuario = $_SESSION['LoginUsuario']['id_usuario'];
  if( $permissao == 1 || $permissao == 3 ){
     "<br><pre>".
    $QueryBuscarRelatorios = "
      SELECT * FROM 
        tb_relatorios relatorio
      INNER JOIN tb_associados associado
        ON relatorio.cpf_associado = associado.cpf_associado
    ";
     "</pre>";
  }else{
     "<br><pre>".
    $QueryBuscarRelatorios = "
      SELECT * FROM 
        tb_relatorios relatorio
      INNER JOIN tb_associados associado
        ON relatorio.cpf_associado = associado.cpf_associado
      WHERE sindicante_evento = '$IdUsuario'
    ";
     "</pre>";
  }

  include "container/Exibir-Relatorios.php";

}