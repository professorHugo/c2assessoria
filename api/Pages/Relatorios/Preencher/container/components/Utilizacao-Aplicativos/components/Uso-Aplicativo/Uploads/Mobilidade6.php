<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 6 Mobilidade" . 
      $_FILES['print_mobilidade_urbana_img6']['name'];
  
      $extensao = pathinfo( $_FILES['print_mobilidade_urbana_img6']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Mobilidade6 = "Foto_Mobilidade6".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Mobilidade6;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_mobilidade_urbana_img6']['tmp_name'], $target_file ) ){
        echo "<br>Foto 6 Mobilidade carregada";
  
        //BuscarCadastro da foto 6 Mobilidade
        echo "<br><pre>" . 
        $QueryBuscarFotoMobilidade6 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'mobilidade6' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Mobilidade6'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoMobilidade6 = mysqli_query($connection, $QueryBuscarFotoMobilidade6);
        $RowQrBuscarFotoMobilidade6 = mysqli_num_rows($ExeQrBuscarFotoMobilidade6);
  
        if( $RowQrBuscarFotoMobilidade6 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoMobilidade6 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'mobilidade6',
              '$Protocolo',
              '$CPFAssociado',
              '$Mobilidade6'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoMobilidade6 = mysqli_query($connection, $QueryCadastrarFotoMobilidade6);
          if( $ExeQrCadastrarFotoMobilidade6 ){
            echo "<br>Foto 6 Mobilidade cadastrada, atualizar tb_mobilidade";
  
            //BuscarCadastro da foto 6 Mobilidade
            echo "<br><pre>" . 
            $QueryBuscarFotoMobilidade6 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'mobilidade6' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Mobilidade6'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoMobilidade6 = mysqli_query($connection, $QueryBuscarFotoMobilidade6);
  
            while( $FotoMobilidade6 = mysqli_fetch_assoc($ExeQrBuscarFotoMobilidade6) ){
              $IdMobilidade6 = $FotoMobilidade6['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateMobilidade6 = "
              UPDATE tb_registro_mobilidade
              SET foto6_mobilidade = '$IdMobilidade6'
              WHERE protocolo_mobilidade = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateMobilidade6 = mysqli_query($connection, $QueryUpdateMobilidade6);
  
            if( $ExeQrUpdateMobilidade6 ){
              echo "<br>Foto 6 Mobilidade atualizada";
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
      "<br>Foto 6 Mobilidade" . 
      $_FILES['print_mobilidade_urbana_img6']['name'];
  
      $extensao = pathinfo( $_FILES['print_mobilidade_urbana_img6']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Mobilidade6 = "Foto_Mobilidade6".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Mobilidade6;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_mobilidade_urbana_img6']['tmp_name'], $target_file ) ){
        "<br>Foto 6 Mobilidade carregada";
  
        //BuscarCadastro da foto 6 Mobilidade
        "<br><pre>" . 
        $QueryBuscarFotoMobilidade6 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'mobilidade6' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Mobilidade6'
        ";
        "</pre>";
        $ExeQrBuscarFotoMobilidade6 = mysqli_query($connection, $QueryBuscarFotoMobilidade6);
        $RowQrBuscarFotoMobilidade6 = mysqli_num_rows($ExeQrBuscarFotoMobilidade6);
  
        if( $RowQrBuscarFotoMobilidade6 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoMobilidade6 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'mobilidade6',
              '$Protocolo',
              '$CPFAssociado',
              '$Mobilidade6'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoMobilidade6 = mysqli_query($connection, $QueryCadastrarFotoMobilidade6);
          if( $ExeQrCadastrarFotoMobilidade6 ){
            "<br>Foto 6 Mobilidade cadastrada, atualizar tb_mobilidade";
  
            //BuscarCadastro da foto 6 Mobilidade
            "<br><pre>" . 
            $QueryBuscarFotoMobilidade6 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'mobilidade6' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Mobilidade6'
            ";
            "</pre>";
            $ExeQrBuscarFotoMobilidade6 = mysqli_query($connection, $QueryBuscarFotoMobilidade6);
  
            while( $FotoMobilidade6 = mysqli_fetch_assoc($ExeQrBuscarFotoMobilidade6) ){
              $IdMobilidade6 = $FotoMobilidade6['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateMobilidade6 = "
              UPDATE tb_registro_mobilidade
              SET foto6_mobilidade = '$IdMobilidade6'
              WHERE protocolo_mobilidade = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateMobilidade6 = mysqli_query($connection, $QueryUpdateMobilidade6);
  
            if( $ExeQrUpdateMobilidade6 ){
              "<br>Foto 6 Mobilidade atualizada";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
  
          }
        }
      }
    }
  }