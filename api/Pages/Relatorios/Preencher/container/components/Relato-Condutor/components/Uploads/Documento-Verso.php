<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto documento Verso: " . $_FILES['print_foto_documento_condutor_verso']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_documento_condutor_verso']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $DocumentoVerso = "Documento_Condutor_verso".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $DocumentoVerso;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_documento_condutor_verso']['tmp_name'], $target_file ) ){
        echo "<br>Foto Documento - Verso carregada";
  
        //BuscarCadastro da foto frente
        echo "<br><pre>" . 
        $QueryBuscarFotoDocumentoVerso = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'documento_condutor_verso' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$DocumentoVerso'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoDocumentoVerso = mysqli_query($connection, $QueryBuscarFotoDocumentoVerso);
        $RowQrBuscarFotoDocumentoVerso = mysqli_num_rows($ExeQrBuscarFotoDocumentoVerso);
  
        if( $RowQrBuscarFotoDocumentoVerso < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoDocumentoVerso = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'documento_condutor_verso',
              '$Protocolo',
              '$CPFAssociado',
              '$DocumentoVerso'
            )
          ";
          echo "</pre>";
  
          $ExeQrCadastrarFotoDocumentoVerso = mysqli_query($connection, $QueryCadastrarFotoDocumentoVerso);
          if( $ExeQrCadastrarFotoDocumentoVerso ){
            echo "<br><pre>" . 
            $QueryBuscarFotoDocumentoVerso = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'documento_condutor_verso' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$DocumentoVerso'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoDocumentoVerso = mysqli_query($connection, $QueryBuscarFotoDocumentoVerso);
            while( $FotoFrente = mysqli_fetch_assoc($ExeQrBuscarFotoDocumentoVerso) ){
              $IdFotoFrente = $FotoFrente['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateDocumentoVerso = "
              UPDATE tb_condutores
              SET documento_verso = '$IdFotoFrente'
              WHERE protocolo_evento = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateDocumentoVerso = mysqli_query($connection, $QueryUpdateDocumentoVerso);
  
            if( $ExeQrUpdateDocumentoVerso ){
              echo "<br>Foto Documento Verso atualizado";
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
      "<br>Foto documento Verso: " . $_FILES['print_foto_documento_condutor_verso']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_documento_condutor_verso']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $DocumentoVerso = "Documento_Condutor_verso".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $DocumentoVerso;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_documento_condutor_verso']['tmp_name'], $target_file ) ){
        "<br>Foto Documento - Verso carregada";
  
        //BuscarCadastro da foto frente
        "<br><pre>" . 
        $QueryBuscarFotoDocumentoVerso = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'documento_condutor_verso' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$DocumentoVerso'
        ";
        "</pre>";
        $ExeQrBuscarFotoDocumentoVerso = mysqli_query($connection, $QueryBuscarFotoDocumentoVerso);
        $RowQrBuscarFotoDocumentoVerso = mysqli_num_rows($ExeQrBuscarFotoDocumentoVerso);
  
        if( $RowQrBuscarFotoDocumentoVerso < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoDocumentoVerso = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'documento_condutor_verso',
              '$Protocolo',
              '$CPFAssociado',
              '$DocumentoVerso'
            )
          ";
          "</pre>";
  
          $ExeQrCadastrarFotoDocumentoVerso = mysqli_query($connection, $QueryCadastrarFotoDocumentoVerso);
          if( $ExeQrCadastrarFotoDocumentoVerso ){
            "<br><pre>" . 
            $QueryBuscarFotoDocumentoVerso = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'documento_condutor_verso' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$DocumentoVerso'
            ";
            "</pre>";
            $ExeQrBuscarFotoDocumentoVerso = mysqli_query($connection, $QueryBuscarFotoDocumentoVerso);
            while( $FotoFrente = mysqli_fetch_assoc($ExeQrBuscarFotoDocumentoVerso) ){
              $IdFotoFrente = $FotoFrente['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateDocumentoVerso = "
              UPDATE tb_condutores
              SET documento_verso = '$IdFotoFrente'
              WHERE protocolo_evento = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateDocumentoVerso = mysqli_query($connection, $QueryUpdateDocumentoVerso);
  
            if( $ExeQrUpdateDocumentoVerso ){
              "<br>Foto Documento Verso atualizado";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
        }
      }
    }
  }