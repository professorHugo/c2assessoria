<?php
  if( $SysMode == 1 ) {
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
  
      echo "<br>Documento Verso - Proprietario Anterior: " . 
      $_FILES['print_foto_documento_proprietario_anterior2']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_documento_proprietario_anterior2']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $FotoVersoProprietarioAnterior = "Documento_Proprietario_Anterior_Verso".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $FotoVersoProprietarioAnterior;
      echo "<br>";
  
      if( move_uploaded_file($_FILES['print_foto_documento_proprietario_anterior2']['tmp_name'], $target_file) ){
        echo "<br>Foto da frente do documento carregada, cadastrar, atualizar";
  
        //BuscarCadastro da Foto
        echo "<br><pre>" . 
        $QueryBuscarFotoDocumento2 = "
          SELECT * FROM
            tb_fotos
          WHERE 
            categoria_foto = 'foto_documento_proprietario_anterior_verso' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$FotoVersoProprietarioAnterior'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoDocumento2 = mysqli_query($connection, $QueryBuscarFotoDocumento2);
        $RowQrBuscarFotoDocumento2 = mysqli_num_rows($ExeQrBuscarFotoDocumento2);
  
        if( $RowQrBuscarFotoDocumento2 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoDocumento2 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_documento_proprietario_anterior_verso',
              '$Protocolo',
              '$CPFAssociado',
              '$FotoVersoProprietarioAnterior'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoDocumento2 = mysqli_query($connection, $QueryCadastrarFotoDocumento2);
          if( $ExeQrCadastrarFotoDocumento2 ){
            echo "<br>Foto Frente cadastrada";
            //Update no proprietario anterior
            echo "<br><pre>" . 
            $QueryBuscarFotoDocumento2 = "
              SELECT * FROM
                tb_fotos
              WHERE 
                categoria_foto = 'foto_documento_proprietario_anterior_verso' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$FotoVersoProprietarioAnterior'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoDocumento2 = mysqli_query($connection, $QueryBuscarFotoDocumento2);
            while($Foto = mysqli_fetch_assoc($ExeQrBuscarFotoDocumento2)){
              $IdFotoVerso = $Foto['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateFotoVerso = "
              UPDATE tb_proprietario_anterior
              SET
                documento_verso = '$IdFotoVerso'
              WHERE
                protocolo_proprietario = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateFotoVerso = mysqli_query($connection, $QueryUpdateFotoVerso);
            if( $ExeQrUpdateFotoVerso ){
              echo "<br>Foto da verso do document atualizada para ID <b>$IdFotoVerso</b>";
            }
          }
        }
      }
  
    }
  }else{

    //PROD
    "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
  
      "<br>Documento Verso - Proprietario Anterior: " . 
      $_FILES['print_foto_documento_proprietario_anterior2']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_documento_proprietario_anterior2']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $FotoVersoProprietarioAnterior = "Documento_Proprietario_Anterior_Verso".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $FotoVersoProprietarioAnterior;
      "<br>";
  
      if( move_uploaded_file($_FILES['print_foto_documento_proprietario_anterior2']['tmp_name'], $target_file) ){
        "<br>Foto da frente do documento carregada, cadastrar, atualizar";
  
        //BuscarCadastro da Foto
        "<br><pre>" . 
        $QueryBuscarFotoDocumento2 = "
          SELECT * FROM
            tb_fotos
          WHERE 
            categoria_foto = 'foto_documento_proprietario_anterior_verso' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$FotoVersoProprietarioAnterior'
        ";
        "</pre>";
        $ExeQrBuscarFotoDocumento2 = mysqli_query($connection, $QueryBuscarFotoDocumento2);
        $RowQrBuscarFotoDocumento2 = mysqli_num_rows($ExeQrBuscarFotoDocumento2);
  
        if( $RowQrBuscarFotoDocumento2 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoDocumento2 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_documento_proprietario_anterior_verso',
              '$Protocolo',
              '$CPFAssociado',
              '$FotoVersoProprietarioAnterior'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoDocumento2 = mysqli_query($connection, $QueryCadastrarFotoDocumento2);
          if( $ExeQrCadastrarFotoDocumento2 ){
            "<br>Foto Frente cadastrada";
            //Update no proprietario anterior
            "<br><pre>" . 
            $QueryBuscarFotoDocumento2 = "
              SELECT * FROM
                tb_fotos
              WHERE 
                categoria_foto = 'foto_documento_proprietario_anterior_verso' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$FotoVersoProprietarioAnterior'
            ";
            "</pre>";
            $ExeQrBuscarFotoDocumento2 = mysqli_query($connection, $QueryBuscarFotoDocumento2);
            while($Foto = mysqli_fetch_assoc($ExeQrBuscarFotoDocumento2)){
              $IdFotoVerso = $Foto['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateFotoVerso = "
              UPDATE tb_proprietario_anterior
              SET
                documento_verso = '$IdFotoVerso'
              WHERE
                protocolo_proprietario = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateFotoVerso = mysqli_query($connection, $QueryUpdateFotoVerso);
            if( $ExeQrUpdateFotoVerso ){
              "<br>Foto da verso do document atualizada para ID <b>$IdFotoVerso</b>";
            }
          }
        }
      }
  
    }
  }