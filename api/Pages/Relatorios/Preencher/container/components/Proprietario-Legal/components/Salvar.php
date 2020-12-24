<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
    echo "<br>Placa Veículo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
    echo "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
    echo "<br>nome_proprietario: " . $NomeProprietario = $_POST['nome_proprietario'];
    echo "<br>vinculo_proprietario: " . $VinculoProprietario = $_POST['vinculo_proprietario'];
    echo "<br>documento_veiculo: " . $Documento = $_POST['documento_veiculo'];//Se 2 fazer uploa das fotos
    // echo "<br>proprietario_anterior: " . $ProprietarioAnterior = $_POST['proprietario_anterior'];
    echo "<br>observacoes_proprietario_legal: " . $OBSProprietario = $_POST['observacoes_proprietario_legal'];

    echo "<br>";

    include 'containers/Cadastrar-Proprietario-Legal.php';

    echo "<br>";

    if( $Documento == 2 ){
      echo "<br>Cadastrar o documento do veículo no banco de dados";
      include 'containers/Cadastrar-Documento-Veiculo.php';
      echo "<br>";

      if( !empty($_FILES['print_foto_frente_documento_veiculo']['name']) ){
        //Fazer upload da frente do documento do veículo
        echo "<br><br>Carregar Foto do documento do veículo - Frente:";
        include 'containers/Uploads/Documento-Veiculo-Frente.php';
      }else{
        echo "<br><br>Erro no arquivo de upload........";
      }

      echo "<br>";

      if( !empty($_FILES['print_foto_verso_documento_veiculo']['name']) ){
        //Fazer upload do verso do documento do veículo
        echo "<br><br>Carregar Foto do documento do veículo - Verso: ";
        include 'containers/Uploads/Documento-Veiculo-Verso.php';
      }else{
        echo "<br><br>Erro no arquivo de upload.........";
      }
    }else{
      echo "<br><br>Documento em branco......";
    }
    
    echo "<br>";

    if( !empty($_FILES['print_foto_declaracao_proprietario1']['name']) ){
      //Fazer upload da foto 1 de declaração
      echo "<br><br><br>Cadastrar Foto1 da Declaração do proprietário Legal...:";
      include 'containers/Uploads/Declaracao1.php';
    }else{
      echo "<br><br>Erro no arquivo de upload.......";
    }

    echo "<br>";

    if( !empty($_FILES['print_foto_declaracao_proprietario2']['name']) ){
      //Fazer upload da foto 2 de declaração
      echo "<br><br><br>Cadastrar Foto2 da Declaração do proprietário Legal...:";
      include 'containers/Uploads/Declaracao2.php';
    }else{
      echo "<br><br>Erro no arquivo de upload.........";
    }
    
    echo "<br>";

    if( !empty($_FILES['print_foto_declaracao_proprietario3']['name']) ){
      //Fazer upload da foto 3 de declaração
      echo "<br><br><br>Cadastrar Foto3 da Declaração do Proprietário Legal...:";
      include 'containers/Uploads/Declaracao3.php';
    }else{
      echo "<br><br>Erro no arquivo de upload.........";
    }

    echo "<br>";

    if( !empty($_FILES['print_foto_documento_proprietario1']['name']) ){
      //Fazer upload da frente do documento do veículo
      echo "<br><br><br>Cadastrar Foto da Frente do documento do proprietário Legal...:";
      include 'containers/Uploads/Documento-Proprietario-Frente.php';
    }else{
      echo "<br><br>Erro no arquivo de upload.........";
    }

    echo "<br>";

    if( !empty($_FILES['print_foto_documento_proprietario2']['name']) ){
      //Fazer upload do verso do documento do veículo
      echo "<br><br><br>Cadastrar Foto do Verso do documento do proprietário Legal...:";
      include 'containers/Uploads/Documento-Proprietario-Verso.php';
    }else{
      echo "<br><br>Erro no arquivo de upload.........";
    }

    //Update Proprietario do veículo
    echo "<br><br><br>Update do Proprietário Legal do Veículo...:";
    include 'Update-Proprietario-Legal.php';


    //Update data de modificação do relatório
    include 'Update-Data-Modifica-Relatorio.php';

  }else{


    //Prod
     "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
     "<br>Placa Veículo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
     "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
     "<br>nome_proprietario: " . $NomeProprietario = $_POST['nome_proprietario'];
     "<br>vinculo_proprietario: " . $VinculoProprietario = $_POST['vinculo_proprietario'];
     "<br>documento_veiculo: " . $Documento = $_POST['documento_veiculo'];//Se 2 fazer uploa das fotos
    //  "<br>proprietario_anterior: " . $ProprietarioAnterior = $_POST['proprietario_anterior'];
     "<br>observacoes_proprietario_legal: " . $OBSProprietario = $_POST['observacoes_proprietario_legal'];

     "<br>";

    include 'containers/Cadastrar-Proprietario-Legal.php';

     "<br>";

    if( $Documento == 2 ){
      "<br>Cadastrar o documento do veículo no banco de dados";
      include 'containers/Cadastrar-Documento-Veiculo.php';
       "<br>";

      if( !empty($_FILES['print_foto_frente_documento_veiculo']['name']) ){
        //Fazer upload da frente do documento do veículo
        "<br><br>Carregar Foto do documento do veículo - Frente:";
        include 'containers/Uploads/Documento-Veiculo-Frente.php';
      }else{
        "<br><br>Erro no arquivo de upload........";
      }

       "<br>";

      if( !empty($_FILES['print_foto_verso_documento_veiculo']['name']) ){
        //Fazer upload do verso do documento do veículo
        "<br><br>Carregar Foto do documento do veículo - Verso: ";
        include 'containers/Uploads/Documento-Veiculo-Verso.php';
      }else{
        "<br><br>Erro no arquivo de upload.........";
      }
    }else{
      "<br><br>Documento em branco......";
    }
    
     "<br>";

    if( !empty($_FILES['print_foto_declaracao_proprietario1']['name']) ){
      //Fazer upload da foto 1 de declaração
      "<br><br><br>Cadastrar Foto1 da Declaração do proprietário Legal...:";
      include 'containers/Uploads/Declaracao1.php';
    }else{
      "<br><br>Erro no arquivo de upload.......";
    }

     "<br>";

    if( !empty($_FILES['print_foto_declaracao_proprietario2']['name']) ){
      //Fazer upload da foto 2 de declaração
      "<br><br><br>Cadastrar Foto2 da Declaração do proprietário Legal...:";
      include 'containers/Uploads/Declaracao2.php';
    }else{
      "<br><br>Erro no arquivo de upload.........";
    }
    
     "<br>";

    if( !empty($_FILES['print_foto_declaracao_proprietario3']['name']) ){
      //Fazer upload da foto 3 de declaração
      "<br><br><br>Cadastrar Foto3 da Declaração do Proprietário Legal...:";
      include 'containers/Uploads/Declaracao3.php';
    }else{
      "<br><br>Erro no arquivo de upload.........";
    }

     "<br>";

    if( !empty($_FILES['print_foto_documento_proprietario1']['name']) ){
      //Fazer upload da frente do documento do veículo
      "<br><br><br>Cadastrar Foto da Frente do documento do proprietário Legal...:";
      include 'containers/Uploads/Documento-Proprietario-Frente.php';
    }else{
      "<br><br>Erro no arquivo de upload.........";
    }

     "<br>";

    if( !empty($_FILES['print_foto_documento_proprietario2']['name']) ){
      //Fazer upload do verso do documento do veículo
      "<br><br><br>Cadastrar Foto do Verso do documento do proprietário Legal...:";
      include 'containers/Uploads/Documento-Proprietario-Verso.php';
    }else{
      "<br><br>Erro no arquivo de upload.........";
    }

    //Update Proprietario do veículo
    "<br><br><br>Update do Proprietário Legal do Veículo...:";
    include 'Update-Proprietario-Legal.php';


    //Update data de modificação do relatório
    include 'Update-Data-Modifica-Relatorio.php';
  }