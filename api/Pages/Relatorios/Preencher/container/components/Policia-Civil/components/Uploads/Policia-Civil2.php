<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 2 Policia Civil" . 
      $_FILES['print_policia_civil_img2']['name'];
  
      $extensao = pathinfo( $_FILES['print_policia_civil_img2']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $PoliciaCivil2 = "Policia_Civil2".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $PoliciaCivil2;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_policia_civil_img2']['tmp_name'], $target_file ) ){
        echo "<br>Foto 2 Policia Civil carregada";
  
        //BuscarCadastro da foto2 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoPoliciaCivil2 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'policia_civil2' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$PoliciaCivil2'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoPoliciaCivil2 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil2);
        $RowQrBuscarFotoPoliciaCivil2 = mysqli_num_rows($ExeQrBuscarFotoPoliciaCivil2);
  
        if( $RowQrBuscarFotoPoliciaCivil2 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoPoliciaCivil2 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'policia_civil2',
              '$Protocolo',
              '$CPFAssociado',
              '$PoliciaCivil2'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoPoliciaCivil2 = mysqli_query($connection, $QueryCadastrarFotoPoliciaCivil2);
          if( $ExeQrCadastrarFotoPoliciaCivil2 ){
            echo "<br>Foto 2 Policia Civil cadastrada, atualizar tb_policia_civil";
            echo "<br><pre>" . 
            $QueryBuscarFotoPoliciaCivil2 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'policia_civil2' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$PoliciaCivil2'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoPoliciaCivil2 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil2);
            while( $PoliciaCivil2 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaCivil2) ){
              $IdFotoPoliciaCivil2 = $PoliciaCivil2['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdatePoliciaCivil2 = "
              UPDATE tb_policia_civil
              SET foto2_policia_civil = '$IdFotoPoliciaCivil2'
              WHERE protocolo_policia_civil = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdatePoliciaCivil2 = mysqli_query($connection, $QueryUpdatePoliciaCivil2);
  
            if( $ExeQrUpdatePoliciaCivil2 ){
              echo "<br>Foto 2 Policia Civil atualizada";
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
      "<br>Foto 2 Policia Civil" . 
      $_FILES['print_policia_civil_img2']['name'];
  
      $extensao = pathinfo( $_FILES['print_policia_civil_img2']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $PoliciaCivil2 = "Policia_Civil2".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $PoliciaCivil2;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_policia_civil_img2']['tmp_name'], $target_file ) ){
        "<br>Foto 2 Policia Civil carregada";
  
        //BuscarCadastro da foto2 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoPoliciaCivil2 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'policia_civil2' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$PoliciaCivil2'
        ";
        "</pre>";
        $ExeQrBuscarFotoPoliciaCivil2 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil2);
        $RowQrBuscarFotoPoliciaCivil2 = mysqli_num_rows($ExeQrBuscarFotoPoliciaCivil2);
  
        if( $RowQrBuscarFotoPoliciaCivil2 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoPoliciaCivil2 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'policia_civil2',
              '$Protocolo',
              '$CPFAssociado',
              '$PoliciaCivil2'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoPoliciaCivil2 = mysqli_query($connection, $QueryCadastrarFotoPoliciaCivil2);
          if( $ExeQrCadastrarFotoPoliciaCivil2 ){
            "<br>Foto 2 Policia Civil cadastrada, atualizar tb_policia_civil";
            "<br><pre>" . 
            $QueryBuscarFotoPoliciaCivil2 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'policia_civil2' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$PoliciaCivil2'
            ";
            "</pre>";
            $ExeQrBuscarFotoPoliciaCivil2 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil2);
            while( $PoliciaCivil2 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaCivil2) ){
              $IdFotoPoliciaCivil2 = $PoliciaCivil2['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdatePoliciaCivil2 = "
              UPDATE tb_policia_civil
              SET foto2_policia_civil = '$IdFotoPoliciaCivil2'
              WHERE protocolo_policia_civil = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdatePoliciaCivil2 = mysqli_query($connection, $QueryUpdatePoliciaCivil2);
  
            if( $ExeQrUpdatePoliciaCivil2 ){
              "<br>Foto 2 Policia Civil atualizada";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
        }
      }
  
    }
  }