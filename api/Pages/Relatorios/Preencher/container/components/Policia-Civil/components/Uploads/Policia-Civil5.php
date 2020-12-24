<?php
  if( $SysMode == 1 ){
    //DEV

    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 5 Policia Civil" . 
      $_FILES['print_policia_civil_img5']['name'];
  
      $extensao = pathinfo( $_FILES['print_policia_civil_img5']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $PoliciaCivil5 = "Policia_Civil5".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $PoliciaCivil5;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_policia_civil_img5']['tmp_name'], $target_file ) ){
        echo "<br>Foto 5 Policia Civil carregada";
  
        //BuscarCadastro da foto5 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoPoliciaCivil5 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'policia_civil5' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$PoliciaCivil5'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoPoliciaCivil5 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil5);
        $RowQrBuscarFotoPoliciaCivil5 = mysqli_num_rows($ExeQrBuscarFotoPoliciaCivil5);
  
        if( $RowQrBuscarFotoPoliciaCivil5 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoPoliciaCivil5 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'policia_civil5',
              '$Protocolo',
              '$CPFAssociado',
              '$PoliciaCivil5'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoPoliciaCivil5 = mysqli_query($connection, $QueryCadastrarFotoPoliciaCivil5);
          if( $ExeQrCadastrarFotoPoliciaCivil5 ){
            echo "<br>Foto 5 Policia Civil cadastrada, atualizar tb_policia_civil";
            echo "<br><pre>" . 
            $QueryBuscarFotoPoliciaCivil5 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'policia_civil5' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$PoliciaCivil5'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoPoliciaCivil5 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil5);
            while( $PoliciaCivil5 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaCivil5) ){
              $IdFotoPoliciaCivil5 = $PoliciaCivil5['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdatePoliciaCivil5 = "
              UPDATE tb_policia_civil
              SET foto5_policia_civil = '$IdFotoPoliciaCivil5'
              WHERE protocolo_policia_civil = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdatePoliciaCivil5 = mysqli_query($connection, $QueryUpdatePoliciaCivil5);
  
            if( $ExeQrUpdatePoliciaCivil5 ){
              echo "<br>Foto 5 Policia Civil atualizada";
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
      "<br>Foto 5 Policia Civil" . 
      $_FILES['print_policia_civil_img5']['name'];
  
      $extensao = pathinfo( $_FILES['print_policia_civil_img5']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $PoliciaCivil5 = "Policia_Civil5".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $PoliciaCivil5;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_policia_civil_img5']['tmp_name'], $target_file ) ){
        "<br>Foto 5 Policia Civil carregada";
  
        //BuscarCadastro da foto5 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoPoliciaCivil5 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'policia_civil5' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$PoliciaCivil5'
        ";
        "</pre>";
        $ExeQrBuscarFotoPoliciaCivil5 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil5);
        $RowQrBuscarFotoPoliciaCivil5 = mysqli_num_rows($ExeQrBuscarFotoPoliciaCivil5);
  
        if( $RowQrBuscarFotoPoliciaCivil5 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoPoliciaCivil5 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'policia_civil5',
              '$Protocolo',
              '$CPFAssociado',
              '$PoliciaCivil5'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoPoliciaCivil5 = mysqli_query($connection, $QueryCadastrarFotoPoliciaCivil5);
          if( $ExeQrCadastrarFotoPoliciaCivil5 ){
            "<br>Foto 5 Policia Civil cadastrada, atualizar tb_policia_civil";
            "<br><pre>" . 
            $QueryBuscarFotoPoliciaCivil5 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'policia_civil5' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$PoliciaCivil5'
            ";
            "</pre>";
            $ExeQrBuscarFotoPoliciaCivil5 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil5);
            while( $PoliciaCivil5 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaCivil5) ){
              $IdFotoPoliciaCivil5 = $PoliciaCivil5['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdatePoliciaCivil5 = "
              UPDATE tb_policia_civil
              SET foto5_policia_civil = '$IdFotoPoliciaCivil5'
              WHERE protocolo_policia_civil = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdatePoliciaCivil5 = mysqli_query($connection, $QueryUpdatePoliciaCivil5);
  
            if( $ExeQrUpdatePoliciaCivil5 ){
              "<br>Foto 5 Policia Civil atualizada";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
        }
      }
  
    }
  }