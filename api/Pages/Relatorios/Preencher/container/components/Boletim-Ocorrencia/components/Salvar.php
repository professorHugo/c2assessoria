<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
    echo "<br>Placa Veículo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
    echo "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
  
    echo "<br>Boletim Autêntico: ";
    if( $_POST['boletim_autentico'] == 1 ){
      echo $BoletimAutentico = "Sim";
    }else{
      echo $BoletimAutentico = "Não";
    }
  
    echo "<br>";
  
    include 'Cadastrar-Boletim.php';
    
    echo "<br>";
  
    if( !empty($_FILES['print_boletim_img1']['name']) ){
      include 'Uploads/Boletim1.php';
    }
    echo "<br>";
  
    if( !empty($_FILES['print_boletim_img2']['name']) ){
      include 'Uploads/Boletim2.php';
    }
    echo "<br>";
  
    if( !empty($_FILES['print_boletim_img3']['name']) ){
      include 'Uploads/Boletim3.php';
    }
    echo "<br>";
  
    if( !empty($_FILES['print_boletim_img4']['name']) ){
      include 'Uploads/Boletim4.php';
    }
    echo "<br>";
  
    if( !empty($_FILES['print_boletim_img5']['name']) ){
      include 'Uploads/Boletim5.php';
    }
    echo "<br>";
    echo "<br>";
  
    include 'Update-Relatorio.php';

    //Update data de modificação do relatório
    include 'Update-Data-Modifica-Relatorio.php';
  }else{

    //PROD


    "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
    "<br>Placa Veículo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
    "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
  
    "<br>Boletim Autêntico: ";
    if( $_POST['boletim_autentico'] == 1 ){
      $BoletimAutentico = "Sim";
    }else{
      $BoletimAutentico = "Não";
    }
  
    "<br>";
  
    include 'Cadastrar-Boletim.php';
    
    "<br>";
  
    if( !empty($_FILES['print_boletim_img1']['name']) ){
      include 'Uploads/Boletim1.php';
    }
    "<br>";
  
    if( !empty($_FILES['print_boletim_img2']['name']) ){
      include 'Uploads/Boletim2.php';
    }
    "<br>";
  
    if( !empty($_FILES['print_boletim_img3']['name']) ){
      include 'Uploads/Boletim3.php';
    }
    "<br>";
  
    if( !empty($_FILES['print_boletim_img4']['name']) ){
      include 'Uploads/Boletim4.php';
    }
    "<br>";
  
    if( !empty($_FILES['print_boletim_img5']['name']) ){
      include 'Uploads/Boletim5.php';
    }
    "<br>";
    "<br>";
  
    include 'Update-Relatorio.php';

    //Update data de modificação do relatório
    include 'Update-Data-Modifica-Relatorio.php';
  }