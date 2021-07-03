<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
    echo "<br>Placa Veículo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
    echo "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
    
    echo "<br>Relato do Condutor: " . $RelatoCondutor = $_POST['relato_condutor'];
  
    if( isset($RelatoCondutor) ){
      echo "<br><pre>" .
      $QueryUpdateRelatoCondutor = "
        UPDATE tb_condutores
        SET
          relato_condutor = '$RelatoCondutor'
        WHERE
          protocolo_evento = '$Protocolo'
      ";
      echo "</pre>";
      if( $ExeQrUpdateRelatoCondutor = mysqli_query($connection, $QueryUpdateRelatoCondutor) ){
        echo "<br>Relato do Condutor atualizado";
      }
    }
    echo "<br>";
    
    echo "<br><br><br>Cadastro do documento - FRENTE.......:";
    include 'Uploads/Documento-Frente.php';

    echo "<br>";

    echo "<br><br><br>Cadastro do documento - VERSO.......:";
    include 'Uploads/Documento-Verso.php';
    echo "<br>";
  
    echo "<br>Declaração Apresentada: " . $DeclaracaoApresentada = $_POST['declaracao_apresentada'];
  
    if( $DeclaracaoApresentada == 1 ){

      echo "<br><br><br>Cadastro da declaração apresentada pelo Condutor......:";
      if( !empty($_FILES['print_foto_declaracao_condutor1']['name']) ){
        echo "<br><br><br>Cadastro da foto da declaração 1........:";
        include 'Uploads/Declaracao1.php';
      }
      echo "<br>";
  
      if( !empty($_FILES['print_foto_declaracao_condutor2']['name']) ){
        echo "<br><br><br>Cadastro da foto da declaração 2........:";
        include 'Uploads/Declaracao2.php';
      }
      echo "<br>";
  
      if( !empty($_FILES['print_foto_declaracao_condutor3']['name']) ){
        echo "<br><br><br>Cadastro da foto da declaração 3........:";
        include 'Uploads/Declaracao3.php';
      }
      echo "<br>";
    }


    //Update data de modificação do relatório
    include 'Update-Data-Modifica-Relatorio.php';
  }else{

    //PROD


    "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
    "<br>Placa Veículo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
    "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
    
    "<br>Relato do Condutor: " . $RelatoCondutor = $_POST['relato_condutor'];
  
    if( isset($RelatoCondutor) ){
      "<br><pre>" .
      $QueryUpdateRelatoCondutor = "
        UPDATE tb_condutores
        SET
          relato_condutor = '$RelatoCondutor'
        WHERE
          protocolo_evento = '$Protocolo'
      ";
      "</pre>";
      if( $ExeQrUpdateRelatoCondutor = mysqli_query($connection, $QueryUpdateRelatoCondutor) ){
        "<br>Relato do Condutor atualizado";
      }
    }
    "<br>";
    
    "<br><br><br>Cadastro do documento - FRENTE.......:";
    include 'Uploads/Documento-Frente.php';

    "<br>";

    "<br><br><br>Cadastro do documento - VERSO.......:";
    include 'Uploads/Documento-Verso.php';
    "<br>";
  
    "<br>Declaração Apresentada: " . $DeclaracaoApresentada = $_POST['declaracao_apresentada'];
  
    if( $DeclaracaoApresentada == 1 ){

      "<br><br><br>Cadastro da declaração apresentada pelo Condutor......:";
      if( !empty($_FILES['print_foto_declaracao_condutor1']['name']) ){
        "<br><br><br>Cadastro da foto da declaração 1........:";
        include 'Uploads/Declaracao1.php';
      }
      "<br>";
  
      if( !empty($_FILES['print_foto_declaracao_condutor2']['name']) ){
        "<br><br><br>Cadastro da foto da declaração 2........:";
        include 'Uploads/Declaracao2.php';
      }
      "<br>";
  
      if( !empty($_FILES['print_foto_declaracao_condutor3']['name']) ){
        "<br><br><br>Cadastro da foto da declaração 3........:";
        include 'Uploads/Declaracao3.php';
      }
      "<br>";
    }

    //Update data de modificação do relatório
    include 'Update-Data-Modifica-Relatorio.php';
  }