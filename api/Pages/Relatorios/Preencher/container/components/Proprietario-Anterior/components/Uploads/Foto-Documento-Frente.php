<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
  
      echo "<br>Documento Frente - Proprietario Anterior: " . 
      $_FILES['print_foto_documento_proprietario_anterior1']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_documento_proprietario_anterior1']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $FotoFrenteProprietarioAnterior = "Documento_Proprietario_Anterior_Frente".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $FotoFrenteProprietarioAnterior;
      echo "<br>";
  
      if( move_uploaded_file($_FILES['print_foto_documento_proprietario_anterior1']['tmp_name'], $target_file) ){
        echo "<br>Foto da frente do documento carregada, cadastrar, atualizar";
  
        //BuscarCadastro da Foto
        echo "<br><pre>" . 
        $QueryBuscarFotoDocumento1 = "
          SELECT * FROM
            tb_fotos
          WHERE 
            categoria_foto = 'foto_documento_proprietario_anterior_frente' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$FotoFrenteProprietarioAnterior'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoDocumento1 = mysqli_query($connection, $QueryBuscarFotoDocumento1);
        $RowQrBuscarFotoDocumento1 = mysqli_num_rows($ExeQrBuscarFotoDocumento1);
  
        if( $RowQrBuscarFotoDocumento1 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoDocumento1 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_documento_proprietario_anterior_frente',
              '$Protocolo',
              '$CPFAssociado',
              '$FotoFrenteProprietarioAnterior'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoDocumento1 = mysqli_query($connection, $QueryCadastrarFotoDocumento1);
          if( $ExeQrCadastrarFotoDocumento1 ){
            echo "<br>Foto Frente cadastrada";
            //Update no proprietario anterior
            echo "<br><pre>" . 
            $QueryBuscarFotoDocumento1 = "
              SELECT * FROM
                tb_fotos
              WHERE 
                categoria_foto = 'foto_documento_proprietario_anterior_frente' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$FotoFrenteProprietarioAnterior'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoDocumento1 = mysqli_query($connection, $QueryBuscarFotoDocumento1);
            while($Foto = mysqli_fetch_assoc($ExeQrBuscarFotoDocumento1)){
              $IdFotoFrente = $Foto['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateFotoFrente = "
              UPDATE tb_proprietario_anterior
              SET
                documento_frente = '$IdFotoFrente'
              WHERE
                protocolo_proprietario = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateFotoFrente = mysqli_query($connection, $QueryUpdateFotoFrente);
            if( $ExeQrUpdateFotoFrente ){
              echo "<br>Foto da frente do document atualizada para ID <b>$IdFotoFrente</b>";
            }
          }
        }
      }
  
    }
  }else{

    //PROD
    "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
  
      "<br>Documento Frente - Proprietario Anterior: " . 
      $_FILES['print_foto_documento_proprietario_anterior1']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_documento_proprietario_anterior1']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $FotoFrenteProprietarioAnterior = "Documento_Proprietario_Anterior_Frente".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $FotoFrenteProprietarioAnterior;
      "<br>";
  
      if( move_uploaded_file($_FILES['print_foto_documento_proprietario_anterior1']['tmp_name'], $target_file) ){
        "<br>Foto da frente do documento carregada, cadastrar, atualizar";
  
        //BuscarCadastro da Foto
        "<br><pre>" . 
        $QueryBuscarFotoDocumento1 = "
          SELECT * FROM
            tb_fotos
          WHERE 
            categoria_foto = 'foto_documento_proprietario_anterior_frente' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$FotoFrenteProprietarioAnterior'
        ";
        "</pre>";
        $ExeQrBuscarFotoDocumento1 = mysqli_query($connection, $QueryBuscarFotoDocumento1);
        $RowQrBuscarFotoDocumento1 = mysqli_num_rows($ExeQrBuscarFotoDocumento1);
  
        if( $RowQrBuscarFotoDocumento1 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoDocumento1 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_documento_proprietario_anterior_frente',
              '$Protocolo',
              '$CPFAssociado',
              '$FotoFrenteProprietarioAnterior'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoDocumento1 = mysqli_query($connection, $QueryCadastrarFotoDocumento1);
          if( $ExeQrCadastrarFotoDocumento1 ){
            "<br>Foto Frente cadastrada";
            //Update no proprietario anterior
            "<br><pre>" . 
            $QueryBuscarFotoDocumento1 = "
              SELECT * FROM
                tb_fotos
              WHERE 
                categoria_foto = 'foto_documento_proprietario_anterior_frente' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$FotoFrenteProprietarioAnterior'
            ";
            "</pre>";
            $ExeQrBuscarFotoDocumento1 = mysqli_query($connection, $QueryBuscarFotoDocumento1);
            while($Foto = mysqli_fetch_assoc($ExeQrBuscarFotoDocumento1)){
              $IdFotoFrente = $Foto['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateFotoFrente = "
              UPDATE tb_proprietario_anterior
              SET
                documento_frente = '$IdFotoFrente'
              WHERE
                protocolo_proprietario = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateFotoFrente = mysqli_query($connection, $QueryUpdateFotoFrente);
            if( $ExeQrUpdateFotoFrente ){
              "<br>Foto da frente do document atualizada para ID <b>$IdFotoFrente</b>";
            }
          }
        }
      }
  
    }
  }