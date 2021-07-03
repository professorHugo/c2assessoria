<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 5 Mobilidade" . 
      $_FILES['print_mobilidade_urbana_img5']['name'];
  
      $extensao = pathinfo( $_FILES['print_mobilidade_urbana_img5']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Mobilidade5 = "Foto_Mobilidade5".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Mobilidade5;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_mobilidade_urbana_img5']['tmp_name'], $target_file ) ){
        echo "<br>Foto 5 Mobilidade carregada";
  
        //BuscarCadastro da foto 5 Mobilidade
        echo "<br><pre>" . 
        $QueryBuscarFotoMobilidade5 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'mobilidade5' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Mobilidade5'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoMobilidade5 = mysqli_query($connection, $QueryBuscarFotoMobilidade5);
        $RowQrBuscarFotoMobilidade5 = mysqli_num_rows($ExeQrBuscarFotoMobilidade5);
  
        if( $RowQrBuscarFotoMobilidade5 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoMobilidade5 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'mobilidade5',
              '$Protocolo',
              '$CPFAssociado',
              '$Mobilidade5'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoMobilidade5 = mysqli_query($connection, $QueryCadastrarFotoMobilidade5);
          if( $ExeQrCadastrarFotoMobilidade5 ){
            echo "<br>Foto 5 Mobilidade cadastrada, atualizar tb_mobilidade";
  
            //BuscarCadastro da foto 5 Mobilidade
            echo "<br><pre>" . 
            $QueryBuscarFotoMobilidade5 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'mobilidade5' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Mobilidade5'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoMobilidade5 = mysqli_query($connection, $QueryBuscarFotoMobilidade5);
  
            while( $FotoMobilidade5 = mysqli_fetch_assoc($ExeQrBuscarFotoMobilidade5) ){
              $IdMobilidade5 = $FotoMobilidade5['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateMobilidade5 = "
              UPDATE tb_registro_mobilidade
              SET foto5_mobilidade = '$IdMobilidade5'
              WHERE protocolo_mobilidade = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateMobilidade5 = mysqli_query($connection, $QueryUpdateMobilidade5);
  
            if( $ExeQrUpdateMobilidade5 ){
              echo "<br>Foto 5 Mobilidade atualizada";
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
      "<br>Foto 5 Mobilidade" . 
      $_FILES['print_mobilidade_urbana_img5']['name'];
  
      $extensao = pathinfo( $_FILES['print_mobilidade_urbana_img5']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Mobilidade5 = "Foto_Mobilidade5".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Mobilidade5;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_mobilidade_urbana_img5']['tmp_name'], $target_file ) ){
        "<br>Foto 5 Mobilidade carregada";
  
        //BuscarCadastro da foto 5 Mobilidade
        "<br><pre>" . 
        $QueryBuscarFotoMobilidade5 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'mobilidade5' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Mobilidade5'
        ";
        "</pre>";
        $ExeQrBuscarFotoMobilidade5 = mysqli_query($connection, $QueryBuscarFotoMobilidade5);
        $RowQrBuscarFotoMobilidade5 = mysqli_num_rows($ExeQrBuscarFotoMobilidade5);
  
        if( $RowQrBuscarFotoMobilidade5 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoMobilidade5 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'mobilidade5',
              '$Protocolo',
              '$CPFAssociado',
              '$Mobilidade5'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoMobilidade5 = mysqli_query($connection, $QueryCadastrarFotoMobilidade5);
          if( $ExeQrCadastrarFotoMobilidade5 ){
            "<br>Foto 5 Mobilidade cadastrada, atualizar tb_mobilidade";
  
            //BuscarCadastro da foto 5 Mobilidade
            "<br><pre>" . 
            $QueryBuscarFotoMobilidade5 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'mobilidade5' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Mobilidade5'
            ";
            "</pre>";
            $ExeQrBuscarFotoMobilidade5 = mysqli_query($connection, $QueryBuscarFotoMobilidade5);
  
            while( $FotoMobilidade5 = mysqli_fetch_assoc($ExeQrBuscarFotoMobilidade5) ){
              $IdMobilidade5 = $FotoMobilidade5['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateMobilidade5 = "
              UPDATE tb_registro_mobilidade
              SET foto5_mobilidade = '$IdMobilidade5'
              WHERE protocolo_mobilidade = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateMobilidade5 = mysqli_query($connection, $QueryUpdateMobilidade5);
  
            if( $ExeQrUpdateMobilidade5 ){
              "<br>Foto 5 Mobilidade atualizada";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
  
          }
        }
      }
    }
  }