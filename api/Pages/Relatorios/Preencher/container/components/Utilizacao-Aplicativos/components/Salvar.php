<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
    echo "<br>Placa Veículo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
    echo "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
  
    echo "<br>Usado após evento: " . $UsadoAposEvento = $_POST['utilizacao_app_mobilidade'];
  
    include 'Cadastrar-Uso-Aplicativos.php';
    echo "<br>";
  
    if( $UsadoAposEvento == 1 ){
      echo "<br>Comprovante Apresentado: " . $Comprovante = $_POST['comprovante_apresentado'];
      if( $Comprovante == 1 ){
        if( isset($_POST['data_confirmada']) ){
          echo "<br>Data Confirmada" . $DataConfirmada = "Sim";
        }else{
          echo "<br>Data Confirmada" . $DataConfirmada = "Não";
        }
  
        if( isset($_POST['hora_confirmada']) ){
          echo "<br>Hora Confirmada: " . $HoraConfirmada = "Sim";
        }else{
          echo "<br>Hora Confirmada: " . $HoraConfirmada = "Não";
        }
  
        if( isset($_POST['trajeto_confirmada']) ){
          echo "<br>Trajeto Confirmado: " . $TrajetoConfirmado = "Sim";
        }else{
          echo "<br>Trajeto Confirmado: " . $TrajetoConfirmado = "Não";
        }
  
        include 'Update-Uso-Aplicativos.php';
        
        if( !empty($_FILES['print_mobilidade_urbana_img1']['name']) ){
          include 'Uploads/Mobilidade1.php';
          echo "<br>";
        }
  
        if( !empty($_FILES['print_mobilidade_urbana_img2']['name']) ){
          include 'Uploads/Mobilidade2.php';
          echo "<br>";
        }
  
        if( !empty($_FILES['print_mobilidade_urbana_img3']['name']) ){
          include 'Uploads/Mobilidade3.php';
          echo "<br>";
        }
  
        if( !empty($_FILES['print_mobilidade_urbana_img4']['name']) ){
          include 'Uploads/Mobilidade4.php';
          echo "<br>";
        }
  
        if( !empty($_FILES['print_mobilidade_urbana_img5']['name']) ){
          include 'Uploads/Mobilidade5.php';
          echo "<br>";
        }
  
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
  
    "<br>Usado após evento: " . $UsadoAposEvento = $_POST['utilizacao_app_mobilidade'];
  
    include 'Cadastrar-Uso-Aplicativos.php';
    "<br>";
  
    if( $UsadoAposEvento == 1 ){
      "<br>Comprovante Apresentado: " . $Comprovante = $_POST['comprovante_apresentado'];
      if( $Comprovante == 1 ){
        if( isset($_POST['data_confirmada']) ){
          "<br>Data Confirmada" . $DataConfirmada = "Sim";
        }else{
          "<br>Data Confirmada" . $DataConfirmada = "Não";
        }
  
        if( isset($_POST['hora_confirmada']) ){
          "<br>Hora Confirmada: " . $HoraConfirmada = "Sim";
        }else{
          "<br>Hora Confirmada: " . $HoraConfirmada = "Não";
        }
  
        if( isset($_POST['trajeto_confirmada']) ){
          "<br>Trajeto Confirmado: " . $TrajetoConfirmado = "Sim";
        }else{
          "<br>Trajeto Confirmado: " . $TrajetoConfirmado = "Não";
        }
  
        include 'Update-Uso-Aplicativos.php';
        
        if( !empty($_FILES['print_mobilidade_urbana_img1']['name']) ){
          include 'Uploads/Mobilidade1.php';
          "<br>";
        }
  
        if( !empty($_FILES['print_mobilidade_urbana_img2']['name']) ){
          include 'Uploads/Mobilidade2.php';
          "<br>";
        }
  
        if( !empty($_FILES['print_mobilidade_urbana_img3']['name']) ){
          include 'Uploads/Mobilidade3.php';
          "<br>";
        }
  
        if( !empty($_FILES['print_mobilidade_urbana_img4']['name']) ){
          include 'Uploads/Mobilidade4.php';
          "<br>";
        }
  
        if( !empty($_FILES['print_mobilidade_urbana_img5']['name']) ){
          include 'Uploads/Mobilidade5.php';
          "<br>";
        }
  
        include 'Update-Relatorio.php';
  
      }
    }

    //Update data de modificação do relatório
    include 'Update-Data-Modifica-Relatorio.php';
  }