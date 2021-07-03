<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Proprietário Legal: " . $ProprietarioLegal = $_POST['proprietario_legal'];

    //Cadastro do proprietário Legal
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
        echo "<br><br>Arquivo não enviado........";
      }

      echo "<br>";

      if( !empty($_FILES['print_foto_verso_documento_veiculo']['name']) ){
        //Fazer upload do verso do documento do veículo
        echo "<br><br>Carregar Foto do documento do veículo - Verso: ";
        include 'containers/Uploads/Documento-Veiculo-Verso.php';
      }else{
        echo "<br><br>Arquivo não enviado.........";
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
      echo "<br><br>Arquivo não enviado.......";
    }

    echo "<br>";

    if( !empty($_FILES['print_foto_declaracao_proprietario2']['name']) ){
      //Fazer upload da foto 2 de declaração
      echo "<br><br><br>Cadastrar Foto2 da Declaração do proprietário Legal...:";
      include 'containers/Uploads/Declaracao2.php';
    }else{
      echo "<br><br>Arquivo não enviado.........";
    }
    
    echo "<br>";

    if( !empty($_FILES['print_foto_declaracao_proprietario3']['name']) ){
      //Fazer upload da foto 3 de declaração
      echo "<br><br><br>Cadastrar Foto3 da Declaração do Proprietário Legal...:";
      include 'containers/Uploads/Declaracao3.php';
    }else{
      echo "<br><br>Arquivo não enviado.........";
    }

    echo "<br>";

    if( !empty($_FILES['print_foto_documento_proprietario1']['name']) ){
      //Fazer upload da frente do documento do veículo
      echo "<br><br><br>Cadastrar Foto da Frente do documento do proprietário Legal...:";
      include 'containers/Uploads/Documento-Proprietario-Frente.php';
    }else{
      echo "<br><br>Arquivo não enviado.........";
    }

    echo "<br>";

    if( !empty($_FILES['print_foto_documento_proprietario2']['name']) ){
      //Fazer upload do verso do documento do veículo
      echo "<br><br><br>Cadastrar Foto do Verso do documento do proprietário Legal...:";
      include 'containers/Uploads/Documento-Proprietario-Verso.php';
    }else{
      echo "<br><br>Arquivo não enviado.........";
    }

    //Update Proprietario do veículo
    echo "<br><br><br>Update do Proprietário Legal do Veículo...:";
    include 'Update-Proprietario-Legal.php';
    
    echo "<p></p>";
    //Update data de modificação do relatório
    include 'Update-Data-Modifica-Relatorio.php';

  }else{
    //PROD
    
  }