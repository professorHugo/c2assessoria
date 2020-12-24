<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 1 Mobilidade" . 
      $_FILES['print_mobilidade_urbana_img1']['name'];
  
      $extensao = pathinfo( $_FILES['print_mobilidade_urbana_img1']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Mobilidade1 = "Foto_Mobilidade1".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Mobilidade1;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_mobilidade_urbana_img1']['tmp_name'], $target_file ) ){
        echo "<br>Foto 1 Mobilidade carregada";
  
        //BuscarCadastro da foto 1 Mobilidade
        echo "<br><pre>" . 
        $QueryBuscarFotoMobilidade1 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'mobilidade1' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Mobilidade1'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoMobilidade1 = mysqli_query($connection, $QueryBuscarFotoMobilidade1);
        $RowQrBuscarFotoMobilidade1 = mysqli_num_rows($ExeQrBuscarFotoMobilidade1);
  
        if( $RowQrBuscarFotoMobilidade1 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoMobilidade1 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'mobilidade1',
              '$Protocolo',
              '$CPFAssociado',
              '$Mobilidade1'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoMobilidade1 = mysqli_query($connection, $QueryCadastrarFotoMobilidade1);
          if( $ExeQrCadastrarFotoMobilidade1 ){
            echo "<br>Foto 1 Mobilidade cadastrada, atualizar tb_mobilidade";
  
            //BuscarCadastro da foto 1 Mobilidade
            echo "<br><pre>" . 
            $QueryBuscarFotoMobilidade1 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'mobilidade1' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Mobilidade1'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoMobilidade1 = mysqli_query($connection, $QueryBuscarFotoMobilidade1);
  
            while( $FotoMobilidade1 = mysqli_fetch_assoc($ExeQrBuscarFotoMobilidade1) ){
              $IdMobilidade1 = $FotoMobilidade1['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateMobilidade1 = "
              UPDATE tb_registro_mobilidade
              SET foto1_mobilidade = '$IdMobilidade1'
              WHERE protocolo_mobilidade = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateMobilidade1 = mysqli_query($connection, $QueryUpdateMobilidade1);
  
            if( $ExeQrUpdateMobilidade1 ){
              echo "<br>Foto 1 Mobilidade atualizada";
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
      "<br>Foto 1 Mobilidade" . 
      $_FILES['print_mobilidade_urbana_img1']['name'];
  
      $extensao = pathinfo( $_FILES['print_mobilidade_urbana_img1']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Mobilidade1 = "Foto_Mobilidade1".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Mobilidade1;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_mobilidade_urbana_img1']['tmp_name'], $target_file ) ){
        "<br>Foto 1 Mobilidade carregada";
  
        //BuscarCadastro da foto 1 Mobilidade
        "<br><pre>" . 
        $QueryBuscarFotoMobilidade1 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'mobilidade1' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Mobilidade1'
        ";
        "</pre>";
        $ExeQrBuscarFotoMobilidade1 = mysqli_query($connection, $QueryBuscarFotoMobilidade1);
        $RowQrBuscarFotoMobilidade1 = mysqli_num_rows($ExeQrBuscarFotoMobilidade1);
  
        if( $RowQrBuscarFotoMobilidade1 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoMobilidade1 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'mobilidade1',
              '$Protocolo',
              '$CPFAssociado',
              '$Mobilidade1'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoMobilidade1 = mysqli_query($connection, $QueryCadastrarFotoMobilidade1);
          if( $ExeQrCadastrarFotoMobilidade1 ){
            "<br>Foto 1 Mobilidade cadastrada, atualizar tb_mobilidade";
  
            //BuscarCadastro da foto 1 Mobilidade
            "<br><pre>" . 
            $QueryBuscarFotoMobilidade1 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'mobilidade1' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Mobilidade1'
            ";
            "</pre>";
            $ExeQrBuscarFotoMobilidade1 = mysqli_query($connection, $QueryBuscarFotoMobilidade1);
  
            while( $FotoMobilidade1 = mysqli_fetch_assoc($ExeQrBuscarFotoMobilidade1) ){
              $IdMobilidade1 = $FotoMobilidade1['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateMobilidade1 = "
              UPDATE tb_registro_mobilidade
              SET foto1_mobilidade = '$IdMobilidade1'
              WHERE protocolo_mobilidade = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateMobilidade1 = mysqli_query($connection, $QueryUpdateMobilidade1);
  
            if( $ExeQrUpdateMobilidade1 ){
              "<br>Foto 1 Mobilidade atualizada";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
  
          }
        }
      }
    }
  }