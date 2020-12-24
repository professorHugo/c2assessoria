<?php
  if( $SysMode == 1 ){
    //DEV
    $Entrevistado = $_GET['SalvarEntrevistado'];
    echo "<br>Salvar Entrevistado $Entrevistado";
  
    echo "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
    echo "<br>Placa Veículo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
    echo "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
    echo "<br>TestemunhaEntrevistado: " . $TestemunhaEntrevistado = $_POST['testemunha_entrevistado'];
  
    echo "<br>Relacionamento Entrevistado: " . $RelacionamentoEntrevistado = $_POST['relacionamento_entrevistado'];
    echo "<br>Observação: " . $Observacao = $_POST['observacao_entrevistado'];

    if( $TestemunhaEntrevistado == 1 ){
      //Cadastrar Entrevistado Convívio
      include 'containers/Cadastrar-Entrevistado-Convivio.php';
    }
  
    //Update Entrevistado - Relacionamento
    include 'containers/Update-Entrevistado.php';
  
    //Upload do documento
    if( !empty($_FILES['print_foto_documento_frente']['name']) ){
      include 'Uploads/Documento-Frente.php';
      echo "<br>";
    }
    
    if( !empty($_FILES['print_foto_documento_verso']['name']) ){
      include 'Uploads/Documento-Verso.php';
      echo "<br>";
    }
  
  
    //Upload da declaração
    if( !empty($_FILES['print_foto_declaracao1']['name']) ){
      include 'Uploads/Declaracao1.php';
      echo "<br>";
    }
    if( !empty($_FILES['print_foto_declaracao2']['name']) ){
      include 'Uploads/Declaracao2.php';
      echo "<br>";
    }
  
    include 'containers/Update-Entrevistado.php';
  }else{

    //PROD


    $Entrevistado = $_GET['SalvarEntrevistado'];
    "<br>Salvar Entrevistado $Entrevistado";
  
    "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
    "<br>Placa Veículo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
    "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
    "<br>TestemunhaEntrevistado: " . $TestemunhaEntrevistado = $_POST['testemunha_entrevistado'];
  
    "<br>Relacionamento Entrevistado: " . $RelacionamentoEntrevistado = $_POST['relacionamento_entrevistado'];
    "<br>Observação: " . $Observacao = $_POST['observacao_entrevistado'];

    if( $TestemunhaEntrevistado == 1 ){
      //Cadastrar Entrevistado Convívio
      include 'containers/Cadastrar-Entrevistado-Convivio.php';
    }
  
    //Update Entrevistado - Relacionamento
    include 'containers/Update-Entrevistado.php';
  
    //Upload do documento
    if( !empty($_FILES['print_foto_documento_frente']['name']) ){
      include 'Uploads/Documento-Frente.php';
      "<br>";
    }
    
    if( !empty($_FILES['print_foto_documento_verso']['name']) ){
      include 'Uploads/Documento-Verso.php';
      "<br>";
    }
  
  
    //Upload da declaração
    if( !empty($_FILES['print_foto_declaracao1']['name']) ){
      include 'Uploads/Declaracao1.php';
      "<br>";
    }
    if( !empty($_FILES['print_foto_declaracao2']['name']) ){
      include 'Uploads/Declaracao2.php';
      "<br>";
    }
  
    include 'containers/Update-Entrevistado.php';
  }