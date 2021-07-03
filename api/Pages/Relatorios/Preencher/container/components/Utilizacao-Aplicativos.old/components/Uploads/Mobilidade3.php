<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 3 Mobilidade" . 
      $_FILES['print_mobilidade_urbana_img3']['name'];
  
      $extensao = pathinfo( $_FILES['print_mobilidade_urbana_img3']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Mobilidade3 = "Foto_Mobilidade3".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Mobilidade3;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_mobilidade_urbana_img3']['tmp_name'], $target_file ) ){
        echo "<br>Foto 3 Mobilidade carregada";
  
        //BuscarCadastro da foto 3 Mobilidade
        echo "<br><pre>" . 
        $QueryBuscarFotoMobilidade3 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'mobilidade3' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Mobilidade3'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoMobilidade3 = mysqli_query($connection, $QueryBuscarFotoMobilidade3);
        $RowQrBuscarFotoMobilidade3 = mysqli_num_rows($ExeQrBuscarFotoMobilidade3);
  
        if( $RowQrBuscarFotoMobilidade3 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoMobilidade3 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'mobilidade3',
              '$Protocolo',
              '$CPFAssociado',
              '$Mobilidade3'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoMobilidade3 = mysqli_query($connection, $QueryCadastrarFotoMobilidade3);
          if( $ExeQrCadastrarFotoMobilidade3 ){
            echo "<br>Foto 3 Mobilidade cadastrada, atualizar tb_mobilidade";
  
            //BuscarCadastro da foto 3 Mobilidade
            echo "<br><pre>" . 
            $QueryBuscarFotoMobilidade3 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'mobilidade3' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Mobilidade3'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoMobilidade3 = mysqli_query($connection, $QueryBuscarFotoMobilidade3);
  
            while( $FotoMobilidade3 = mysqli_fetch_assoc($ExeQrBuscarFotoMobilidade3) ){
              $IdMobilidade3 = $FotoMobilidade3['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateMobilidade3 = "
              UPDATE tb_registro_mobilidade
              SET foto3_mobilidade = '$IdMobilidade3'
              WHERE protocolo_mobilidade = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateMobilidade3 = mysqli_query($connection, $QueryUpdateMobilidade3);
  
            if( $ExeQrUpdateMobilidade3 ){
              echo "<br>Foto 3 Mobilidade atualizada";
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
      "<br>Foto 3 Mobilidade" . 
      $_FILES['print_mobilidade_urbana_img3']['name'];
  
      $extensao = pathinfo( $_FILES['print_mobilidade_urbana_img3']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Mobilidade3 = "Foto_Mobilidade3".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Mobilidade3;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_mobilidade_urbana_img3']['tmp_name'], $target_file ) ){
        "<br>Foto 3 Mobilidade carregada";
  
        //BuscarCadastro da foto 3 Mobilidade
        "<br><pre>" . 
        $QueryBuscarFotoMobilidade3 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'mobilidade3' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Mobilidade3'
        ";
        "</pre>";
        $ExeQrBuscarFotoMobilidade3 = mysqli_query($connection, $QueryBuscarFotoMobilidade3);
        $RowQrBuscarFotoMobilidade3 = mysqli_num_rows($ExeQrBuscarFotoMobilidade3);
  
        if( $RowQrBuscarFotoMobilidade3 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoMobilidade3 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'mobilidade3',
              '$Protocolo',
              '$CPFAssociado',
              '$Mobilidade3'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoMobilidade3 = mysqli_query($connection, $QueryCadastrarFotoMobilidade3);
          if( $ExeQrCadastrarFotoMobilidade3 ){
            "<br>Foto 3 Mobilidade cadastrada, atualizar tb_mobilidade";
  
            //BuscarCadastro da foto 3 Mobilidade
            "<br><pre>" . 
            $QueryBuscarFotoMobilidade3 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'mobilidade3' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Mobilidade3'
            ";
            "</pre>";
            $ExeQrBuscarFotoMobilidade3 = mysqli_query($connection, $QueryBuscarFotoMobilidade3);
  
            while( $FotoMobilidade3 = mysqli_fetch_assoc($ExeQrBuscarFotoMobilidade3) ){
              $IdMobilidade3 = $FotoMobilidade3['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateMobilidade3 = "
              UPDATE tb_registro_mobilidade
              SET foto3_mobilidade = '$IdMobilidade3'
              WHERE protocolo_mobilidade = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateMobilidade3 = mysqli_query($connection, $QueryUpdateMobilidade3);
  
            if( $ExeQrUpdateMobilidade3 ){
              "<br>Foto 3 Mobilidade atualizada";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
  
          }
        }
      }
    }
  }