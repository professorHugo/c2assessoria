<?php
  if( $SysMode == 1 ){
    //DEV

    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 3 Policia Civil" . 
      $_FILES['print_policia_civil_img3']['name'];
  
      $extensao = pathinfo( $_FILES['print_policia_civil_img3']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $PoliciaCivil3 = "Policia_Civil3".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $PoliciaCivil3;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_policia_civil_img3']['tmp_name'], $target_file ) ){
        echo "<br>Foto 3 Policia Civil carregada";
  
        //BuscarCadastro da foto3 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoPoliciaCivil3 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'policia_civil3' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$PoliciaCivil3'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoPoliciaCivil3 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil3);
        $RowQrBuscarFotoPoliciaCivil3 = mysqli_num_rows($ExeQrBuscarFotoPoliciaCivil3);
  
        if( $RowQrBuscarFotoPoliciaCivil3 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoPoliciaCivil3 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'policia_civil3',
              '$Protocolo',
              '$CPFAssociado',
              '$PoliciaCivil3'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoPoliciaCivil3 = mysqli_query($connection, $QueryCadastrarFotoPoliciaCivil3);
          if( $ExeQrCadastrarFotoPoliciaCivil3 ){
            echo "<br>Foto 3 Policia Civil cadastrada, atualizar tb_policia_civil";
            echo "<br><pre>" . 
            $QueryBuscarFotoPoliciaCivil3 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'policia_civil3' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$PoliciaCivil3'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoPoliciaCivil3 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil3);
            while( $PoliciaCivil3 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaCivil3) ){
              $IdFotoPoliciaCivil3 = $PoliciaCivil3['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdatePoliciaCivil3 = "
              UPDATE tb_policia_civil
              SET foto3_policia_civil = '$IdFotoPoliciaCivil3'
              WHERE protocolo_policia_civil = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdatePoliciaCivil3 = mysqli_query($connection, $QueryUpdatePoliciaCivil3);
  
            if( $ExeQrUpdatePoliciaCivil3 ){
              echo "<br>Foto 3 Policia Civil atualizada";
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
      "<br>Foto 3 Policia Civil" . 
      $_FILES['print_policia_civil_img3']['name'];
  
      $extensao = pathinfo( $_FILES['print_policia_civil_img3']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $PoliciaCivil3 = "Policia_Civil3".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $PoliciaCivil3;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_policia_civil_img3']['tmp_name'], $target_file ) ){
        "<br>Foto 3 Policia Civil carregada";
  
        //BuscarCadastro da foto3 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoPoliciaCivil3 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'policia_civil3' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$PoliciaCivil3'
        ";
        "</pre>";
        $ExeQrBuscarFotoPoliciaCivil3 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil3);
        $RowQrBuscarFotoPoliciaCivil3 = mysqli_num_rows($ExeQrBuscarFotoPoliciaCivil3);
  
        if( $RowQrBuscarFotoPoliciaCivil3 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoPoliciaCivil3 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'policia_civil3',
              '$Protocolo',
              '$CPFAssociado',
              '$PoliciaCivil3'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoPoliciaCivil3 = mysqli_query($connection, $QueryCadastrarFotoPoliciaCivil3);
          if( $ExeQrCadastrarFotoPoliciaCivil3 ){
            "<br>Foto 3 Policia Civil cadastrada, atualizar tb_policia_civil";
            "<br><pre>" . 
            $QueryBuscarFotoPoliciaCivil3 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'policia_civil3' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$PoliciaCivil3'
            ";
            "</pre>";
            $ExeQrBuscarFotoPoliciaCivil3 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil3);
            while( $PoliciaCivil3 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaCivil3) ){
              $IdFotoPoliciaCivil3 = $PoliciaCivil3['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdatePoliciaCivil3 = "
              UPDATE tb_policia_civil
              SET foto3_policia_civil = '$IdFotoPoliciaCivil3'
              WHERE protocolo_policia_civil = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdatePoliciaCivil3 = mysqli_query($connection, $QueryUpdatePoliciaCivil3);
  
            if( $ExeQrUpdatePoliciaCivil3 ){
              "<br>Foto 3 Policia Civil atualizada";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
        }
      }
  
    }
  }