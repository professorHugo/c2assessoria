<?php

if( $SysMode == 1 ){
  //DEV
  echo $SysModeNome;
  echo "<br>Página de Relatórios";

  if( isset($_GET['Criar']) ){

    echo "<br>Criar Relatório";
    include_once "Criar/index.php";

  }
  
  if( isset($_GET['Preencher']) ){

    echo "<br>Preencher o Relatório";
    include_once "Preencher/index.php";

  }
  
  if( isset($_GET['Editar']) ){

    echo "<br>Editar Relatório";
    include_once "Editar/index.php";

  }
  
  if( isset($_GET['Entregar']) ){
    
    echo "<br>Entregar Relatório";
    include_once "Entregar/index.php";

  }
  
  if( isset($_GET['Apagar']) ){
    
    echo "<br>Apagar Relatorio";
    include_once "Apagar/index.php";

  }
  
  if ( isset($_GET['View']) ){
    include_once 'View/index.php';
  }

  if( 
    !isset($_GET['Criar']) && 
    !isset($_GET['Preencher']) && 
    !isset($_GET['Editar']) && 
    !isset($_GET['Entregar']) && 
    !isset($_GET['Apagar']) && 
    !isset($_GET['View'])
   )
   {
     include_once "Mostrar/index.php";
   }
}else{

  //PROD
  $SysModeNome;
  "<br>Página de Relatórios";

  if( isset($_GET['Criar']) ){

    "<br>Criar Relatório";
    include_once "Criar/index.php";

  }
  
  if( isset($_GET['Preencher']) ){

    "<br>Preencher o Relatório";
    include_once "Preencher/index.php";

  }
  
  if( isset($_GET['Editar']) ){

    "<br>Editar Relatório";
    include_once "Editar/index.php";

  }
  
  if( isset($_GET['Entregar']) ){
    
    "<br>Entregar Relatório";
    include_once "Entregar/index.php";

  }
  
  if( isset($_GET['Apagar']) ){
    
    "<br>Apagar Relatorio";
    include_once "Apagar/index.php";

  }
  
  if ( isset($_GET['View']) ){
    include_once 'View/index.php';
  }

  if ( isset($_GET['Compactar']) ){
    include_once 'Compactar/index.php';
  }

  if( 
    !isset($_GET['Criar']) && 
    !isset($_GET['Preencher']) && 
    !isset($_GET['Editar']) && 
    !isset($_GET['Entregar']) && 
    !isset($_GET['Apagar']) && 
    !isset($_GET['View']) &&
    !isset($_GET['Compactar'])
  ){
    include_once "Mostrar/index.php";
  }
}