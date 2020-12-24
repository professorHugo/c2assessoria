<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 2 Mobilidade" . 
      $_FILES['print_mobilidade_urbana_img2']['name'];
  
      $extensao = pathinfo( $_FILES['print_mobilidade_urbana_img2']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Mobilidade2 = "Foto_Mobilidade2".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Mobilidade2;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_mobilidade_urbana_img2']['tmp_name'], $target_file ) ){
        echo "<br>Foto 2 Mobilidade carregada";
  
        //BuscarCadastro da foto 2 Mobilidade
        echo "<br><pre>" . 
        $QueryBuscarFotoMobilidade2 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'mobilidade2' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Mobilidade2'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoMobilidade2 = mysqli_query($connection, $QueryBuscarFotoMobilidade2);
        $RowQrBuscarFotoMobilidade2 = mysqli_num_rows($ExeQrBuscarFotoMobilidade2);
  
        if( $RowQrBuscarFotoMobilidade2 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoMobilidade2 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'mobilidade2',
              '$Protocolo',
              '$CPFAssociado',
              '$Mobilidade2'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoMobilidade2 = mysqli_query($connection, $QueryCadastrarFotoMobilidade2);
          if( $ExeQrCadastrarFotoMobilidade2 ){
            echo "<br>Foto 2 Mobilidade cadastrada, atualizar tb_mobilidade";
  
            //BuscarCadastro da foto 2 Mobilidade
            echo "<br><pre>" . 
            $QueryBuscarFotoMobilidade2 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'mobilidade2' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Mobilidade2'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoMobilidade2 = mysqli_query($connection, $QueryBuscarFotoMobilidade2);
  
            while( $FotoMobilidade2 = mysqli_fetch_assoc($ExeQrBuscarFotoMobilidade2) ){
              $IdMobilidade2 = $FotoMobilidade2['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateMobilidade2 = "
              UPDATE tb_registro_mobilidade
              SET foto2_mobilidade = '$IdMobilidade2'
              WHERE protocolo_mobilidade = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateMobilidade2 = mysqli_query($connection, $QueryUpdateMobilidade2);
  
            if( $ExeQrUpdateMobilidade2 ){
              echo "<br>Foto 2 Mobilidade atualizada";
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
      "<br>Foto 2 Mobilidade" . 
      $_FILES['print_mobilidade_urbana_img2']['name'];
  
      $extensao = pathinfo( $_FILES['print_mobilidade_urbana_img2']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Mobilidade2 = "Foto_Mobilidade2".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Mobilidade2;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_mobilidade_urbana_img2']['tmp_name'], $target_file ) ){
        "<br>Foto 2 Mobilidade carregada";
  
        //BuscarCadastro da foto 2 Mobilidade
        "<br><pre>" . 
        $QueryBuscarFotoMobilidade2 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'mobilidade2' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Mobilidade2'
        ";
        "</pre>";
        $ExeQrBuscarFotoMobilidade2 = mysqli_query($connection, $QueryBuscarFotoMobilidade2);
        $RowQrBuscarFotoMobilidade2 = mysqli_num_rows($ExeQrBuscarFotoMobilidade2);
  
        if( $RowQrBuscarFotoMobilidade2 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoMobilidade2 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'mobilidade2',
              '$Protocolo',
              '$CPFAssociado',
              '$Mobilidade2'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoMobilidade2 = mysqli_query($connection, $QueryCadastrarFotoMobilidade2);
          if( $ExeQrCadastrarFotoMobilidade2 ){
            "<br>Foto 2 Mobilidade cadastrada, atualizar tb_mobilidade";
  
            //BuscarCadastro da foto 2 Mobilidade
            "<br><pre>" . 
            $QueryBuscarFotoMobilidade2 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'mobilidade2' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Mobilidade2'
            ";
            "</pre>";
            $ExeQrBuscarFotoMobilidade2 = mysqli_query($connection, $QueryBuscarFotoMobilidade2);
  
            while( $FotoMobilidade2 = mysqli_fetch_assoc($ExeQrBuscarFotoMobilidade2) ){
              $IdMobilidade2 = $FotoMobilidade2['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateMobilidade2 = "
              UPDATE tb_registro_mobilidade
              SET foto2_mobilidade = '$IdMobilidade2'
              WHERE protocolo_mobilidade = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateMobilidade2 = mysqli_query($connection, $QueryUpdateMobilidade2);
  
            if( $ExeQrUpdateMobilidade2 ){
              "<br>Foto 2 Mobilidade atualizada";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
  
          }
        }
      }
    }
  }