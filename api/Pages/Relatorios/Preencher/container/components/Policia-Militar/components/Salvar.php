<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
    echo "<br>Placa Veículo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
    echo "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
    echo "<br>Irregularidades: " ; $Irregularidades = $_POST['policia_militar'];
  
    switch( $Irregularidades ){
      case 1 : echo $Irregularidade = "Em Pesquisa, não há irregularidades apontadas";
      break;
      case 2 : echo $Irregularidade = "Há B.O. do evento em questão, não apresentado";
      break;
      case 3 : echo $Irregularidade = "Há B.O. divergentes do informado";
      break;
      case 4 : echo $Irregularidade = "Há B.O. relacionado ao veículo em datas anteriores ao evento";
      break;
      case 5 : echo $Irregularidade = "Há apontamentos irregulares";
      break;
    }
  
    include 'Cadastrar-Policia-Militar.php';
  
    if( !empty($_FILES['print_policia_militar_img1']['name']) ){
      include 'Uploads/Policia-Militar1.php';
      echo "<br>";
    }
  
    if( !empty($_FILES['print_policia_militar_img2']['name']) ){
      include 'Uploads/Policia-Militar2.php';
      echo "<br>";
    }
  
    if( !empty($_FILES['print_policia_militar_img3']['name']) ){
      include 'Uploads/Policia-Militar3.php';
      echo "<br>";
    }
  
    if( !empty($_FILES['print_policia_militar_img4']['name']) ){
      include 'Uploads/Policia-Militar4.php';
      echo "<br>";
    }
  
    if( !empty($_FILES['print_policia_militar_img5']['name']) ){
      include 'Uploads/Policia-Militar5.php';
      echo "<br>";
    }
  
    include 'Update-Relatorio.php';

    //Update data de modificação do relatório
    include 'Update-Data-Modifica-Relatorio.php';
  }else{

    //PROD


    "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
    "<br>Placa Veículo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
    "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
    "<br>Irregularidades: " ; $Irregularidades = $_POST['policia_militar'];
  
    switch( $Irregularidades ){
      case 1 : $Irregularidade = "Em Pesquisa, não há irregularidades apontadas";
      break;
      case 2 : $Irregularidade = "Há B.O. do evento em questão, não apresentado";
      break;
      case 3 : $Irregularidade = "Há B.O. divergentes do informado";
      break;
      case 4 : $Irregularidade = "Há B.O. relacionado ao veículo em datas anteriores ao evento";
      break;
      case 5 : $Irregularidade = "Há apontamentos irregulares";
      break;
    }
  
    include 'Cadastrar-Policia-Militar.php';
  
    if( !empty($_FILES['print_policia_militar_img1']['name']) ){
      include 'Uploads/Policia-Militar1.php';
      "<br>";
    }
  
    if( !empty($_FILES['print_policia_militar_img2']['name']) ){
      include 'Uploads/Policia-Militar2.php';
      "<br>";
    }
  
    if( !empty($_FILES['print_policia_militar_img3']['name']) ){
      include 'Uploads/Policia-Militar3.php';
      "<br>";
    }
  
    if( !empty($_FILES['print_policia_militar_img4']['name']) ){
      include 'Uploads/Policia-Militar4.php';
      "<br>";
    }
  
    if( !empty($_FILES['print_policia_militar_img5']['name']) ){
      include 'Uploads/Policia-Militar5.php';
      "<br>";
    }
  
    include 'Update-Relatorio.php';

    //Update data de modificação do relatório
    include 'Update-Data-Modifica-Relatorio.php';
  }