<?php

if( $SysMode == 1 ){
  echo $SysModeNome;
  echo "<br>Página de Relatórios";

  if( isset($_GET['Criar']) ){

    echo "<br>Criar Relatório";
    include_once "Criar/index.php";

  }else if( isset($_GET['Preencher']) ){

    echo "<br>Preencher o Relatório";
    include_once "Preencher/index.php";

  }else if( isset($_GET['Editar']) ){

    echo "<br>Editar Relatório";
    include_once "Editar/index.php";

  }else if( isset($_GET['Entregar']) ){
    
    echo "<br>Entregar Relatório";
    include_once "Entregar/index.php";

  }else if( isset($_GET['Apagar']) ){
    
    echo "<br>Apagar Relatorio";
    include_once "Apagar/index.php";

  }else{

    echo "<br>Ver Relatórios";
    include_once "View/index.php";

  }
}else{
   $SysModeNome;
   "<br>Página de Relatórios";

  if( isset($_GET['Criar']) ){

     "<br>Criar Relatório";
    include_once "Criar/index.php";

  }else if( isset($_GET['Preencher']) ){

     "<br>Preencher o Relatório";
    include_once "Preencher/index.php";

  }else if( isset($_GET['Editar']) ){

     "<br>Editar Relatório";
    include_once "Editar/index.php";

  }else if( isset($_GET['Entregar']) ){
    
     "<br>Entregar Relatório";
    include_once "Entregar/index.php";

  }else if( isset($_GET['Apagar']) ){
    
     "<br>Apagar Relatorio";
    include_once "Apagar/index.php";

  }else{

     "<br>Ver Relatórios";
    include_once "View/index.php";

  }
}