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
      echo "<br><br><br>Cadastrar entrevistado na tb_entrevistados_convivio................:";
      include 'containers/Cadastrar-Entrevistado-Convivio.php';
    }
  
    echo "<br><br><br>Update Entrevistado - Relacionamento";
    include 'containers/Update-Entrevistado.php';

    if( isset($_POST['Sabedor-Convivio']) ){
      echo "<br><br><br>Cadastrar Sabedores do convívio do associado.........................:";
      include 'Cadastrar-Sabedores-Convivio.php';
    }
  
    //Upload do documento
    if( !empty($_FILES['print_foto_documento_frente']['name']) ){
      echo "<br><br><br>Cadastrar a foto do documento do entrevistado - FRENTE................:";
      include 'Uploads/Documento-Frente.php';
      echo "<br>";
    }
    
    if( !empty($_FILES['print_foto_documento_verso']['name']) ){
      echo "<br><br><br>Cadastrar a foto do documento do entrevistado - VERSO................:";
      include 'Uploads/Documento-Verso.php';
      echo "<br>";
    }
  
  
    //Upload da declaração
    if( !empty($_FILES['print_foto_declaracao1']['name']) ){
      echo "<br><br><br>Cadastrar a foto 1 da DECLARAÇÃO ................:";
      include 'Uploads/Declaracao1.php';
      echo "<br>";
    }
    if( !empty($_FILES['print_foto_declaracao2']['name']) ){
      echo "<br><br><br>Cadastrar a foto 2 da DECLARAÇÃO ................:";
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
      "<br><br><br>Cadastrar entrevistado na tb_entrevistados_convivio................:";
      include 'containers/Cadastrar-Entrevistado-Convivio.php';
    }
  
    "<br><br><br>Update Entrevistado - Relacionamento";
    include 'containers/Update-Entrevistado.php';

    if( isset($_POST['Sabedor-Convivio']) ){
      "<br><br><br>Cadastrar Sabedores do convívio do associado.........................:";
      include 'Cadastrar-Sabedores-Convivio.php';
    }
  
    //Upload do documento
    if( !empty($_FILES['print_foto_documento_frente']['name']) ){
      "<br><br><br>Cadastrar a foto do documento do entrevistado - FRENTE................:";
      include 'Uploads/Documento-Frente.php';
      "<br>";
    }
    
    if( !empty($_FILES['print_foto_documento_verso']['name']) ){
      "<br><br><br>Cadastrar a foto do documento do entrevistado - VERSO................:";
      include 'Uploads/Documento-Verso.php';
      "<br>";
    }
  
  
    //Upload da declaração
    if( !empty($_FILES['print_foto_declaracao1']['name']) ){
      "<br><br><br>Cadastrar a foto 1 da DECLARAÇÃO ................:";
      include 'Uploads/Declaracao1.php';
      "<br>";
    }
    if( !empty($_FILES['print_foto_declaracao2']['name']) ){
      "<br><br><br>Cadastrar a foto 2 da DECLARAÇÃO ................:";
      include 'Uploads/Declaracao2.php';
      "<br>";
    }
  
    include 'containers/Update-Entrevistado.php';
  }