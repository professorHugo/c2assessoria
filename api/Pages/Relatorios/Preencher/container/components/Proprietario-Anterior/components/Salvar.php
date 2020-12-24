<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
    echo "<br>Placa Veículo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
    echo "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
    echo "<br>Nome Proprietario Anterior: " . $NomeProprietarioAnterior = $_POST['nome_proprietario_anterior'];
    echo "<br>Vínculo: " . $VinculoProprietarioAnterior = $_POST['vinculo_proprietario_anterior'];
    echo "<br>Observações: " . $ObservacoesProprietarioAnterior = $_POST['observacoes_proprietario_anterior'];
  
    include 'Salvar-Proprietario-Anterior.php';
  
    if( isset($_FILES['print_foto_documento_proprietario_anterior1']['name']) ){
      include 'Uploads/Foto-Documento-Frente.php';
    }
  
    if( isset($_FILES['print_foto_documento_proprietario_anterior2']['name']) ){
      include 'Uploads/Foto-Documento-Verso.php';
    }
  
    if( isset($_FILES['print_foto_declaracao_proprietario1']['name']) ){
      include 'Uploads/Declaracao1.php';
    }
  
    if( isset($_FILES['print_foto_declaracao_proprietario2']['name']) ){
      include 'Uploads/Declaracao2.php';
    }
  
    if( isset($_FILES['print_foto_declaracao_proprietario3']['name']) ){
      include 'Uploads/Declaracao3.php';
    }
  
    include 'Update-Veiculo.php';

    //Update data de modificação do relatório
    include 'Update-Data-Modifica-Relatorio.php';

  }else{

    //PROD



    "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
    "<br>Placa Veículo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
    "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
    "<br>Nome Proprietario Anterior: " . $NomeProprietarioAnterior = $_POST['nome_proprietario_anterior'];
    "<br>Vínculo: " . $VinculoProprietarioAnterior = $_POST['vinculo_proprietario_anterior'];
    "<br>Observações: " . $ObservacoesProprietarioAnterior = $_POST['observacoes_proprietario_anterior'];
  
    include 'Salvar-Proprietario-Anterior.php';
  
    if( isset($_FILES['print_foto_documento_proprietario_anterior1']['name']) ){
      include 'Uploads/Foto-Documento-Frente.php';
    }
  
    if( isset($_FILES['print_foto_documento_proprietario_anterior2']['name']) ){
      include 'Uploads/Foto-Documento-Verso.php';
    }
  
    if( isset($_FILES['print_foto_declaracao_proprietario1']['name']) ){
      include 'Uploads/Declaracao1.php';
    }
  
    if( isset($_FILES['print_foto_declaracao_proprietario2']['name']) ){
      include 'Uploads/Declaracao2.php';
    }
  
    if( isset($_FILES['print_foto_declaracao_proprietario3']['name']) ){
      include 'Uploads/Declaracao3.php';
    }
  
    include 'Update-Veiculo.php';

    //Update data de modificação do relatório
    include 'Update-Data-Modifica-Relatorio.php';
  }