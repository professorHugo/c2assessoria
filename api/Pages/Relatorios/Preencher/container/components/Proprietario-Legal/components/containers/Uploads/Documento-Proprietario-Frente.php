<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if(is_dir($PastaAssociado)){
      
      echo "<br>Documento Proprietario frente: " . 
      $FotoDocumentoFrente = $_FILES['print_foto_documento_proprietario1']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_documento_proprietario1']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $DocumentoProrietarioFrente = "Documento_Proprietario_Frente".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $DocumentoProrietarioFrente;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_documento_proprietario1']['tmp_name'], $target_file ) ){
        echo "<br>Foto da frente do documento do Proprietário carregada, cadastrar e atualizar o proprietario";
  
        echo "<br><pre>" . 
        $QueryBuscarFotoDocumentoFrente = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'documento_frente_proprietario' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$DocumentoProrietarioFrente'
        ";
        echo "</pre>";
  
        $ExeQrBuscarFotoDocumentoFrente = mysqli_query($connection, $QueryBuscarFotoDocumentoFrente);
        $RowQrBuscarFotoDocumentoFrente = mysqli_num_rows($ExeQrBuscarFotoDocumentoFrente);
  
        if( $RowQrBuscarFotoDocumentoFrente < 1 ){
          echo "<br>Cadastrar Foto do documento - Frente";
          echo "<br><pre>" . 
          $QueryCadastrarFotoDocumentoFrente = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'documento_frente_proprietario',
              '$Protocolo',
              '$CPFAssociado',
              '$DocumentoProrietarioFrente'
            )
          ";
          echo "</pre>";
  
          $ExeQrCadastrarFotoDocumentoFrente = mysqli_query($connection, $QueryCadastrarFotoDocumentoFrente);
          if( $ExeQrCadastrarFotoDocumentoFrente ){
            echo "<br>Foto Cadastrada, atualizar tb_proprietario_legal com a foto";
            echo "<br><pre>" . 
            $QueryBuscarFotoDocumentoFrente = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'documento_frente_proprietario' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$DocumentoProrietarioFrente'
            ";
            echo "</pre>";
  
            $ExeQrBuscarFotoDocumentoFrente = mysqli_query($connection, $QueryBuscarFotoDocumentoFrente);
            while($Foto = mysqli_fetch_assoc($ExeQrBuscarFotoDocumentoFrente)){
              $IdFoto = $Foto['id_foto'];
            }
  
            //Update
            echo "<br><pre>" . 
            $QueryUpdateDocumentoFrente = "
              UPDATE tb_proprietario_legal
              SET
                foto_documento_proprietario_frente = '$IdFoto'
              WHERE
                protocolo_proprietario = '$Protocolo'
            ";
            echo "</pre>";
  
            $ExeQrUpdateDocumentoFrente = mysqli_query($connection, $QueryUpdateDocumentoFrente);
            if( $ExeQrUpdateDocumentoFrente ){
              echo "<br>Proprietario atualizado - Documento Frente";
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
      $FotoDocumentoFrente = $_FILES['print_foto_documento_proprietario1']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_documento_proprietario1']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $DocumentoProrietarioFrente = "Documento_Proprietario_Frente".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $DocumentoProrietarioFrente;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_documento_proprietario1']['tmp_name'], $target_file ) ){
        "<br>Foto da frente do documento do Proprietário carregada, cadastrar e atualizar o proprietario";
  
        "<br><pre>" . 
        $QueryBuscarFotoDocumentoFrente = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'documento_frente_proprietario' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$DocumentoProrietarioFrente'
        ";
        "</pre>";
  
        $ExeQrBuscarFotoDocumentoFrente = mysqli_query($connection, $QueryBuscarFotoDocumentoFrente);
        $RowQrBuscarFotoDocumentoFrente = mysqli_num_rows($ExeQrBuscarFotoDocumentoFrente);
  
        if( $RowQrBuscarFotoDocumentoFrente < 1 ){
          "<br>Cadastrar Foto do documento - Frente";
          "<br><pre>" . 
          $QueryCadastrarFotoDocumentoFrente = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'documento_frente_proprietario',
              '$Protocolo',
              '$CPFAssociado',
              '$DocumentoProrietarioFrente'
            )
          ";
          "</pre>";
  
          $ExeQrCadastrarFotoDocumentoFrente = mysqli_query($connection, $QueryCadastrarFotoDocumentoFrente);
          if( $ExeQrCadastrarFotoDocumentoFrente ){
            "<br>Foto Cadastrada, atualizar tb_proprietario_legal com a foto";
            "<br><pre>" . 
            $QueryBuscarFotoDocumentoFrente = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'documento_frente_proprietario' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$DocumentoProrietarioFrente'
            ";
            "</pre>";
  
            $ExeQrBuscarFotoDocumentoFrente = mysqli_query($connection, $QueryBuscarFotoDocumentoFrente);
            while($Foto = mysqli_fetch_assoc($ExeQrBuscarFotoDocumentoFrente)){
              $IdFoto = $Foto['id_foto'];
            }
  
            //Update
            "<br><pre>" . 
            $QueryUpdateDocumentoFrente = "
              UPDATE tb_proprietario_legal
              SET
                foto_documento_proprietario_frente = '$IdFoto'
              WHERE
                protocolo_proprietario = '$Protocolo'
            ";
            "</pre>";
  
            $ExeQrUpdateDocumentoFrente = mysqli_query($connection, $QueryUpdateDocumentoFrente);
            if( $ExeQrUpdateDocumentoFrente ){
              "<br>Proprietario atualizado - Documento Frente";
            }
          }
        }
  
      }
  
    }
  }