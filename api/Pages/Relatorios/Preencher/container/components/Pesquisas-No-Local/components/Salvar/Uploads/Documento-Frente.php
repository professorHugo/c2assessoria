<?php
  if( $SysMode == 1 ){
    //DEV

    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto Documento - Frente" . 
      $_FILES['print_foto_documento_frente']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_documento_frente']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $DocumentoFrente = "Foto_Documento_Entrevistado".$Entrevistado."_Frente".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $DocumentoFrente;
      echo "<br>";
  
      if( move_uploaded_file($_FILES['print_foto_documento_frente']['tmp_name'], $target_file) ){
        echo "<br>Foto Documento - Frente carregado, cadastrar foto";
        //BuscarCadastro da foto Documento - Frente
        echo "<br><pre>" . 
        $QueryBuscarFotoDocumentoFrente = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto_documento_entrevistado_frente' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$DocumentoFrente'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoDocumentoFrente = mysqli_query($connection, $QueryBuscarFotoDocumentoFrente);
        $RowQrBuscarFotoDocumentoFrente = mysqli_num_rows($ExeQrBuscarFotoDocumentoFrente);
  
        if( $RowQrBuscarFotoDocumentoFrente < 1 ){
          //cadastrar foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoDocumentoFrente = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_documento_entrevistado_frente',
              '$Protocolo',
              '$CPFAssociado',
              '$DocumentoFrente'
            )
          ";
          echo "</pre>";
  
          $ExeQrCadastrarFotoDocumentoFrente = mysqli_query($connection, $QueryCadastrarFotoDocumentoFrente);
  
          if( $ExeQrCadastrarFotoDocumentoFrente ){
            echo "<br>Foto Documento - Frente cadastrada, atualizar tb_financeiro_veiculo";
            //BuscarCadastro da foto Documento - Frentes
            echo "<br><pre>" . 
            $QueryBuscarFotoDocumentoFrente = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto_documento_entrevistado_frente' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$DocumentoFrente'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoDocumentoFrente = mysqli_query($connection, $QueryBuscarFotoDocumentoFrente);
            while( $FotoDocumentoFrente = mysqli_fetch_assoc($ExeQrBuscarFotoDocumentoFrente) ){
              $IdDocumentoFrente = $FotoDocumentoFrente['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateDocumentoFrente = "
              UPDATE tb_entrevistados
              SET
                documento_entrevistado_frente = '$IdDocumentoFrente'
              WHERE
                protocolo_entrevistados = '$Protocolo' &&
                id_entrevistado = '$Entrevistado'
            ";
            echo "</pre>";
            $ExeQrUpdateDocumentoFrente = mysqli_query($connection, $QueryUpdateDocumentoFrente);
            if( $ExeQrUpdateDocumentoFrente ){
              echo "<br>Foto Documento - Frente atualizado";
            }
          }
        }
      }
    }
  }else{

    //PROD
    "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      "<br>Foto Documento - Frente" . 
      $_FILES['print_foto_documento_frente']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_documento_frente']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $DocumentoFrente = "Foto_Documento_Entrevistado".$Entrevistado."_Frente".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $DocumentoFrente;
      "<br>";
  
      if( move_uploaded_file($_FILES['print_foto_documento_frente']['tmp_name'], $target_file) ){
        "<br>Foto Documento - Frente carregado, cadastrar foto";
        //BuscarCadastro da foto Documento - Frente
        "<br><pre>" . 
        $QueryBuscarFotoDocumentoFrente = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto_documento_entrevistado_frente' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$DocumentoFrente'
        ";
        "</pre>";
        $ExeQrBuscarFotoDocumentoFrente = mysqli_query($connection, $QueryBuscarFotoDocumentoFrente);
        $RowQrBuscarFotoDocumentoFrente = mysqli_num_rows($ExeQrBuscarFotoDocumentoFrente);
  
        if( $RowQrBuscarFotoDocumentoFrente < 1 ){
          //cadastrar foto
          "<br><pre>" . 
          $QueryCadastrarFotoDocumentoFrente = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_documento_entrevistado_frente',
              '$Protocolo',
              '$CPFAssociado',
              '$DocumentoFrente'
            )
          ";
          "</pre>";
  
          $ExeQrCadastrarFotoDocumentoFrente = mysqli_query($connection, $QueryCadastrarFotoDocumentoFrente);
  
          if( $ExeQrCadastrarFotoDocumentoFrente ){
            "<br>Foto Documento - Frente cadastrada, atualizar tb_financeiro_veiculo";
            //BuscarCadastro da foto Documento - Frentes
            "<br><pre>" . 
            $QueryBuscarFotoDocumentoFrente = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto_documento_entrevistado_frente' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$DocumentoFrente'
            ";
            "</pre>";
            $ExeQrBuscarFotoDocumentoFrente = mysqli_query($connection, $QueryBuscarFotoDocumentoFrente);
            while( $FotoDocumentoFrente = mysqli_fetch_assoc($ExeQrBuscarFotoDocumentoFrente) ){
              $IdDocumentoFrente = $FotoDocumentoFrente['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateDocumentoFrente = "
              UPDATE tb_entrevistados
              SET
                documento_entrevistado_frente = '$IdDocumentoFrente'
              WHERE
                protocolo_entrevistados = '$Protocolo' &&
                id_entrevistado = '$Entrevistado'
            ";
            "</pre>";
            $ExeQrUpdateDocumentoFrente = mysqli_query($connection, $QueryUpdateDocumentoFrente);
            if( $ExeQrUpdateDocumentoFrente ){
              "<br>Foto Documento - Frente atualizado";
            }
          }
        }
      }
    }
  }