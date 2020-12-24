<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto Documento - Verso" . 
      $_FILES['print_foto_documento_verso']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_documento_verso']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $DocumentoVerso = "Foto_Documento_Entrevistado".$Entrevistado."_Verso".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $DocumentoVerso;
      echo "<br>";
  
      if( move_uploaded_file($_FILES['print_foto_documento_verso']['tmp_name'], $target_file) ){
        echo "<br>Foto Documento - Verso carregado, cadastrar foto";
        //BuscarCadastro da foto Documento - Verso
        echo "<br><pre>" . 
        $QueryBuscarFotoDocumentoVerso = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto_documento_entrevistado_verso' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$DocumentoVerso'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoDocumentoVerso = mysqli_query($connection, $QueryBuscarFotoDocumentoVerso);
        $RowQrBuscarFotoDocumentoVerso = mysqli_num_rows($ExeQrBuscarFotoDocumentoVerso);
  
        if( $RowQrBuscarFotoDocumentoVerso < 1 ){
          //cadastrar foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoDocumentoVerso = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_documento_entrevistado_verso',
              '$Protocolo',
              '$CPFAssociado',
              '$DocumentoVerso'
            )
          ";
          echo "</pre>";
  
          $ExeQrCadastrarFotoDocumentoVerso = mysqli_query($connection, $QueryCadastrarFotoDocumentoVerso);
  
          if( $ExeQrCadastrarFotoDocumentoVerso ){
            echo "<br>Foto Documento - Verso cadastrada, atualizar tb_financeiro_veiculo";
            //BuscarCadastro da foto Documento - Versos
            echo "<br><pre>" . 
            $QueryBuscarFotoDocumentoVerso = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto_documento_entrevistado_verso' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$DocumentoVerso'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoDocumentoVerso = mysqli_query($connection, $QueryBuscarFotoDocumentoVerso);
            while( $FotoDocumentoVerso = mysqli_fetch_assoc($ExeQrBuscarFotoDocumentoVerso) ){
              $IdDocumentoVerso = $FotoDocumentoVerso['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateDocumentoVerso = "
              UPDATE tb_entrevistados
              SET
                documento_entrevistado_verso = '$IdDocumentoVerso'
              WHERE
                protocolo_entrevistados = '$Protocolo' &&
                id_entrevistado = '$Entrevistado'
            ";
            echo "</pre>";
            $ExeQrUpdateDocumentoVerso = mysqli_query($connection, $QueryUpdateDocumentoVerso);
            if( $ExeQrUpdateDocumentoVerso ){
              echo "<br>Foto Documento - Verso atualizado";
            }
          }
        }
      }
    }
  }else{

    //PROD


    "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      "<br>Foto Documento - Verso" . 
      $_FILES['print_foto_documento_verso']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_documento_verso']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $DocumentoVerso = "Foto_Documento_Entrevistado".$Entrevistado."_Verso".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $DocumentoVerso;
      "<br>";
  
      if( move_uploaded_file($_FILES['print_foto_documento_verso']['tmp_name'], $target_file) ){
        "<br>Foto Documento - Verso carregado, cadastrar foto";
        //BuscarCadastro da foto Documento - Verso
        "<br><pre>" . 
        $QueryBuscarFotoDocumentoVerso = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto_documento_entrevistado_verso' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$DocumentoVerso'
        ";
        "</pre>";
        $ExeQrBuscarFotoDocumentoVerso = mysqli_query($connection, $QueryBuscarFotoDocumentoVerso);
        $RowQrBuscarFotoDocumentoVerso = mysqli_num_rows($ExeQrBuscarFotoDocumentoVerso);
  
        if( $RowQrBuscarFotoDocumentoVerso < 1 ){
          //cadastrar foto
          "<br><pre>" . 
          $QueryCadastrarFotoDocumentoVerso = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_documento_entrevistado_verso',
              '$Protocolo',
              '$CPFAssociado',
              '$DocumentoVerso'
            )
          ";
          "</pre>";
  
          $ExeQrCadastrarFotoDocumentoVerso = mysqli_query($connection, $QueryCadastrarFotoDocumentoVerso);
  
          if( $ExeQrCadastrarFotoDocumentoVerso ){
            "<br>Foto Documento - Verso cadastrada, atualizar tb_financeiro_veiculo";
            //BuscarCadastro da foto Documento - Versos
            "<br><pre>" . 
            $QueryBuscarFotoDocumentoVerso = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto_documento_entrevistado_verso' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$DocumentoVerso'
            ";
            "</pre>";
            $ExeQrBuscarFotoDocumentoVerso = mysqli_query($connection, $QueryBuscarFotoDocumentoVerso);
            while( $FotoDocumentoVerso = mysqli_fetch_assoc($ExeQrBuscarFotoDocumentoVerso) ){
              $IdDocumentoVerso = $FotoDocumentoVerso['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateDocumentoVerso = "
              UPDATE tb_entrevistados
              SET
                documento_entrevistado_verso = '$IdDocumentoVerso'
              WHERE
                protocolo_entrevistados = '$Protocolo' &&
                id_entrevistado = '$Entrevistado'
            ";
            "</pre>";
            $ExeQrUpdateDocumentoVerso = mysqli_query($connection, $QueryUpdateDocumentoVerso);
            if( $ExeQrUpdateDocumentoVerso ){
              "<br>Foto Documento - Verso atualizado";
            }
          }
        }
      }
    }
  }