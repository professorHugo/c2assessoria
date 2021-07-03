<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
    echo "<br>Placa Veículo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
    echo "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
  
    echo "<br>Motorista de Aplicativo: " . $MotoristaAplicativo = $_POST['motorista_aplicativo'];
  
    if( $MotoristaAplicativo == 1 ){
      echo "<br>Apresentou Comprovante: " . $Comprovante = $_POST['apresentou_comprovante'];
  
      if( $Comprovante = 1 ){
        echo "<br>Descricação do comprovante: " . $DescricaoComprovante = $_POST['descricao_apresentou_comprovante'];
        include 'Cadastrar-Motorista-App.php';
        echo "<br>";
      }else{
        echo "<br>Descrição do comprovante: " . $DescricaoComprovante = "Não Apresentou/Não é Motorista por Aplicativo";
        include 'Cadastrar-Motorista-App.php';
      }
  
      if( !empty($_FILES['print_comprovante_motorista_app_img1']['name']) ){
        include 'Uploads/Motorista1.php';
        echo "<br>";
      }
  
      if( !empty($_FILES['print_comprovante_motorista_app_img2']['name']) ){
        include 'Uploads/Motorista2.php';
        echo "<br>";
      }
  
      if( !empty($_FILES['print_comprovante_motorista_app_img3']['name']) ){
        include 'Uploads/Motorista3.php';
        echo "<br>";
      }
  
      if( !empty($_FILES['print_comprovante_motorista_app_img4']['name']) ){
        include 'Uploads/Motorista4.php';
        echo "<br>";
      }
  
      if( !empty($_FILES['print_comprovante_motorista_app_img5']['name']) ){
        include 'Uploads/Motorista5.php';
        echo "<br>";
      }

      if( !empty($_FILES['print_comprovante_motorista_app_img6']['name']) ){
        include 'Uploads/Motorista6.php';
        echo "<br>";
      }
  
      include 'Update-Relatorio.php';
    }

    //Update data de modificação do relatório
    include 'Update-Data-Modifica-Relatorio.php';
  }else{

    //PROD

    "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
    "<br>Placa Veículo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
    "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
  
    "<br>Motorista de Aplicativo: " . $MotoristaAplicativo = $_POST['motorista_aplicativo'];
  
    if( $MotoristaAplicativo == 1 ){
      "<br>Apresentou Comprovante: " . $Comprovante = $_POST['apresentou_comprovante'];
  
      if( $Comprovante = 1 ){
        "<br>Descricação do comprovante: " . $DescricaoComprovante = $_POST['descricao_apresentou_comprovante'];
        include 'Cadastrar-Motorista-App.php';
        "<br>";
      }else{
        "<br>Descrição do comprovante: " . $DescricaoComprovante = "Não Apresentou/Não é Motorista por Aplicativo";
        include 'Cadastrar-Motorista-App.php';
      }
  
      if( !empty($_FILES['print_comprovante_motorista_app_img1']['name']) ){
        include 'Uploads/Motorista1.php';
        "<br>";
      }
  
      if( !empty($_FILES['print_comprovante_motorista_app_img2']['name']) ){
        include 'Uploads/Motorista2.php';
        "<br>";
      }
  
      if( !empty($_FILES['print_comprovante_motorista_app_img3']['name']) ){
        include 'Uploads/Motorista3.php';
        "<br>";
      }
  
      if( !empty($_FILES['print_comprovante_motorista_app_img4']['name']) ){
        include 'Uploads/Motorista4.php';
        "<br>";
      }
  
      if( !empty($_FILES['print_comprovante_motorista_app_img5']['name']) ){
        include 'Uploads/Motorista5.php';
        "<br>";
      }

      if( !empty($_FILES['print_comprovante_motorista_app_img6']['name']) ){
        include 'Uploads/Motorista6.php';
        "<br>";
      }
  
      include 'Update-Relatorio.php';
    }

    //Update data de modificação do relatório
    include 'Update-Data-Modifica-Relatorio.php';
  }