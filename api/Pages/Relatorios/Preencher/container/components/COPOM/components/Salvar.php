<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
    echo "<br>Placa Veículo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
    echo "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
  
    echo "<br>Comunicado COPOM: ". $ComunicadoCopom = $_POST['comunicado_copom'];
  
    if( $ComunicadoCopom != 3 ){
      include 'Cadastrar-Copom.php';
  
      echo "<br>Print Copom: " . $PrintCopom = $_POST['print_copom'];
  
      if( $PrintCopom == 1 ){
        if( !empty($_FILES['print_copom_img1']['name']) ){
          include 'Uploads/Copom1.php';
          echo "<br>";
        }
        if( !empty($_FILES['print_copom_img2']['name']) ){
          include 'Uploads/Copom2.php';
          echo "<br>";
        }
        if( !empty($_FILES['print_copom_img3']['name']) ){
          include 'Uploads/Copom3.php';
          echo "<br>";
        }
        if( !empty($_FILES['print_copom_img4']['name']) ){
          include 'Uploads/Copom4.php';
          echo "<br>";
        }
        if( !empty($_FILES['print_copom_img5']['name']) ){
          include 'Uploads/Copom5.php';
          echo "<br>";
        }
  
        echo "<br>Divergência no Regsistro: " . $DivergenciaRegistro = $_POST['divergencia_registro'];
        if( $DivergenciaRegistro == 1 ){
          echo "<br>Texto Divergência: " . $TextoDivergencia = $_POST['texto_divergencia'];
        }else{
          echo "<br>Texto Divergência: " . $TextoDivergencia = "NULL";
        }
  
        include 'Update-Copom.php';
        include 'Update-Relatorio.php';
      }
    }
    //Update data de modificação do relatório
    include 'Update-Data-Modifica-Relatorio.php';
  }else{

    //PROD


    "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
    "<br>Placa Veículo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
    "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
  
    "<br>Comunicado COPOM: ". $ComunicadoCopom = $_POST['comunicado_copom'];
  
    if( $ComunicadoCopom != 3 ){
      include 'Cadastrar-Copom.php';
  
      "<br>Print Copom: " . $PrintCopom = $_POST['print_copom'];
  
      if( $PrintCopom == 1 ){
        if( !empty($_FILES['print_copom_img1']['name']) ){
          include 'Uploads/Copom1.php';
          "<br>";
        }
        if( !empty($_FILES['print_copom_img2']['name']) ){
          include 'Uploads/Copom2.php';
          "<br>";
        }
        if( !empty($_FILES['print_copom_img3']['name']) ){
          include 'Uploads/Copom3.php';
          "<br>";
        }
        if( !empty($_FILES['print_copom_img4']['name']) ){
          include 'Uploads/Copom4.php';
          "<br>";
        }
        if( !empty($_FILES['print_copom_img5']['name']) ){
          include 'Uploads/Copom5.php';
          "<br>";
        }
  
        "<br>Divergência no Regsistro: " . $DivergenciaRegistro = $_POST['divergencia_registro'];
        if( $DivergenciaRegistro == 1 ){
          "<br>Texto Divergência: " . $TextoDivergencia = $_POST['texto_divergencia'];
        }else{
          "<br>Texto Divergência: " . $TextoDivergencia = "NULL";
        }
  
        include 'Update-Copom.php';
        include 'Update-Relatorio.php';
      }
    }
    //Update data de modificação do relatório
    include 'Update-Data-Modifica-Relatorio.php';
  }