<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 4 Mobilidade" . 
      $_FILES['print_mobilidade_urbana_img4']['name'];
  
      $extensao = pathinfo( $_FILES['print_mobilidade_urbana_img4']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Mobilidade4 = "Foto_Mobilidade4".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Mobilidade4;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_mobilidade_urbana_img4']['tmp_name'], $target_file ) ){
        echo "<br>Foto 4 Mobilidade carregada";
  
        //BuscarCadastro da foto 4 Mobilidade
        echo "<br><pre>" . 
        $QueryBuscarFotoMobilidade4 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'mobilidade4' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Mobilidade4'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoMobilidade4 = mysqli_query($connection, $QueryBuscarFotoMobilidade4);
        $RowQrBuscarFotoMobilidade4 = mysqli_num_rows($ExeQrBuscarFotoMobilidade4);
  
        if( $RowQrBuscarFotoMobilidade4 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoMobilidade4 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'mobilidade4',
              '$Protocolo',
              '$CPFAssociado',
              '$Mobilidade4'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoMobilidade4 = mysqli_query($connection, $QueryCadastrarFotoMobilidade4);
          if( $ExeQrCadastrarFotoMobilidade4 ){
            echo "<br>Foto 4 Mobilidade cadastrada, atualizar tb_mobilidade";
  
            //BuscarCadastro da foto 4 Mobilidade
            echo "<br><pre>" . 
            $QueryBuscarFotoMobilidade4 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'mobilidade4' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Mobilidade4'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoMobilidade4 = mysqli_query($connection, $QueryBuscarFotoMobilidade4);
  
            while( $FotoMobilidade4 = mysqli_fetch_assoc($ExeQrBuscarFotoMobilidade4) ){
              $IdMobilidade4 = $FotoMobilidade4['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateMobilidade4 = "
              UPDATE tb_registro_mobilidade
              SET foto4_mobilidade = '$IdMobilidade4'
              WHERE protocolo_mobilidade = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateMobilidade4 = mysqli_query($connection, $QueryUpdateMobilidade4);
  
            if( $ExeQrUpdateMobilidade4 ){
              echo "<br>Foto 4 Mobilidade atualizada";
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
      "<br>Foto 4 Mobilidade" . 
      $_FILES['print_mobilidade_urbana_img4']['name'];
  
      $extensao = pathinfo( $_FILES['print_mobilidade_urbana_img4']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Mobilidade4 = "Foto_Mobilidade4".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Mobilidade4;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_mobilidade_urbana_img4']['tmp_name'], $target_file ) ){
        "<br>Foto 4 Mobilidade carregada";
  
        //BuscarCadastro da foto 4 Mobilidade
        "<br><pre>" . 
        $QueryBuscarFotoMobilidade4 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'mobilidade4' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Mobilidade4'
        ";
        "</pre>";
        $ExeQrBuscarFotoMobilidade4 = mysqli_query($connection, $QueryBuscarFotoMobilidade4);
        $RowQrBuscarFotoMobilidade4 = mysqli_num_rows($ExeQrBuscarFotoMobilidade4);
  
        if( $RowQrBuscarFotoMobilidade4 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoMobilidade4 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'mobilidade4',
              '$Protocolo',
              '$CPFAssociado',
              '$Mobilidade4'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoMobilidade4 = mysqli_query($connection, $QueryCadastrarFotoMobilidade4);
          if( $ExeQrCadastrarFotoMobilidade4 ){
            "<br>Foto 4 Mobilidade cadastrada, atualizar tb_mobilidade";
  
            //BuscarCadastro da foto 4 Mobilidade
            "<br><pre>" . 
            $QueryBuscarFotoMobilidade4 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'mobilidade4' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Mobilidade4'
            ";
            "</pre>";
            $ExeQrBuscarFotoMobilidade4 = mysqli_query($connection, $QueryBuscarFotoMobilidade4);
  
            while( $FotoMobilidade4 = mysqli_fetch_assoc($ExeQrBuscarFotoMobilidade4) ){
              $IdMobilidade4 = $FotoMobilidade4['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateMobilidade4 = "
              UPDATE tb_registro_mobilidade
              SET foto4_mobilidade = '$IdMobilidade4'
              WHERE protocolo_mobilidade = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateMobilidade4 = mysqli_query($connection, $QueryUpdateMobilidade4);
  
            if( $ExeQrUpdateMobilidade4 ){
              "<br>Foto 4 Mobilidade atualizada";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
  
          }
        }
      }
    }
  }