<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto documento Frente: " . $_FILES['print_foto_documento_condutor_frente']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_documento_condutor_frente']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $DocumentoFrente = "Documento_Condutor_Frente".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $DocumentoFrente;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_documento_condutor_frente']['tmp_name'], $target_file ) ){
        echo "<br>Foto Documento - Frente carregada";
  
        //BuscarCadastro da foto1 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoDocumentoFrente = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'documento_condutor_frente' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$DocumentoFrente'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoDocumentoFrente = mysqli_query($connection, $QueryBuscarFotoDocumentoFrente);
        $RowQrBuscarFotoDocumentoFrente = mysqli_num_rows($ExeQrBuscarFotoDocumentoFrente);
  
        if( $RowQrBuscarFotoDocumentoFrente < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoDocumentoFrente = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'documento_condutor_frente',
              '$Protocolo',
              '$CPFAssociado',
              '$DocumentoFrente'
            )
          ";
          echo "</pre>";
  
          $ExeQrCadastrarFotoDocumentoFrente = mysqli_query($connection, $QueryCadastrarFotoDocumentoFrente);
          if( $ExeQrCadastrarFotoDocumentoFrente ){
            echo "<br><pre>" . 
            $QueryBuscarFotoDocumentoFrente = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'documento_condutor_frente' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$DocumentoFrente'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoDocumentoFrente = mysqli_query($connection, $QueryBuscarFotoDocumentoFrente);
            while( $FotoFrente = mysqli_fetch_assoc($ExeQrBuscarFotoDocumentoFrente) ){
              $IdFotoFrente = $FotoFrente['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateDocumentoFrente = "
              UPDATE tb_condutores
              SET documento_frente = '$IdFotoFrente'
              WHERE protocolo_evento = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateDocumentoFrente = mysqli_query($connection, $QueryUpdateDocumentoFrente);
  
            if( $ExeQrUpdateDocumentoFrente ){
              echo "<br>Foto Documento Frente atualizado";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
        }
      }
    }
  }else{

    //PROD


    "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      "<br>Foto documento Frente: " . $_FILES['print_foto_documento_condutor_frente']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_documento_condutor_frente']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $DocumentoFrente = "Documento_Condutor_Frente".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $DocumentoFrente;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_documento_condutor_frente']['tmp_name'], $target_file ) ){
        "<br>Foto Documento - Frente carregada";
  
        //BuscarCadastro da foto1 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoDocumentoFrente = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'documento_condutor_frente' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$DocumentoFrente'
        ";
        "</pre>";
        $ExeQrBuscarFotoDocumentoFrente = mysqli_query($connection, $QueryBuscarFotoDocumentoFrente);
        $RowQrBuscarFotoDocumentoFrente = mysqli_num_rows($ExeQrBuscarFotoDocumentoFrente);
  
        if( $RowQrBuscarFotoDocumentoFrente < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoDocumentoFrente = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'documento_condutor_frente',
              '$Protocolo',
              '$CPFAssociado',
              '$DocumentoFrente'
            )
          ";
          "</pre>";
  
          $ExeQrCadastrarFotoDocumentoFrente = mysqli_query($connection, $QueryCadastrarFotoDocumentoFrente);
          if( $ExeQrCadastrarFotoDocumentoFrente ){
            "<br><pre>" . 
            $QueryBuscarFotoDocumentoFrente = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'documento_condutor_frente' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$DocumentoFrente'
            ";
            "</pre>";
            $ExeQrBuscarFotoDocumentoFrente = mysqli_query($connection, $QueryBuscarFotoDocumentoFrente);
            while( $FotoFrente = mysqli_fetch_assoc($ExeQrBuscarFotoDocumentoFrente) ){
              $IdFotoFrente = $FotoFrente['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateDocumentoFrente = "
              UPDATE tb_condutores
              SET documento_frente = '$IdFotoFrente'
              WHERE protocolo_evento = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateDocumentoFrente = mysqli_query($connection, $QueryUpdateDocumentoFrente);
  
            if( $ExeQrUpdateDocumentoFrente ){
              "<br>Foto Documento Frente atualizado";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
        }
      }
    }
  }