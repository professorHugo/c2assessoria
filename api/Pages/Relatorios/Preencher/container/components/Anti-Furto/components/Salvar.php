<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Protocolo: " . $Protocolo;
    echo "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
    echo "<br>Placa Veículo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
    echo "<br>Sistema Anti-furto: " . $AntiFurto = $_POST['sistema_antifurto'];
    echo "<br>Texto Outros Sistemas: " . $OutrosSistemas = $_POST['outros_sistemas'];
  
    if( $AntiFurto == 1 ){
      echo "<br>Comprovante de instalação: " . $ComprovanteInstalacao = $_POST['comprovante_instalacao'];
  
      include 'Cadastrar-Sistema-Antifurto.php';
  
      if( $ComprovanteInstalacao == 1 ){
        if( !empty($_FILES['print_foto_comprovante_instalacao1']['name']) ){
          include 'Uploads/Comprovante-Instalacao1.php';
        }
        echo "<br>";
        if( !empty($_FILES['print_foto_comprovante_instalacao2']['name']) ){
          include 'Uploads/Comprovante-Instalacao2.php';
        }
      }
  
      if( !empty($_FILES['print_foto_telemetria_rastreador1']['name']) ){
        include 'Uploads/Telemetria1.php';
      }
      echo "<br>";
      if( !empty($_FILES['print_foto_telemetria_rastreador2']['name']) ){
        include 'Uploads/Telemetria2.php';
      }
      echo "<br>";
      if( !empty($_FILES['print_foto_telemetria_rastreador3']['name']) ){
        include 'Uploads/Telemetria3.php';
      }
      echo "<br>";

      //Update do Sistema antifurto
      include 'Update-Veiculo.php';

      //Update data de modificação do relatório
      include 'Update-Data-Modifica-Relatorio.php';
    }else{
      echo "<br>Sistema antifurto comum";
      include 'Cadastrar-Sistema-Antifurto.php';

      //Update do Sistema antifurto
      include 'Update-Veiculo.php';
    }
  }else{

    //PROD
    "<br>Protocolo: " . $Protocolo;
    "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
    "<br>Placa Veículo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
    "<br>Sistema Anti-furto: " . $AntiFurto = $_POST['sistema_antifurto'];
    echo "<br>Texto Outros Sistemas: " . $OutrosSistemas = $_POST['outros_sistemas'];
  
    if( $AntiFurto == 1 ){
      "<br>Comprovante de instalação: " . $ComprovanteInstalacao = $_POST['comprovante_instalacao'];
  
      include 'Cadastrar-Sistema-Antifurto.php';
  
      if( $ComprovanteInstalacao == 1 ){
        if( !empty($_FILES['print_foto_comprovante_instalacao1']['name']) ){
          include 'Uploads/Comprovante-Instalacao1.php';
        }
        "<br>";
        if( !empty($_FILES['print_foto_comprovante_instalacao2']['name']) ){
          include 'Uploads/Comprovante-Instalacao2.php';
        }
      }
  
      if( !empty($_FILES['print_foto_telemetria_rastreador1']['name']) ){
        include 'Uploads/Telemetria1.php';
      }
      "<br>";
      if( !empty($_FILES['print_foto_telemetria_rastreador2']['name']) ){
        include 'Uploads/Telemetria2.php';
      }
      "<br>";
      if( !empty($_FILES['print_foto_telemetria_rastreador3']['name']) ){
        include 'Uploads/Telemetria3.php';
      }
      "<br>";

      //Update do Sistema antifurto
      include 'Update-Veiculo.php';

      //Update data de modificação do relatório
      include 'Update-Data-Modifica-Relatorio.php';
    }else{
      "<br>Sistema antifurto comum";
      include 'Cadastrar-Sistema-Antifurto.php';

      //Update do Sistema antifurto
      include 'Update-Veiculo.php';
    }

  }