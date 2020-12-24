<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if(is_dir($PastaAssociado)){
      
      echo "<br>Documento Proprietario frente: " . 
      $FotoDocumentoVerso = $_FILES['print_foto_documento_proprietario2']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_documento_proprietario2']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $DocumentoProrietarioVerso = "Documento_Proprietario_Verso".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $DocumentoProrietarioVerso;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_documento_proprietario2']['tmp_name'], $target_file ) ){
        echo "<br>Foto do verso do documento do Proprietário carregada, cadastrar e atualizar o proprietario";
  
        echo "<br><pre>" . 
        $QueryBuscarFotoDocumentoVerso = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'documento_verso_proprietario' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$DocumentoProrietarioVerso'
        ";
        echo "</pre>";
  
        $ExeQrBuscarFotoDocumentoVerso = mysqli_query($connection, $QueryBuscarFotoDocumentoVerso);
        $RowQrBuscarFotoDocumentoVerso = mysqli_num_rows($ExeQrBuscarFotoDocumentoVerso);
  
        if( $RowQrBuscarFotoDocumentoVerso < 1 ){
          echo "<br>Cadastrar Foto do documento - Frente";
          echo "<br><pre>" . 
          $QueryCadastrarFotoDocumentoVerso = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'documento_verso_proprietario',
              '$Protocolo',
              '$CPFAssociado',
              '$DocumentoProrietarioVerso'
            )
          ";
          echo "</pre>";
  
          $ExeQrCadastrarFotoDocumentoVerso = mysqli_query($connection, $QueryCadastrarFotoDocumentoVerso);
          if( $ExeQrCadastrarFotoDocumentoVerso ){
            echo "<br>Foto Cadastrada, atualizar tb_proprietario_legal com a foto";
            echo "<br><pre>" . 
            $QueryBuscarFotoDocumentoVerso = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'documento_verso_proprietario' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$DocumentoProrietarioVerso'
            ";
            echo "</pre>";
  
            $ExeQrBuscarFotoDocumentoVerso = mysqli_query($connection, $QueryBuscarFotoDocumentoVerso);
            while($FotoVerso = mysqli_fetch_assoc($ExeQrBuscarFotoDocumentoVerso)){
              $IdFotoVerso = $FotoVerso['id_foto'];
            }
  
            //Update
            echo "<br><pre>" . 
            $QueryUpdateDocumentoVerso = "
              UPDATE tb_proprietario_legal
              SET
                foto_documento_proprietario_verso = '$IdFotoVerso'
              WHERE
                protocolo_proprietario = '$Protocolo'
            ";
            echo "</pre>";
  
            $ExeQrUpdateDocumentoVerso = mysqli_query($connection, $QueryUpdateDocumentoVerso);
            if( $ExeQrUpdateDocumentoVerso ){
              echo "<br>Proprietario atualizado - Documento Verso";
            }
          }
        }
  
      }
  
    }
  }else{


    //PROD
    "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if(is_dir($PastaAssociado)){
      
      "<br>Documento Proprietario frente: " . 
      $FotoDocumentoVerso = $_FILES['print_foto_documento_proprietario2']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_documento_proprietario2']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $DocumentoProrietarioVerso = "Documento_Proprietario_Verso".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $DocumentoProrietarioVerso;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_documento_proprietario2']['tmp_name'], $target_file ) ){
        "<br>Foto do verso do documento do Proprietário carregada, cadastrar e atualizar o proprietario";
  
        "<br><pre>" . 
        $QueryBuscarFotoDocumentoVerso = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'documento_verso_proprietario' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$DocumentoProrietarioVerso'
        ";
        "</pre>";
  
        $ExeQrBuscarFotoDocumentoVerso = mysqli_query($connection, $QueryBuscarFotoDocumentoVerso);
        $RowQrBuscarFotoDocumentoVerso = mysqli_num_rows($ExeQrBuscarFotoDocumentoVerso);
  
        if( $RowQrBuscarFotoDocumentoVerso < 1 ){
          "<br>Cadastrar Foto do documento - Frente";
          "<br><pre>" . 
          $QueryCadastrarFotoDocumentoVerso = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'documento_verso_proprietario',
              '$Protocolo',
              '$CPFAssociado',
              '$DocumentoProrietarioVerso'
            )
          ";
          "</pre>";
  
          $ExeQrCadastrarFotoDocumentoVerso = mysqli_query($connection, $QueryCadastrarFotoDocumentoVerso);
          if( $ExeQrCadastrarFotoDocumentoVerso ){
            "<br>Foto Cadastrada, atualizar tb_proprietario_legal com a foto";
            "<br><pre>" . 
            $QueryBuscarFotoDocumentoVerso = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'documento_verso_proprietario' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$DocumentoProrietarioVerso'
            ";
            "</pre>";
  
            $ExeQrBuscarFotoDocumentoVerso = mysqli_query($connection, $QueryBuscarFotoDocumentoVerso);
            while($FotoVerso = mysqli_fetch_assoc($ExeQrBuscarFotoDocumentoVerso)){
              $IdFotoVerso = $FotoVerso['id_foto'];
            }
  
            //Update
            "<br><pre>" . 
            $QueryUpdateDocumentoVerso = "
              UPDATE tb_proprietario_legal
              SET
                foto_documento_proprietario_verso = '$IdFotoVerso'
              WHERE
                protocolo_proprietario = '$Protocolo'
            ";
            "</pre>";
  
            $ExeQrUpdateDocumentoVerso = mysqli_query($connection, $QueryUpdateDocumentoVerso);
            if( $ExeQrUpdateDocumentoVerso ){
              "<br>Proprietario atualizado - Documento Verso";
            }
          }
        }
  
      }
  
    }
  }