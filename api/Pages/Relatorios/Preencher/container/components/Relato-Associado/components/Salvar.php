<?php
  if( $SysMode == 1 ){
    //DEV

    echo "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
    echo "<br>Placa Veículo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
    echo "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
    
    echo "<br>Relato do Associado: " . $RelatoAssociado = $_POST['relato_associado'];
  
    if( isset($RelatoAssociado) ){
      echo "<br><pre>" .
      $QueryUpdateRelatoAssociado = "
        UPDATE tb_associados
        SET
          relato_associado = '$RelatoAssociado'
        WHERE
          cpf_associado = '$CPFAssociado'
      ";
      echo "</pre>";
      if( $ExeQrUpdateRelatoAssociado = mysqli_query($connection, $QueryUpdateRelatoAssociado) ){
        echo "<br>Relato do Associado atualizado";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
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

      echo "<br><br><br>Cadastro da declaração apresentada pelo Associado......:";
      if( !empty($_FILES['print_foto_declaracao_associado1']['name']) ){
        echo "<br><br><br>Cadastro da foto da declaração 1........:";
        include 'Uploads/Declaracao1.php';
      }
      echo "<br>";
  
      if( !empty($_FILES['print_foto_declaracao_associado2']['name']) ){
        echo "<br><br><br>Cadastro da foto da declaração 2........:";
        include 'Uploads/Declaracao2.php';
      }
      echo "<br>";
  
      if( !empty($_FILES['print_foto_declaracao_associado3']['name']) ){
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
    
    "<br>Relato do Associado: " . $RelatoAssociado = $_POST['relato_associado'];
  
    if( isset($RelatoAssociado) ){
      "<br><pre>" .
      $QueryUpdateRelatoAssociado = "
        UPDATE tb_associados
        SET
          relato_associado = '$RelatoAssociado'
        WHERE
          cpf_associado = '$CPFAssociado'
      ";
      "</pre>";
      if( $ExeQrUpdateRelatoAssociado = mysqli_query($connection, $QueryUpdateRelatoAssociado) ){
        "<br>Relato do Associado atualizado";
      }else{
        "<br>Erro: " . mysqli_error($connection);
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

      "<br><br><br>Cadastro da declaração apresentada pelo Associado......:";
      if( !empty($_FILES['print_foto_declaracao_associado1']['name']) ){
        "<br><br><br>Cadastro da foto da declaração 1........:";
        include 'Uploads/Declaracao1.php';
      }
      "<br>";
  
      if( !empty($_FILES['print_foto_declaracao_associado2']['name']) ){
        "<br><br><br>Cadastro da foto da declaração 2........:";
        include 'Uploads/Declaracao2.php';
      }
      "<br>";
  
      if( !empty($_FILES['print_foto_declaracao_associado3']['name']) ){
        "<br><br><br>Cadastro da foto da declaração 3........:";
        include 'Uploads/Declaracao3.php';
      }
      "<br>";
    }


    //Update data de modificação do relatório
    include 'Update-Data-Modifica-Relatorio.php';
  }